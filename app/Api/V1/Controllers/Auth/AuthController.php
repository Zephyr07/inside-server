<?php

namespace App\Api\V1\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Role;
use App\User;

use Auth;

use Carbon\Carbon;
use function Functional\true;
use Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use JWTAuth;
use Mail;
use Setting;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class AuthController extends Controller
{

    /**
     * @group Auth
     *
     * Get authenticated user details and auth credentials.
     *
     * @return JSON
     */
    public function getAuthenticatedUser(){
        if (Auth::check()) {
            $user = Auth::user();
            $token = JWTAuth::fromUser($user);

            $roles = $this->getRolesAbilities($user->roles);

            return Response::json(compact('user', 'token','roles'));
        } else {
            return Response::make('unauthorized', 401);
        }
    }


    /**
     *
     * @group Auth
     * @bodyParam phone string required phone number of the user
     * @bodyParam email string required email of the user
     * @bodyParam password string password of the user
     *
     * Authenticate user.
     *
     * @param Instance Request instance
     *
     * @return JSON user details and auth credentials
     */
    public function signin(Request $request){

        $credentials = $request->only('phone', 'password');
        $phone=isset($credentials["phone"])?$credentials["phone"]:null;
        if($phone==null)
            return Response::json(['error' => 'missing phone'], 403);

        $user= User::where("phone","=",$phone)->first();



        if(!isset($user))
            return Response::make(trans('auth.failed'), 401);

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return Response::make(trans('auth.failed'), 401);
            }
        } catch (\JWTException $e) {
            return Response::make('Could not create token', 500);
        }


        $user = Auth::user();
        if($user->status=='disable')
            return Response::json(['error' => 'account disable'], 403);
        $token = JWTAuth::fromUser($user);
        $user = User::with('employee')->find($user->id);
        $roles = $this->getRolesAbilities($user->roles);

        return Response::json(compact('user', 'token','roles'));
    }

    /**
     *
     * @group Auth
     * @bodyParam phone string required phone number of the user
     * @bodyParam email string required email of the user
     * @bodyParam password string password of the user
     * @bodyParam device_tokens array the user devices tokens
     * @bodyParam settings json key value array user settings
     *
     * Create new user.
     *
     * @param Instance Request instance
     *
     * @return JsonResponse user details and auth credentials
     */
    public function signup(Request $request)
    {

        $rule = [
            'phone'      => 'required|unique:users,phone',
            'password'   => 'required|min:6|confirmed'
        ];


        $validator = Validator::make($request->all(), $rule);

        if($validator->fails()){
            return Response::json($validator->errors(), 422);

        }else{
            $verificationCode = Str::random(40);
            $user = new User();
            $user->phone = $request->phone;
            /*$user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->bvs_id = $request->bvs_id;
            $user->settings = isset($request->settings) ? $request->settings : [];*/
            $user->password = $request->password;
            $user->save();

            $token = JWTAuth::fromUser($user);

            $roles = $this->getRolesAbilities($user->roles);

            return Response::json(compact('user', 'token','roles'));

        }


    }

    public function updateMe(Request $request){
        $rule = [
        ];
        $user = Auth::user();

        if( $request->phone !=null ){
            $rule['phone'] = 'required|unique:users,phone,'.$user->id;
        }
        $validator = Validator::make($request->all(), $rule);

        if($validator->fails()){
            return Response::json($validator->errors(), 422);
        }else{
            $user = Auth::user();

            if(isset($request->settings)){
                foreach ($request->settings as  $key=>$val){
                    Setting::set($key,$val, $user->id);
                }
                Setting::save($user->id);
            }

            $user->update($request->all());
            return Response::json(compact('user'));
        }
    }

    public function refresToken(){
        $token = JWTAuth::getToken();

        if (! $token) {
            throw new BadRequestHttpException('Token not provided');
        }

        try {
            $token = JWTAuth::refresh($token);
        } catch (TokenInvalidException $e) {
            throw new AccessDeniedHttpException('The token is invalid');
        }

        //$user = Auth::user();
        return Response::json(compact('token'));
    }






    public function putMe(Request $request)
    {
        $user = Auth::user();
        if ($user == null)
            return response('User not found', 401);

        $rule = [
            //'phone'      => 'required|phone|unique:users,phone,'.$user->id,
            'password'   => 'min:6|confirmed'
        ];

        if($request->password){
            $rule['current_password'] = 'required|min:6';
        }

        $validator = Validator::make($request->all(), $rule);

        if($validator->fails()){
            return Response::make($validator->errors(), 422);
        }

        if($request->phone) $user->phone = trim($request->phone);



        if ($request->has('current_password')or $request->has('password')) {
            Validator::extend('hashmatch', function ($attribute, $value, $parameters) {
                return Hash::check($value, Auth::user()->password);
            });

            $rules = [
                'current_password' => 'required|hashmatch:data.current_password',
                'password' => 'required|min:5|confirmed',
                'password_confirmation' => 'required|min:5',
            ];

            $payload = $request->only('current_password', 'password', 'password_confirmation');

            $messages = [
                'hashmatch' => 'Invalid Password',
            ];

            $validator = app('validator')->make($payload, $rules, $messages);

            if ($validator->fails()) {
                return Response::make($validator->errors(), 422);
            } else {
                //$user->password = Hash::make($request['password']);
                $user->password = ($request['password']);
            }
        }
        if(isset($request->settings)){
            foreach ($request->settings as  $key=>$val){
                Setting::set($key,$val, $user->id);
            }
            Setting::save($user->id);
        }

        $user->update();
        return Response::json(compact('user'));
    }

    /**
     * Get all roles and their corresponding permissions.
     *
     * @return array
     */
    private function getRolesAbilities($roles)
    {

        $abilities=[];
        foreach ($roles as $role) {
            if (!empty($role->name)) {
                $abilities[$role->name] = [];
                $rolePermission = $role->permissions()->get();

                foreach ($rolePermission as $permission) {
                    if (!empty($permission->name)) {
                        array_push($abilities[$role->name], $permission->name);
                    }
                }
            }
        }

        return $abilities;
    }


}

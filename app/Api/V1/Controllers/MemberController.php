<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\MemberRequest;
use App\Member;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class MemberController extends Controller
{
    /**
     * Start action, use to show all members inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Member::class);
    }
    /**
     * Show the form for creating a new member.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created member in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(MemberRequest $request)
    {
        return RestHelper::store(Member::class,$request->all());
    }
    /**
     * Display the specified member. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Member::class,$id);
    }
    /**
     * Show the form for editing the specified member.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }
    /**
     * Update the specified member in databse.
     *
     * @param MemberRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(MemberRequest $request, $id)
    {
        return RestHelper::update(Member::class,$request->all(),$id);
    }
    /**
     * Remove the specified member from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Member::class,$id);
    }
}

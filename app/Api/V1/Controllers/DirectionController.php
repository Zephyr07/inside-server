<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\DirectionRequest;
use App\Direction;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class DirectionController extends Controller
{
    /**
     * Start action, use to show all directions inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Direction::class);
    }
    /**
     * Show the form for creating a new direction.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created direction in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(DirectionRequest $request)
    {
        return RestHelper::store(Direction::class,$request->all());
    }
    /**
     * Display the specified direction. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Direction::class,$id);
    }
    /**
     * Show the form for editing the specified direction.
     *
     * @param  \App\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function edit(Direction $direction)
    {
        //
    }
    /**
     * Update the specified direction in databse.
     *
     * @param DirectionRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(DirectionRequest $request, $id)
    {
        return RestHelper::update(Direction::class,$request->all(),$id);
    }
    /**
     * Remove the specified direction from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Direction::class,$id);
    }
}

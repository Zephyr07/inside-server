<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\GroupRequest;
use App\Group;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class GroupController extends Controller
{
    /**
     * Start action, use to show all groups inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Group::class);
    }
    /**
     * Show the form for creating a new group.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created group in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(GroupRequest $request)
    {
        return RestHelper::store(Group::class,$request->all());
    }
    /**
     * Display the specified group. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Group::class,$id);
    }
    /**
     * Show the form for editing the specified group.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }
    /**
     * Update the specified group in databse.
     *
     * @param GroupRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(GroupRequest $request, $id)
    {
        return RestHelper::update(Group::class,$request->all(),$id);
    }
    /**
     * Remove the specified group from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Group::class,$id);
    }
}

<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\EntityRequest;
use App\Entity;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class EntityController extends Controller
{
    /**
     * Start action, use to show all entitys inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Entity::class);
    }
    /**
     * Show the form for creating a new entity.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created entity in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(EntityRequest $request)
    {
        return RestHelper::store(Entity::class,$request->all());
    }
    /**
     * Display the specified entity. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Entity::class,$id);
    }
    /**
     * Show the form for editing the specified entity.
     *
     * @param  \App\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function edit(Entity $entity)
    {
        //
    }
    /**
     * Update the specified entity in databse.
     *
     * @param EntityRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(EntityRequest $request, $id)
    {
        return RestHelper::update(Entity::class,$request->all(),$id);
    }
    /**
     * Remove the specified entity from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Entity::class,$id);
    }
}

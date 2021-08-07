<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\EntreprisesRequest;
use App\Entreprises;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class EntreprisesController extends Controller
{
    /**
     * Start action, use to show all entreprisess inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Entreprises::class);
    }
    /**
     * Show the form for creating a new entreprises.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created entreprises in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(EntreprisesRequest $request)
    {
        return RestHelper::store(Entreprises::class,$request->all());
    }
    /**
     * Display the specified entreprises. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Entreprises::class,$id);
    }
    /**
     * Show the form for editing the specified entreprises.
     *
     * @param  \App\Entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprises $entreprises)
    {
        //
    }
    /**
     * Update the specified entreprises in databse.
     *
     * @param EntreprisesRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(EntreprisesRequest $request, $id)
    {
        return RestHelper::update(Entreprises::class,$request->all(),$id);
    }
    /**
     * Remove the specified entreprises from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Entreprises::class,$id);
    }
}

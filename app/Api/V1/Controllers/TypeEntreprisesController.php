<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\TypeEntreprisesRequest;
use App\TypeEntreprises;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class TypeEntreprisesController extends Controller
{
    /**
     * Start action, use to show all type_entreprisess inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(TypeEntreprises::class);
    }
    /**
     * Show the form for creating a new type_entreprises.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created type_entreprises in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(TypeEntreprisesRequest $request)
    {
        return RestHelper::store(TypeEntreprises::class,$request->all());
    }
    /**
     * Display the specified type_entreprises. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(TypeEntreprises::class,$id);
    }
    /**
     * Show the form for editing the specified type_entreprises.
     *
     * @param  \App\TypeEntreprises  $type_entreprises
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeEntreprises $type_entreprises)
    {
        //
    }
    /**
     * Update the specified type_entreprises in databse.
     *
     * @param TypeEntreprisesRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(TypeEntreprisesRequest $request, $id)
    {
        return RestHelper::update(TypeEntreprises::class,$request->all(),$id);
    }
    /**
     * Remove the specified type_entreprises from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(TypeEntreprises::class,$id);
    }
}

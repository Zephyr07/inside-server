<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\TypeAbonnementsRequest;
use App\TypeAbonnements;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class TypeAbonnementsController extends Controller
{
    /**
     * Start action, use to show all type_abonnementss inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(TypeAbonnements::class);
    }
    /**
     * Show the form for creating a new type_abonnements.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created type_abonnements in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(TypeAbonnementsRequest $request)
    {
        return RestHelper::store(TypeAbonnements::class,$request->all());
    }
    /**
     * Display the specified type_abonnements. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(TypeAbonnements::class,$id);
    }
    /**
     * Show the form for editing the specified type_abonnements.
     *
     * @param  \App\TypeAbonnements  $type_abonnements
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeAbonnements $type_abonnements)
    {
        //
    }
    /**
     * Update the specified type_abonnements in databse.
     *
     * @param TypeAbonnementsRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(TypeAbonnementsRequest $request, $id)
    {
        return RestHelper::update(TypeAbonnements::class,$request->all(),$id);
    }
    /**
     * Remove the specified type_abonnements from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(TypeAbonnements::class,$id);
    }
}

<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\ParametresRequest;
use App\Parametres;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class ParametresController extends Controller
{
    /**
     * Start action, use to show all parametress inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Parametres::class);
    }
    /**
     * Show the form for creating a new parametres.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created parametres in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ParametresRequest $request)
    {
        return RestHelper::store(Parametres::class,$request->all());
    }
    /**
     * Display the specified parametres. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Parametres::class,$id);
    }
    /**
     * Show the form for editing the specified parametres.
     *
     * @param  \App\Parametres  $parametres
     * @return \Illuminate\Http\Response
     */
    public function edit(Parametres $parametres)
    {
        //
    }
    /**
     * Update the specified parametres in databse.
     *
     * @param ParametresRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ParametresRequest $request, $id)
    {
        return RestHelper::update(Parametres::class,$request->all(),$id);
    }
    /**
     * Remove the specified parametres from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Parametres::class,$id);
    }
}

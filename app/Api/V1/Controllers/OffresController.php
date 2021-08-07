<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\OffresRequest;
use App\Offres;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class OffresController extends Controller
{
    /**
     * Start action, use to show all offress inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Offres::class);
    }
    /**
     * Show the form for creating a new offres.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created offres in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(OffresRequest $request)
    {
        return RestHelper::store(Offres::class,$request->all());
    }
    /**
     * Display the specified offres. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Offres::class,$id);
    }
    /**
     * Show the form for editing the specified offres.
     *
     * @param  \App\Offres  $offres
     * @return \Illuminate\Http\Response
     */
    public function edit(Offres $offres)
    {
        //
    }
    /**
     * Update the specified offres in databse.
     *
     * @param OffresRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(OffresRequest $request, $id)
    {
        return RestHelper::update(Offres::class,$request->all(),$id);
    }
    /**
     * Remove the specified offres from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Offres::class,$id);
    }
}

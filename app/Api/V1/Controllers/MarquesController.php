<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\MarquesRequest;
use App\Marques;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class MarquesController extends Controller
{
    /**
     * Start action, use to show all marquess inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Marques::class);
    }
    /**
     * Show the form for creating a new marques.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created marques in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(MarquesRequest $request)
    {
        return RestHelper::store(Marques::class,$request->all());
    }
    /**
     * Display the specified marques. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Marques::class,$id);
    }
    /**
     * Show the form for editing the specified marques.
     *
     * @param  \App\Marques  $marques
     * @return \Illuminate\Http\Response
     */
    public function edit(Marques $marques)
    {
        //
    }
    /**
     * Update the specified marques in databse.
     *
     * @param MarquesRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(MarquesRequest $request, $id)
    {
        return RestHelper::update(Marques::class,$request->all(),$id);
    }
    /**
     * Remove the specified marques from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Marques::class,$id);
    }
}

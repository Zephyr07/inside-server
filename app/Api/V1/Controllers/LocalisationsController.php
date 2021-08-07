<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\LocalisationsRequest;
use App\Localisations;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class LocalisationsController extends Controller
{
    /**
     * Start action, use to show all localisationss inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Localisations::class);
    }
    /**
     * Show the form for creating a new localisations.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created localisations in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(LocalisationsRequest $request)
    {
        return RestHelper::store(Localisations::class,$request->all());
    }
    /**
     * Display the specified localisations. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Localisations::class,$id);
    }
    /**
     * Show the form for editing the specified localisations.
     *
     * @param  \App\Localisations  $localisations
     * @return \Illuminate\Http\Response
     */
    public function edit(Localisations $localisations)
    {
        //
    }
    /**
     * Update the specified localisations in databse.
     *
     * @param LocalisationsRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(LocalisationsRequest $request, $id)
    {
        return RestHelper::update(Localisations::class,$request->all(),$id);
    }
    /**
     * Remove the specified localisations from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Localisations::class,$id);
    }
}

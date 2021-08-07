<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\PrixOffresRequest;
use App\PrixOffres;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class PrixOffresController extends Controller
{
    /**
     * Start action, use to show all prixs inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(PrixOffres::class);
    }
    /**
     * Show the form for creating a new prix.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created prix in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PrixOffresRequest $request)
    {
        return RestHelper::store(PrixOffres::class,$request->all());
    }
    /**
     * Display the specified prix. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(PrixOffres::class,$id);
    }
    /**
     * Show the form for editing the specified prix.
     *
     * @param  \App\Prix  $prix
     * @return \Illuminate\Http\Response
     */
    public function edit(PrixOffres $prix_offres)
    {
        //
    }
    /**
     * Update the specified prix in databse.
     *
     * @param PrixOffresRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PrixOffresRequest $request, $id)
    {
        return RestHelper::update(PrixOffres::class,$request->all(),$id);
    }
    /**
     * Remove the specified prix from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(PrixOffres::class,$id);
    }
}

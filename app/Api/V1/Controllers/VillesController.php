<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\VillesRequest;
use App\Helpers\RestHelper;
use App\Villes;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class VillesController extends Controller
{
    /**
     * Start action, use to show all villess inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Villes::class);
    }
    /**
     * Show the form for creating a new villes.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created villes in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(VillesRequest $request)
    {
        return RestHelper::store(Villes::class,$request->all());
    }
    /**
     * Display the specified villes. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Villes::class,$id);
    }
    /**
     * Show the form for editing the specified villes.
     *
     * @param  \App\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function edit(Villes $villes)
    {
        //
    }
    /**
     * Update the specified villes in databse.
     *
     * @param VillesRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(VillesRequest $request, $id)
    {
        return RestHelper::update(Villes::class,$request->all(),$id);
    }
    /**
     * Remove the specified villes from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Villes::class,$id);
    }
}

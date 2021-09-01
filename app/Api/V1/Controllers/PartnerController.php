<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\PartnerRequest;
use App\Partner;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class PartnerController extends Controller
{
    /**
     * Start action, use to show all partners inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Partner::class);
    }
    /**
     * Show the form for creating a new partner.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created partner in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PartnerRequest $request)
    {
        return RestHelper::store(Partner::class,$request->all());
    }
    /**
     * Display the specified partner. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Partner::class,$id);
    }
    /**
     * Show the form for editing the specified partner.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }
    /**
     * Update the specified partner in databse.
     *
     * @param PartnerRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PartnerRequest $request, $id)
    {
        return RestHelper::update(Partner::class,$request->all(),$id);
    }
    /**
     * Remove the specified partner from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Partner::class,$id);
    }
}

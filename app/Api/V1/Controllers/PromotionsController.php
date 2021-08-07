<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\PromotionsRequest;
use App\Promotions;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class PromotionsController extends Controller
{
    /**
     * Start action, use to show all promotionss inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Promotions::class);
    }
    /**
     * Show the form for creating a new promotions.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created promotions in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PromotionsRequest $request)
    {
        return RestHelper::store(Promotions::class,$request->all());
    }
    /**
     * Display the specified promotions. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Promotions::class,$id);
    }
    /**
     * Show the form for editing the specified promotions.
     *
     * @param  \App\Promotions  $promotions
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotions $promotions)
    {
        //
    }
    /**
     * Update the specified promotions in databse.
     *
     * @param PromotionsRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PromotionsRequest $request, $id)
    {
        return RestHelper::update(Promotions::class,$request->all(),$id);
    }
    /**
     * Remove the specified promotions from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Promotions::class,$id);
    }
}

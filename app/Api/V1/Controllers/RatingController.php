<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\RatingRequest;
use App\Rating;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class RatingController extends Controller
{
    /**
     * Start action, use to show all ratings inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Rating::class);
    }
    /**
     * Show the form for creating a new rating.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created rating in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(RatingRequest $request)
    {
        return RestHelper::store(Rating::class,$request->all());
    }
    /**
     * Display the specified rating. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Rating::class,$id);
    }
    /**
     * Show the form for editing the specified rating.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
    }
    /**
     * Update the specified rating in databse.
     *
     * @param RatingRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(RatingRequest $request, $id)
    {
        return RestHelper::update(Rating::class,$request->all(),$id);
    }
    /**
     * Remove the specified rating from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Rating::class,$id);
    }
}

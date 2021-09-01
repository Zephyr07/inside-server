<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\NewsletterDirectionRequest;
use App\NewsletterDirection;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class NewsletterDirectionController extends Controller
{
    /**
     * Start action, use to show all newsletter_directions inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(NewsletterDirection::class);
    }
    /**
     * Show the form for creating a new newsletter_direction.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created newsletter_direction in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(NewsletterDirectionRequest $request)
    {
        return RestHelper::store(NewsletterDirection::class,$request->all());
    }
    /**
     * Display the specified newsletter_direction. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(NewsletterDirection::class,$id);
    }
    /**
     * Show the form for editing the specified newsletter_direction.
     *
     * @param  \App\NewsletterDirection  $newsletter_direction
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsletterDirection $newsletter_direction)
    {
        //
    }
    /**
     * Update the specified newsletter_direction in databse.
     *
     * @param NewsletterDirectionRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(NewsletterDirectionRequest $request, $id)
    {
        return RestHelper::update(NewsletterDirection::class,$request->all(),$id);
    }
    /**
     * Remove the specified newsletter_direction from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(NewsletterDirection::class,$id);
    }
}

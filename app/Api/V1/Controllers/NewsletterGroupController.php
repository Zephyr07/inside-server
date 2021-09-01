<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\NewsletterGroupRequest;
use App\NewsletterGroup;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class NewsletterGroupController extends Controller
{
    /**
     * Start action, use to show all newsletter_groups inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(NewsletterGroup::class);
    }
    /**
     * Show the form for creating a new newsletter_group.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created newsletter_group in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(NewsletterGroupRequest $request)
    {
        return RestHelper::store(NewsletterGroup::class,$request->all());
    }
    /**
     * Display the specified newsletter_group. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(NewsletterGroup::class,$id);
    }
    /**
     * Show the form for editing the specified newsletter_group.
     *
     * @param  \App\NewsletterGroup  $newsletter_group
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsletterGroup $newsletter_group)
    {
        //
    }
    /**
     * Update the specified newsletter_group in databse.
     *
     * @param NewsletterGroupRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(NewsletterGroupRequest $request, $id)
    {
        return RestHelper::update(NewsletterGroup::class,$request->all(),$id);
    }
    /**
     * Remove the specified newsletter_group from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(NewsletterGroup::class,$id);
    }
}

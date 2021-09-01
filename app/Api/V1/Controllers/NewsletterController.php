<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\NewsletterRequest;
use App\Newsletter;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class NewsletterController extends Controller
{
    /**
     * Start action, use to show all newsletters inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Newsletter::class);
    }
    /**
     * Show the form for creating a new newsletter.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created newsletter in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(NewsletterRequest $request)
    {
        return RestHelper::store(Newsletter::class,$request->all());
    }
    /**
     * Display the specified newsletter. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Newsletter::class,$id);
    }
    /**
     * Show the form for editing the specified newsletter.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }
    /**
     * Update the specified newsletter in databse.
     *
     * @param NewsletterRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(NewsletterRequest $request, $id)
    {
        return RestHelper::update(Newsletter::class,$request->all(),$id);
    }
    /**
     * Remove the specified newsletter from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Newsletter::class,$id);
    }
}

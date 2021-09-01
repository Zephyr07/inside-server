<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\SuggestionRequest;
use App\Suggestion;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class SuggestionController extends Controller
{
    /**
     * Start action, use to show all suggestions inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Suggestion::class);
    }
    /**
     * Show the form for creating a new suggestion.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created suggestion in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(SuggestionRequest $request)
    {
        return RestHelper::store(Suggestion::class,$request->all());
    }
    /**
     * Display the specified suggestion. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Suggestion::class,$id);
    }
    /**
     * Show the form for editing the specified suggestion.
     *
     * @param  \App\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function edit(Suggestion $suggestion)
    {
        //
    }
    /**
     * Update the specified suggestion in databse.
     *
     * @param SuggestionRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SuggestionRequest $request, $id)
    {
        return RestHelper::update(Suggestion::class,$request->all(),$id);
    }
    /**
     * Remove the specified suggestion from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Suggestion::class,$id);
    }
}

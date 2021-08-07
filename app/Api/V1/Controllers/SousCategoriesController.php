<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\SousCategoriesRequest;
use App\SousCategories;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class SousCategoriesController extends Controller
{
    /**
     * Start action, use to show all sous_categoriess inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(SousCategories::class);
    }
    /**
     * Show the form for creating a new sous_categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created sous_categories in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(SousCategoriesRequest $request)
    {
        return RestHelper::store(SousCategories::class,$request->all());
    }
    /**
     * Display the specified sous_categories. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(SousCategories::class,$id);
    }
    /**
     * Show the form for editing the specified sous_categories.
     *
     * @param  \App\SousCategories  $sous_categories
     * @return \Illuminate\Http\Response
     */
    public function edit(SousCategories $sous_categories)
    {
        //
    }
    /**
     * Update the specified sous_categories in databse.
     *
     * @param SousCategoriesRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SousCategoriesRequest $request, $id)
    {
        return RestHelper::update(SousCategories::class,$request->all(),$id);
    }
    /**
     * Remove the specified sous_categories from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(SousCategories::class,$id);
    }
}

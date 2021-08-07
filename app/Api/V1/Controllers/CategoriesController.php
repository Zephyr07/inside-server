<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\CategoriesRequest;
use App\Categories;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class CategoriesController extends Controller
{
    /**
     * Start action, use to show all categoriess inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Categories::class);
    }
    /**
     * Show the form for creating a new categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created categories in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CategoriesRequest $request)
    {
        return RestHelper::store(Categories::class,$request->all());
    }
    /**
     * Display the specified categories. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Categories::class,$id);
    }
    /**
     * Show the form for editing the specified categories.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        //
    }
    /**
     * Update the specified categories in databse.
     *
     * @param CategoriesRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CategoriesRequest $request, $id)
    {
        return RestHelper::update(Categories::class,$request->all(),$id);
    }
    /**
     * Remove the specified categories from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Categories::class,$id);
    }
}

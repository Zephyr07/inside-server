<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\SouhaitsRequest;
use App\Souhaits;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class SouhaitsController extends Controller
{
    /**
     * Start action, use to show all souhaitss inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Souhaits::class);
    }
    /**
     * Show the form for creating a new souhaits.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created souhaits in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(SouhaitsRequest $request)
    {
        return RestHelper::store(Souhaits::class,$request->all());
    }
    /**
     * Display the specified souhaits. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Souhaits::class,$id);
    }
    /**
     * Show the form for editing the specified souhaits.
     *
     * @param  \App\Souhaits  $souhaits
     * @return \Illuminate\Http\Response
     */
    public function edit(Souhaits $souhaits)
    {
        //
    }
    /**
     * Update the specified souhaits in databse.
     *
     * @param SouhaitsRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SouhaitsRequest $request, $id)
    {
        return RestHelper::update(Souhaits::class,$request->all(),$id);
    }
    /**
     * Remove the specified souhaits from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Souhaits::class,$id);
    }
}

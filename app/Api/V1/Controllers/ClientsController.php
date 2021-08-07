<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\ClientsRequest;
use App\Clients;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class ClientsController extends Controller
{
    /**
     * Start action, use to show all clientss inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Clients::class);
    }
    /**
     * Show the form for creating a new clients.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created clients in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ClientsRequest $request)
    {
        return RestHelper::store(Clients::class,$request->all());
    }
    /**
     * Display the specified clients. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Clients::class,$id);
    }
    /**
     * Show the form for editing the specified clients.
     *
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(Clients $clients)
    {
        //
    }
    /**
     * Update the specified clients in databse.
     *
     * @param ClientsRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ClientsRequest $request, $id)
    {
        return RestHelper::update(Clients::class,$request->all(),$id);
    }
    /**
     * Remove the specified clients from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Clients::class,$id);
    }
}

<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\NotesRequest;
use App\Notes;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class NotesController extends Controller
{
    /**
     * Start action, use to show all notess inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Notes::class);
    }
    /**
     * Show the form for creating a new notes.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created notes in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(NotesRequest $request)
    {
        return RestHelper::store(Notes::class,$request->all());
    }
    /**
     * Display the specified notes. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Notes::class,$id);
    }
    /**
     * Show the form for editing the specified notes.
     *
     * @param  \App\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function edit(Notes $notes)
    {
        //
    }
    /**
     * Update the specified notes in databse.
     *
     * @param NotesRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(NotesRequest $request, $id)
    {
        return RestHelper::update(Notes::class,$request->all(),$id);
    }
    /**
     * Remove the specified notes from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Notes::class,$id);
    }
}

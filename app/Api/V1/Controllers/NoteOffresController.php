<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\NoteOffresRequest;
use App\NoteOffres;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class NoteOffresController extends Controller
{
    /**
     * Start action, use to show all note_offress inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(NoteOffres::class);
    }
    /**
     * Show the form for creating a new note_offres.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created note_offres in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(NoteOffresRequest $request)
    {
        return RestHelper::store(NoteOffres::class,$request->all());
    }
    /**
     * Display the specified note_offres. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(NoteOffres::class,$id);
    }
    /**
     * Show the form for editing the specified note_offres.
     *
     * @param  \App\NoteOffres  $note_offres
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteOffres $note_offres)
    {
        //
    }
    /**
     * Update the specified note_offres in databse.
     *
     * @param NoteOffresRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(NoteOffresRequest $request, $id)
    {
        return RestHelper::update(NoteOffres::class,$request->all(),$id);
    }
    /**
     * Remove the specified note_offres from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(NoteOffres::class,$id);
    }
}

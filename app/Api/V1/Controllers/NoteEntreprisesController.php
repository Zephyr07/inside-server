<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\NoteEntreprisesRequest;
use App\NoteEntreprises;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class NoteEntreprisesController extends Controller
{
    /**
     * Start action, use to show all note_entreprisess inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(NoteEntreprises::class);
    }
    /**
     * Show the form for creating a new note_entreprises.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created note_entreprises in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(NoteEntreprisesRequest $request)
    {
        return RestHelper::store(NoteEntreprises::class,$request->all());
    }
    /**
     * Display the specified note_entreprises. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(NoteEntreprises::class,$id);
    }
    /**
     * Show the form for editing the specified note_entreprises.
     *
     * @param  \App\NoteEntreprises  $note_entreprises
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteEntreprises $note_entreprises)
    {
        //
    }
    /**
     * Update the specified note_entreprises in databse.
     *
     * @param NoteEntreprisesRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(NoteEntreprisesRequest $request, $id)
    {
        return RestHelper::update(NoteEntreprises::class,$request->all(),$id);
    }
    /**
     * Remove the specified note_entreprises from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(NoteEntreprises::class,$id);
    }
}

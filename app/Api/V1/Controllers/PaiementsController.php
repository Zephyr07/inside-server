<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\PaiementsRequest;
use App\Paiements;
use App\Helpers\RestHelper;
use App\Http\Controllers\Controller;
use Auth;

class PaiementsController extends Controller
{
    /**
     * Start action, use to show all paiementss inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Paiements::class);
    }

    /**
     * Show the form for creating a new paiements.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created paiements in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PaiementsRequest $request)
    {
        return RestHelper::store(Paiements::class,$request->all());
    }
    /**
     * Display the specified paiements. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Paiements::class,$id);
    }
    /**
     * Show the form for editing the specified paiements.
     *
     * @param  \App\Paiements  $paiements
     * @return \Illuminate\Http\Response
     */
    public function edit(Paiements $paiements)
    {
        //
    }
    /**
     * Update the specified paiements in databse.
     *
     * @param PaiementsRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PaiementsRequest $request, $id)
    {
        return RestHelper::update(Paiements::class,$request->all(),$id);
    }
    /**
     * Remove the specified paiements from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Paiements::class,$id);
    }
}

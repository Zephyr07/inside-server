<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\NewsletterEntityRequest;
use App\Direction;
use App\Mail\MailEventAdded;
use App\Mail\NewsletterAdded;
use App\Newsletter;
use App\NewsletterEntity;
use App\Helpers\RestHelper;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class NewsletterEntityController extends Controller
{
    /**
     * Start action, use to show all newsletter_entitys inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(NewsletterEntity::class);
    }
    /**
     * Show the form for creating a new newsletter_entity.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created newsletter_entity in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(NewsletterEntityRequest $request)
    {
        /*/ recuperation de la newsletter
        $newsletter= Newsletter::where("id","=",$request->newsletter_id)->first();
        // recuperation des employés de ce groupe
        $direction = Direction::with('employees')->where('entity_id',"=",$request->entity_id);
        $direction = $direction->get();
        foreach($direction as $d) {
            foreach($d->employees as $e){
                if($newsletter->type == 'event'){
                    Mail::to($e->email)
                        ->send(new MailEventAdded($newsletter));
                } else {
                    Mail::to($e->email)
                        ->send(new NewsletterAdded($newsletter));
                }
            }
        }*/
        return RestHelper::store(NewsletterEntity::class,$request->all());
    }
    /**
     * Display the specified newsletter_entity. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(NewsletterEntity::class,$id);
    }
    /**
     * Show the form for editing the specified newsletter_entity.
     *
     * @param  \App\NewsletterEntity  $newsletter_entity
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsletterEntity $newsletter_entity)
    {
        //
    }
    /**
     * Update the specified newsletter_entity in databse.
     *
     * @param NewsletterEntityRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(NewsletterEntityRequest $request, $id)
    {
        return RestHelper::update(NewsletterEntity::class,$request->all(),$id);
    }
    /**
     * Remove the specified newsletter_entity from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(NewsletterEntity::class,$id);
    }
}

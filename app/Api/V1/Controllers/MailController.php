<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\ContentRequest;
use App\Content;
use App\Employee;
use App\Group;
use App\Helpers\RestHelper;
use App\Mail\NotificationMail;
use App\Member;
use App\Newsletter;
use App\NewsletterGroup;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class MailController extends Controller
{
    /**
     * Start action, use to show all contents inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Content::class);
    }
    /**
     * Show the form for creating a new content.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created content in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendGroupMail(NewsletterGroup $request)
    {
        // recuperation de la newsletter
        $newsletter= Newsletter::where("id","=",$request->newsletter_id);
        $group= Group::where("id","=",$request->group_id);
        // recuperation des employé de ce groupe
        $employees = Member::with('employee')->where('group_id',"=",$request->group_id);
        Mail::to('enanda52@gmail.com')->send(new NotificationMail($newsletter));
    }
    /**
     * Display the specified content. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Content::class,$id);
    }
    /**
     * Show the form for editing the specified content.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        //
    }
    /**
     * Update the specified content in databse.
     *
     * @param ContentRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ContentRequest $request, $id)
    {
        return RestHelper::update(Content::class,$request->all(),$id);
    }
    /**
     * Remove the specified content from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Content::class,$id);
    }
}

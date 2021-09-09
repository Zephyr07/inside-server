<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\PostRequest;
use App\Post;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class PostController extends Controller
{
    /**
     * Start action, use to show all posts inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Post::class);
    }
    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created post in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PostRequest $request)
    {
        return RestHelper::store(Post::class,$request->all());
    }
    /**
     * Display the specified post. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Post::class,$id);
    }
    /**
     * Show the form for editing the specified post.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }
    /**
     * Update the specified post in databse.
     *
     * @param PostRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PostRequest $request, $id)
    {
        return RestHelper::update(Post::class,$request->all(),$id);
    }
    /**
     * Remove the specified post from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Post::class,$id);
    }
}

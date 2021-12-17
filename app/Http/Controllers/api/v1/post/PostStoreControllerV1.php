<?php

namespace App\Http\Controllers\api\v1\post;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\PostRequest;
use App\Http\Resources\v1\post\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostStoreControllerV1 extends Controller
{
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        return (new PostResource(Post::create($request->all())))
                ->additional(['meta' => [
                    'message' => 'Post created',
                ]]);
    }
}

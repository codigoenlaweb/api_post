<?php

namespace App\Http\Controllers\api\v1\post;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\post\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostShowControllerV1 extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return (new PostResource($post))
                ->additional(['meta' => [
                    'message' => 'Post '.$post->title,
                ]]);
    }
}

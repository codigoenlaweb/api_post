<?php

namespace App\Http\Controllers\api\v1\post;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\PostUpdateRequest;
use App\Http\Resources\v1\post\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostUpdateControllerV1 extends Controller
{
        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
        {
            $post->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'content' => $request->content
            ]);

            return (new PostResource($post))
                    ->additional(['meta' => [
                        'message' => 'Updated post',
                    ]]);
        }
}

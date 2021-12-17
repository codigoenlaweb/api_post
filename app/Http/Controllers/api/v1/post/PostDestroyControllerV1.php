<?php

namespace App\Http\Controllers\api\v1\post;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\post\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostDestroyControllerV1 extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return (new PostResource($post))
                ->additional(['meta' => [
                    'message' => 'Post destroyed',
                ]])
                ->response()
                ->setStatusCode(204);
    }
}

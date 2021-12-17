<?php

namespace App\Http\Controllers\api\v1\post;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\post\PostCollection;
use App\Models\Post;
use Illuminate\Http\Request;

class PostIndexControllerV1 extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (new PostCollection(Post::all()))
                ->additional(['meta' => [
                    'res' => true,
                    'message' => 'List of all post',
                ]]);
    }
}

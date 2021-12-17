<?php

namespace App\Http\Controllers\api\v1\post;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\post\PostCollection;
use App\Models\Post;
use Illuminate\Http\Request;

class PostPaginateControllerV1 extends Controller
{
    public function index()
    {
        return (new PostCollection(Post::paginate(8)))
                ->additional(['meta' => [
                    'res' => true,
                    'message' => 'List of post paginate',
                ]]);
    }
}

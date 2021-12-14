<?php

namespace App\Http\Controllers\api\v1\category;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\category\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryShowControllerV1 extends Controller
{
    public function show(Category $category)
    {
        return (new CategoryResource($category))
                ->additional(['meta' => [
                    'message' => 'Category '.$category->name,
                ]]);
    }
}

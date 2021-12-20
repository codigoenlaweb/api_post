<?php

namespace App\Http\Controllers\api\v1\category;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\CategoryRequest;
use App\Http\Resources\v1\category\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryStoreControllerV1 extends Controller
{
    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());
        return (new CategoryResource($category));
        /*
        return (new CategoryResource(Category::create($request->all())))
                ->additional(['meta' => [
                    'message' => 'Category created',
                ]]);
        */
    }
}

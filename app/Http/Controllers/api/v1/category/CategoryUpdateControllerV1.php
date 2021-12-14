<?php

namespace App\Http\Controllers\api\v1\category;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\CategoryRequest;
use App\Http\Resources\v1\category\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryUpdateControllerV1 extends Controller
{
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update([
            'name' => $request->name
        ]);

        return (new CategoryResource($category))
                ->additional(['meta' => [
                    'message' => 'Updated category',
                ]])
                ->response()
                ->setStatusCode(202);
    }
}

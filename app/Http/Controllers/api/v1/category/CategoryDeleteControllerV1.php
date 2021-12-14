<?php

namespace App\Http\Controllers\api\v1\category;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\category\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryDeleteControllerV1 extends Controller
{
    public function destroy(Category $category)
    {
        $category->delete();
        return (new CategoryResource($category))
                ->additional(['meta' => [
                    'message' => 'Category destroyed',
                ]])
                ->response()
                ->setStatusCode(204);
    }
}

<?php

namespace App\Http\Controllers\api\v1\category;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\category\CategoryCollection;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryIndexControllerV1 extends Controller
{
    public function index()
    {
        return (new CategoryCollection(Category::all()))
                ->additional(['meta' => [
                    'res' => true,
                    'message' => 'List of all categories',
                ]]);
    }
}

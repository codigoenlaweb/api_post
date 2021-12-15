<?php
use App\Actions\JsonApiAuth\AuthKit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\category\CategoryIndexControllerV1;
use App\Http\Controllers\api\v1\category\CategoryDeleteControllerV1;
use App\Http\Controllers\api\v1\category\CategoryShowControllerV1;
use App\Http\Controllers\api\v1\category\CategoryStoreControllerV1;
use App\Http\Controllers\api\v1\category\CategoryUpdateControllerV1;


/* V1 */

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/v1/category', [CategoryIndexControllerV1::class, 'index'])->name('categoryv1.index');
    Route::get('/v1/category/{category}', [CategoryShowControllerV1::class, 'show'])->name('categoryv1.show');
    Route::post('/v1/category', [CategoryStoreControllerV1::class, 'store'])->name('categoryv1.store');
    Route::delete('/v1/category/{category}', [CategoryDeleteControllerV1::class, 'destroy'])->name('category.destroy');
    Route::put('/v1/category/{category}', [CategoryUpdateControllerV1::class, 'update'])->name('category.update');
});

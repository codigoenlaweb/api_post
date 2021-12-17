<?php

use App\Actions\JsonApiAuth\AuthKit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\post\PostIndexControllerV1;
use App\Http\Controllers\api\v1\post\PostDestroyControllerV1;
use App\Http\Controllers\api\v1\post\PostShowControllerV1;
use App\Http\Controllers\api\v1\post\PostStoreControllerV1;
use App\Http\Controllers\api\v1\post\PostUpdateControllerV1;
use App\Http\Controllers\api\v1\post\PostPaginateControllerV1;


/* V1 */
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    /* CRUD API */
    Route::get('/v1/post', [PostIndexControllerV1::class, 'index'])->name('postv1.index');
    Route::get('/v1/post/{post}', [PostShowControllerV1::class, 'show'])->name('postv1.show');
    Route::post('/v1/post', [PostStoreControllerV1::class, 'store'])->name('postv1.store');
    Route::delete('/v1/post/{post}', [PostDestroyControllerV1::class, 'destroy'])->name('postv1.destroy');
    Route::put('/v1/post/{post}', [PostUpdateControllerV1::class, 'update'])->name('postv1.update');
    /* CRUD API END */

    /* END POINT SOLICITED */
    Route::get('/v1/post-paginate', [PostPaginateControllerV1::class, 'index'])->name('postv1.index');
});

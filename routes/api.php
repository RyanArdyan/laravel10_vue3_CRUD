<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// @index     
//   ini akan memanggil posts.store, show, update, destroy
Route::apiResource('/posts', PostController::class);

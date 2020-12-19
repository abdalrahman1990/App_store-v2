<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
|php is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/discover', [App\Http\Controllers\DiscoverController::class,'index'])->name('discover.index');
Route::get('/stories/{story}', [App\Http\Controllers\StoryController::class,'show'])->name('story.show');
Route::get('/products/{product}', [App\Http\Controllers\ProductController::class,'show'])->name('product.show');

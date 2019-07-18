<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('posts/{post}/comments', 'CommentController@index');
// Route::middleware('auth:api')->group(function () {
//     Route::post('posts/{post}/comment', 'CommentController@store');
// });

Route::get('order', 'Api\OrderController@index');
Route::middleware('auth:api')->group(function () {
    Route::post('order/{order}', 'Api\OrderController@store');
});

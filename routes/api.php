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
Route::post('login', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'Api\UserController@details');
});

Route::get('order', 'Api\OrderController@index');
Route::get('chef', 'Api\ChefOrderController@index');
Route::get('waiter', 'Api\WaiterOrderController@index');
Route::post('order/{detailOrder}', 'Api\OrderController@update');
Route::middleware('auth:api')->group(function () {
});

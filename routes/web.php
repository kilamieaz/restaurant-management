<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    // Route::resource('user', 'Admin\UserController');
    // Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard.index');
    Route::resource('menu', 'Admin\MenuController');
});

Route::prefix('datatable')->group(function () {
    Route::get('menu-datatable', 'DataTable\MenuDataTableController@index')->name('datatable.menu');
});
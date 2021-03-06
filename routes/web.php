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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['pagespeed']], function () {
    // Route::prefix('frontend')->group( function () {
        Route::get('/', 'Frontend\HomeController@index')->name('frontend.home.index');
        Route::resource('product', 'Frontend\ProductController');
        Route::get('contact', 'Frontend\ContactController@index')->name('frontend.contact.index');
        Route::get('about', 'Frontend\AboutController@index')->name('frontend.about.index');
    // });
});

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->group( function () {
        // Route::resource('user', 'Admin\UserController');
        Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard.index');
        Route::resource('menu', 'Admin\MenuController');
        Route::resource('category', 'Admin\CategoryController');
        Route::resource('role', 'Admin\RoleController');
        Route::resource('employee', 'Admin\EmployeeController');
        Route::resource('member', 'Admin\MemberController');
        Route::resource('table', 'Admin\TableController');
        // Route::resource('order', 'Admin\OrderController');
        Route::resource('detail-order', 'Admin\DetailOrderController');
        Route::resource('transaction', 'Admin\TransactionController');
        Route::resource('transaction-member', 'Admin\TransactionMemberController');
    });

    Route::prefix('datatable')->group(function () {
        Route::get('menu-datatable', 'DataTable\MenuDataTableController@index')->name('datatable.menu');
        Route::get('category-datatable', 'DataTable\CategoryDataTableController@index')->name('datatable.category');
        Route::get('role-datatable', 'DataTable\RoleDataTableController@index')->name('datatable.role');
        Route::get('employee-datatable', 'DataTable\EmployeeDataTableController@index')->name('datatable.employee');
        Route::get('member-datatable', 'DataTable\MemberDataTableController@index')->name('datatable.member');
        Route::get('table-datatable', 'DataTable\TableDataTableController@index')->name('datatable.table');
        Route::get('order-datatable', 'DataTable\OrderDataTableController@index')->name('datatable.order');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

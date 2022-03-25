<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
    
});
//HUy
Route::get('/products','App\Http\Controllers\ProductController@showProduct')->name('show-list');
Route::get('/createProduct','App\Http\Controllers\ProductController@createProduct')->name('create-pr');
Route::post('/createProduct','App\Http\Controllers\ProductController@save')->name('add-pr');
Route::get('/delete/{id}','App\Http\Controllers\ProductController@destroy')->name('delete-pr');

//Route::get('/updateProduct','App\Http\Controllers\ProductController@updatePage');

Route::get('/updateProduct/{id}','App\Http\Controllers\ProductController@updatePage');  
Route::put('update/{id}', 'App\Http\Controllers\ProductController@updatePro')->name('update-pr');


//vy
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::put('/user/update/{id?}', [UserController::class, 'update']);
Route::delete('/user/destroy/{id?}', [UserController::class, 'destroy']);
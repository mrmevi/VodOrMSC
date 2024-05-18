<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'vod', 'middleware' => 'admin'], function () {
    Route::get('/', 'App\Http\Controllers\Admin\MainController@index')->name('admin.main');
    Route::resource('/posts', 'App\Http\Controllers\Admin\PostController');
});

Route::get('/r', 'App\Http\Controllers\UserController@create')->name('user.create');
Route::post('/r', 'App\Http\Controllers\UserController@store')->name('user.store');

Route::get('/l', 'App\Http\Controllers\UserController@loginCreate')->name('user.loginCreate');
Route::post('/l', 'App\Http\Controllers\UserController@login')->name('user.login');

Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('user.logout');


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.page');
Route::get('/test', 'App\Http\Controllers\HomeController@test')->name('test');
Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts.page');
Route::get('/posts/{slug}', 'App\Http\Controllers\PostController@viewPost')->name('posts.view');
Route::get('/new', 'App\Http\Controllers\PostController@viewPost')->name('viewPost.page');
Route::get('/info', 'App\Http\Controllers\AboutUsController@index')->name('aboutUs.page');
Route::get('/test', 'App\Http\Controllers\HomeController@test')->name('test');

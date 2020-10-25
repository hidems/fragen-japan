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

Route::get('/posts', 'PostsController@index')->name('home');
Route::post('/posts', 'PostsController@store');

Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');

Auth::routes();

Route::get('/home', 'HomeController@index');

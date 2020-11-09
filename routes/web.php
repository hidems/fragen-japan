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

Route::get('/', 'PostsController@index')->name('home');
Route::post('/', 'PostsController@store');

Route::get('/posts/{id}', 'PostsController@show_post_page')->name('post');
Route::post('/posts/{id}', 'PostsController@store_comment');

Route::get('/explore', 'ExploreController');

Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/profiles/{user}/edit', 'ProfilesController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user}', 'ProfilesController@update')->middleware('can:edit,user');
});

Auth::routes();

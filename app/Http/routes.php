<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Post'], function () {
    Route::get('posts', ['uses' => 'PostController@index', 'as' => 'post.index']);
});

Route::group(['namespace' => 'User'], function () {
    Route::get('users', ['uses' => 'UserController@index', 'as' => 'user.index']);
    Route::group(['namespace' => 'Post'], function () {
        Route::get('users/{user}/posts', ['uses' => 'PostController@index', 'as' => 'user.post.index']);
    });
});

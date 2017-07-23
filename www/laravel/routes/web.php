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


//Route::get('/', "Task@showTaskPage");







Route::get('/', 'TweetController@index');
Route::post('/tweet', 'TweetController@store');
Route::get('/tweet/{tweet}', 'TweetController@show');
	


// Auth::routes();


// Route::get('/posts', 'PostController@show');

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







Route::get('/', 'TweetController@index')->name('home');
Route::post('/tweet', 'TweetController@store');
Route::get('/tweet/{tweet}', 'TweetController@show');
Route::post('/tweet/{tweet}', 'CommentController@store');
Route::get('/register', 'RegisterationController@create');
Route::post('/register', 'RegisterationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

	


// Auth::routes();


// Route::get('/posts', 'PostController@show');

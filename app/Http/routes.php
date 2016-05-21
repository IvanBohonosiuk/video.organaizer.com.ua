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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/videos', [
		'uses' => 'VideosController@index',
		'as' => 'videos'
	]);

Route::get('/video/{url}', [
		'uses' => 'VideosController@singleVideo'
	]);

Route::post('comment/add','CommentController@store');

Route::get('/dashboard', 'DashboardController@index');
Route::post('/dashboard', 'DashboardController@update_avatar');
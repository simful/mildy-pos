<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::get('/', function()
{
	if (Auth::check())
		return View::make('hello');
	else
		return Redirect::to('login');
});

Route::get('login', 'UserController@showLogin');
Route::post('login', 'UserController@login');
Route::post('logout', 'UserController@logout');
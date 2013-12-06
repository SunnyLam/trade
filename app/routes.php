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

Route::get('/', array( 'as' => 'home',function()
{
  return View::make('home');
}));

Route::get('/login', array('as' => 'login', function()
{
  if (Auth::check())
    return Redirect::to('/');
  return View::make('login');
}));

Route::get('/logout', array('as' => 'logout', function()
{
  Auth::logout();
  return Redirect::route('home');
}));

Route::post('/login', array('uses' => 'UserController@login'));

Route::get('/register', array('as' => 'register', function()
{
  if (Auth::check())
    return Redirect::to('/');
	return View::make('register');
}));

Route::post('/register', array('uses' => 'UserController@register'));

Route::get('/test', function(){
  return View::make('register');
});

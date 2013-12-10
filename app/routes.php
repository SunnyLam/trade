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


Route::get('/', array( 'as' => 'home', function()
{
  return View::make('home');
}));

/*======================================
=            Login & Logout            =
======================================*/

Route::get('/login', array('as' => 'login', function()
{
  if (Auth::check())
    return Redirect::to('/');
  return View::make('login');
}));

Route::post('/login', array('uses' => 'UserController@login'));

Route::get('/logout', array('as' => 'logout', function()
{
  Auth::logout();
  return Redirect::route('home');
}));

/*================================
=            Register            =
================================*/

Route::get('/register', array('as' => 'register', function()
{
  if (Auth::check())
    return Redirect::to('/');
	return View::make('register');
}));

Route::post('/register', array('uses' => 'UserController@register'));

/*=================================
=            Node CRUD            =
=================================*/

Route::get('/node/create', array('before' => 'auth', 'as' => 'create_node', function()
{
  return View::make('node.create');
}));

Route::post('/node/create', array('before' => 'auth', 'uses' => 'NodeController@create'));

/*====================================
=            User Profile            =
====================================*/

Route::get('/profile/{uid}', array('uses' => 'ProfileController@load'));

/*=================================
=            Test Case            =
=================================*/

Route::get('/test', function(){

});

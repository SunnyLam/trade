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

Route::get('/node/create', array('as' => 'create_node', function()
{
  return View::make('node.create');
}));

Route::post('/node/create', array('uses' => 'NodeController@create'));

Route::get('/test', function(){
  $width = 300;
$height = 200;
$backgroundColor = 'FF0000'; // optionnal, can be null to transparent

$layer = PHPImageWorkshop\ImageWorkshop::initVirginLayer($width, $height, $backgroundColor);
return $layer;
});

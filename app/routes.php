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

Route::get('/node/create', array('before' => 'auth', 'as' => 'create_node', function()
{
  return View::make('node.create');
}));

Route::post('/node/create', array('before' => 'auth', 'uses' => 'NodeController@create'));


Route::get('/test', function(){

  return FILE_STORAGE_PATH;
  $filename = 'Jellyfish.jpg';
  $thumbname = 'thumb1.jpg';
  $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(UPLOADED_FILE_PATH . $filename);

  $layer->resizeInPixel(200, null, true);

  $layer->save( UPLOADED_FILE_PATH, $thumbname);
  return 'Done!';
});

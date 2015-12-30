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

Route::model('codes', 'Code');
Route::model('users', 'User');

Route::bind('codes', function($value, $route) {
	return App\Code::whereId($value)->first();
});
Route::bind('users', function($value, $route) {
	return App\User::whereName($value)->first();
});

Route::resource('users', 'UsersController');
Route::resource('users.codes', 'CodesController');

Route::get('testfile', function() { 
	return Redirect::to("testfile.php"); 
});

Route::get('assign', function() { 
	return Redirect::to("assign.php"); 
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('testfile', function() { 
	return Redirect::to("testfile.php"); 
});

/* Authenticated users 
Route::group(['middleware' => 'auth'], function()
{
    Route::get('auth/dashboard', array('as'=>'dashboard', function()
	{
	return View('auth.dashboard');
	}));
});

Route::filter('auth', function() {
    if (Auth::guest()) {
        return Redirect::guest('auth/login');
    }
*/

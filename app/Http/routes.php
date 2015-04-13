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

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

Route::group(['prefix' => 'console', 'namespace' => 'Admin'], function()
{
  Route::get('/', 'DashBoardController@Home');
  Route::resource('articles', 'ArticlesController',
                  ['except' => ['show']]);
  Route::resource('comments', 'CommentsController');
  Route::resource('users', 'UsersController');
});

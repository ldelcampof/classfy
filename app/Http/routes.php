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

Route::get('/', ['as'=>'home','uses'=>'WelcomeController@index']);
Route::get('/register', ['as'=>'register','uses'=>'UserController@create']);
Route::post('/insert', ['as'=>'insert-user','uses'=>'UserController@insert']);
Route::get('/login', ['as'=>'login','uses'=>'UserController@login']);

Route::post('/authenticate', ['as'=>'authenticate','uses'=>'Auth\AuthController@authenticate']);


Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

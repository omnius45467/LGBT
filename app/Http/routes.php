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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'PageController@index');

Route::get('faq', 'PageController@faq');

Route::get('about', 'PageController@about');

Route::get('resources', 'PageController@resources');

Route::get('faq', 'PageController@faq');

Route::get('contact', 'PageController@contact');

Route::get('manager', 'ManagerController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

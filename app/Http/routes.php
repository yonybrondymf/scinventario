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
Route::get('ReporteInventario', 'PdfController@invoice');
Route::get('ReporteInventarios2/{category}', 'PdfsController@github2');
Route::get('ReporteInventarios4/{location}', 'PdfsController@github4');
Route::get('ReporteInventarios5/{name?}/{location?}', 'PdfsController@github5');
Route::get('ReporteInventarios/{name?}/{category?}/{location?}', 'PdfsController@github');
Route::get('ReporteInventarios3/{category?}/{location?}', 'PdfsController@github3');
Route::get('ReporteInventarios6/{name?}', 'PdfsController@github6');


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('device', 'DeviceController');

Route::resource('category', 'CategoryController');

Route::resource('user', 'UserController');

Route::resource('location', 'LocationController');
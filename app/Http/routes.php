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

Route::get('/admin', function () {
  return view('admin-home');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Route::resource('user','UserController');
Route::group(['middleware'=>'manager'], function() {
  Route::get('residents/create',  'ResidentController@create');
  Route::get('xiaoqus/create',  'XiaoquController@create');
});

// Xiaoqu Routes
Route::get('xiaoqus/index',  'XiaoquController@index');
Route::get('xiaoqus/{id}',   'XiaoquController@show');
Route::get('xiaoqus/{id}/edit',   'XiaoquController@edit');
Route::post('xiaoqus',  'XiaoquController@store');

// Resident routes.
Route::post('resident/verify',  'ResidentController@verify');


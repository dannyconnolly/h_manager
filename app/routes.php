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

Route::get('/', 'HomeController@index');

Route::get('/login', 'AuthController@get_login');
Route::post('/login', array('before' => 'csrf_json', 'uses' => 'AuthController@post_login'));
Route::get('/logout', 'AuthController@logout');
Route::resource('users', 'UserController');
Route::resource('membertypes', 'MemberTypeController');
Route::resource('hostels', 'HostelController');


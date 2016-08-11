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

Route::get('/login', function() {
    return View::make('login');
});

Route::get('/admin', function() {
    return View::make('register');
});

Route::get('/company', 'CompanyController@index');
Route::get('/create', 'CompanyController@create');
Route::post('/store', 'CompanyController@store');
Route::get('/company/{id}', 'CompanyController@show');
Route::get('/company/{id}/edit', 'CompanyController@edit');
Route::put('/company/update/{id}', 'CompanyController@update');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/company', 'CompanyController@index');
    Route::get('/create', 'CompanyController@create');
    Route::post('/store', 'CompanyController@store');
    Route::get('/company/{id}', 'CompanyController@show');
    Route::get('/company/{id}/edit', 'CompanyController@edit');
    Route::put('/company/update/{id}', 'CompanyController@update');
});

Route::auth();



Route::get('/home', 'HomeController@index');

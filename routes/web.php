<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/registration', 'RegistrationController@create');

Route::post('/registration', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/', 'TeamsController@index');

Route::get('/{id}/', 'TeamsController@show');

Route::get('/player/{id}', 'PlayersController@show');

Route::get('/teams/{id}', 'TeamsController@show');



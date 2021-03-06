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

Route::get('/', 'HomeController@index');

Route::get('computer', 'ComputerController@index');
Route::get('phone', 'PhoneController@index');
Route::get('videogame', 'VideoGameController@index');
Route::get('computer/{id}', 'ComputerController@get');
Route::get('phone/{id}', 'PhoneController@get');
Route::get('videogame/{id}', 'VideoGameController@get');

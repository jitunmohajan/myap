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

Route::get('index','HomeController@index');

Route::get('/','HomeController@login');
Route::post('postlogin','HomeController@postlogin');
Route::get('logout','HomeController@logout');

Route::get('register','HomeController@register');
Route::post('store','HomeController@store');
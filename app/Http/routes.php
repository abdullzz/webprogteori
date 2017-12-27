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

Route::get('/', 'shopController@index');
Route::get('/about','shopController@about');
Route::get('/cart','shopController@cart');
Route::get('/community','communityController@index');
Route::get('/register','communityController@register');
Route::get('/login','communityController@login');

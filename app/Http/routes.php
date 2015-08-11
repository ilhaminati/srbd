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

Route::get('/', 'RbController@index');

Route::get('/view', 'RbController@view');


Route::get('/export', 'RbController@export');


Route::get('/dashboard','RbController@dashboard');

Route::post('/save-data', 'RbController@saveData');


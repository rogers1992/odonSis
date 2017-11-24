<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['prefix' => 'admin'], function(){
  Route::resource('pacientes', 'PacienteController');
});
Route::group(['prefix' => 'admin'], function(){
	Route::resource('doctores', 'DoctorController');
});

//Auth::routes();

Route::get('/', 'HomeController@index');

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

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index');

Route::get('/campista', 'CamperController@show');

Route::get('/acampamento', 'CampingController@show');
Route::get('/acampamento/cadastrar', 'CampingController@create');

Route::get('/acampamento/modalidade', 'ModalityController@show')->name('modality');
Route::get('/acampamento/modalidade/cadastrar', 'ModalityController@create');
Route::post('/acampamento/modalidade/cadastrar', 'ModalityController@store');

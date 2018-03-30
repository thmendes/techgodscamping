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

Route::get('/campista', 'CamperController@show')->name('camper');
Route::get('/campista/cadastrar', 'CamperController@create');
Route::post('/campista/cadastrar', 'CamperController@store');

Route::get('/voluntario', 'VolunteerController@show')->name('volunteer');
Route::get('/voluntario/cadastrar', 'VolunteerController@create');
Route::post('/voluntario/cadastrar', 'VolunteerController@store');

Route::get('/acampamento', 'CampingController@show')->name('camping');
Route::get('/acampamento/cadastrar', 'CampingController@create');
Route::post('/acampamento/cadastrar', 'CampingController@store');

Route::get('/acampamento/{campingId}/gerenciar', 'ManageController@show');
Route::get('/acampamento/{campingId}/gerenciar/equipe/nova', 'TeamController@create');

Route::get('/acampamento/modalidade', 'ModalityController@show')->name('modality');
Route::get('/acampamento/modalidade/cadastrar', 'ModalityController@create');
Route::post('/acampamento/modalidade/cadastrar', 'ModalityController@store');

Route::get('/funcoes', 'JobController@show')->name('job');
Route::get('/funcoes/cadastrar', 'JobController@create');
Route::post('/funcoes/cadastrar', 'JobController@store');

Route::get('/cores', 'ColorController@show')->name('color');
Route::post('/cores/cadastrar', 'ColorController@store');



# API #
Route::get('/api/campista/{document}', 'CamperController@GetByDocument');

Route::get('/api/voluntario/pesquisar', 'VolunteerController@search');
Route::get('/api/voluntario/{document}', 'VolunteerController@GetByDocument');

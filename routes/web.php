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

Route::get('/', 'InstitutionalController@index')->name('institutional');

Route::post('/mail/send', 'MessageController@mail');

Route::get('institucional/galeria', 'AlbumController@index')->name('gallery');
Route::get('institucional/galeria/nova', 'AlbumController@create');
Route::post('institucional/galeria/nova', 'AlbumController@store');

Route::get('institucional/galeria/{id}', 'AlbumController@show')->name('album');
Route::get('institucional/galeria/{id}/delete', 'AlbumController@delete');

Route::post('institucional/galeria/{id}/upload', 'PhotosController@upload');
Route::get('institucional/galeria/{albumId}/delete/{photoId}', 'PhotosController@delete');

Route::get('institucional/noticias', 'JournalController@index')->name('journal');
Route::get('institucional/noticias/nova', 'JournalController@create');
Route::post('institucional/noticias/nova', 'JournalController@store');
Route::get('institucional/noticias/{id}/delete', 'JournalController@delete');

Route::get('/noticias', 'JournalController@showNews');
Route::get('/noticias/{id}', 'JournalController@show');

Route::get('/galeria', 'AlbumController@showGallery');

Route::get('/meuacampamento', 'HomeController@index');

Route::get('/pessoas', 'PersonController@show')->name('people');
Route::get('/pessoas/todas', 'PersonController@showall')->name('showall');
Route::get('/pessoas/cadastrar', 'PersonController@create');
Route::post('/pessoas/cadastrar', 'PersonController@store');
Route::get('/pessoas/visitante/cadastrar', 'ExternPersonController@create');
Route::post('/pessoas/visitante/cadastrar', 'ExternPersonController@store');

Route::get('/campista', 'CamperController@show')->name('camper');
Route::get('/campista/cadastrar', 'CamperController@create');
Route::post('/campista/cadastrar', 'CamperController@store');

Route::get('/voluntario', 'VolunteerController@show')->name('volunteer');
Route::get('/voluntario/cadastrar', 'VolunteerController@create');
Route::post('/voluntario/cadastrar', 'VolunteerController@store');

Route::get('/acampamento', 'CampingController@show')->name('camping');
Route::get('/acampamento/cadastrar', 'CampingController@create');
Route::post('/acampamento/cadastrar', 'CampingController@store');

Route::get('/acampamento/{campingId}/gerenciar', 'ManageController@show')->name('manage');
Route::get('/acampamento/{campingId}/gerenciar/equipe/cadastrar', 'TeamController@create');
Route::post('/acampamento/{campingId}/gerenciar/equipe/cadastrar', 'TeamController@store');
Route::get('/acampamento/{campingId}/gerenciar/campista/associar', 'TeamController@associate');

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
Route::get('/api/campista', 'CamperController@GetCamper');

Route::get('/api/voluntario/pesquisar', 'VolunteerController@search');
Route::get('/api/voluntario/{document}', 'VolunteerController@GetByDocument');

Route::get('/api/pessoas/pesquisar', 'PersonController@search');
Route::get('/api/pessoas', 'PersonController@GetPeople');
Route::post('/api/pessoas', 'PersonController@SetPeople');
Route::post('/api/pessoas', 'PersonController@updatePeople');
Route::get('/api/pessoas/{id}', 'PersonController@GetPerson');
Route::delete('/api/pessoas/{id}', 'PersonController@RemovePerson');


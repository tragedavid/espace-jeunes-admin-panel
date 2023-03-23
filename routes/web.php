<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jeunes', 'JeuneController@list');
Route::get('/jeune/créer', 'JeuneController@create');
Route::post('/jeune/insérer', 'JeuneController@insert');
Route::get('/jeune/modifier/{id}', 'JeuneController@edit');
Route::post('/jeune/update/{id}', 'JeuneController@update');
Route::get('/jeune/archiver/{id}', 'JeuneController@archive');

Route::get('/partenaires', 'CollaboratorController@list');
Route::get('/partenaire/créer', 'CollaboratorController@create');
Route::post('/partenaire/insérer', 'CollaboratorController@insert');
Route::get('/partenaire/modifier/{id}', 'CollaboratorController@edit');
Route::post('/partenaire/update/{id}', 'CollaboratorController@update');
Route::get('/partenaire/archiver/{id}', 'CollaboratorController@archive');

Route::get('/activités', 'ActivityController@list');
Route::get('/activité/créer', 'ActivityController@create');
Route::post('/activité/insérer', 'ActivityController@insert');
Route::get('/activité/modifier', 'ActivityController@edit');
Route::post('/activité/update', 'ActivityController@update');
Route::get('/activité/archiver', 'ActivityController@archive');

Route::get('/tickets/', 'TicketTypeController@list');
Route::get('/ticket/créer', 'TicketTypeController@create');
Route::post('/ticket/insérer', 'TicketTypeController@insert');
Route::get('/ticket/modifier/{id}', 'TicketTypeController@edit');
Route::post('/ticket/update/{id}', 'TicketTypeController@update');
Route::get('/ticket/archiver/{id}', 'TicketTypeController@archive');

Route::get('/formules', 'FormuleController@list');
Route::get('/formule/créer', 'FormuleController@create');
Route::post('/formule/insérer', 'FormuleController@insert');
Route::get('/formule/modifier/{id}', 'FormuleController@edit');
Route::post('/formule/update/{id}', 'FormuleController@update');
Route::get('/formule/archiver/{id}', 'FormuleController@archive');
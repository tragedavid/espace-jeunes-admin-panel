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
Route::get('/jeunes', 'UserController@list');
Route::get('/jeune/créer', 'UserController@create');
Route::post('/jeune/insérer', 'UserController@insert');
Route::get('/jeune/modifier', 'UserController@edit');
Route::post('/jeune/update', 'UserController@update');
Route::post('/jeune/archiver', 'UserController@archive');

Route::get('/partenaires', 'CollaboratorController@list');
Route::get('/partenaire/créer', 'CollaboratorController@create');
Route::post('/partenaire/insérer', 'CollaboratorController@insert');
Route::get('/partenaire/modifier', 'CollaboratorController@edit');
Route::post('/partenaire/update', 'CollaboratorController@update');
Route::post('/partenaire/archiver', 'CollaboratorController@archive');

Route::get('/activités', 'ActivityController@list');
Route::get('/activité/créer', 'ActivityController@create');
Route::post('/activité/insérer', 'ActivityController@insert');
Route::get('/activité/modifier', 'ActivityController@edit');
Route::post('/activité/update', 'ActivityController@update');
Route::post('/activité/archiver', 'ActivityController@archive');

Route::get('/tickets/', 'TicketController@list');
Route::get('/ticket/créer', 'TicketController@create');
Route::post('/ticket/insérer', 'TicketController@insert');
Route::get('/ticket/modifier/{id}', 'TicketController@edit');
Route::post('/ticket/update', 'TicketController@update');
Route::post('/ticket/archiver', 'TicketController@archive');

Route::get('/formules', 'FormuleController@list');
Route::get('/formule/créer', 'FormuleController@create');
Route::post('/formule/insérer', 'FormuleController@insert');
Route::get('/formule/modifier/{id}', 'FormuleController@edit');
Route::post('/formule/update', 'FormuleController@update');
Route::post('/formule/archiver', 'FormuleController@archive');
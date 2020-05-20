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

Route::view('/', 'welcome');

// INSCRIPTION - CONNEXION - COMPTE

Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/compte','CompteController@accueil');
Route::get('/deconnexion', 'CompteController@deconnexion');

Route::get('/utilisateurs', 'UtilisateursController@liste');

Route::get('/compteedit/{id}','CompteController@edit');
Route::post('/compteedit/{id}', 'CompteController@edittraitement');

// TOURNOI

Route::get('/tournoi', 'TournoiController@tournoi');
Route::get('/tournoijoin', 'TournoiController@rejoindre');
Route::get('/tournoisee', 'TournoiController@see');

Route::get('/tournoicreate', 'TournoiController@creer');
Route::post('/tournoicreate', 'TournoiController@traitement');

Route::get('/tournoiunique/{id}', 'TournoiController@rejoindreunique');

// CARTE

Route::get('/carte','CartesController@listeCarte');
Route::post('/carte','CartesController@traitement');

Route::get('/carteedit/{id}', 'CartesController@edit');
Route::post('/carteedit/{id}', 'CartesController@edittraitement');
Route::get('/cartedesroy/{id}', 'CartesController@destroy');





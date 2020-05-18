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

// TOURNOI

Route::get('/tournoi', 'TournoiController@tournoi');
Route::get('/tournoicreate', 'TournoiController@creer');
Route::get('/tournoijoin', 'TournoiController@rejoindre');
Route::get('/tournoisee', 'TournoiController@see');

Route::post('/tournoicreate', 'TournoiController@creertraitement');

// CARTE

Route::get('/carte','CartesController@listeCarte');
Route::post('/carte','CartesController@traitement');

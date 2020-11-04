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


Route::get('/accueil', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('Contact', 'ContactController@contact');
Route::get('Gallerie', 'GallerieController@gallerie');
Route::get('A-propos', 'AproposController@apropos');
Route::get('Single', 'SingleController@single');
Route::get('rdv', 'rdvController@rdv');
Route::get('Enregistrer', 'EnregistrerController@enregistrer');
Route::get('Enregistrer', 'EnregistrerController@enregistrer');
Route::post('store-patient', 'EnregistrerController@store');
// Route::get('PersApre','PersApreController@index'  );
// Route::post('app', 'PersApreController@store'); 
Route::get('Liste', 'ListeController@index'); 
    
Route::get('Patient-Liste','EnregistrerController@index');
Route::get('supprimer','EnregistrerController@destroy'); 
Route::get('detail', 'EnregistrerController@show');
Route::get('editer', 'EnregistrerController@edit');
Route::get('modifier', 'EnregistrerController@update');
// Route pour enrégistrer le personnel de santé
Route::get('create','PersonnelController@create');
Route::post('store-personnel', 'PersonnelController@store');
Route::get('liste-personnel','PersonnelController@index');
// Route pour enrégistrer la ville
Route::get('createville','VilleController@create');
Route::post('store-ville','VilleController@store');


// Route pour enrégistrer le centre
Route::get('createcentre','CentreController@create');
Route::post('store','CentreController@store');
// Route pour enrégistrer les spécialités
Route::get('createspecialite','SpecialiteController@create');
Route::post('store-specialite','SpecialiteController@store');

// Route pour envoyer le formulaire de rdv
Route::post('store-rdv','rdvController@store');
Route::get('create-rdv','rdvController@create');

Route::get('/RegisterAdmin', 'HomeController@register_admin')->name('register-admin');
// Route pour contacter le centre
Route::post('store-contact','ContactController@store');
// Route backoffice
Route::get('/backoffice', 'officeController@index');
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
Route::get('Enregistrer', 'EnregistrerController@enregistrer');


// Route::get('/RegisterAdmin', 'HomeController@register_admin')->name('register-admin');

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/gallerie', 'HomeController@gallerie')->name('gallerie');
Route::get('/apropos', 'HomeController@apropos')->name('A-propos');
Route::get('/single', 'HomeController@single')->name('Single');


// Route::get('/RegisterAdmin', 'HomeController@register_admin')->name('register-admin');

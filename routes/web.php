<?php

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

Auth::routes();

Route::get('/welcome', 'WelcomeController@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/apropos', 'AproposController@index')->name('apropos');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/gallerie', 'GallerieController@index')->name('gallerie');
Route::get('/nouscontacter', 'NouscontacterController@index')->name('nouscontacter');
Route::get('/services', 'ServicesController@index')->name('services');

Route::get('injecteurs/starttask/{injecteur?}', 'InjecteursController@starttask')->name('injecteurs.starttask');
Route::get('injecteurs/endtask/{injecteur?}', 'InjecteursController@endtask')->name('injecteurs.endtask');
// Route::post('injecteurs/updater', 'InjecteursController@updater')->name('injecteurs.updater');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/apropos', 'AproposController@index')->name('apropos');

Route::resource('users', 'UsersController');
Route::resource('injecteurs', 'InjecteursController');
Route::resource('pompes', 'PompesController');
Route::resource('mecaniques', 'MecaniquesController');
Route::resource('vehicules', 'VehiculesController');

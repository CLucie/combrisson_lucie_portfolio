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

Route::get('/', 'HomePageController@index')->name('home');
Route::get('/competences', 'QualifController@index')->name('skills');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/admin', 'AdminConnexionController@index')->name('connexion');
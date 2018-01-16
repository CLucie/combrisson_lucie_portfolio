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

// Front
Route::get('/', 'HomePageController@index')->name('home');
Route::get('/competences', 'QualifskillController@index')->name('qualifskills');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/admin', 'AdminConnexionController@index')->name('connexion');


// Back
	// Messages
Route::get('/admin/messages', 'ContactController@admin')->name('admessages');
Route::get('/admin/messages/delete', 'ContactController@destroy')->name('addelmessages');

	// Qualifications/Diplomes
Route::get('/admin/qualifications', 'QualifController@admin')->name('adqualification');
Route::get('/admin/qualifications/edit', 'QualifController@edit')->name('adeditqualification');
Route::post('/admin/qualifications/edit2', 'QualifController@update')->name('admodifqualification');
Route::get('/admin/qualifications/delete', 'QualifController@destroy')->name('addelqualification');
Route::get('/admin/qualifications/add', 'QualifController@create')->name('adajoutqualification');
Route::post('/admin/qualifications/add2', 'QualifController@store')->name('adstorequalification');

		// Compétences
Route::get('/admin/competences', 'SkillsController@admin')->name('adskills');
Route::get('/admin/competences/edit', 'SkillsController@edit')->name('adeditskills');
Route::post('/admin/competences/edit2', 'SkillsController@update')->name('admodifskills');
Route::get('/admin/competences/delete', 'SkillsController@destroy')->name('addelskills');
Route::get('/admin/competences/add', 'SkillsController@create')->name('adajoutskills');
Route::post('/admin/competences/add2', 'SkillsController@store')->name('adstoreskills');

		// Projets/Portfolio
Route::get('/admin/projets', 'PortfolioController@admin')->name('adportfolio');
Route::get('/admin/projets/edit', 'PortfolioController@edit')->name('adeditportfolio');
Route::post('/admin/projets/edit2', 'PortfolioController@update')->name('admodifportfolio');
Route::get('/admin/projets/delete', 'PortfolioController@destroy')->name('addelportfolio');
Route::get('/admin/projets/add', 'PortfolioController@create')->name('adajoutportfolio');
Route::post('/admin/projets/add2', 'PortfolioController@store')->name('adstoreportfolio');
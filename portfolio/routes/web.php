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
// Route::get('/admin/messages', 'ContactController@delete')->name('addelmessages');
	// Qualifications/Diplomes
Route::get('/admin/qualifications', 'QualifController@admin')->name('adqualification');
// Route::get('/admin/qualifications/edit', 'QualifController@update')->name('adeditqualification');
// Route::get('/admin/qualifications', 'QualifController@delete')->name('addelqualification');
		// Compétences
Route::get('/admin/competences', 'SkillsController@admin')->name('adskills');
Route::get('/admin/competences/edit', 'SkillsController@update')->name('adeditskills');
// Route::get('/admin/competences', 'SkillsController@delete')->name('addelskills');
		// Projets/Portfolio
Route::get('/admin/projets', 'PortfolioController@admin')->name('adportfolio');
// Route::get('/admin/projets/edit', 'PortfolioController@update')->name('adeditportfolio');
// Route::get('/admin/projets', 'PortfolioController@delete')->name('addelportfolio');
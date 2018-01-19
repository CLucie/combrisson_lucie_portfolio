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

app('debugbar')->disable();

// Front
Route::get('/', 'HomePageController@index')->name('accueil');
Route::get('/competences', 'QualifskillController@index')->name('qualifskills');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/mentions-legales', 'HomePageController@mentionslegales')->name('mentionslegales');
// Route::get('/admin', 'AdminConnexionController@index')->name('connexion');


// Back
	// Connexion
// Route::post('/admin/login', 'AdminConnexionController@log')->name('log');

	// Messages
// Route::get('/admin/messages', 'ContactController@admin')->name('admessages');
Route::middleware('auth')->get('/admin/messages', 'ContactController@admin')->name('admessages');
Route::middleware('auth')->get('/admin/messages/delete', 'ContactController@destroy')->name('addelmessages');
Route::post('/contact/send', 'ContactController@send')->name('adsendmessages');

	// Qualifications/Diplomes
Route::middleware('auth')->get('/admin/qualifications', 'QualifController@admin')->name('adqualification');
Route::middleware('auth')->get('/admin/qualifications/edit', 'QualifController@edit')->name('adeditqualification');
Route::middleware('auth')->post('/admin/qualifications/edit2', 'QualifController@update')->name('admodifqualification');
Route::middleware('auth')->get('/admin/qualifications/delete', 'QualifController@destroy')->name('addelqualification');
Route::middleware('auth')->get('/admin/qualifications/add', 'QualifController@create')->name('adajoutqualification');
Route::middleware('auth')->post('/admin/qualifications/add2', 'QualifController@store')->name('adstorequalification');

		// Compétences
Route::middleware('auth')->get('/admin/competences', 'SkillsController@admin')->name('adskills');
Route::middleware('auth')->get('/admin/competences/edit', 'SkillsController@edit')->name('adeditskills');
Route::middleware('auth')->post('/admin/competences/edit2', 'SkillsController@update')->name('admodifskills');
Route::middleware('auth')->get('/admin/competences/delete', 'SkillsController@destroy')->name('addelskills');
Route::middleware('auth')->get('/admin/competences/add', 'SkillsController@create')->name('adajoutskills');
Route::middleware('auth')->post('/admin/competences/add2', 'SkillsController@store')->name('adstoreskills');

		// Projets/Portfolio
Route::middleware('auth')->get('/admin/projets', 'PortfolioController@admin')->name('adportfolio');
Route::middleware('auth')->get('/admin/projets/edit', 'PortfolioController@edit')->name('adeditportfolio');
Route::middleware('auth')->post('/admin/projets/edit2', 'PortfolioController@update')->name('admodifportfolio');
Route::middleware('auth')->get('/admin/projets/delete', 'PortfolioController@destroy')->name('addelportfolio');
Route::middleware('auth')->get('/admin/projets/add', 'PortfolioController@create')->name('adajoutportfolio');
Route::middleware('auth')->post('/admin/projets/add2', 'PortfolioController@store')->name('adstoreportfolio');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

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



Route::get('/home', 'HomeController@index')->name('home');






Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/game', 'LevelsController@game')->name('game');
Route::get('/game2', 'LevelsController@game2')->name('game2');
Route::get('/game3', 'LevelsController@game3')->name('game3');
Route::get('/game4', 'LevelsController@game4')->name('game4');



Route::get('/aboutus', 'FooterlinksController@index')->name('aboutus');
Route::get('/contactus', 'FooterlinksController@index')->name('contactus');



Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('logout', 'Auth\LoginController@logout');



Route::get('profile', 'ProfileController@index')->name('profile');


Route::get('/check', 'AnswersController@check')->name('check');




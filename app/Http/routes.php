<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

<<<<<<< HEAD
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
=======
// Route::get('home', 'HomeController@index');

Route::get('/artikel','ArtikelController@home');

Route::get('/artikel/list/{slug}','ArtikelController@getartikel');

Route::get('/artikel/add','ArtikelController@postartikel');

Route::post('/artikel/save','ArtikelController@saveartikel');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
>>>>>>> 43eed9da37497271efbd0d02474a8aa43f1cec1b

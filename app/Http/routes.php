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

// Route::get('home', 'HomeController@index');

Route::get('/artikel','ArtikelController@home');

Route::get('/artikel/list/{slug}','ArtikelController@getartikel');

Route::get('/artikel/add','ArtikelController@postartikel');

Route::post('/artikel/save','ArtikelController@saveartikel');

Route::get('/artikel/edit/{id}','ArtikelController@editartikel');

Route::post('/artikel/update', 'ArtikelController@update');

Route::get('/artikel/delete/{id}', 'ArtikelController@deleteartikel');

Route::get('/images/{filename}', function($filename){

	$path = storage_path() . '/image/' . $filename;
	$file = File::get($path);
	$type = File::mimetype($path);

	$response = Respone::make($file, 200);
	$response->header("Content-Type", $type);

	return $response;
});



// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

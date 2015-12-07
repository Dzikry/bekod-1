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

Route::get('admin/home', 'AdminController@index');

Route::get('admin/add', 'AdminController@create');

Route::post('admin/save', 'AdminController@store');

Route::get('admin/artikel', 'AdminController@show');

Route::get('admin/edit/{id}', 'AdminController@edit');

Route::post('admin/update', 'AdminController@update');

Route::get('admin', 'AdminController@login');

Route::get('admin/register', 'AdminController@registration');

Route::post('admin/regsave', 'AdminController@regsave');

Route::get('admin/delete/{id}', 'AdminController@destroy');

Route::get('/images/{filename}',
	function ($filename)
{
	$path = storage_path() . '/' .$filename;

	$file = File::get($path);
	$type = File::mimeType($path);

	$response = Response::make($file,200);
=======
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
>>>>>>> 76e22f397eb8e0a58863e5d7e00d325402b45482
	$response->header("Content-Type", $type);

	return $response;
});
<<<<<<< HEAD
=======



>>>>>>> 76e22f397eb8e0a58863e5d7e00d325402b45482
// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

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
	$response->header("Content-Type", $type);

	return $response;
});
// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

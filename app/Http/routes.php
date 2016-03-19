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


Route::get('{client_name}.saleangel.com', [
	'uses' 	=> 'ClientController@client',
	'as' 	=> '/',
]);


Route::post('user/create', [
	'uses' 	=> 'UserController@create',
	'as' 	=> '/',
]);



















Route::get('object', [
	'uses' 	=> 'ObjectController@index',
	'as' 	=> '/',
]);


Route::post('object/create', [
	'uses' 	=> 'ObjectController@create',
	'as' 	=> '/',
]);




























// Route::group(['prefix' => 'lead'], function () {

// 	Route::post('create', [
// 		'uses' => 'ClientController@create',
// 		'as' => 'client.create',
// 	]);
// });




// Route::get('licenses', [
// 	'uses' 	=> 'LicenseController@index',
// 	'as' 	=> '/',
// ]);

// Route::group(['prefix' => 'license'], function () {

// 	Route::post('create', [
// 		'uses' => 'LicenseController@create',
// 		'as' => 'license.create',
// 	]);
// });


















// Route::post('{client_name}.saleangel.com', [
// 	'uses' => 'Auth\AuthController@postRegister',
// 	'as' => 'register',
// ]);


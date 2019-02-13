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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/table', [
	'uses'	=>	'TableController@index',
	'as'	=>	'user.table'
]);
Route::post('/table', [
	'uses'	=>	'TableController@store',
	'as'	=>	'user.post_create_table'
]);
Route::post('/table/update', [
	'uses'	=>	'TableController@update',
	'as'	=>	'user.post_update_table'
]);
Route::post('/table/delete', [
	'uses'	=>	'TableController@destroy',
	'as'	=>	'user.delete_table'
]);
Route::get('/profile', [
	'uses'	=>	'ProfileController@index',
	'as'	=>	'user.view_profile'
]);
Route::get('/profile/edit', [
	'uses'	=>	'ProfileController@edit',
	'as'	=>	'user.edit_profile'
]);
Route::post('/profile/edit', [
	'uses'	=>	'ProfileController@update',
	'as'	=>	'user.post_edit_profile'
]);

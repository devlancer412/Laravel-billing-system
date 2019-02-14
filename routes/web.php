<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('/category', [
	'uses'	=>	'CategoryController@index',
	'as'	=>	'category'
]);
Route::get('/category/create', [
	'uses'	=>	'CategoryController@create',
	'as'	=>	'get_create_category'
]);
Route::post('/category/create', [
	'uses'	=>	'CategoryController@store',
	'as'	=>	'post_create_category'
]);
Route::post('/category/update', [
	'uses'	=>	'CategoryController@update',
	'as'	=>	'post_edit_category'
]);
Route::post('/category/delete', [
	'uses'	=>	'CategoryController@destroy',
	'as'	=>	'delete_category'
]);
Route::get('/table', [
	'uses'	=>	'TableController@index',
	'as'	=>	'table'
]);
Route::post('/table', [
	'uses'	=>	'TableController@store',
	'as'	=>	'post_create_table'
]);
Route::post('/table/update', [
	'uses'	=>	'TableController@update',
	'as'	=>	'post_update_table'
]);
Route::post('/table/delete', [
	'uses'	=>	'TableController@destroy',
	'as'	=>	'delete_table'
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

<?php

Route::get('/users/{id}/snacks', 'UserSnackController@index') -> name('users.snacks');
Route::get('/users/{id}/edit','UserController@edit')->name('users.edit');
Route::patch('/users/{id}', 'UserController@update')->name('users.show');
Route::get('/snacks', 'SnackController@index') ->name('snacks');
Route::post('/snacks', 'SnackController@create');
Route::get('/snacks/new', 'SnackController@new') -> name('snacks.new');
Route::get('/', 'SnackController@index') ->name('home');

Auth::routes();


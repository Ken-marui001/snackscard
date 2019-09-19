<?php

Route::get('/users/{id}/snacks', 'UserSnackController@index') -> name('user.snacks');
Route::get('/users/{id}/edit','UserController@edit')->name('user.edit');
Route::patch('/users/{id}', 'UserController@update')->name('user.show');
Route::get('/snacks', 'SnackController@index') ->name('snacks');
Route::post('/snacks', 'SnackController@create');
Route::get('/snacks/new', 'SnackController@new') -> name('snacks.new');
Route::get('/', 'SnackController@index') ->name('home');

Auth::routes();


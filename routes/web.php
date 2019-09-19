<?php

Route::get('/users/{id}/snacks', 'SnackController@index') -> name('user.snacks');
Route::get('/snacks', 'SnackController@fullAccess') ->name('snacks');
Route::post('/snacks', 'SnackController@create')->name('snacks.create');
Route::get('/snacks/new', 'SnackController@new') -> name('snacks.new');
Route::get('/', 'SnackController@fullAccess') ->name('home');

Auth::routes();


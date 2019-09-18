<?php

Route::get('/snacks', 'SnackController@index') -> name('snacks');
Route::post('/snacks', 'SnackController@create');
Route::get('/snacks/new', 'SnackController@new') -> name('snacks.new');

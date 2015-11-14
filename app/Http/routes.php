<?php


Route::get('/', [
	'as' => 'home',
	'uses'=>'FrontController@index'

	]);





Route::resource('animal','AnimalesController');
Route::resource('raza','RazaController');
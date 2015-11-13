<?php


Route::get('/', [
	'as' => 'home',
	'uses'=>'FrontController@index'

	]);



Route::get('animales', [
	'as' => 'animales',
	'uses'=>'AnimalesController@index'

	]);

Route::resource('animal','AnimalesController');
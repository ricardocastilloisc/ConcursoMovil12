<?php
//la rutas son las mas importantes en laravel 
//esto permitira 
//acceder a los metodo y 
//controladores 
//uno por uno si los declaramos con un alias 
//o simplemente los nombramos 
//aclarar que laravel tiene como por defecto ser 
//un web service
//esta ruta sirve para accerder diresto al index de la pagina 
Route::get('/', [
	'as' => 'home',
	'uses'=>'FrontController@index'

	]);
//accedemos todos los controladores de animal nombrando la clave como animal
Route::resource('animal','AnimalesController');
//accedemos al controlador raza nombranndolo con el mismo nombre
Route::resource('raza','RazaController');
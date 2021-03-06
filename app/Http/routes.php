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

//accedemos al controlador de nacimiento
Route::resource('nacimiento','NacimientoController');

//accedemos al controlador de crecmimiento
Route::resource('crecimiento','CrecimientoController');

//accedemos al controlador de destete
Route::resource('destete','DesteteController');

//accedemos al controlador de carne
Route::resource('carne','CarneController');

//accedemos al controlador de preniar
Route::resource('preniar','PreniarController');


//identificacion de usuario
Route::resource('log','LogController');
//inicio de sesión
Route::get('logout', [
	'as' => 'logout',
	'uses'=>'LogController@logout'
	]);
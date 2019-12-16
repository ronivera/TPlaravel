<?php

Route::get('/registro', 'Registro@devolverVista');
Route::post('/registro', 'Registro@validarDatos');
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contacto','perfil@mostrarContacto');

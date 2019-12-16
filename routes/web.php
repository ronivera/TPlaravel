<?php

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contacto','perfil@mostrarContacto');

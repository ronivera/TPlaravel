<?php

Route::get('/registro', 'Registro@devolverVista');
Route::post('/registro', 'Registro@validarDatos');
Route::get('/', function () {
    return view('index');
});

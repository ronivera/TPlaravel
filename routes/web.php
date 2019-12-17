<?php
Route::get('/registro', 'Registro@devolverVista');
Route::post('/registro', 'Registro@validarDatos');

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::get('contacto','perfil@mostrarContacto');

Route::get('/login', 'Login@devolverVista');
Route::post('/login', 'Login@validarDatos');
=======
Route::get('/contacto','perfil@mostrarContacto');

Route::get('/preguntas',function(){
  return view('preguntas');
});
Route::get('/carrito',function(){
  return view('carrito');
});
>>>>>>> a8705d04d3bb9d65bc1c0d74642e86e1204438a0

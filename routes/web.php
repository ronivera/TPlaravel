<?php

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/', function () {
    return view('index');
});

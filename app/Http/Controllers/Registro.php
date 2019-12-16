<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registro extends Controller
{
  public function devolverVista(){
    return view('/registro');
  }
  public function validarDatos(Request $r){
    dd($r);
    return view('/registro');
  }


}

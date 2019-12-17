<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
  public function devolverVista(){
    return view('/login');
  }
  public function validarDatos(Request $r){
    dd($r);
    return view('/login');
  }


}

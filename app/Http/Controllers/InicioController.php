<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{

    //La sintaxis para la vista es return view('nombre de la vista');
    
    public function __invoke(){
        return view('inicio');
    }
}

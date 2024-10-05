<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{

    //funcion compact('variable') hace el arreglo ['variable=>$variable']
    //el arreglo ['variable=>$variable'] indica que se mandara la variable hacia la vista

    //IMPORTANTE: solucionar como hacer el if de categorias
    public function index($curso=null){
        if($curso){
            return view('cursos.mostrar',compact('curso'));
        }
    
        return view('cursos.index'); 
    }

    public function crear(){
        return view('cursos.crear');
    }
}

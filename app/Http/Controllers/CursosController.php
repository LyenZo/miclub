<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{

    //la variable con un simbolo de "?" significa de que no necesariamente debe llenarse

    
    public function index($curso=null,$categoria=null){

        if($curso && $categoria){
            return "Este es un ejemplo de curso de nombre {$curso} con la categoria {$categoria}";
        }
    
        if($curso){
            return "Esta es un ejemplo de curso de nombre {$curso}";
        }
    
        return "Esta va a ser la pagina donde se mostraran todos los cursos";

        
    }

    public function crear(){
        return "En esta pagina se mostrara el formulario para crear un curso";
    }
}

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//la variable con un simbolo de "?" significa de que no necesariamente debe llenarse
Route::get('/principal',function(){
    return "Esta va a ser la pagina principal";
});
Route::get('/cursos/{curso?}/{categoria?}',function($curso=null,$categoria=null){
    
    if($curso && $categoria){
        return "Este es un ejemplo de curso de nombre {$curso} con la categoria {$categoria}";
    }

    if($curso){
        return "Esta es un ejemplo de curso de nombre {$curso}";
    }

    return "Esta va a ser la pagina donde se mostraran todos los cursos";

});
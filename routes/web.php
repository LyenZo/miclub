<?php

use App\Http\Controllers\CursosController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// la sintaxis de la ruta es: Route::metodo('uri o ruta en el url',[nombre del controlador,'modelo']);
//Si solo en el controlador existe un metodo se puede utilizar la funcion "_invoke" y ya no sera necesario hacer un arreglo mencionando el metodo
//la variable con un simbolo de "?" significa de que no necesariamente debe llenarse
Route::get('/inicio',InicioController::class);

Route::get('/cursos/crear',[CursosController::class,'crear']);
Route::get('/cursos/{curso?}/{categoria?}',[CursosController::class,'index']);
route::get('/integrantes/lista',)

<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\UsuarioController;
use App\Models\Categoria;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/usuario',[UsuarioController::class,'index']);
Route::get('/usuario/create',[UsuarioController::class,'create']);
Route::get('/usuario/{usuario}',[UsuarioController::class,'show']);
Route::post('/usuario',[UsuarioController::class,'store']);
Route::get('/usuario/{usuario}/editar',[UsuarioController::class,'edit']);
Route::put('/usuario/{usuario}',[UsuarioController::class,'update']);
Route::delete('/usuario/{usuario}',[UsuarioController::class,'destroy']);

Route::get('/curso',[CursoController::class,'index']);
Route::get('/curso/create',[CursoController::class,'create']);
Route::get('/curso/{curso}',[CursoController::class,'show']);
Route::post('/curso',[CursoController::class,'store']);
Route::get('/curso/{curso}/editar',[CursoController::class,'edit']);
Route::put('/curso/{curso}',[CursoController::class,'update']);
Route::delete('/curso/{curso}',[CursoController::class,'destroy']);

Route::get('/categoria',[CategoriaController::class,'index']);
Route::get('/categoria/create',[CategoriaController::class,'create']);
Route::get('/categoria/{categoria}',[CategoriaController::class,'show']);
Route::post('/categoria',[CategoriaController::class,'store']);
Route::get('/categoria/{categoria}/editar',[CategoriaController::class,'edit']);
Route::put('/categoria/{categoria}',[CategoriaController::class,'update']);
Route::delete('/categoria/{categoria}',[CategoriaController::class,'destroy']);
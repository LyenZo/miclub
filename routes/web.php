<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio',InicioController::class);

Route::get('/cursos/crear',[CursosController::class,'crear']);
Route::get('/cursos/{curso?}/{categoria?}',[CursosController::class,'index']);
route::get('/integrantes/lista',);

Route::get('/usuarios',[UsuarioController::class,'index']);
Route::get('/usuarios/create',[UsuarioController::class,'create']);
Route::get('/usuarios/{usuario}',[UsuarioController::class,'show']);
Route::post('/usuarios',[UsuarioController::class,'store']);
Route::get('/usuarios/{usuario}/editar',[UsuarioController::class,'edit']);
Route::put('/usuarios/{usuario}',[UsuarioController::class,'update']);
Route::delete('/usuarios/{usuario}',[UsuarioController::class,'destroy']);

Route::get('/login',[AuthController::class,'showlogin']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/home',function (){
    return view ('home');
});
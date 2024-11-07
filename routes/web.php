<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario',[UsuarioController::class,'index']);
Route::get('/usuario/create',[UsuarioController::class,'create']);
Route::get('/usuario/{usuario}',[UsuarioController::class,'show']);
Route::post('/usuario',[UsuarioController::class,'store']);
Route::get('/usuario/{usuario}/editar',[UsuarioController::class,'edit']);
Route::put('/usuario/{usuario}',[UsuarioController::class,'update']);
Route::delete('/usuario/{usuario}',[UsuarioController::class,'destroy']);

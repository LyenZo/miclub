<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $usuario=Usuario::all();
        return view('usuarios.index',['usuarios'=>$usuario]);
    }

    public function create(){
        return view('usuarios.index');
    }
    public function show($usuario){
        return view('usuarios.index');
    }
}

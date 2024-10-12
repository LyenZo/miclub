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
        return view('usuarios.create');
    }
    public function show($usuario){
        $usuario=usuario::find($usuario);
        return view('usuarios.show',compact('usuario'));
    }

    public function store(Request $request){
        $usuario=new Usuario();
        $usuario->name = $request->name;
        $usuario->a_pat = $request->a_pat;
        $usuario->a_mat = $usuario->a_mat;
        $usuario->email = $usuario->email;
        $usuario->password = $usuario->password;
    }
}

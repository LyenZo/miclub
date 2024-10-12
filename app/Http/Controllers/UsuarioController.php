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
        $usuario->a_mat = $request->a_mat;
        $usuario->email = $request->email;
        $usuario->password = $request->password;

        $usuario->save();
        return redirect('/usuarios');
    }
    
    public function edit($usuario){
        $usuario=usuario::find($usuario);
        return view('/usuarios/edit',compact('usuario'));
    }

    public function update(Request $request, $usuario){
        $usuario=usuario::find($usuario);
        $usuario->name = $request->name;
        $usuario->a_pat = $request->a_pat;
        $usuario->a_mat = $request->a_mat;
        $usuario->email = $request->email;
        $usuario->password = $request->password;

        $usuario->save();
        return redirect("/usuarios/{$usuario->id}");
    }
    
    public function destroy($usuario){
        $usuario=usuario::find($usuario);
        $usuario->delete();
        return redirect("/usuarios");
    }
}

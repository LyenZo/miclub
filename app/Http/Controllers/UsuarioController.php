<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UsuarioController extends Controller
{
    public function index(){
        $usuario=usuario::paginate(10);
        return view('usuario.index',['usuarios'=>$usuario]);
    }

    public function create(){
        return view('usuario.create');
    }
    public function show($usuario){
        $usuario=usuario::find($usuario);
        return view('usuario.show',compact('usuario'));
    }

    public function store(Request $request){
        $usuario=new usuario();
        $usuario->nombre = $request->nombre;
        $usuario->a_pat = $request->a_pat;
        $usuario->a_mat = $request->a_mat;
        $usuario->rol = $request->rol;
        $usuario->email = $request->email;
        $usuario->contrasena = $request->contrasena;

        $usuario->save();
        Alert::success('usuario guardado','El producto se creo correctamente');
        return redirect('/usuario');
    }
    
    public function edit($usuario){
        $usuario=usuario::find($usuario);
        return view('/usuario/edit',compact('usuario'));
    }

    public function update(Request $request, $usuario){
        $usuario=usuario::find($usuario);
        $usuario->nombre = $request->nombre;
        $usuario->a_pat = $request->a_pat;
        $usuario->a_mat = $request->a_mat;
        $usuario->rol = $request->rol;
        $usuario->email = $request->email;
        $usuario->contrasena = $request->contrasena;

        $usuario->save();
        Alert::success('usuario editado','Se editó la información del alumno');
        return redirect("/usuario/{$usuario->id}");
    }
    
    public function destroy($usuario){
        $usuario=usuario::find($usuario);
        $usuario->delete();
        Alert::success('usuario eliminado','El usuario se eliminó correctamente');
        return redirect("/usuario");
    }
}

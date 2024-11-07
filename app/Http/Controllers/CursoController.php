<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CursoController extends Controller
{
    public function index(){
        $curso=curso::paginate(10);
        return view('curso.index',['cursos'=>$curso]);
    }

    public function create(){
        return view('curso.create');
    }
    public function show($curso){
        $curso=curso::find($curso);
        return view('curso.show',compact('curso'));
    }

    public function store(Request $request){
        $curso=new curso();
        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->precio = $request->precio;

        $curso->save();
        Alert::success('curso guardado','El cruso se creo correctamente');
        return redirect('/curso');
    }
    
    public function edit($curso){
        $curso=curso::find($curso);
        return view('/curso/edit',compact('curso'));
    }

    public function update(Request $request, $curso){
        $curso=curso::find($curso);
        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->precio = $request->precio;

        $curso->save();
        Alert::success('curso editado','Se editó la información del curso');
        return redirect("/curso/{$curso->id}");
    }
    
    public function destroy($curso){
        $curso=curso::find($curso);
        $curso->delete();
        Alert::success('curso eliminado','El curso se eliminó correctamente');
        return redirect("/curso");
    }
}

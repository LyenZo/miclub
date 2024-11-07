<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriaController extends Controller
{
    public function index(){
        $categoria=categoria::paginate(10);
        return view('categoria.index',['categorias'=>$categoria]);
    }

    public function create(){
        return view('categoria.create');
    }
    public function show($categoria){
        $categoria=categoria::find($categoria);
        return view('categoria.show',compact('categoria'));
    }

    public function store(Request $request){
        $categoria=new categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;

        $categoria->save();
        Alert::success('categoria guardado','La categoria se creo correctamente');
        return redirect('/categoria');
    }
    
    public function edit($categoria){
        $categoria=categoria::find($categoria);
        return view('/categoria/edit',compact('categoria'));
    }

    public function update(Request $request, $categoria){
        $categoria=categoria::find($categoria);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;

        $categoria->save();
        Alert::success('categoria editada','Se editó la información del categoria');
        return redirect("/categoria/{$categoria->id}");
    }
    
    public function destroy($categoria){
        $categoria=categoria::find($categoria);
        $categoria->delete();
        Alert::success('categoria eliminada','La categoria se eliminó correctamente');
        return redirect("/categoria");
    }
}

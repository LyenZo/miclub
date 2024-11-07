@extends('layouts.app')

@section('title','MiClub.mx | Editar categoria')

@section('content')
<h1>Editar categoria</h1>
<form action="/categoria/{{$categoria->id}}" method="post">
    @csrf
    @method('PUT')
    <label>
        Nombre: 
        <input type="text" name="nombre" value="{{$categoria->nombre}}">
    </label>
    <br>
    <label>
        Descripción: 
        <input type="text" name="descripcion" value="{{$categoria->descripcion}}">
    </label>
    <br>
    <button type="submit">
        Actualizar categoria
    </button>
</form>
@endsection
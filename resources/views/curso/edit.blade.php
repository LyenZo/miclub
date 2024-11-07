@extends('layouts.app')

@section('title','MiClub.mx | Editar curso')

@section('content')
<h1>Editar curso</h1>
<form action="/curso/{{$curso->id}}" method="post">
    @csrf
    @method('PUT')
    <label>
        Nombre: 
        <input type="text" name="nombre" value="{{$curso->nombre}}">
    </label>
    <br>
    <label>
        Descripción: 
        <input type="text" name="descripcion" value="{{$curso->descripcion}}">
    </label>
    <br>
        Precio: 
        <input type="text" name="precio" value="{{$curso->precio}}">
    </label>
    <br>
    <button type="submit">
        Actualizar curso
    </button>
</form>
@endsection
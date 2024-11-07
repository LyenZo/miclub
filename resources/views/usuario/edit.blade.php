@extends('layouts.app')

@section('title','MiClub.mx | Editar usuario')

@section('content')
<h1>Editar usuario</h1>
<form action="/usuario/{{$usuario->id}}" method="post">
    @csrf
    @method('PUT')
    <label>
        Nombre: 
        <input type="text" name="nombre" value="{{$usuario->nombre}}">
    </label>
    <br>
    <label>
        Apellido paterno: 
        <input type="text" name="a_pat" value="{{$usuario->a_pat}}">
    </label>
    <br>
        Apellido materno: 
        <input type="text" name="a_mat" value="{{$usuario->a_mat}}">
    </label>
    <br>
        Rol: 
        <input type="text" name="rol" value="{{$usuario->rol}}">
    </label>
    <br>
        Email: 
        <input type="text" name="email" value="{{$usuario->email}}">
    </label>
    <br>
        Contraseña: 
        <input type="text" name="contrasena" value="{{$usuario->contrasena}}">
    </label>
    <br>
    <button type="submit">
        Actualizar usuario
    </button>
</form>
@endsection
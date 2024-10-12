@extends('layouts.app')

@section('title')
    MiClub.mx | Modificar Usuario
@endsection

@section('content')
<h1>Editar un usuario</h1>
    <form action="/usuarios/{{$usuario->id}}" method="post">
        @csrf
        @method('PUT')
        <label>
            Nombre: 
            <input type="text" name="name" value="{{$usuario->name}}">
        </label>
        <br>
        <label>
            Apellido Paterno: 
            <input type="text" name="a_pat" value="{{$usuario->a_pat}}">
        </label>
        <br>
        <label>
            Apellido Materno: 
            <input type="text" name="a_mat"value="{{$usuario->a_mat}}">
        </label>
        <br>
        <label>
            Email: 
            <input type="text" name="email"value="{{$usuario->email}}">
        </label>
        <br>
        <label>
            Contraseña: 
            <input type="text" name="password"value="{{$usuario->password}}">
        </label>
        <br>
        <button type="submit">
            Actualizar Usuario
        </button>
    </form>
@endsection
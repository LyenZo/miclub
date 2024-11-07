@extends('layouts.app')

@section('title','MiClub.mx | Crear usuario')

@section('content')
<h1>Crear usuario</h1>
<form action="/usuario" method="post">
    @csrf
    <label>
        Nombres: 
        <input type="text" name="nombre">
    </label>
    <br>
    <label>
        Apellido paterno: 
        <input type="text" name="a_pat">
    </label>
    <br>
        Apellido materno:
        <input type="text" name="a_mat">
    </label>
    <br>
        Rol:
        <input type="text" name="rol">
    </label>
    <br>
        Email:
        <input type="text" name="email">
    </label>
    <br>
        Contraseña:
        <input type="text" name="contrasena">
    </label>
    <br>
    <button type="submit">
        Crear usuario
    </button>
</form>
@endsection
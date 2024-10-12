@extends('layouts.app')

@section('title')
    MiClub.mx | Crear Usuario
@endsection

@section('content')
<h1>Crea un usuario</h1>
    <form action="/usuarios" method="post">
        @csrf
        <label>
            Nombre: 
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Apellido Paterno: 
            <input type="text" name="a_pat">
        </label>
        <br>
        <label>
            Apellido Materno: 
            <input type="text" name="a_mat">
        </label>
        <br>
        <label>
            Email: 
            <input type="text" name="email">
        </label>
        <br>
        <label>
            Contraseña: 
            <input type="text" name="password">
        </label>
        <br>
        <button type="submit">
            Crear Usuario
        </button>
    </form>
@endsection
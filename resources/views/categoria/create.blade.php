@extends('layouts.app')

@section('title','MiClub.mx | Crear categoria')

@section('content')
<h1>Crear categoria</h1>
<form action="/categoria" method="post">
    @csrf
    <label>
        Nombre: 
        <input type="text" name="nombre">
    </label>
    <br>
    <label>
        Descripción: 
        <input type="text" name="descripcion">
    </label>
    <br>
    <button type="submit">
        Crear categoria
    </button>
</form>
@endsection
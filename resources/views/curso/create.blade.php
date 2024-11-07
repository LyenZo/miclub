@extends('layouts.app')

@section('title','MiClub.mx | Crear curso')

@section('content')
<h1>Crear curso</h1>
<form action="/curso" method="post">
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
        Precio:
        <input type="text" name="precio">
    </label>
    <br>
    <button type="submit">
        Crear curso
    </button>
</form>
@endsection
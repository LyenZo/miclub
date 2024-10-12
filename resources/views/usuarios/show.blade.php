@extends('layouts.app')

@section('title')
    MiClub.mx | usuario#{{$usuario->id}}
@endsection

@section('content')
    <a href="/usuarios">Volver a CRUD</a>
    <br>
    <h1>Información del usuario</h1>
    <h2>Id: {{$usuario->id}}</h2>
    <h2>Nombre:{{$usuario->name}}</h2>
    <h2>Apellidos: {{$usuario->a_pat}} {{$usuario->a_mat}}</h2>
    <h2>Correo: {{$usuario->email}}</h2>
    <h2>Contraseña: {{$usuario->password}}/h2>
@endsection
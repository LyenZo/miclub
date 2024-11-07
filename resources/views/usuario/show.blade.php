@extends('layouts.app')

@section('title')
usuario #{{$usuario->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<a href="/usuario">Volver a CRUD</a>
<br>
<h1>Información del usuario</h1>
<h2>Id: {{$usuario->id}}</h2>
<h2>Nombre:{{$usuario->nombre}}</h2>
<h2>Apellido paterno: {{$usuario->a_pat}}</h2>
<h2>Apellido materno: {{$usuario->a_mat}}</h2>
<h2>Rol: {{$usuario->rol}}</h2>
<h2>Email: {{$usuario->email}}</h2>
<h2>Contraseña: {{$usuario->contrasena}}</h2>
<br>

@endsection
@extends('layouts.app')

@section('title')
Curso #{{$curso->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<a href="/curso">Volver a CRUD</a>
<br>
<h1>Información del curso</h1>
<h2>Id: {{$curso->id}}</h2>
<h2>Nombre:{{$curso->nombre}}</h2>
<h2>Descripción: {{$curso->descripcion}}</h2>
<h2>Precio: {{$curso->precio}}</h2>
<br>

@endsection
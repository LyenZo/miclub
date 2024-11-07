@extends('layouts.app')

@section('title')
Categoria #{{$categoria->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<a href="/categoria">Volver a CRUD</a>
<br>
<h1>Información del categoria</h1>
<h2>Id: {{$categoria->id}}</h2>
<h2>Nombre:{{$categoria->nombre}}</h2>
<h2>Descripción: {{$categoria->descripcion}}</h2>
<br>

@endsection
@extends('layouts.app')

@section('title','MiClub.mx | CRUD USUARIOS')

@section('content')
    <h1>CRUD DE USUARIOS</h1>

    <a href="/usuarios/create">Nuevo usuario</a>
    <ul>
    @foreach ($usuarios as $usuario)
        <li>
            <a href="/usuarios/{{$usuario->id}}">{{$usuario->name}}</a>    
        </li>    
    @endforeach
    </ul>
@endsection
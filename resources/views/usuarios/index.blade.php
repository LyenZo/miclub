@extends('layouts.app')

@section('title','MiClub.mx | CRUD USUARIOS')

@section('content')
    <h1>CRUD DE USUARIOS</h1>

    <ul>
    @foreach ($usuarios as $usuario)
        <li>
            <a href="">{{$usuario->name}}</a>    
        </li>    
    @endforeach
    </ul>
@endsection
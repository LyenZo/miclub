@extends('layouts.app')
@section('title', 'listado de usuarios')
@section('content')
<h1>LISTA DE INTEGRANTES<h1>
    <table class="table table-striped">
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->name}}</td>
            <td>
                <a href="integrantes.update" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
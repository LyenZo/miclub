@extends('layouts.app')

@section('title','MiClub.mx | Curso')

@section('content')
@include('sweetalert::alert')
    <h1>Cursos registrados</h1>

    <a href="/curso/create" class="btn btn-primary">Nuevo curso</a>
    <br>
    <table class="table table-striped">
        <tr>
        <th>ID</th>
        <th>NOMBRE</th> 
        <th>DESCRIPCIÓN</th>
        <th>PRECIO</th>
        <th>MOSTRAR</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
        </tr>

        @foreach ($cursos as $curso)
            
            <tr>
                <td>
                    <h3>{{$curso->id}}</h3> 
                    </td>
                <td>
                <h3>{{$curso->nombre}}</h3> 
                </td>
                <td>
                    <h3>{{$curso->descripcion}}</h3> 
                </td>
                <td>
                    <h3>{{$curso->precio}}</h3>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/curso/{{$curso->id}}">MOSTRAR</a></button>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/curso/{{$curso->id}}/editar">EDITAR</a></button>
                </td>
                <td>
                    <form action="/curso/{{$curso->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn btn-primary">
                                Eliminar curso
                        </button>
                    </form>
                </td>
            </tr>    
        @endforeach
    </table>

{{$cursos->links()}}
@endsection
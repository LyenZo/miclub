@extends('layouts.app')

@section('title','MiClub.mx | Categoria')

@section('content')
@include('sweetalert::alert')
    <h1>Categorias registrados</h1>

    <a href="/categoria/create" class="btn btn-primary">Nueva categoria</a>
    <br>
    <table class="table table-striped">
        <tr>
        <th>ID</th>
        <th>NOMBRE</th> 
        <th>DESCRIPCIÓN</th>
        <th>MOSTRAR</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
        </tr>

        @foreach ($categorias as $categoria)
            
            <tr>
                <td>
                    <h3>{{$categoria->id}}</h3> 
                    </td>
                <td>
                <h3>{{$categoria->nombre}}</h3> 
                </td>
                <td>
                    <h3>{{$categoria->descripcion}}</h3> 
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/categoria/{{$categoria->id}}">MOSTRAR</a></button>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/categoria/{{$categoria->id}}/editar">EDITAR</a></button>
                </td>
                <td>
                    <form action="/categoria/{{$categoria->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn btn-primary">
                                Eliminar categoria
                        </button>
                    </form>
                </td>
            </tr>    
        @endforeach
    </table>

{{$categorias->links()}}
@endsection
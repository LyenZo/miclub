@extends('layouts.app')

@section('title','MiClub.mx | Usuario')

@section('content')
@include('sweetalert::alert')
    <h1>Usuarios registrados</h1>

    <a href="/usuario/create" class="btn btn-primary">Nuevo usuario</a>
    <br>
    <table class="table table-striped">
        <tr>
        <th>ID</th>
        <th>NOMBRE</th> 
        <th>APELLIDO PATERNO</th>
        <th>APELLIDO MATERNO</th>
        <th>ROL</th>
        <th>EMAIL</th>
        <th>MOSTRAR</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
        </tr>

        @foreach ($usuarios as $usuario)
            
            <tr>
                <td>
                    <h3>{{$usuario->id}}</h3> 
                    </td>
                <td>
                <h3>{{$usuario->nombre}}</h3> 
                </td>
                <td>
                    <h3>{{$usuario->a_pat}}</h3> 
                </td>
                <td>
                    <h3>{{$usuario->a_mat}}</h3>
                </td>
                <td>
                    <h3>{{$usuario->rol}}</h3>
                </td>
                <td>
                    <h3>{{$usuario->email}}</h3>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/usuario/{{$usuario->id}}">MOSTRAR</a></button>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/usuario/{{$usuario->id}}/editar">EDITAR</a></button>
                </td>
                <td>
                    <form action="/usuario/{{$usuario->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn btn-primary">
                                Eliminar usuario
                        </button>
                    </form>
                </td>
            </tr>    
        @endforeach
    </table>

{{$usuarios->links()}}
@endsection
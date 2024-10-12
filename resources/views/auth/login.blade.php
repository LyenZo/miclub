@extends('layouts.app')

@section('title')
    MiClub.mx | Login
@endsection

@section('content')
<form action="/login" method="post">
    @csrf
    <label for="">
        Correo Electronico
    <input type="text" name="email" id="id">
    </label>
    <br>
    <label for="">
        Password
    <input type="password" name="password" id="password">
    </label>
    <br>
    <button type="submit">Iniciar Sesión</button>
</form>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @yield('css')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="crud">
        <button type= "button" class="boton btn btn-danger"><a href="/usuario">USUARIO</a></button>
        <button type= "button" class="boton btn btn-danger"><a href="/curso">CURSO</a></button>
        <button type= "button" class="boton btn btn-danger"><a href="/categoria">CATEGORIA</a></button>
    </div>
    @include('sweetalert::alert')
    @yield('content')

</body>
</html>
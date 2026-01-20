<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<nav>
    <a href="/libros">Libros</a> |
    <a href="/prestamos">Nuevo Préstamo</a> |
    <a href="/dashboard">Dashboard</a>
</nav>

<hr>

@yield('content')

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

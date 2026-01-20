@extends('layout')

@section('content')
<h2>Nuevo Préstamo</h2>

<form id="loan-form">
    <label>ID Usuario</label><br>
    <input type="text" id="fkidUsuarios"><br><br>

    <label>ID Libro</label><br>
    <input type="text" id="fkidLibros"><br><br>

    <label>Fecha Préstamo</label><br>
    <input type="date" id="fecha_prestamo"><br><br>

    <label>Fecha Devolución Estimada</label><br>
    <input type="date" id="fecha_devolucion_estimada"><br><br>

    <button type="submit">Crear Préstamo</button>
</form>

<p id="message"></p>
@endsection

<?php

use Illuminate\Support\Facades\Route;

Route::get('/libros', function () {
    return view('libros');
});

Route::get('/prestamos', function () {
    return view('prestamos');
});


Route::get('/', function () {
    return view('welcome');
});

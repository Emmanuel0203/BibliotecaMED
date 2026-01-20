<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class LibroAutor extends Pivot
{
    protected $table = 'Libro_Autor';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'fkidLibros',
        'fkidAutores',
        'orden_autor',
    ];

    protected $casts = [
        'orden_autor' => 'integer',
    ];
}

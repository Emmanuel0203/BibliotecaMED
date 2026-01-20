<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Autor extends Model
{
    use HasUuids;
    
    protected $table = 'Autores';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'nacionalidad',
        'biografia',
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
    ];

    /**
     * Relación: Un autor tiene muchos libros (muchos a muchos)
     */
    public function libros()
    {
        return $this->belongsToMany(Libro::class, 'Libro_Autor', 'fkidAutores', 'fkidLibros')
            ->using(LibroAutor::class)
            ->withPivot('orden_autor');
    }
}

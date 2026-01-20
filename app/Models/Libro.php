<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Libro extends Model
{
    use HasUuids;
    use SoftDeletes;

    protected $table = 'Libros';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'titulo',
        'isbn',
        'ano_publicacion',
        'numero_paginas',
        'descripcion',
        'stock_disponible',
    ];

    protected $casts = [
        'ano_publicacion' => 'date',
        'stock_disponible' => 'integer',
        'numero_paginas' => 'integer',
        'deleted_at' => 'datetime',
    ];

    // Mutator: normalize ISBN (remove non-digit/X characters)
    public function setIsbnAttribute($value)
    {
        $this->attributes['isbn'] = preg_replace('/[^0-9Xx]/', '', (string) $value);
    }

    // Scopes
    public function scopeAvailable($query)
    {
        return $query->where('stock_disponible', '>', 0);
    }

    public function scopePublishedYear($query, $year)
    {
        return $query->whereYear('ano_publicacion', $year);
    }

    public function scopeByAuthor($query, $authorId)
    {
        return $query->whereHas('autores', function ($q) use ($authorId) {
            $q->where('id', $authorId);
        });
    }

    /**
     * Relación: Un libro tiene muchos autores (muchos a muchos)
     */
    public function autores()
    {
        return $this->belongsToMany(Autor::class, 'Libro_Autor', 'fkidLibros', 'fkidAutores')
            ->using(LibroAutor::class)
            ->withPivot('orden_autor');
    }

    /**
     * Relación: Un libro tiene muchos préstamos
     */
    public function prestamos()
    {
        return $this->hasMany(Prestamo::class, 'fkidLibros');
    }
}

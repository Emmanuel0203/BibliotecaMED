<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Prestamo extends Model
{
    use HasUuids;

    protected $table = 'Prestamos';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'fecha_prestamo',
        'fecha_devolucion_estimada',
        'fecha_devolucion_real',
        'estado',
        'fkidLibros',
        'fkidUsuarios',
    ];

    protected $casts = [
        'fecha_prestamo' => 'date',
        'fecha_devolucion_estimada' => 'date',
        'fecha_devolucion_real' => 'date',
        'estado' => 'boolean',
    ];

    /**
     * Relación: Un préstamo pertenece a un usuario
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'fkidUsuarios');
    }

    /**
     * Relación: Un préstamo pertenece a un libro
     */
    public function libro()
    {
        return $this->belongsTo(Libro::class, 'fkidLibros');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Model
{
    use HasUuids;
    use HasApiTokens;

    protected $table = 'Usuarios';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre',
        'email',
        'telefono',
        'fecha_registro',
        'estado',
    ];

    protected $casts = [
        'fecha_registro' => 'date',
        'estado' => 'boolean',
    ];

    // Mutator: ensure email stored lowercase
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    /**
     * Relación: Un usuario tiene muchos préstamos
     */
    public function prestamos()
    {
        return $this->hasMany(Prestamo::class, 'fkidUsuarios');
    }
}

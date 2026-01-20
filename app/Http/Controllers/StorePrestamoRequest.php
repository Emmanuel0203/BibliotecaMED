<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrestamoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fkidLibros' => 'required|uuid|exists:Libros,id',
            'fkidUsuarios' => 'required|uuid|exists:Usuarios,id',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion_estimada' => 'required|date|after_or_equal:fecha_prestamo',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLibroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'sometimes|required|string|max:255',
            'isbn' => 'sometimes|required|string|max:50',
            'ano_publicacion' => 'sometimes|required|date',
            'numero_paginas' => 'nullable|integer',
            'descripcion' => 'sometimes|required|string',
            'stock_disponible' => 'sometimes|required|integer|min:0',
            'autores' => 'nullable|array',
            'autores.*' => 'uuid|exists:Autores,id',
        ];
    }
}

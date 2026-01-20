<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'isbn' => 'required|string|max:50',
            'ano_publicacion' => 'required|date',
            'numero_paginas' => 'nullable|integer',
            'descripcion' => 'required|string',
            'stock_disponible' => 'required|integer|min:0',
            'autores' => 'nullable|array',
            'autores.*' => 'uuid|exists:Autores,id',
        ];
    }
}

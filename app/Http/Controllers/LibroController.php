<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLibroRequest;
use App\Http\Requests\UpdateLibroRequest;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(Request $request)
    {
        $perPage = (int) $request->query('per_page', 10);

        $query = Libro::with('autores');

        if ($title = $request->query('titulo')) {
            $query->where('titulo', 'ILIKE', "%{$title}%");
        }

        if ($author = $request->query('autor')) {
            $query->whereHas('autores', function ($q) use ($author) {
                $q->where('id', $author);
            });
        }

        if ($year = $request->query('ano')) {
            $query->whereYear('ano_publicacion', $year);
        }

        $books = $query->paginate($perPage)->appends($request->query());

        return response()->json($books, 200);
    }

    public function show($id)
    {
        $book = Libro::with('autores')->findOrFail($id);
        return response()->json($book, 200);
    }

    public function store(StoreLibroRequest $request)
    {
        $data = $request->validated();
        $autores = $data['autores'] ?? [];
        unset($data['autores']);

        $book = Libro::create($data);

        if (!empty($autores)) {
            $attach = [];
            foreach ($autores as $i => $aid) {
                $attach[$aid] = ['orden_autor' => $i + 1];
            }
            $book->autores()->attach($attach);
        }

        return response()->json($book->load('autores'), 201);
    }

    public function update(UpdateLibroRequest $request, $id)
    {
        $book = Libro::findOrFail($id);
        $data = $request->validated();
        $autores = $data['autores'] ?? null;
        unset($data['autores']);

        $book->update($data);

        if (is_array($autores)) {
            $attach = [];
            foreach ($autores as $i => $aid) {
                $attach[$aid] = ['orden_autor' => $i + 1];
            }
            $book->autores()->sync($attach);
        }

        return response()->json($book->load('autores'), 200);
    }

    public function destroy($id)
    {
        $book = Libro::findOrFail($id);
        $book->delete();
        return response()->json(null, 204);
    }
}

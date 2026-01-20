<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrestamoRequest;
use App\Models\Prestamo;
use App\Models\Libro;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PrestamoController extends Controller
{
    public function index(Request $request)
    {
        $perPage = (int) $request->query('per_page', 10);
        $query = Prestamo::with(['libro', 'usuario']);
        $prestamos = $query->paginate($perPage)->appends($request->query());
        return response()->json($prestamos, 200);
    }

    public function store(StorePrestamoRequest $request)
    {
        $data = $request->validated();

        $libro = Libro::findOrFail($data['fkidLibros']);
        if ($libro->stock_disponible <= 0) {
            return response()->json(['message' => 'Libro sin stock disponible'], 422);
        }

        $libro->stock_disponible = max(0, $libro->stock_disponible - 1);
        $libro->save();

        $prestamo = Prestamo::create(array_merge($data, ['estado' => false]));

        return response()->json($prestamo->load(['libro','usuario']), 201);
    }

    public function devolver($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        if ($prestamo->estado) {
            return response()->json(['message' => 'Préstamo ya devuelto'], 400);
        }

        $prestamo->fecha_devolucion_real = Carbon::now()->toDateString();
        $prestamo->estado = true;
        $prestamo->save();

        // incrementar stock del libro
        $libro = Libro::find($prestamo->fkidLibros);
        if ($libro) {
            $libro->stock_disponible = $libro->stock_disponible + 1;
            $libro->save();
        }

        return response()->json($prestamo->load(['libro','usuario']), 200);
    }
}

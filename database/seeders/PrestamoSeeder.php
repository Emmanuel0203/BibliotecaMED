<?php

namespace Database\Seeders;

use App\Models\Prestamo;
use App\Models\Usuario;
use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = Usuario::all()->pluck('id')->toArray();
        $libros = Libro::all()->pluck('id')->toArray();

        $prestamos = [
            ['fecha_prestamo' => '2025-12-01', 'fecha_devolucion_estimada' => '2025-12-15', 'fecha_devolucion_real' => '2025-12-14', 'estado' => true, 'usuario_idx' => 0, 'libro_idx' => 0],
            ['fecha_prestamo' => '2025-12-03', 'fecha_devolucion_estimada' => '2025-12-17', 'fecha_devolucion_real' => null, 'estado' => false, 'usuario_idx' => 1, 'libro_idx' => 1],
            ['fecha_prestamo' => '2025-12-05', 'fecha_devolucion_estimada' => '2025-12-19', 'fecha_devolucion_real' => null, 'estado' => false, 'usuario_idx' => 2, 'libro_idx' => 2],
            ['fecha_prestamo' => '2025-11-20', 'fecha_devolucion_estimada' => '2025-12-03', 'fecha_devolucion_real' => null, 'estado' => false, 'usuario_idx' => 3, 'libro_idx' => 3],
            ['fecha_prestamo' => '2025-12-08', 'fecha_devolucion_estimada' => '2025-12-22', 'fecha_devolucion_real' => null, 'estado' => false, 'usuario_idx' => 4, 'libro_idx' => 4],
            ['fecha_prestamo' => '2025-11-25', 'fecha_devolucion_estimada' => '2025-12-08', 'fecha_devolucion_real' => '2025-12-08', 'estado' => true, 'usuario_idx' => 5, 'libro_idx' => 5],
            ['fecha_prestamo' => '2025-12-10', 'fecha_devolucion_estimada' => '2025-12-24', 'fecha_devolucion_real' => null, 'estado' => false, 'usuario_idx' => 6, 'libro_idx' => 6],
            ['fecha_prestamo' => '2025-11-15', 'fecha_devolucion_estimada' => '2025-11-29', 'fecha_devolucion_real' => '2025-11-28', 'estado' => true, 'usuario_idx' => 7, 'libro_idx' => 7],
            ['fecha_prestamo' => '2025-12-12', 'fecha_devolucion_estimada' => '2025-12-26', 'fecha_devolucion_real' => null, 'estado' => false, 'usuario_idx' => 8, 'libro_idx' => 8],
            ['fecha_prestamo' => '2025-11-10', 'fecha_devolucion_estimada' => '2025-11-24', 'fecha_devolucion_real' => '2025-11-24', 'estado' => true, 'usuario_idx' => 9, 'libro_idx' => 9],
        ];

        foreach ($prestamos as $prestamo) {
            $usuarioIdx = $prestamo['usuario_idx'];
            $libroIdx = $prestamo['libro_idx'];
            unset($prestamo['usuario_idx']);
            unset($prestamo['libro_idx']);
            $prestamo['id'] = Str::uuid();
            $prestamo['fkidUsuarios'] = $usuarios[$usuarioIdx] ?? $usuarios[0];
            $prestamo['fkidLibros'] = $libros[$libroIdx] ?? $libros[0];
            Prestamo::create($prestamo);
        }
    }
}


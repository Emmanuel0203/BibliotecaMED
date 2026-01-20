<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [
            ['nombre' => 'Juan', 'email' => 'juan.garcia@email.com', 'telefono' => '+34 612345678', 'fecha_registro' => '2025-01-01', 'estado' => true],
            ['nombre' => 'María', 'email' => 'maria.rodriguez@email.com', 'telefono' => '+34 623456789', 'fecha_registro' => '2025-01-02', 'estado' => true],
            ['nombre' => 'Carlos', 'email' => 'carlos.perez@email.com', 'telefono' => '+34 634567890', 'fecha_registro' => '2025-01-03', 'estado' => true],
            ['nombre' => 'Ana', 'email' => 'ana.martinez@email.com', 'telefono' => '+34 645678901', 'fecha_registro' => '2025-01-04', 'estado' => true],
            ['nombre' => 'Luis', 'email' => 'luis.fernandez@email.com', 'telefono' => '+34 656789012', 'fecha_registro' => '2025-01-05', 'estado' => true],
            ['nombre' => 'Isabel', 'email' => 'isabel.garcia@email.com', 'telefono' => '+34 667890123', 'fecha_registro' => '2025-01-06', 'estado' => true],
            ['nombre' => 'Francisco', 'email' => 'francisco.lopez@email.com', 'telefono' => '+34 678901234', 'fecha_registro' => '2025-01-07', 'estado' => true],
            ['nombre' => 'Antonia', 'email' => 'antonia.iglesias@email.com', 'telefono' => '+34 689012345', 'fecha_registro' => '2025-01-08', 'estado' => true],
            ['nombre' => 'Roberto', 'email' => 'roberto.nunez@email.com', 'telefono' => '+34 690123456', 'fecha_registro' => '2025-01-09', 'estado' => true],
            ['nombre' => 'Marta', 'email' => 'marta.vega@email.com', 'telefono' => '+34 701234567', 'fecha_registro' => '2025-01-10', 'estado' => true],
            ['nombre' => 'Javier', 'email' => 'javier.jimenez@email.com', 'telefono' => '+34 712345678', 'fecha_registro' => '2025-01-11', 'estado' => true],
            ['nombre' => 'Sandra', 'email' => 'sandra.campos@email.com', 'telefono' => '+34 723456789', 'fecha_registro' => '2025-01-12', 'estado' => true],
            ['nombre' => 'Enrique', 'email' => 'enrique.ramirez@email.com', 'telefono' => '+34 734567890', 'fecha_registro' => '2025-01-13', 'estado' => false],
            ['nombre' => 'Lorena', 'email' => 'lorena.dominguez@email.com', 'telefono' => '+34 745678901', 'fecha_registro' => '2025-01-14', 'estado' => true],
            ['nombre' => 'Víctor', 'email' => 'victor.avila@email.com', 'telefono' => '+34 756789012', 'fecha_registro' => '2025-01-15', 'estado' => false],
        ];

        foreach ($usuarios as $usuario) {
            $usuario['id'] = Str::uuid();
            Usuario::create($usuario);
        }
    }
}
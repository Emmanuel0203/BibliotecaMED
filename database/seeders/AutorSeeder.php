<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $autores = [
            [
                'nombre' => 'Gabriel',
                'apellido' => 'García Márquez',
                'biografia' => 'Novelista, ensayista, cuentista y autor de guiones colombiano, famoso por su obra Cien años de soledad.',
                'nacionalidad' => 'Colombia',
                'fecha_nacimiento' => '1927-03-06',
            ],
            [
                'nombre' => 'Jorge Luis',
                'apellido' => 'Borges',
                'biografia' => 'Escritor argentino reconocido por sus cuentos e historias que presentan juegos lingüísticos y metafísicos.',
                'nacionalidad' => 'Argentina',
                'fecha_nacimiento' => '1899-08-24',
            ],
            [
                'nombre' => 'Isabel',
                'apellido' => 'Allende',
                'biografia' => 'Novelista chilena cuyas obras exploran la historia, la familia y la dimensión mágica de la realidad.',
                'nacionalidad' => 'Chile',
                'fecha_nacimiento' => '1942-08-02',
            ],
            [
                'nombre' => 'Paulo',
                'apellido' => 'Coelho',
                'biografia' => 'Escritor brasileño de libros de autoayuda y novelas filosóficas que inspiran a millones.',
                'nacionalidad' => 'Brasil',
                'fecha_nacimiento' => '1947-08-24',
            ],
            [
                'nombre' => 'Miguel',
                'apellido' => 'de Cervantes',
                'biografia' => 'Escritor español famoso por su obra maestra El Quijote, considerada la primera novela moderna.',
                'nacionalidad' => 'España',
                'fecha_nacimiento' => '1547-09-29',
            ],
            [
                'nombre' => 'Julio',
                'apellido' => 'Cortázar',
                'biografia' => 'Escritor argentino de cuentos cortos famosos por su originalidad y experimentación narrativa.',
                'nacionalidad' => 'Argentina',
                'fecha_nacimiento' => '1914-10-26',
            ],
            [
                'nombre' => 'Laura',
                'apellido' => 'Esquivel',
                'biografia' => 'Novelista y guionista mexicana reconocida por su obra Como agua para chocolate.',
                'nacionalidad' => 'Mexicana',
                'fecha_nacimiento' => '1950-12-30',
            ],
            [
                'nombre' => 'Mario',
                'apellido' => 'Vargas Llosa',
                'biografia' => 'Escritor y político peruano, Premio Nobel de Literatura, conocido por sus novelas complejas.',
                'nacionalidad' => 'Perú',
                'fecha_nacimiento' => '1936-03-28',
            ],
            [
                'nombre' => 'Fernando',
                'apellido' => 'Pessoa',
                'biografia' => 'Poeta y escritor portugués que creó varios heterónimos para expresar diferentes perspectivas.',
                'nacionalidad' => 'Portugal',
                'fecha_nacimiento' => '1888-06-13',
            ],
            [
                'nombre' => 'Alejandro',
                'apellido' => 'Dumas',
                'biografia' => 'Novelista francés famoso por sus obras de aventuras y novelas históricas.',
                'nacionalidad' => 'Francia',
                'fecha_nacimiento' => '1802-07-24',
            ],
        ];

        foreach ($autores as $autor) {
            $autor['id'] = Str::uuid();
            Autor::create($autor);
        }
    }
}

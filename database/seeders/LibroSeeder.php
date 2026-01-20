<?php

namespace Database\Seeders;

use App\Models\Libro;
use App\Models\Autor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener IDs de autores
        $autores = Autor::all()->pluck('id')->toArray();

        $libros = [
            ['titulo' => 'Cien años de soledad', 'isbn' => '978-8437604947', 'ano_publicacion' => '1967-01-01', 'numero_paginas' => '417', 'descripcion' => 'Una de las obras maestras de la literatura latinoamericana que narra la historia de la familia Buendía.', 'stock_disponible' => 5, 'autor_idx' => 0],
            ['titulo' => 'El Quijote', 'isbn' => '978-8437604930', 'ano_publicacion' => '1605-01-01', 'numero_paginas' => '1072', 'descripcion' => 'La primera novela moderna que cuenta las aventuras del hidalgo Don Quijote de la Mancha.', 'stock_disponible' => 3, 'autor_idx' => 4],
            ['titulo' => 'Ficciones', 'isbn' => '978-8437604923', 'ano_publicacion' => '1944-01-01', 'numero_paginas' => '256', 'descripcion' => 'Colección de cuentos breves que exploran mundos imaginarios y conceptos metafísicos.', 'stock_disponible' => 4, 'autor_idx' => 1],
            ['titulo' => 'La Casa de los Espíritus', 'isbn' => '978-8437604916', 'ano_publicacion' => '1982-01-01', 'numero_paginas' => '393', 'descripcion' => 'Novela que retrata la historia de una familia chilena a lo largo de cuatro generaciones.', 'stock_disponible' => 6, 'autor_idx' => 2],
            ['titulo' => 'El Alquimista', 'isbn' => '978-8437604909', 'ano_publicacion' => '1988-01-01', 'numero_paginas' => '224', 'descripcion' => 'Novela que sigue el viaje de un pastor en busca de su destino y los tesoros del mundo.', 'stock_disponible' => 8, 'autor_idx' => 3],
            ['titulo' => 'El amor en los tiempos del cólera', 'isbn' => '978-8437604896', 'ano_publicacion' => '1985-01-01', 'numero_paginas' => '368', 'descripcion' => 'Novela que cuenta una historia de amor que perdura a lo largo de cincuenta años.', 'stock_disponible' => 4, 'autor_idx' => 0],
            ['titulo' => 'Rayuela', 'isbn' => '978-8437604889', 'ano_publicacion' => '1963-01-01', 'numero_paginas' => '564', 'descripcion' => 'Novela experimental que se puede leer de múltiples formas, desafiando la narrativa tradicional.', 'stock_disponible' => 2, 'autor_idx' => 5],
            ['titulo' => 'Como agua para chocolate', 'isbn' => '978-8437604872', 'ano_publicacion' => '1989-01-01', 'numero_paginas' => '286', 'descripcion' => 'Novela que mezcla la cocina, el amor y la revolución mexicana en una historia inolvidable.', 'stock_disponible' => 5, 'autor_idx' => 6],
            ['titulo' => 'La ciudad y los perros', 'isbn' => '978-8437604865', 'ano_publicacion' => '1963-01-01', 'numero_paginas' => '507', 'descripcion' => 'Novela que retrata la vida en una institución militar en Perú con crítica social.', 'stock_disponible' => 3, 'autor_idx' => 7],
            ['titulo' => 'Mensajes del Tarot', 'isbn' => '978-8437604858', 'ano_publicacion' => '2000-01-01', 'numero_paginas' => '320', 'descripcion' => 'Tratado sobre la interpretación del tarot y su significado espiritual.', 'stock_disponible' => 2, 'autor_idx' => 8],
            ['titulo' => 'El Conde de Montecristo', 'isbn' => '978-8437604841', 'ano_publicacion' => '1844-01-01', 'numero_paginas' => '928', 'descripcion' => 'Novela de aventuras que cuenta la historia de venganza y redención de un hombre injustamente encarcelado.', 'stock_disponible' => 4, 'autor_idx' => 9],
            ['titulo' => 'Memorias de mis putas tristes', 'isbn' => '978-8437604834', 'ano_publicacion' => '2004-01-01', 'numero_paginas' => '228', 'descripcion' => 'Novela que explora la vejez, la lujuria y la melancolía a través de los ojos de un anciano.', 'stock_disponible' => 3, 'autor_idx' => 0],
            ['titulo' => 'Persona', 'isbn' => '978-8437604827', 'ano_publicacion' => '1914-01-01', 'numero_paginas' => '156', 'descripcion' => 'Colección de poesías que explora la identidad múltiple y la expresión poética.', 'stock_disponible' => 2, 'autor_idx' => 8],
            ['titulo' => 'El Coronel no tiene quien le escriba', 'isbn' => '978-8437604810', 'ano_publicacion' => '1961-01-01', 'numero_paginas' => '96', 'descripcion' => 'Novela corta que retrata la vida de un coronel retirado esperando una pensión que nunca llega.', 'stock_disponible' => 5, 'autor_idx' => 0],
            ['titulo' => 'Eva Luna', 'isbn' => '978-8437604803', 'ano_publicacion' => '1987-01-01', 'numero_paginas' => '355', 'descripcion' => 'Novela que narra la vida de una mujer latinoamericana y su búsqueda de identidad y libertad.', 'stock_disponible' => 4, 'autor_idx' => 2],
            ['titulo' => 'Bestiario', 'isbn' => '978-8437604796', 'ano_publicacion' => '1951-01-01', 'numero_paginas' => '168', 'descripcion' => 'Colección de cuentos que presentan lo fantástico de forma naturalista y perturbadora.', 'stock_disponible' => 3, 'autor_idx' => 5],
            ['titulo' => 'Los Misterios de París', 'isbn' => '978-8437604789', 'ano_publicacion' => '1842-01-01', 'numero_paginas' => '1200', 'descripcion' => 'Novela folletinesca que narra historias de misterio en la París del siglo XIX.', 'stock_disponible' => 2, 'autor_idx' => 9],
            ['titulo' => 'El Laberinto de la Soledad', 'isbn' => '978-8437604772', 'ano_publicacion' => '1950-01-01', 'numero_paginas' => '317', 'descripcion' => 'Ensayo sobre la cultura mexicana y la identidad del pueblo mexicano.', 'stock_disponible' => 2, 'autor_idx' => 6],
            ['titulo' => 'Don Juan Tenorio', 'isbn' => '978-8437604765', 'ano_publicacion' => '1844-01-01', 'numero_paginas' => '280', 'descripcion' => 'Drama en verso que retrata la legendaria historia del seductor Don Juan.', 'stock_disponible' => 3, 'autor_idx' => 4],
            ['titulo' => 'La Tregua', 'isbn' => '978-8437604758', 'ano_publicacion' => '1960-01-01', 'numero_paginas' => '245', 'descripcion' => 'Novela que narra la vida cotidiana de un viudo que encuentra el amor nuevamente.', 'stock_disponible' => 4, 'autor_idx' => 7],
        ];

        foreach ($libros as $libro) {
            $autorIdx = $libro['autor_idx'];
            unset($libro['autor_idx']);
            $libroModel = Libro::create([
                'id' => Str::uuid(),
                'titulo' => $libro['titulo'],
                'isbn' => $libro['isbn'],
                'ano_publicacion' => $libro['ano_publicacion'],
                'numero_paginas' => $libro['numero_paginas'],
                'descripcion' => $libro['descripcion'],
                'stock_disponible' => $libro['stock_disponible'],
            ]);
            // Asignar autor mediante tabla de unión
            $autorId = $autores[$autorIdx] ?? $autores[0];
            $libroModel->autores()->attach($autorId);
        }
    }
}

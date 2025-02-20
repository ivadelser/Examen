<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i<10;$i++){
            $libro = new Libro();
            $libro->titulo = "El libro del Seeder";
            $libro->editorial = "Seeder S.A.";
            $libro->autor = "El hombre del seeder";
            $libro->caratula = "https://edit.org/images/cat/portadas-libros-big-2019101610.jpg";
            $libro->save();
        }
        
    }
}

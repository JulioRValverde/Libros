<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genero;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Genero::create([
            'nombre'=>'Acción'
        ]);

        Genero::create([
            'nombre'=>'Comedia'
        ]);

        Genero::create([
            'nombre'=>'Terror'
        ]);

        Genero::create([
            'nombre'=>'Ciencia Ficción'
        ]);
        
        Genero::create([
            'nombre'=>'Drama'
        ]);

        Genero::create([
            'nombre'=>'Cientifico'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Categoria::create([
            'nombre'=>'Libro',
            'color'=>'success'
        ]);

        Categoria::create([
            'nombre'=>'Reseña',
            'color'=>'info'
        ]);

        Categoria::create([
            'nombre'=>'Articulo',
            'color'=>'warning'
        ]);

        Categoria::create([
            'nombre'=>'Revista',
            'color'=>'primary'
        ]);
    }
}

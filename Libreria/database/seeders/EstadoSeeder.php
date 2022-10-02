<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create([
            'valor'=>'Enviado',
            'color'=>'info'
        ]);
        Estado::create([
            'valor'=>'Revisado',
            'color'=>'warning'
        ]);
        Estado::create([
            'valor'=>'Aprobado',
            'color'=>'success'
        ]);
        Estado::create([
            'valor'=>'Rechazado',
            'color'=>'danger'
        ]);
        Estado::create([
            'valor'=>'En prestamo',
            'color'=>'secondary'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Amizades;
use Illuminate\Database\Seeder;

class AmizadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Amizades::create([
            'id_envio' => 1,
            'id_destino' => 2,
            'estado' => 'Pendente',
        ]);
        Amizades::create([
            'id_envio' => 1,
            'id_destino' => 3,
            'estado' => 'Pendente',
        ]);
        Amizades::create([
            'id_envio' => 2,
            'id_destino' => 3,
            'estado' => 'Pendente',
        ]);
        Amizades::create([
            'id_envio' => 3,
            'id_destino' => 4,
            'estado' => 'Pendente',
        ]);
        Amizades::create([
            'id_envio' => 4,
            'id_destino' => 5,
            'estado' => 'Pendente',
        ]);
        Amizades::create([
            'id_envio' => 1,
            'id_destino' => 4,
            'estado' => 'Aceite',
        ]);
        Amizades::create([
            'id_envio' => 2,
            'id_destino' => 5,
            'estado' => 'Aceite',
        ]);
        Amizades::create([
            'id_envio' => 6,
            'id_destino' => 7,
            'estado' => 'Pendente',
        ]);
    }
}

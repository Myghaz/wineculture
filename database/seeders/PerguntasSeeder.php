<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perguntas;
use Carbon\Carbon;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perguntas::create([
            'pergunta' => '​POSSO FAZER UMA COMPRA NA WINECULTURE E RECEBER NOUTRO PAÍS?',
            'categoria' => 'Shipping',
            'resposta' => "Não, o grupo WineCulture só faz encomendas exclusivamente para Portugal."
        ]);
    }
}

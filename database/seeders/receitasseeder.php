<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\receitas;
class receitasseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        receitas::create([
            'nome' => 'carne',
            'foto' => 'fotom',
            'tipovinho' => 'tinto',
            'descricao' => 'é bom',
        ]);
    }
}


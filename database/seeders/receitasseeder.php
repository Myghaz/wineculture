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
            'id_categoria' => 2,
            'descricao' => 'é bom',
        ]);
        receitas::create([
            'nome' => 'carne',
            'foto' => 'fotom',
            'id_categoria' => 3,
            'descricao' => 'é bom',
        ]);
        receitas::create([
            'nome' => 'carne',
            'foto' => 'fotom',
            'id_categoria' => 1,
            'descricao' => 'é bom',
        ]);
        receitas::create([
            'nome' => 'carne',
            'foto' => 'fotom',
            'id_categoria' => 5,
            'descricao' => 'é bom',
        ]);
        receitas::create([
            'nome' => 'carne',
            'foto' => 'fotom',
            'id_categoria' => 5,
            'descricao' => 'é bom',
        ]);
        receitas::create([
            'nome' => 'carne',
            'foto' => 'fotom',
            'id_categoria' => 3,
            'descricao' => 'é bom',
        ]);
        receitas::create([
            'nome' => 'carne',
            'foto' => 'fotom',
            'id_categoria' => 2,
            'descricao' => 'é bom',
        ]);
    }
}


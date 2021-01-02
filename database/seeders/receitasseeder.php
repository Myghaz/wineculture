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
            'id_user' => 26,
            'descricao' => 'é bom',
        ]);
        receitas::create([
            'nome' => 'carne',
            'foto' => 'fotom',
            'id_categoria' => 3,
            'id_user' => 26,
            'descricao' => 'é bom',
        ]);
        receitas::create([
            'nome' => 'carne',
            'foto' => 'fotom',
            'id_categoria' => 1,
            'id_user' => 15,
            'descricao' => 'é bom',
        ]);
        receitas::create([
            'nome' => 'carne',
            'foto' => 'fotom',
            'id_categoria' => 5,
            'id_user' => 10,
            'descricao' => 'é bom',
        ]);
        receitas::create([
            'nome' => 'carne',
            'foto' => 'fotom',
            'id_categoria' => 5,
            'id_user' => 26,
            'descricao' => 'é bom',
        ]);
        receitas::create([
            'nome' => 'carne',
            'foto' => 'fotom',
            'id_categoria' => 3,
            'id_user' => 29,
            'descricao' => 'é bom',
        ]);
        receitas::create([
            'nome' => 'carne',
            'foto' => 'fotom',
            'id_categoria' => 2,
            'id_user' => 30,
            'descricao' => 'é bom',
        ]);
    }
}


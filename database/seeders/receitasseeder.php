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
            'nome' => 'Frango com vinho Tinto',
            'foto' => 'public/receitas/receitas_1610294619.jpg',
            'id_categoria' => 1,
            'id_user' => 1,
            'descricao' => 'Frango com vinho tinto é a melhor opção para acompanhar com vinho tinto.',
        ]);
        receitas::create([
            'nome' => 'Salmão e ervas',
            'foto' => 'public/receitas/receitas_1610295031.jpg',
            'id_categoria' => 2,
            'id_user' => 1,
            'descricao' => 'Aconselhamos um vinho verde com Salmão.',
        ]);
        receitas::create([
            'nome' => 'Camarão à Paulista',
            'foto' => 'public/receitas/receitas_1610295087.jpg',
            'id_categoria' => 5,
            'id_user' => 1,
            'descricao' => 'Camarão à Paulista é uma boa combinação com um bom espumante',
        ]);
        receitas::create([
            'nome' => 'Risoto de Polvo',
            'foto' => 'public/receitas/receitas_1610295247.jpg',
            'id_categoria' => 4,
            'id_user' => 1,
            'descricao' => 'Risoto de polvo é a melhor combinação com um bom vinho branco.',
        ]);
        receitas::create([
            'nome' => 'Bife de Chouriço',
            'foto' => 'public/receitas/receitas_1610295325.jpg',
            'id_categoria' => 1,
            'id_user' => 1,
            'descricao' => 'Bife de Chouriço é a melhor opção para acompanhar com vinho tinto.',
        ]);
        receitas::create([
            'nome' => 'Castanha Assada',
            'foto' => 'public/receitas/receitas_1610295391.jpg',
            'id_categoria' => 1,
            'id_user' => 1,
            'descricao' => 'A castanha assada não pode faltar com um bom vinho tinto.',
        ]);
    }
}


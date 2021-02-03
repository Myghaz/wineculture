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
            'foto' => 'receitas_1610294619.jpg',
            'id_categoria' => 1,
            'id_user' => 1,
            'descricao' => 'Frango com vinho tinto é a melhor opção para acompanhar com vinho tinto.',
            'preparo' => 'INGREDIENTES:
            •	4 sobrecoxas de frango pequenas sem pele
            •	2 dentes de alho triturados
            •	1 cebola média picada
            •	1 colher (chá) de orégano
            •	1 colher (sopa) de salsinha verde picada
            •	Pimenta do reino e sal a gosto
            •	1 colher (sopa) de manteiga
            •	1 colher (sopa) de óleo de canola ou girassol
            •	2 xícaras (chá) de vinho tinto
            MODO DE PREPARO:
            1- Na véspera, tempere as sobrecoxas com sal, orégano, pimenta do reino, salsinha, alho, cebola e vinho tinto.
            2- Misture muito bem todos os ingredientes e deixe marinando de um dia para o outro, ou no mínimo 8 horas.
            3- Em uma panela de fundo largo, coloque a manteiga com o óleo.
            4- Escorra as sobrecoxas reservando o líquido da marinada, e doure cada peça dos dois lados.
            5- Na sequência adicione o líquido da marinada, abaixe o fogo, tampe a panela e deixe cozinhar por aproximadamente 40 minutos virando na metade do tempo.
            6- Sirva a seguir e decore com salsinha picada.
            '
        ]);
        receitas::create([
            'nome' => 'Salmão e ervas',
            'foto' => 'receitas_1610295031.jpg',
            'id_categoria' => 2,
            'id_user' => 1,
            'descricao' => 'Aconselhamos um vinho verde com Salmão.',
        ]);
        receitas::create([
            'nome' => 'Camarão à Paulista',
            'foto' => 'receitas_1610295087.jpg',
            'id_categoria' => 5,
            'id_user' => 1,
            'descricao' => 'Camarão à Paulista é uma boa combinação com um bom espumante',
        ]);
        receitas::create([
            'nome' => 'Risoto de Polvo',
            'foto' => 'receitas_1610295247.jpg',
            'id_categoria' => 4,
            'id_user' => 1,
            'descricao' => 'Risoto de polvo é a melhor combinação com um bom vinho branco.',
        ]);
        receitas::create([
            'nome' => 'Bife de Chouriço',
            'foto' => 'receitas_1610295325.jpg',
            'id_categoria' => 1,
            'id_user' => 1,
            'descricao' => 'Bife de Chouriço é a melhor opção para acompanhar com vinho tinto.',
        ]);
        receitas::create([
            'nome' => 'Castanha Assada',
            'foto' => 'receitas_1610295391.jpg',
            'id_categoria' => 1,
            'id_user' => 1,
            'descricao' => 'A castanha assada não pode faltar com um bom vinho tinto.',
        ]);
        receitas::create([
            'nome' => 'Sushi',
            'foto' => 'receitas_1610396357.jpg',
            'id_categoria' => 3,
            'id_user' => 1,
            'descricao' => 'Sushi é a melhor combinação para o Rosé.',
        ]);
    }
}


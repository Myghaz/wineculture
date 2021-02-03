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
            'preparo' => '<p><strong>INGREDIENTES:</strong></p>

            <ul>
                <li>4 sobrecoxas de frango pequenas sem pele</li>
                <li>2 dentes de alho triturados</li>
                <li>1 cebola m&eacute;dia picada</li>
                <li>1 colher (ch&aacute;) de or&eacute;gano</li>
                <li>1 colher (sopa) de salsinha verde picada</li>
                <li>Pimenta do reino e sal a gosto</li>
                <li>1 colher (sopa) de manteiga</li>
                <li>1 colher (sopa) de &oacute;leo de canola ou girassol</li>
                <li>2 x&iacute;caras (ch&aacute;) de vinho tinto</li>
            </ul>

            <p><strong>MODO DE PREPARO:</strong></p>

            <p>1-&nbsp;Na v&eacute;spera, tempere as sobrecoxas com sal, or&eacute;gano, pimenta do reino, salsinha, alho, cebola e vinho tinto.</p>

            <p>2-&nbsp;Misture muito bem todos os ingredientes e deixe marinando de um dia para o outro, ou no m&iacute;nimo 8 horas.</p>

            <p>3-&nbsp;Em uma panela de fundo largo, coloque a manteiga com o &oacute;leo.</p>

            <p>4-&nbsp;Escorra as sobrecoxas reservando o l&iacute;quido da marinada, e doure cada pe&ccedil;a dos dois lados.</p>

            <p>5-&nbsp;Na sequ&ecirc;ncia adicione o l&iacute;quido da marinada, abaixe o fogo, tampe a panela e deixe cozinhar por aproximadamente 40 minutos virando na metade do tempo.</p>

            <p>6-&nbsp;Sirva a seguir e decore com salsinha picada.</p>'
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


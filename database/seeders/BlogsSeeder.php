<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Carbon\Carbon;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'titulo' => 'PORTUGAL GANHA QUOTA EM VOLUME E VALOR',
            'data' => Carbon::parse('2020-11-05'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'Números relativos às exportações de vinho português.',
            'descricao' => 'Texto 1',
            'img' => 'garrafas-garrafeira-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'BAGOS D OURO E FIRMO CRIAM CADERNO SOLIDÁRIO',
            'data' => Carbon::parse('2020-11-05'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Politica',
            'preview' => 'Este Natal, a Bagos D’Ouro está a trabalhar no combate ao abandono escolar e à exclusão social. A Firmo Portugal criou uma edição',
            'descricao' => 'Texto 1',
            'img' => 'caderno-firmo-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'CHEFS DA NOVA GERAÇÃO PROMOVEM CONSERVAS PORTUGUESAS',
            'data' => Carbon::parse('2020-11-04'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Nacional',
            'preview' => '“Vamos conservar o que é nosso.” É este o claim da campanha criada pela Associação Nacional de Industriais de Conservas de Peixe',
            'descricao' => 'Texto 1',
            'img' => 'Vamos_conservar_o_que_e_nosso_(1)_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'DIA MUNDIAL DO ENOTURISMO',
            'data' => Carbon::parse('2020-11-04'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'No próximo dia 8 de novembro comemora-se o Dia Mundial do Enoturismo.',
            'descricao' => 'Texto 1',
            'img' => 'Dia_Mundial_Enoturismo_Soalheiro_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'FRANÇA PROÍBE VENDA DE PRODUTOS NÃO ESSENCIAIS',
            'data' => Carbon::parse('2020-11-04'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'Medida aplica-se às grandes superfícies e começou no passado dia 3.',
            'descricao' => 'Texto 1',
            'img' => 'IMG_2192.jpg',
        ]);
        Blog::create([
            'titulo' => 'QUINTA DO GRADIL APRESENTA REBRANDING',
            'data' => Carbon::parse('2020-11-04'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'A Quinta do Gradil apresentou mais uma novidade: nasceu a nova identidade deste produtor da região de Lisboa.',
            'descricao' => 'Texto 1',
            'img' => 'gradil-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'NOVO MERCURE PORTO CENTRO ALIADOS',
            'data' => Carbon::parse('2020-11-03'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'Abre as portas o Mercure Porto Centro Aliados, a nova proposta de Mercure Hotels, pertencente ao Grupo Accor.',
            'descricao' => 'Texto 1',
            'img' => 'mercure-aliados-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'VINHOS DO CONTINENTE PREMIADOS',
            'data' => Carbon::parse('2020-11-03'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'Foram 57 os vinhos exclusivos do Continente que, este ano, conquistaram mais de 100 medalhas em prestigiados concursos.',
            'descricao' => 'Texto 1',
            'img' => 'VinhosPremiados_CNT_FB_03_artigo.jpg',
        ]);
    }
}

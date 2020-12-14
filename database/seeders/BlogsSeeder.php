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
            'p1' => 'Texto 1',
            'p2' => 'Texto 2',
            'p3' => 'Texto 3',
            'p4' => 'Texto 4',
            'p5' => 'Texto 5',
            'p6' => 'Texto 6',
            'p7' => 'Texto 7',
            'p8' => 'Texto 8',
            'p9' => 'Texto 9',
            'p10' => 'Texto 10',
            'p11' => 'Texto 11',
            'img' => 'garrafas-garrafeira-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'BAGOS D OURO E FIRMO CRIAM CADERNO SOLIDÁRIO',
            'data' => Carbon::parse('2020-11-05'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Politica',
            'preview' => 'Este Natal, a Bagos D’Ouro está a trabalhar no combate ao abandono escolar e à exclusão social. A Firmo Portugal criou uma edição',
            'p1' => 'Texto 1',
            'p2' => 'Texto 2',
            'p3' => 'Texto 3',
            'p4' => 'Texto 4',
            'p5' => 'Texto 5',
            'p6' => 'Texto 6',
            'p7' => 'Texto 7',
            'p8' => 'Texto 8',
            'p9' => 'Texto 9',
            'p10' => 'Texto 10',
            'p11' => 'Texto 11',
            'img' => 'caderno-firmo-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'CHEFS DA NOVA GERAÇÃO PROMOVEM CONSERVAS PORTUGUESAS',
            'data' => Carbon::parse('2020-11-04'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Nacional',
            'preview' => '“Vamos conservar o que é nosso.” É este o claim da campanha criada pela Associação Nacional de Industriais de Conservas de Peixe',
            'p1' => 'Texto 1',
            'p2' => 'Texto 2',
            'p3' => 'Texto 3',
            'p4' => 'Texto 4',
            'p5' => 'Texto 5',
            'p6' => 'Texto 6',
            'p7' => 'Texto 7',
            'p8' => 'Texto 8',
            'p9' => 'Texto 9',
            'p10' => 'Texto 10',
            'p11' => 'Texto 11',
            'img' => 'Vamos_conservar_o_que_e_nosso_(1)_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'DIA MUNDIAL DO ENOTURISMO',
            'data' => Carbon::parse('2020-11-04'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'No próximo dia 8 de novembro comemora-se o Dia Mundial do Enoturismo.',
            'p1' => 'Texto 1',
            'p2' => 'Texto 2',
            'p3' => 'Texto 3',
            'p4' => 'Texto 4',
            'p5' => 'Texto 5',
            'p6' => 'Texto 6',
            'p7' => 'Texto 7',
            'p8' => 'Texto 8',
            'p9' => 'Texto 9',
            'p10' => 'Texto 10',
            'p11' => 'Texto 11',
            'img' => 'Dia_Mundial_Enoturismo_Soalheiro_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'FRANÇA PROÍBE VENDA DE PRODUTOS NÃO ESSENCIAIS',
            'data' => Carbon::parse('2020-11-04'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'Medida aplica-se às grandes superfícies e começou no passado dia 3.',
            'p1' => 'Texto 1',
            'p2' => 'Texto 2',
            'p3' => 'Texto 3',
            'p4' => 'Texto 4',
            'p5' => 'Texto 5',
            'p6' => 'Texto 6',
            'p7' => 'Texto 7',
            'p8' => 'Texto 8',
            'p9' => 'Texto 9',
            'p10' => 'Texto 10',
            'p11' => 'Texto 11',
            'img' => 'IMG_2192.jpg',
        ]);
        Blog::create([
            'titulo' => 'QUINTA DO GRADIL APRESENTA REBRANDING',
            'data' => Carbon::parse('2020-11-04'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'A Quinta do Gradil apresentou mais uma novidade: nasceu a nova identidade deste produtor da região de Lisboa.',
            'p1' => 'Texto 1',
            'p2' => 'Texto 2',
            'p3' => 'Texto 3',
            'p4' => 'Texto 4',
            'p5' => 'Texto 5',
            'p6' => 'Texto 6',
            'p7' => 'Texto 7',
            'p8' => 'Texto 8',
            'p9' => 'Texto 9',
            'p10' => 'Texto 10',
            'p11' => 'Texto 11',
            'img' => 'gradil-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'NOVO MERCURE PORTO CENTRO ALIADOS',
            'data' => Carbon::parse('2020-11-03'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'Abre as portas o Mercure Porto Centro Aliados, a nova proposta de Mercure Hotels, pertencente ao Grupo Accor.',
            'p1' => 'Texto 1',
            'p2' => 'Texto 2',
            'p3' => 'Texto 3',
            'p4' => 'Texto 4',
            'p5' => 'Texto 5',
            'p6' => 'Texto 6',
            'p7' => 'Texto 7',
            'p8' => 'Texto 8',
            'p9' => 'Texto 9',
            'p10' => 'Texto 10',
            'p11' => 'Texto 11',
            'img' => 'mercure-aliados-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'VINHOS DO CONTINENTE PREMIADOS',
            'data' => Carbon::parse('2020-11-03'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'Foram 57 os vinhos exclusivos do Continente que, este ano, conquistaram mais de 100 medalhas em prestigiados concursos.',
            'p1' => 'Texto 1',
            'p2' => 'Texto 2',
            'p3' => 'Texto 3',
            'p4' => 'Texto 4',
            'p5' => 'Texto 5',
            'p6' => 'Texto 6',
            'p7' => 'Texto 7',
            'p8' => 'Texto 8',
            'p9' => 'Texto 9',
            'p10' => 'Texto 10',
            'p11' => 'Texto 11',
            'img' => 'VinhosPremiados_CNT_FB_03_artigo.jpg',
        ]);
    }
}

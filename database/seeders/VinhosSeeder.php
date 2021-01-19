<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vinhos;

class VinhosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vinhos::create([
            'nome' => '2017 João Portugal Ramos Vinha do Jeremias Syrah tinto',
            'id_categoria' => 1,
            'id_produtor' => 4,
            'img' => '1.jpg',
            'descricao'  => "Criar um vinho é uma arte que em Portugal fomos aperfeiçoando ao longo de séculos, hoje reforçada por um maior conhecimento e melhores meios. Raramente um bom vinho é fruto do acaso. A experiência adquirida ao longo do tempo por João Portugal Ramos, leva-o a acreditar que um vinho reflete a natureza da terra que o viu nascer e é a expressão de quem o produz. O saber, a experiência e a tecnologia permitem aperfeiçoar com rigor os diversos fatores que influenciam a personalidade de um vinho. “Fazer brilhar todo o potencial natural do nosso país nesta área, criando e reinventando cada vinho, é para mim uma paixão”.",
            'preco' => 26.90,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '1984 Mouchão tinto',
            'id_categoria' => 1,
            'id_produtor' => 4,
            'img' => '2.jpg',
            'descricao'  => "No início do século XIX, Thomas Reynolds migrou para a região do Alentejo tendo como objetivo o negócio da cortiça. Três gerações depois, o seu neto John Reynolds adquiriu a Herdade do Mouchão para a produção de vinhos. Plantaram-se várias vinhas, em 1901 construiu-se uma adega tradicional e em 1929, instalou-se a destilaria, a mesma que ainda hoje é utilizada para produzir a aguardente do Mouchão. Hoje a Herdade do Mouchão continua a ser gerida e trabalhada pelos descendentes da família original. Todo o processo de vinificação se mantém praticamente intocável, preservando a tradicional vindima à mão e a fermentação das uvas em lagares de pedra com pisa a pés. Num mundo enológico em constante evolução, a Herdade do Mouchão mantém-se como sempre foi, uma tradição de família.",
            'preco' => 139.50,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2003 Mouchão Colheitas Antigas tinto 1,5L',
            'id_categoria' => 1,
            'id_produtor' => 19,
            'img' => '3.jpg',
            'descricao'  => "No início do século XIX, Thomas Reynolds migrou para a região do Alentejo tendo como objetivo o negócio da cortiça. Três gerações depois, o seu neto John Reynolds adquiriu a Herdade do Mouchão para a produção de vinhos. Plantaram-se várias vinhas, em 1901 construiu-se uma adega tradicional e em 1929, instalou-se a destilaria, a mesma que ainda hoje é utilizada para produzir a aguardente do Mouchão. Hoje a Herdade do Mouchão continua a ser gerida e trabalhada pelos descendentes da família original. Todo o processo de vinificação se mantém praticamente intocável, preservando a tradicional vindima à mão e a fermentação das uvas em lagares de pedra com pisa a pés. Num mundo enológico em constante evolução, a Herdade do Mouchão mantém-se como sempre foi, uma tradição de família.",
            'preco' => 199.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2019 Herdade dos Grous Moon Harvest tinto',
            'id_categoria' => 1,
            'id_produtor' => 18,
            'img' => '4.jpg',
            'descricao'  => "Criada de raiz na paisagem Alentejana encontra-se a Herdade dos Grous. Em Albernoa, a 17 quilómetros de Beja, a Herdade dos Grous reúne a produção de vinho, agro-pecuária, turismo rural e enoturismo. O Alentejo, a maior província em Portugal, guarda consigo o charme tradicional português e a herança Moura, evidente em toda a sua arquitetura. O clima Continental de influências mediterrânicas oferece condições ideias para a produção de grandes vinhos e de produtos regionais de altíssima qualidade.",
            'preco' => 26.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Quinta da Alorna Touriga Nacional rosé',//done
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '1.jpg',
            'descricao'  => "A Quinta da Alorna nasceu em 1723, mais tarde D. Pedro de Almeida, o I Marquês de Alorna, após ter liderado a conquista da praça-forte de Alorna na Índia, conferiu à propriedade o nome que hoje tem. Na margem do Rio Tejo e com a entrada marcada por uma árvore magnífica e rara no mundo, conhecida por bela sombra, a Quinta da Alorna destaca-se não só pela qualidade dos vinhos que produz como também pelos seus espaços naturais. Os vinhos da Quinta da Alorna são feitos a partir de uma seleção das melhores castas e produzidos com recurso às novas tecnologias de vinificação.",
            'preco' => 5.60,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Tejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Lavradores de Feitoria rosé	',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '4.jpg',
            'descricao'  => "Todos os vinhos da Lavradores de Feitoria – desde o grande consumo até à grande guarda – são equilibrados, elegantes e orientados para a boa gastronomia, mas sempre com um cunho do carácter do Douro. Deve esperar-se, e exigir-se, a personalidade forte de cada marca enquanto expressão de terroir, de conceito, ou mesmo de fantasia.",
            'preco' => 3.95,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Douro",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Herdade dos Grous Moon Harvest tinto',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '4.jpg',
            'descricao'  => "Criada de raiz na paisagem Alentejana encontra-se a Herdade dos Grous. Em Albernoa, a 17 quilómetros de Beja, a Herdade dos Grous reúne a produção de vinho, agro-pecuária, turismo rural e enoturismo. O Alentejo, a maior província em Portugal, guarda consigo o charme tradicional português e a herança Moura, evidente em toda a sua arquitetura. O clima Continental de influências mediterrânicas oferece condições ideias para a produção de grandes vinhos e de produtos regionais de altíssima qualidade.",
            'preco' => 26.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Herdade dos Grous Moon Harvest tinto',
            'id_categoria' => 1,
            'id_produtor' => 18,
            'img' => '4.jpg',
            'descricao'  => "Criada de raiz na paisagem Alentejana encontra-se a Herdade dos Grous. Em Albernoa, a 17 quilómetros de Beja, a Herdade dos Grous reúne a produção de vinho, agro-pecuária, turismo rural e enoturismo. O Alentejo, a maior província em Portugal, guarda consigo o charme tradicional português e a herança Moura, evidente em toda a sua arquitetura. O clima Continental de influências mediterrânicas oferece condições ideias para a produção de grandes vinhos e de produtos regionais de altíssima qualidade.",
            'preco' => 26.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Herdade dos Grous Moon Harvest tinto',
            'id_categoria' => 1,
            'id_produtor' => 18,
            'img' => '4.jpg',
            'descricao'  => "Criada de raiz na paisagem Alentejana encontra-se a Herdade dos Grous. Em Albernoa, a 17 quilómetros de Beja, a Herdade dos Grous reúne a produção de vinho, agro-pecuária, turismo rural e enoturismo. O Alentejo, a maior província em Portugal, guarda consigo o charme tradicional português e a herança Moura, evidente em toda a sua arquitetura. O clima Continental de influências mediterrânicas oferece condições ideias para a produção de grandes vinhos e de produtos regionais de altíssima qualidade.",
            'preco' => 26.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Herdade dos Grous Moon Harvest tinto',
            'id_categoria' => 1,
            'id_produtor' => 18,
            'img' => '4.jpg',
            'descricao'  => "Criada de raiz na paisagem Alentejana encontra-se a Herdade dos Grous. Em Albernoa, a 17 quilómetros de Beja, a Herdade dos Grous reúne a produção de vinho, agro-pecuária, turismo rural e enoturismo. O Alentejo, a maior província em Portugal, guarda consigo o charme tradicional português e a herança Moura, evidente em toda a sua arquitetura. O clima Continental de influências mediterrânicas oferece condições ideias para a produção de grandes vinhos e de produtos regionais de altíssima qualidade.",
            'preco' => 26.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
    }
}

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
            'nome' => '2019 Quinta da Alorna Touriga Nacional rosé',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '9.jpg',
            'descricao'  => "A Quinta da Alorna nasceu em 1723, mais tarde D. Pedro de Almeida, o I Marquês de Alorna, após ter liderado a conquista da praça-forte de Alorna na Índia, conferiu à propriedade o nome que hoje tem. Na margem do Rio Tejo e com a entrada marcada por uma árvore magnífica e rara no mundo, conhecida por bela sombra, a Quinta da Alorna destaca-se não só pela qualidade dos vinhos que produz como também pelos seus espaços naturais. Os vinhos da Quinta da Alorna são feitos a partir de uma seleção das melhores castas e produzidos com recurso às novas tecnologias de vinificação.",
            'preco' => 5.60,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Tejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Lavradores de Feitoria rosé',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '10.jpg',
            'descricao'  => "Todos os vinhos da Lavradores de Feitoria – desde o grande consumo até à grande guarda – são equilibrados, elegantes e orientados para a boa gastronomia, mas sempre com um cunho do carácter do Douro. Deve esperar-se, e exigir-se, a personalidade forte de cada marca enquanto expressão de terroir, de conceito, ou mesmo de fantasia.",
            'preco' => 3.95,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Douro",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Quinta da Lagoalva rosé',
            'id_categoria' => 3,
            'id_produtor' => 24,
            'img' => '5.jpg',
            'descricao'  => "A Quinta da Lagoalva de Cima estende-se pela margem sul do Tejo, a cerca de 2 km da Vila de Alpiarça e a 11 Km de Santarém. Em 1834, a Quinta da Lagoalva é comprada por Henrique Teixeira de Sampayo, 1º conde da Póvoa. Em 1841-42 todos os bens passam para D. Maria Luisa Noronha de Sampaio, que casa em 1846 com D. Domingos António Maria Pedro de Souza e Holstein, 2º Duque de Palmela, revertendo a partir dessa época os bens para a Casa Palmela. Sucessivamente sempre em poder dos seus descendentes, as terras são hoje pertença da Sociedade Agrícola Quinta da Lagoalva de Cima SA.",
            'preco' => 5.90,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Tejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Carlos Reynolds rosé',
            'id_categoria' => 3,
            'id_produtor' => 24,
            'img' => '6.jpg',
            'descricao'  => "Thomas Reynolds, marinheiro e comerciante inglês, chega a Portugal em 1820, atraído pelo negócio do vinho e tem dois filhos, Thomas e Robert. É a partir do Porto que abastece o seu armazém comercial em Londres com produtos ibéricos. Em 1838, introduzem-se na indústria corticeira em Espanha, expandindo-se até Portugal acabando por se fixar em Estremoz. Após a família ter partido para a Nova Zelândia Robert fica em Estremoz à frente dos negócios, que rapidamente desenvolve com a aquisição de novas terras e a produção de vinhos de qualidade, atividade esta que exercia com particular empenho e paixão. O Alentejo converte-se no berço definitivo dos Reynolds de Portugal e de Robert, o patriarca da família. Desse berço procedem o filho primogénito de Robert, Robert Rafael e, deste, Carlos. Carlos tem uma primeira filha chamada Gloria, Gloria Reynolds. Em sua honra, e de todos os seus antepassados que viveram no Alentejo, Julian, filho de Gloria, produz um vinho de qualidade, que leva o nome da sua mãe – Gloria Reynolds.",
            'preco' => 8.50,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Adega do Sôr rosé',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '7.jpg',
            'descricao'  => "Touriga Nacional. Revela aromas de intensidade média, a rebuçado de framboesa, morango, cereja e pêssego, com notas minerais e toques de floral. Boa acidez com sabor fresco a frutos vermelhos, com um perfil frutado e fresco.",
            'preco' => 5.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => 'Leve Penafirme rosé',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '8.jpg',
            'descricao'  => "A Encosta da Vila Sociedade Agrícola Lda, está situada na região vinícola de Lisboa. Sob a influência do oceano Atlântico, a diversidade da sua paisagem reúne as condições ideais para a produção de uvas de excelente qualidade. Utilizando as melhores castas portuguesas como Arinto (brancos), Tinta Roriz e Touriga Nacional (tintos) combinadas com a internacional Syrah, produzem vinhos encorpados e de excepcional qualidade aromática.",
            'preco' => 1.90,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Lisboa",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2019 Barranco Longo rosé',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '11.jpg',
            'descricao'  => "A Quinta do Barranco Longo localizada em pleno Barrocal Algarvio, é um projecto de Rui Virgínia que idealizou fazer um vinho personalizado, arrojado e de qualidade e elevar o Algarve a zona de vinhos de eleição. Rodeou-se de uma equipa jovem e qualificada, fez da sua quinta uma vinha modelo e, na sua adega, aliou o tradicional ao tecnológico, dando expressão à sua estratégia de valorização dos pormenores e de aperfeiçoamento constante.",
            'preco' => 7.80,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Algarve",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => 'secret wine',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '4.jpg',
            'descricao'  => "",
            'preco' => 26.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => 'secret wine',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '4.jpg',
            'descricao'  => "",
            'preco' => 26.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => 'secret wine',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '4.jpg',
            'descricao'  => "",
            'preco' => 26.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => 'secret wine',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '4.jpg',
            'descricao'  => "",
            'preco' => 26.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => 'secret wine',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '4.jpg',
            'descricao'  => "",
            'preco' => 26.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => 'secret wine',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '4.jpg',
            'descricao'  => "",
            'preco' => 26.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => 'secret wine',
            'id_categoria' => 3,
            'id_produtor' => 18,
            'img' => '4.jpg',
            'descricao'  => "",
            'preco' => 26.00,
            'stock'  => 5,
            'pais'  => "Portugal",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
    }
}

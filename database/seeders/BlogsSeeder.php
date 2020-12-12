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
            'descricao' => 'As exportações portuguesas de vinhos cresceram 2,6% em volume no período internanual que vai de junho de 2019 a junho de 2020 (12 meses), com 296,3 milhões de litros vendidos. Os números do Observatorio Español del Mercado del Vino (OeMv), que resultam da análise estatística de dados das alfândegas de mais de 80 países, estimam que, nesse período, Portugal ganhou quota em valor, como nono vendedor mundial, com cerca de 820 milhões de euros (+2,3%), e como oitavo fornecedor em volume (+7,4 milhões de litros vendidos), sendo o único país dos 11 maiores exportadores, juntamente com Itália, a aumentar as vendas. O preço médio por litro dos vinhos portugueses exportados nesse período manteve-se nos 2,77 euros/litro.


            Resultado animador na presente conjuntura, ainda para mais tendo em conta, segundo o OeMv, que as exportações mundiais de vinho caíram em valor (-5,8%), em volume (-1,1%) e preço médio (-4,7%, passando de 3,10 para 2,95 euros/litro). Esta quebra, salienta o OeMv, verificou-se sobretudo no primeiro semestre de 2020. As exportações mundiais de vinho situaram-se nos 10.126,5 milhões de litros (-115,6 milhões) e nos 29.878,4 milhões de euros (-1.843 milhões). Todas as categorias de vinhos perderam valor, sobretudo aquelas de preços mais elevados - espumosos (-7,2%) e engarrafados (-5,9%) - e apenas o vinho a granel (+1,3%) cresceu em volume.


            Os 11 fornecedores principais (Itália, Espanha, França, Chile, Austrália, Alemanha, Estados Unidos, Argentina, África do Sul, Portugal e Nova Zelândia) representaram quase 90% das exportações no interanual de junho de 2019/2020.

            O mundo no primeiro semestre

            Porém, se nos ativermos à análise do período homólogo do primeiro semestre de 2020 face a 2019, verificamos que as exportações mundiais de vinho caíram mais de 235 milhões de litros (-4,7%) e 1.900 milhões de euros (-12,6%), ou seja, a quebra foi cerca de três vezes superior em termos de valor se comparado com o volume. O preço médio caiu -8,3%, passando de 3,01 para 2,76 euros/litro. As vendas globais situaram-se nos 4.782,3 milhões de litros e 13.180 milhões de euros.


            No caso português, o primeiro semestre representou uma quebra de -0,7% face a igual período de 2019, com menos 2.496.768 milhões de euros faturados, obtendo um total de  365.893.604 euros em vendas. Em volume, a quebra foi de -0,8% (-1.149.664 litros), para um total de 141.874.663 litros transacionados. O preço médio, esse, manteve-se estável, nos 2,58 euros/litro.


            Por categorias, Portugal caiu -4,8% e -7,4% em valor e preço médio, respetivamente, nos espumosos (4,76 euros/litro), apesar de crescer 2,8% em volume; nos vinhos engarrafados, cresceu 0,5% em volume mas caiu -1% em valor e- 1,5% no preço médio (cifrando-se nos 2,95 euros/litro). Nas categorias de menor valor, as exportações de Portugal cresceram 20,8% em valor, 7,2% em volume e 12,7% no preço médio (1,17 euros/litro) no que respeita ao bag-in-box; no granel e mais de 10 litros, as vendas do nosso país caíram -17,8% em volume, - 18,8% em valor mas elevaram o preço médio em 1,2%, para 0,78 euros/litro. As exportações de mosto permanecem residuais, cifrando-se nos 77 mil litros no primeiro semestre de 2020, mesmo com uma quebra de quase -25% face a igual período de 2019.

            ',
            'img' => 'garrafas-garrafeira-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'BAGOS D OURO E FIRMO CRIAM CADERNO SOLIDÁRIO',
            'data' => Carbon::parse('2020-11-05'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Politica',
            'preview' => 'Este Natal, a Bagos D’Ouro está a trabalhar no combate ao abandono escolar e à exclusão social. A Firmo Portugal criou uma edição',
            'descricao' => 'Este Natal, a Bagos D’Ouro está a trabalhar no combate ao abandono escolar e à exclusão social através de uma parceria especial. A Firmo Portugal criou uma edição especial do seu icónico “caderno azul” para comemorar os 10 anos da Associação.



            Ajudar e contribuir para a mudança do futuro dos jovens e crianças do Douro está este ano ainda mais fácil. A IPSS, em ano de celebração do seu 10º aniversário, uniu-se à Firmo Portugal, uma marca bem conhecida do Porto, líder no comércio de artigos escolares, de papelaria e escritório, para criar um caderno com a imagem da associação.

            A marca deu uma nova cor ao seu icónico “Caderno Azul“, agora inspirado nos tons do vinho do Porto, com 50% das receitas a reverterem para a causa da Bagos d Ouro.

            Em formato liso, pautado ou quadriculado, o caderno (13,99€) encontra-se à venda na  Wook, OfficeLink, DOTT e na loja online da  Fnac.',
            'img' => 'caderno-firmo-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'CHEFS DA NOVA GERAÇÃO PROMOVEM CONSERVAS PORTUGUESAS',
            'data' => Carbon::parse('2020-11-04'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Nacional',
            'preview' => '“Vamos conservar o que é nosso.” É este o claim da campanha criada pela Associação Nacional de Industriais de Conservas de Peixe',
            'descricao' => '“Vamos conservar o que é nosso.” É este o claim da campanha criada pela Associação Nacional de Industriais de Conservas de Peixe (ANICP) com o intuito de valorizar a excelência das conservas nacionais. No âmbito desta iniciativa, a ANICP desafia quatro jovens chefs nacionais a criar e partilhar uma receita em que as conservas são a estrela.

            Ao longo do mês de novembro, Bernardo Agrela (A Praça, Lisboa), Luís Gaspar (Sala de Corte, Lisboa), Leonor Godinho (Musa da Bica, Lisboa) e Pedro Abril (Chapitô à Mesa, Lisboa) vão utilizar as suas páginas de Instagram para partilhar com o público a execução de um prato em formato vídeo. As receitas podem ser facilmente reproduzidas em casa, evidenciando a versatilidade de um produto que reflete como poucos a riqueza do património gastronómico nacional.

            Mais do que uma tradição, as conservas portuguesas são o resultado da união entre o saber de várias gerações e o melhor peixe da nossa costa. Um legado gastronómico único que é agora relançado numa campanha que, nas palavras de José Maria Freitas, presidente da ANICP, visa “sensibilizar o público para os produtos da pesca e da aquicultura sustentáveis, apresentando as conservas enquanto exemplo distintivo de tradição e excelência da indústria e superioridade do peixe”.

            A ANICP pretende valorizar e diferenciar as conservas nacionais como um produto de acrescida qualidade face à concorrência, mas também criar condições para os que os consumidores possam fazer uma escolha informada. A campanha é também um estímulo ao consumo de produtos de origem nacional ',
            'img' => 'Vamos_conservar_o_que_e_nosso_(1)_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'DIA MUNDIAL DO ENOTURISMO',
            'data' => Carbon::parse('2020-11-04'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'No próximo dia 8 de novembro comemora-se o Dia Mundial do Enoturismo.',
            'descricao' => 'No próximo dia 8 de novembro comemora-se o Dia Mundial do Enoturismo e, de forma a assinalar esta efeméride, o Soalheiro, primeira marca de alvarinho de Melgaço, decidiu brindar os visitantes com uma campanha especial e comemorá-lo durante todo o ano. O convite é para conhecerem o território da origem do alvarinho – Monção e Melgaço – a sua gastronomia, natureza e hospitalidade.

            O Enoturismo do Soalheiro é muito mais do que apenas uma prova de vinho. É a descoberta de tudo o que este território tem para ensinar, sendo privilegiadas as experiências personalizadas. Desde a descoberta dos encantos da vinha, da preservação da biodiversidade até aos sistemas de produção, tudo é uma aprendizagem.

            Para entrar nesta viagem pelos sentidos, que revelará todo o potencial da casta Alvarinho e do “The Pur Terroir”, basta escolher a prova que gostaria de realizar. A oferta é variada e inclui as diferentes dimensões Soalheiro. Por exemplo, a prova Nature desafia a conhecer a família dos Soalheiro Naturais. Irreverentes e “fora da caixa”, estes vinhos valorizam a biodiversidade e o ecossistema vitícola, fomentando a sustentabilidade ambiental. Já a prova Fusion representa uma verdadeira fusão de sabores, onde o potencial do terroir é explorado no seu expoente máximo para que a aprendizagem seja continua e a inovação esteja sempre presente. Mas se optar pela prova Premium terá a oportunidade de conhecer todas as dimensões do Alvarinho Soalheiro.

            A campanha é válida para todas as marcações de provas de vinho, até 8 de novembro de 2021, desde que a reserva seja feita até ao próximo dia 8 de novembro de 2020. Os visitantes têm 10 euros à disposição no total da reserva e, as mesmas, podem ser feitas online, no portal www.soalheiro.com/enoturismo, inserindo o código, 8NOVEMBRO, no campo "Aplicar promoção ou voucher".

            Todas as experiências estão desenhadas de acordo com as recomendações da Direção-Geral de Saúde e do Turismo de Portugal ("Clean & Safe").',
            'img' => 'Dia_Mundial_Enoturismo_Soalheiro_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'FRANÇA PROÍBE VENDA DE PRODUTOS NÃO ESSENCIAIS',
            'data' => Carbon::parse('2020-11-04'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'Medida aplica-se às grandes superfícies e começou no passado dia 3.',
            'descricao' => 'A partir desta terça-feira, dia 3 de novembro, as grandes superfícies francesas não poderão vender produtos não essenciais, de modo a evitar a concorrência desleal com os pequenos negócios que foram obrigados a fechar portas com o novo confinamento ditado em França, para conter a disseminação da Covid-19.


            Após contactos com as associações de pequenos comerciantes e das grandes superfícies, e dois dias depois da proibição da venda de livros nos hipermercados, para não prejudicar as pequenas livrarias independentes, o Governo francês tomou a decisão de alargar a todos os produtos não essenciais. Jean Castex, primeiro-ministro francês, justifica a medida com uma questão de “equidade”, sabendo, contudo, que os grandes beneficiados serão os operadores de e-commerce.


            A situação será revista dentro de duas semanas e, se a situação epidemiológica o permitir, será autorizada uma abertura gradual dos pequenos espaços de comércio. Jean Castex prometeu, ainda, 20 milhões de euros em ajudas suplementares aos negócios obrigados a fechar portas.',
            'img' => 'IMG_2192.jpg',
        ]);
        Blog::create([
            'titulo' => 'QUINTA DO GRADIL APRESENTA REBRANDING',
            'data' => Carbon::parse('2020-11-04'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'A Quinta do Gradil apresentou mais uma novidade: nasceu a nova identidade deste produtor da região de Lisboa.',
            'descricao' => 'A Quinta do Gradil apresentou mais uma novidade: nasceu a nova identidade deste produtor da região de Lisboa.

            Nova hora, outro tempo, uma Nova Quinta do Gradil. outubro de 2020, Cadaval – “Sete Séculos de Vindimas” é nova assinatura dos vinhos Quinta do Gradil, que surge acompanhada de uma nova identidade.

            Em comunicado enviado, pode ler-se que "a nova identidade viverá em todas as materializações da marca, tendo-se iniciado pela imagem de alguns vinhos e estender-se-á até ao início do próximo ano com o lançamento de vinhos das gamas superiores, um novo site e uma campanha de comunicação em redes sociais, televisão e outdoors".

            Este rebranding surge integrado num investimento da empresa e que se iniciou com um levantamento histórico que inspirou todo o processo e protege, para memória futura, a secular ligação ao vinho da Quinta do Gradil. Da mesma forma, desvendou a relação da família dos Marqueses de Pombal com a propriedade, uma vez que até agora pouco mais se sabia do que pedra de armas afixada no frontão da fachada principal, que atestava essa ligação.

            Recorde-se que em 2019, ano em que se completavam 20 anos sob a gestão de Luís Vieira, se deu início às obras da casa principal da propriedade, uma "construção arquitetónica eclética no estilo, tão ao gosto de meados de oitocentos. Reabilitado o edifício, que serve como estrutura base de iniciativas de enoturismo e outros eventos, seguir-se-á a construção de uma cave nova de barricas no piso térreo do Palácio", revela ainda o comunicado enviado pelo produtor de vinho.

            “Sempre disse que o nosso desígnio era maior do que apenas produzir vinhos de qualidade”, refere Luís Vieira, administrador da Quinta do Gradil. “Há vinte anos, começámos por dar os primeiros passos no terreno, através da recuperação de vinhas antigas e da plantação de novas, bem como da criação de condições para ter uma boa adega e uma equipa profissional e ambiciosa. Hoje sei que foi preciso percorrer este caminho, as bases estavam lançadas, mas a experiência veio com o tempo. E com o tempo tornámo-nos um produtor de excelência que contribui decisivamente para uma imagem renovada dos vinhos da região de Lisboa”, conclui o responsável da empresa.',
            'img' => 'gradil-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'NOVO MERCURE PORTO CENTRO ALIADOS',
            'data' => Carbon::parse('2020-11-03'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'Abre as portas o Mercure Porto Centro Aliados, a nova proposta de Mercure Hotels, pertencente ao Grupo Accor.',
            'descricao' => 'Abre as portas o Mercure Porto Centro Aliados, a nova proposta de Mercure Hotels, pertencente ao Grupo Accor. O novo hotel, localizado na Rua do Bonjardim 95, é ideal para conhecer as principais atrações turísticas da cidade, sendo de fácil acesso de transportes públicos ou de automóvel, e muito próximo do centro histórico, da famosa Ponte de D. Luis I, da majestosa Torre dos Clérigos e das Caves do Vinho do Porto.

            O espaço conta com 83 quartos de tipologias distintas e dispõe de serviços que o convertem num verdadeiro refúgio de paz no coração da cidade, constituído por um jardim exterior com um terraço, uma piscina aquecida e um ginásio, aliados a uma zona de bar com uma decoração envolvente e acolhedora, inspirada na arquitetura e nas cores da cidade do Porto.

            O “Sítio Esquecido” é o espaço destinado às refeições do Mercure Porto Centro Aliados, uma alusão ao local, abandonado por muitos anos, que agora se torna um lugar de referência no Porto e que permite descobrir a herança e a gastronomia da cidade, inspirado no lema “Enjoy true taste of food”. No menu é possível encontrar deliciosas tartes tatin, de abóbora, salmão ou castanhas e cogumelos, saladas frescas e saudáveis e irresistíveis sobremesas, como o tradicional pastel de nata acompanhado com gelado de canela, marmelos bêbados com moscatel e requeijão com doce tradicional.

            Aposta na alimentação saudável e sustentável
            O novo Mercure Porto Centro Aliados promove uma alimentação de qualidade, saudável e sustentável. A oferta de produtos de qualidade gourmet, frescos e da época e a eliminação de aditivos controversos são algumas das práticas implementadas pelo hotel. A preferência por fornecedores locais (disponibilizando pelo menos 10 produtos regionais) faz também parte do compromisso do hotel. A sua carta responde às diferentes necessidades alimentares, integrando uma oferta vegetariana e dando resposta aos regimes alimentares específicos (sem glúten, etc.).

            Sentir-se um local com Mercure
            O Mercure Porto Centro Aliados promove uma inspiração local, recomendando e proporcionando experiências para que cada visitante se sinta como um verdadeiro local. As “Local Discoveries” são a brand passion da marca, tornando os hotéis Mercure o ponto de partida para que cada cliente conheça a fundo a cidade onde se encontra. A equipa do hotel está preparada para ajudar o hóspede nesta submersão pela cultura e vida local da cidade, recomendando diversas experiências que promovam o “sentir-se como um local”.
            O seu programa Discover Local aposta na colaboração com fornecedores locais que valoriza os elementos locais de cada cidade e proporciona experiências associadas à cultura, gastronomia, turismo, etc. Com o Discover Local, os clientes podem imergir na experiência local do destino, através de food and beverage, degustações e, futuramente, de workshops e aulas.

            Sustentabilidade ambiental com Planet21 – Acting Here
            O Mercure Porto Centro Aliados mantém a elevada aposta do Grupo Accor na Responsabilidade Social Corporativa, comprometendo-se a implementar progressivamente o seu programa de práticas de sustentabilidade ambiental: o Planet21 – Acting Here, através do qual se desenvolvem ações que permitem devolver valor à comunidade e ao planeta, há mais de 25 anos.

            O projeto Plant for the Planet (em que se destinam as poupanças obtidas na lavandaria, derivadas do uso responsável dos clientes, a projetos de reflorestação e apoio a agricultores locais), a luta contra o desperdício alimentar com o programa "Love food, not waste" (que sensibiliza clientes, colaboradores e público em geral para a importância de não desperdiçar alimentos), a implementação de hortas urbanas (para a plantação de diversos produtos frescos e biológicos utilizadas na elaboração dos menus), o compromisso com as energias renováveis e a redução da utilização de plásticos de uso único são algumas das iniciativas do Planet21 – Acting Here.

            A marca Mercure passa a ter a operar em Portugal, assim, sete hotéis: Mercure Braga Centro, Mercure Figueira da Foz, Mercure Lisboa, Mercure Lisboa Almada, Mercure Porto Centro, Mercure Porto Gaia e, agora, Mercure Porto Cento Aliados.',
            'img' => 'mercure-aliados-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'VINHOS DO CONTINENTE PREMIADOS',
            'data' => Carbon::parse('2020-11-03'),
            'autor' => 'Guilherme Meireles',
            'categoria' => 'Cultura',
            'preview' => 'Foram 57 os vinhos exclusivos do Continente que, este ano, conquistaram mais de 100 medalhas em prestigiados concursos.',
            'descricao' => 'Foram 57 os vinhos exclusivos do Continente que, este ano, conquistaram mais de 100 medalhas em prestigiados concursos de vinhos nacionais e internacionais, entre 48 medalhas de ouro, 36 de prata e 22 de bronze.

            Os vinhos, desenvolvidos em parceria com produtores nacionais e à venda nas lojas Continente e online, destacaram-se em competições como o Wine Masters Challenge, o concurso “Os Melhores Vinhos do Dão”, e o Concurso de Vinhos da Península de Setúbal, em Portugal, o International Wine & Spirit Competition, em Londres, e o Sommelier Wine Awards, também no Reino Unido, o Concurso Mundial de Bruxelas, o Challenge International du Vin e o Muscats Du Monde, em França, o Berliner Wine Trophy, em Berlim, e o Mundus Vini Spring/Summer Tasting, também na Alemanha, o Austrian Wine Challenge, na Áustria, o China Wine and Spirits Awards, na China, o Prodexpo, na Rússia, e o PLMA Salute to Excellence, na Holanda.

            Uma das distinções mais relevantes foi o primeiro prémio atribuído ao Moscatel Roxo de Setúbal Venâncio da Costa Lima reserva da família, no concurso internacional “Muscats du Monde”, considerado assim o melhor moscatel em prova.

            Dos 34 vinhos que foram premiados com medalhas de ouro, destacam-se ainda os vinhos Castello DAlba Doc Douro Tinto e o Porrais Signature Doc Douro Tinto, no concurso “Berliner Wine Trophy” (summer edition 2020); os vinhos Vinha Maria Premium Doc Dão Tinto, da Globalwines, o Rovisco Pais Reserva Regional Península De Setúbal Tinto, da Adega de Pegões, no concurso “Mundus Vini Spring Tasting 2020” e o Porto Contemporal 10 Anos, produzido pela Quinta & Vineyard Bottlers no concurso “Mundus Vini Summer Tasting 2020”. E, ainda, os vinhos Pedra do Gato Premium Doc Dão Tinto, da Casa da Passarella, no concurso “Os Melhores Vinhos do Dão 2020”, o Vinha Valentina Reserva Signature Regional Península De Setúbal Tinto, da Casa Ermelinda Freitas, no “China Wine and Spirits Awards 2020”, o Vidigueira Premium Doc Alentejo Branco, da Adega da Vidigueira, no “Wine Masters Challenge 2020” e o Talabira do Algarve Premium Regional Algarve Tinto, produzido pela Casa Santos Lima, no concurso “Challenge International Du Vin 2020”.

            Os vinhos premiados podem também ser identificados na Garrafeira do Continente, uma plataforma onde se encontram os vinhos mais indicados para cada especialidade gastronómica, com filtros que vão desde o preço, aos descontos em vigor, passando pelo tipo de vinho, região, intensidade e tipo de guarda. A Garrafeira do Continente está associada à loja online do Continente, permitindo a compra imediata das escolhas efetuadas.

            Paula Ferro, Diretora da Unidade de Negócio de Bebidas da Sonae MC, realça que “estas distinções dos vinhos exclusivos do Continente revelam que as parcerias fortes com os produtores e o foco na qualidade dos vinhos selecionados pelos enólogos do Continente, são essenciais para continuar a alargar o palmarés de prémios e medalhas como estes.”

            Este ano, entraram para o Clube de Produtores Continente (CPC) 44 novos produtores de vinho, evidenciando o dinamismo e a qualidade do sector. O apoio à produção nacional e a disponibilização do melhor que se produz nas diversas regiões vitivinícolas nacionais está na génese do trabalho que o Continente tem vindo a desenvolver ao longo dos anos.',
            'img' => 'VinhosPremiados_CNT_FB_03_artigo.jpg',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perguntas;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perguntas::create([
            'pergunta' => '​POSSO FAZER UMA COMPRA NA WINECULTURE E RECEBER NOUTRO PAÍS?',
            'categoria' => 'Shipping',
            'resposta' => "Não, o grupo WineCulture só faz encomendas exclusivamente para Portugal."
        ]);

        Perguntas::create([
            'pergunta' => '​​​PAGO PORTES DE ENVIO PARA RECEBER A MINHA ENCOMENDA?',
            'categoria' => 'Shipping',
            'resposta' => "​Entregas gratuitas entre 24 a 48h úteis para compras superiores a 50€."
        ]);

        Perguntas::create([
            'pergunta' => 'QUANTO TEMPO DEMORO A RECEBER A MINHA ENCOMENDA?',
            'categoria' => 'Shipping',
            'resposta' => "Depois do pagamento da sua encomenda a WineCulture procede ao embalamento e expedição da mesma. Se esta for paga até às 15h30 é expedida no próprio dia e é entregue entre 24 a 48h úteis (em Portugal Continental). No caso da encomenda ser paga a partir das 15:30 a mesma será expedida no dia útil seguinte e receberá a mesma entre 24 a 48h úteis do envio."
        ]);

        Perguntas::create([
            'pergunta' => 'POSSO RECEBER A MINHA ENCOMENDA NO ARQUIPELAGO DA MADEIRA/AÇORES? ',
            'categoria' => 'Shipping',
            'resposta' => "Pode, os preços encontram-se sob consulta."
        ]);

        Perguntas::create([
            'pergunta' => 'EXISTE UMA ENCOMENDA MINIMA?',
            'categoria' => 'Shipping',
            'resposta' => "Não, pode encomendar a partir de uma unidade de tudo o que estiver disponível no site."
        ]);

        Perguntas::create([
            'pergunta' => 'QUAIS SÃO OS MÉTODOS DE PAGAMENTO ACEITES PELA WINECULTURE?',
            'categoria' => 'Pagamento',
            'resposta' => "A WineCulture aceita pagamentos, através de multibanco com uma referência que lhe é fornecida aquando da sua encomenda; por cartão de crédito (intermediário Paypal) e por conta Paypal."
        ]);

        Perguntas::create([
            'pergunta' => 'POSSO RECEBER A MINHA ENCOMENDA À COBRANÇA?',
            'categoria' => 'Pagamento',
            'resposta' => "Não. A WineCulture só aceita os pagamentos descritos anteriormente."
        ]);
    }
}

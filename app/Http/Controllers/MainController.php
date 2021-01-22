<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CategoriaPergunta;
use App\Models\Perguntas;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index() {
        return view('paginas.frontend.index');
    }

    public function sobre() {
        return view('paginas.frontend.sobre');
    }

    public function sobre_vinhos() {
        return view('paginas.frontend.sobre_vinhos');
    }

    /*public function faq() {
        $perguntas_conta = Perguntas::where('categoria', '=', "Conta")->get();
        $perguntas_encomenda = Perguntas::where('categoria', '=', "Encomenda")->get();
        $perguntas_pagamento = Perguntas::where('categoria', '=', "Pagamento")->get();
        $perguntas_teste = Perguntas::where('categoria', '=', "teste")->get();
        $categorias = CategoriaPergunta::all('categoria')->select('categoria')->distinct()->orderBy('categoria')->get();
        //$pergunta_sconta= Perguntas::where('categoria', '=', "Conta")-get();
        return view('paginas.frontend.FAQ', ['perguntas_conta' => $perguntas_conta, 'perguntas_teste' => $perguntas_teste, 'perguntas_encomenda' => $perguntas_encomenda,
         'perguntas_pagamento' => $perguntas_pagamento, 'categorias' => $categorias]);
    }*/

    public function pdp() {
        return view('paginas.frontend.pdp');
    }
    public function perfil_publico() {
        return view('paginas.frontend.perfil_publico');
    }
}


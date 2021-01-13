<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Perguntas;
use App\Models\receitas;
use App\Models\Vinhos;
use App\Models\Contactos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function login() {
        return view('paginas.frontend.login');
    }
    public function blog() {
        $blogs = Blog::all();
        return view('paginas.frontend.blog', ['blogs' => $blogs]);
    }
    public function vinhos() {
        $vinhos = Vinhos::all();
        return view('paginas.frontend.vinhos', compact([
            'vinhos'
        ]));
    }

    public function previewblog(Blog $previewblog) {
        //$previewblog = Blog::all();
        return view('paginas.frontend.previewblog', ['previewblog' => $previewblog]);
    }

    public function faq() {
        $perguntas_conta = Perguntas::where('categoria', '=', "Conta")->get();
        $perguntas_encomenda = Perguntas::where('categoria', '=', "Encomenda")->get();
        $perguntas_pagamento = Perguntas::where('categoria', '=', "Pagamento")->get();
        $perguntas_teste = Perguntas::where('categoria', '=', "teste")->get();
        $categorias = DB::table('perguntas')
        ->select('categoria')
        ->distinct()
        ->orderBy('categoria')
        ->get();
        //$pergunta_sconta= Perguntas::where('categoria', '=', "Conta")-get();
        return view('paginas.frontend.FAQ', ['perguntas_conta' => $perguntas_conta, 'perguntas_teste' => $perguntas_teste, 'perguntas_encomenda' => $perguntas_encomenda,
         'perguntas_pagamento' => $perguntas_pagamento, 'categorias' => $categorias]);
    }
    public function contactos() {
        $mensagens = Contactos::all();
        $totalmensagens = Contactos::all('id')->count();
        return view('paginas.frontend.contactos', compact('mensagens', 'totalmensagens'));
    }
    public function perfil() {
        $blogs = Blog::where('id_user', '=', Auth::user()->id)->count();
        $receitas = receitas::where('id_user', '=', Auth::user()->id)->count();

        return view('paginas.frontend.perfil', compact([
            'blogs',
            'receitas'
        ]));
    }
    public function pdp() {
        return view('paginas.frontend.pdp');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Perguntas;
use App\Models\Contactos;

use DB;
class MainController extends Controller
{
    public function login() {
        return view('paginas.frontend.login');
    }
    public function blog() {
        $blogs = Blog::all();
        return view('paginas.frontend.blog', ['blogs' => $blogs]);
    }

    public function previewblog(Blog $previewblog) {
        //$previewblog = Blog::all();
        return view('paginas.frontend.previewblog', ['previewblog' => $previewblog]);
    }

    public function faq() {
        $perguntas_conta = Perguntas::where('categoria', '=', "Conta")->get();
        $perguntas_encomenda = Perguntas::where('categoria', '=', "Encomenda")->get();
        $perguntas_pagamento = Perguntas::where('categoria', '=', "Pagamento")->get();
        $categorias = DB::table('perguntas')
        ->select('categoria')
        ->distinct()
        ->orderBy('categoria')
        ->get();
        //$pergunta_sconta= Perguntas::where('categoria', '=', "Conta")-get();
        return view('paginas.frontend.FAQ', ['perguntas_conta' => $perguntas_conta, 'perguntas_encomenda' => $perguntas_encomenda,
         'perguntas_pagamento' => $perguntas_pagamento, 'categorias' => $categorias]);
    }
    public function contactos() {
        $mensagens = Contactos::all();
        $totalmensagens = Contactos::all('id')->count();
        return view('paginas.frontend.contactos', compact('mensagens', 'totalmensagens'));
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CategoriaPergunta;
use App\Models\Perguntas;
use App\Models\Vinhos;
use App\Models\receitas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        return view('paginas.frontend.index');
    }

    public function sobre()
    {
        return view('paginas.frontend.sobre');
    }

    public function sobre_vinhos()
    {
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

    public function pdp()
    {
        return view('paginas.frontend.pdp');
    }
    public function perfil_publico()
    {
        $array = [];
        $users = receitas::where("id_user", Auth::id())->get();

        foreach ($users as $key => $user) {
            $object = (object) [
                'created_at' => $user->created_at,
                'id' => $user->id,
                'desc' => $user->descricao,
                'titulo' => $user->nome,
                'img' => "storage/receitas/".$user->foto,
                'tabela' => 'receitas'
            ];
            $array[] = $object;
        }
        $users = Vinhos::where("id_produtor", Auth::id())->get();

        foreach ($users as $key => $user) {
            $object = (object) [
                'created_at' => $user->created_at,
                'desc' => $user->descricao,
                'id' => $user->id,
                'titulo' => $user->nome,
                'img' => "storage/vinhos/".$user->img,
                'tabela' => 'vinhos'
            ];
            $array[] = $object;
        }
        $users = Blog::where("id_user", Auth::id())->get();

        foreach ($users as $key => $user) {
            $object = (object) [
                'created_at' => $user->created_at,
                'titulo' => $user->titulo,
                'id' => $user->id,
                'desc' => $user->preview,
                'img' => "storage/blog/".$user->img,
                'tabela' => 'blogs'
            ];
            $array[] = $object;
        }
        usort(

            $array,

            function ($a, $b) {

                if ($a->created_at == $b->created_at) return 0;

                return (($a->created_at < $b->created_at) ? -1 : 1);
            }
        );
        return view('paginas.frontend.perfil_publico', compact(['array']));
    }

    public function termos_condicoes(){
        return view('paginas.frontend.termos_condicoes');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WPProdutos;

class WPProdutosController extends Controller
{
    public function index()
    {

        //Fetching all publish post 
        $prods = WPProdutos::where('post_status', 'publish')->get();
        return view('paginas.frontend.sobre', ['prods' => $prods]);
    }
}

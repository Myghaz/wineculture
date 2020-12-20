<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
use App\Models\WPProdutos;
use App\Models\WPProdsPreco;
use App\Models\receitas;
use App\Models\WPProdutosStock;
class AdminController extends Controller
{
    public function admin() {
        return view('paginas.backend.admin');
    }




    public function dashboard() {

        //Ir buscar os utilizadores organizados por mes
        $usersJan = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 1)->get();
        $usersFev = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 2)->get();
        $usersMar = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 3)->get();
        $usersAbr = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 4)->get();
        $usersMai = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 5)->get();
        $usersJun = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 6)->get();
        $usersJul = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 7)->get();
        $usersAgo = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 8)->get();
        $usersSet = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 9)->get();
        $usersOut = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 10)->get();
        $usersNov = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 11)->get();
        $usersDez = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 12)->get();
        $totalUsersJan = $usersJan->count();
        $totalUsersFev = $usersFev->count();
        $totalUsersMar = $usersMar->count();
        $totalUsersAbr = $usersAbr->count();
        $totalUsersMai = $usersMai->count();
        $totalUsersJun = $usersJun->count();
        $totalUsersJul = $usersJul->count();
        $totalUsersAgo = $usersAgo->count();
        $totalUsersSet = $usersSet->count();
        $totalUsersOut = $usersOut->count();
        $totalUsersNov = $usersNov->count();
        $totalUsersDez = $usersDez->count();
        $totalUsers = User::whereYear('created_at', '=', 2020)->count();
        //Ir buscar os utilizadores organizados por mes


        //Ir buscar os produtores organizados por mes
        $produtoresJan = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 1)->where('tipouser', '=', 'Produtor')->get();
        $produtoresFev = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 2)->where('tipouser', '=', 'Produtor')->get();
        $produtoresMar = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 3)->where('tipouser', '=', 'Produtor')->get();
        $produtoresAbr = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 4)->where('tipouser', '=', 'Produtor')->get();
        $produtoresMai = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 5)->where('tipouser', '=', 'Produtor')->get();
        $produtoresJun = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 6)->where('tipouser', '=', 'Produtor')->get();
        $produtoresJul = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 7)->where('tipouser', '=', 'Produtor')->get();
        $produtoresAgo = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 8)->where('tipouser', '=', 'Produtor')->get();
        $produtoresSet = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 9)->where('tipouser', '=', 'Produtor')->get();
        $produtoresOut = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 10)->where('tipouser', '=', 'Produtor')->get();
        $produtoresNov = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 11)->where('tipouser', '=', 'Produtor')->get();
        $produtoresDez = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 12)->where('tipouser', '=', 'Produtor')->get();
        $totalProdutoresJan = $produtoresJan->count();
        $totalProdutoresFev = $produtoresFev->count();
        $totalProdutoresMar = $produtoresMar->count();
        $totalProdutoresAbr = $produtoresAbr->count();
        $totalProdutoresMai = $produtoresMai->count();
        $totalProdutoresJun = $produtoresJun->count();
        $totalProdutoresJul = $produtoresJul->count();
        $totalProdutoresAgo = $produtoresAgo->count();
        $totalProdutoresSet = $produtoresSet->count();
        $totalProdutoresOut = $produtoresOut->count();
        $totalProdutoresNov = $produtoresNov->count();
        $totalProdutoresDez = $produtoresDez->count();
        $totalProdutores = User::whereYear('created_at', '=', 2020)->where('tipouser', '=', 'Produtor')->count();
        //Ir buscar os produtores organizados por mes


        //Ir buscar os produtos da loja(worpress) organizados por mes
        $ProdsJan = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 1)->get();
        $ProdsFev = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 2)->get();
        $ProdsMar = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 3)->get();
        $ProdsAbr = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 4)->get();
        $ProdsMai = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 5)->get();
        $ProdsJun = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 6)->get();
        $ProdsJul = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 7)->get();
        $ProdsAgo = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 8)->get();
        $ProdsSet = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 9)->get();
        $ProdsOut = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 10)->get();
        $ProdsNov = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 11)->get();
        $ProdsDez= WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 12)->get();
        $totalProdsJan = $ProdsJan->count();
        $totalProdsFev = $ProdsFev->count();
        $totalProdsMar = $ProdsMar->count();
        $totalProdsAbr = $ProdsAbr->count();
        $totalProdsMai = $ProdsMai->count();
        $totalProdsJun = $ProdsJun->count();
        $totalProdsJul = $ProdsJul->count();
        $totalProdsAgo = $ProdsAgo->count();
        $totalProdsSet = $ProdsSet->count();
        $totalProdsOut = $ProdsOut->count();
        $totalProdsNov = $ProdsNov->count();
        $totalProdsDez = $ProdsDez->count();
        $totalProds = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->count();
        //Ir buscar os produtos da loja(worpress) organizados por mes


        $users = User::all();
        $wp_prods = WPProdsPreco::all();
        $wp_prodsStock = WPProdutosStock::all();
        $produtores = User::where('tipouser', '=', 'Produtor')->get();
        $prosdwp = WPProdutos::where('post_status', '=', 'publish')->get();


        $response = file_get_contents("https://www.instagram.com/wineculture.geral/?__a=1");
        if ($response !== false) {
            $data = json_decode($response, true);
            if ($data !== null) {
                $posts_instagram = $data['graphql']['user']['edge_followed_by']['count'];
                $seguidores_instagram = $data['graphql']['user']['edge_followed_by']['count'];
                
            }
        }

        return view('paginas.backend.dashboard', compact([
        'totalUsersJan',
        'totalUsersFev',
        'totalUsersMar',
        'totalUsersAbr',
        'totalUsersMai',
        'totalUsersJun',
        'totalUsersJul',
        'totalUsersAgo',
        'totalUsersSet',
        'totalUsersOut',
        'totalUsersNov',
        'totalUsersDez',
        'totalUsers',
        'totalProdutoresJan',
        'totalProdutoresFev',
        'totalProdutoresMar',
        'totalProdutoresAbr',
        'totalProdutoresMai',
        'totalProdutoresJun',
        'totalProdutoresJul',
        'totalProdutoresAgo',
        'totalProdutoresSet',
        'totalProdutoresOut',
        'totalProdutoresNov',
        'totalProdutoresDez',
        'totalProdutores',
        'totalProdsJan',
        'totalProdsFev',
        'totalProdsMar',
        'totalProdsAbr',
        'totalProdsMai',
        'totalProdsJun',
        'totalProdsJul',
        'totalProdsAgo',
        'totalProdsSet',
        'totalProdsOut',
        'totalProdsNov',
        'totalProdsDez',
        'totalProds',
        'users',
        'produtores',
        'prosdwp',
        'wp_prods',
        'wp_prodsStock',
        'seguidores_instagram',
        'posts_instagram']));
    }

    public function receitas_index(){

        $receitas= receitas::all();

        return view('paginas.backend.receitas', compact('receitas'));
    }
}

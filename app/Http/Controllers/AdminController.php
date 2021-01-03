<?php

namespace App\Http\Controllers;

use App\Models\Mensagens;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WPProdutos;
use App\Models\WPProdsPreco;
use App\Models\receitas;
use App\Models\WPProdutosStock;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Category;
use App\Models\category_wine;


class AdminController extends Controller
{
    public function admin()
    {
        return view('paginas.backend.admin');
    }

    public function dashboard()
    {
        //verificar se o utilizador fez login e se é um administrador

        if (!Auth::check()) {
            return redirect()->route('login');
        }else{
            $id_user_auth =  Auth::user()->tipouser;
            if ($id_user_auth !== "Administrador"){
                return redirect()->route('login');
            }else{
       
        //verificar se o utilizador fez login e se é um administrador

        
        //Ir buscar os utilizadores organizados por mes
        $totalUsersJan = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 1)->count();
        $totalUsersFev = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 2)->count();
        $totalUsersMar = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 3)->count();
        $totalUsersAbr = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 4)->count();
        $totalUsersMai = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 5)->count();
        $totalUsersJun = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 6)->count();
        $totalUsersJul = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 7)->count();
        $totalUsersAgo = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 8)->count();
        $totalUsersSet = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 9)->count();
        $totalUsersOut = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 10)->count();
        $totalUsersNov = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 11)->count();
        $totalUsersDez = User::whereYear('created_at', '=', 2020)->whereMonth('created_at', '=', 12)->count();
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
        $totalProdsJan = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 1)->count();
        $totalProdsFev = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 2)->count();
        $totalProdsMar = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 3)->count();
        $totalProdsAbr = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 4)->count();
        $totalProdsMai = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 5)->count();
        $totalProdsJun = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 6)->count();
        $totalProdsJul = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 7)->count();
        $totalProdsAgo = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 8)->count();
        $totalProdsSet = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 9)->count();
        $totalProdsOut = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 10)->count();
        $totalProdsNov = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 11)->count();
        $totalProdsDez = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->whereMonth('post_date', '=', 12)->count();
        $totalProds = WPProdutos::where('post_status', 'publish')->whereYear('post_date', '=', 2020)->count();
        //Ir buscar os produtos da loja(worpress) organizados por mes


        $users = User::all();
        $wp_prods = WPProdsPreco::all();
        $wp_prodsStock = WPProdutosStock::all();
        $produtores = User::where('tipouser', '=', 'Produtor')->get();
        $prosdwp = WPProdutos::where('post_status', '=', 'publish')->get();

        //Ir buscar seguidores e publicacoes da pagina do instagram
        $response = file_get_contents("https://www.instagram.com/wineculture.geral/?__a=1");
        if ($response !== false) {
            $data = json_decode($response, true);
            if ($data !== null) {
                $posts_instagram = $data['graphql']['user']['edge_owner_to_timeline_media']['count'];
                $seguidores_instagram = $data['graphql']['user']['edge_followed_by']['count'];
            } else {
                $posts_instagram = "Erro";
                $seguidores_instagram = "Erro";
            }
        }
        //Ir buscar seguidores e publicacoes da pagina do instagram


        //Ir buscar gostos e publicacoes da pagina do facebook
        $fbgostos =  "Erro";
        $fbposts = "Erro";

        //  $fb_gostos_url = "https://graph.facebook.com/100224601998953?access_token=EAAEUXTXUXlUBAMzUlqcSoTiHOCkmReEctU1ee7debOpDvVhgZCTye079jcWOYv8SgoWlF2aGXz4JBZCHLL2sCgnKISXeuAtPur5Rs6tlmRzQy4YujWXdetOx4CIH8sLO52T5k0ZAIiSrEiCeDLccxnXczInoskWMvHslaN9jmJFSDgbVgJeR2Rjoyk8IegZD&fields=fan_count";
        //  $fb_gostos_curl = curl_init($fb_gostos_url);
        //  curl_setopt($fb_gostos_curl, CURLOPT_RETURNTRANSFER, 1);   
        //  curl_setopt($fb_gostos_curl, CURLOPT_SSL_VERIFYPEER, false);
        //  $fb_gostos_result = curl_exec($fb_gostos_curl);  
        //  curl_close($fb_gostos_curl);
        //  $fb_gostos_detalhes = json_decode($fb_gostos_result,true);
        // $fbgostos = $fb_gostos_detalhes['fan_count'];
        //  $fb_posts_url = "https://graph.facebook.com/100224601998953?access_token=EAAEUXTXUXlUBAMzUlqcSoTiHOCkmReEctU1ee7debOpDvVhgZCTye079jcWOYv8SgoWlF2aGXz4JBZCHLL2sCgnKISXeuAtPur5Rs6tlmRzQy4YujWXdetOx4CIH8sLO52T5k0ZAIiSrEiCeDLccxnXczInoskWMvHslaN9jmJFSDgbVgJeR2Rjoyk8IegZD&fields=published_posts.limit(1).summary(total_count).since(1)";
        //  $fb_posts_curl = curl_init($fb_posts_url);
        //  curl_setopt($fb_posts_curl, CURLOPT_RETURNTRANSFER, 1);   
        //  curl_setopt($fb_posts_curl, CURLOPT_SSL_VERIFYPEER, false);
        //  $fb_posts_result = curl_exec($fb_posts_curl);  
        //  curl_close($fb_posts_curl);
        //  $fb_posts_details = json_decode($fb_posts_result,true);
        //  $fbposts = $fb_posts_details['published_posts']['summary']['total_count'];

        //Ir buscar gostos e publicacoes da pagina do facebook

        $mensagens = Mensagens::select('id_envio')->distinct('id_envio')->where('id_destino', Auth::id())->get();
        $mensagens_chat = Mensagens::where('id_destino', Auth::id())->orWhere('id_envio', Auth::id())->orderBy('created_at', 'ASC')->get();
        $itens = DB::table('mensagens')
            ->select('id_envio')
            ->where('id_destino', Auth::id())
            ->distinct('id_envio')
            ->get();
        $id_user_auth = Auth::id();



        $ultimos_users = DB::table('users')->latest('created_at')->take(4)->orderBy('created_at', 'ASC')->get(); 
        $total_posts = Blog::all();
        $total_posts_count = $total_posts->count();
        $ultimas_categorias = DB::table('categories')->latest('created_at')->take(4)->orderBy('created_at', 'ASC')->get(); 
        $ultimas_categorias_vinhos = DB::table('category_wines')->latest('created_at')->take(4)->orderBy('created_at', 'ASC')->get(); 
        $total_receitas = Receitas::all();
        $total_receitas_count = $total_receitas->count();

        $total_produtoswp = WPProdutos::where('post_status', '=', 'publish')->latest('post_date')->take(4)->orderBy('post_date', 'ASC')->get();
        $total_produtoswp_count = $total_produtoswp->count();
        $total_produtoswp_stock = WPProdutosStock::all();
        $total_produtoswp_preco = WPProdsPreco::all();
        
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
            'posts_instagram',
            'seguidores_instagram',
            'fbgostos',
            'fbposts',
            'mensagens',
            'mensagens_chat',
            'id_user_auth',
            'itens',
            'ultimos_users',
            'total_posts_count',
            'total_posts',
            'ultimas_categorias',
            'ultimas_categorias_vinhos',
            'total_receitas',
            'total_receitas_count',
            'total_produtoswp',
            'total_produtoswp_count',
            'total_produtoswp_stock',
            'total_produtoswp_preco'
        ]));
    }        
}
}
    public function receitas_index()
    {

        $receitas = receitas::all();

        return view('paginas.backend.receitas', compact('receitas'));
    }
}

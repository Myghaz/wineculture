<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\ReceitasController;
use App\Http\Controllers\FAQController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('paginas.frontend.index');
})->name('index');

Route::get('/contactos', [App\Http\Controllers\MainController::class, 'contactos'])->name('contactos');

Route::get('/sobre', function () {
    return view('paginas.frontend.sobre');
})->name('sobre');

Route::get('/vinhos', function () {
    return view('paginas.frontend.tipo_de_vinho');
})->name('vinhos');

Route::get('/vinho_produto', function () {
    return view('paginas.frontend.vinho_produto');
})->name('vinho_produto');

Route::get('/sobre_vinhos', function () {
    return view('paginas.frontend.sobre_vinhos');
})->name('sobre_vinhos');

Route::get('/login', function () {
    return view('paginas.frontend.login');
})->name('login');

Route::get('/receitas', [App\Http\Controllers\ReceitasController::class, 'indexFrontend'])->name('receitas');

Route::get('/faq', [App\Http\Controllers\MainController::class, 'faq'])->name('faq');

Route::get('/blog', [App\Http\Controllers\MainController::class, 'blog'])->name('blog');

Route::get('/previewblog/{previewblog}', [App\Http\Controllers\MainController::class, 'previewblog'])->name('previewblog');


//Autenticação
Auth::routes(['verify' => true]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Autenticação


//Admin
Route::get('/admin', function () {
    return Redirect::to('/admin/dashboard');
});
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin_dashboard');

//FAQ



Route::group(['prefix' => 'admin'], function () {
    Route::resource('faq', FAQController::class)->parameters([
        'faq' => 'pergunta'
    ]);
});

//Contactos Admin

Route::get('/admin/mensagens', [App\Http\Controllers\MensagensController::class, 'mensagens'])->name('admin_contactos');

Route::post('/admin/contactos', [App\Http\Controllers\MensagensController::class, 'frontend_store'])->name('contactos_frontend_store');

//Users Admin

Route::get('/admin/users', [App\Http\Controllers\UsersController::class, 'index'])->name('admin_users');


//blog Admin

Route::get('/admin/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('admin_blog');

Route::post('/admin/blog/create', [App\Http\Controllers\BlogController::class, 'inser_blog'])->name('blog.store');

Route::get('/admin/blog/create', [App\Http\Controllers\BlogController::class, 'inserir_blog'])->name('blog.create');

Route::put('/admin/blog/{blog}/update', [App\Http\Controllers\BlogController::class, 'updateBlog'])->name('blog.update');

Route::get('/admin/blog/{blog}/edit/', [App\Http\Controllers\BlogController::class, 'editBlog'])->name('editblog');

Route::get('/admin/blog/{blog}/show/', [App\Http\Controllers\BlogController::class, 'showblog'])->name('showBlog');

Route::delete('/admin/blog/{blog}/destroy', [App\Http\Controllers\BlogController::class, 'destroyBlog'])->name('destroy.blog');


//vinhos Admin

Route::get('/admin/vinhos', [App\Http\Controllers\VinhosController::class, 'index'])->name('admin_vinhos');

Route::get('/admin/insert_vinho', function () {
    return view('paginas.backend.insert_vinho');
})->name('admin_insert_vinho');

Route::get('/admin/insert_categoria_vinho', function () {
	return view('paginas.backend.insert_categoria_vinho');
})->name('admin_insert_categoria_vinho');

Route::get('/admin/categoria_vinho', function () {
    return view('paginas.backend.categoria_vinhos');
})->name('admin_categoria_vinho');

//receitas Admin

//Route::get('/admin/receitas', [App\Http\Controllers\ReceitasController::class, 'index'])->name('receitas.index');
//Route::get('/admin/receitas/{receita}/show', [App\Http\Controllers\ReceitasController::class, 'show'])->name('receitas.show');
//Route::get('/admin/receitas/create', [App\Http\Controllers\ReceitasController::class, 'create'])->name('receitas.create');
//Route::post('/admin/receitas', [App\Http\Controllers\ReceitasController::class, 'store'])->name('receitas.store');

Route::resource('/admin/receitas', ReceitasController::class);

//mensagens
Route::post('/admin/dashboard', [App\Http\Controllers\ChatController::class, 'frontend_store'])->name('mensagens_backend_store');

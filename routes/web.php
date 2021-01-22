<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReceitasController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\VinhosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MensagensController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CategoriaFAQController;


/////         Páginas Frontend       /////

//BlogController
Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/sobre', [MainController::class, 'sobre'])->name('sobre');

Route::get('/sobre_vinhos', [MainController::class, 'sobre_vinhos'])->name('sobre_vinhos');

Route::get('/faq', [FAQController::class, 'indexFrontend'])->name('faq');

Route::get('/politica_de_privacidade', [MainController::class, 'pdp'])->name('pdp');





//BlogController
Route::get('/blog', [BlogController::class, 'indexFrontend'])->name('index_blog_frontend');



//ReceitasController
Route::get('/receitas', [ReceitasController::class, 'indexFrontend'])->name('receitas');



//MensagensController
Route::get('/contactos', [MensagensController::class, 'indexFrontend'])->name('contactos');

Route::post('/contactos', [MensagensController::class, 'frontend_store'])->name('contactos_frontend_store');



//UsersController
Route::get('/perfil', [UsersController::class, 'indexFrontend'])->name('perfil');

Route::delete('/destroy/{user}', [UsersController::class, 'user_destroy'])->name('users.destroy');



//VinhosController
Route::get('/vinhos', [VinhosController::class, 'indexFrontend'])->name('vinhos');

Route::get('/vinhos/{vinho}', [VinhosController::class, 'vinhos_detalhes'])->name('vinho');





/////         Autenticação      /////

//LoginController
Auth::routes(['verify' => true]);

//LoginController
Route::get('/login', [LoginController::class, 'indexFrontend'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');






/////         Páginas Backend      /////
Route::middleware('auth', 'verified')->prefix('admin')->group(function () {

        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');

        Route::post('dashboard', [ChatController::class, 'backend_store'])->name('dashboard.post');

        Route::resource('faq', FAQController::class)->parameters(['faq' => 'pergunta']);

        Route::resource('receitas', ReceitasController::class);

        Route::resource('blog', BlogController::class);

        Route::resource('vinhos', VinhosController::class);

        Route::resource('users', UsersController::class);

        Route::resource('contactos', MensagensController::class)->parameters(['contactos' => 'mensagem']);

        Route::resource('categoriasFAQ', CategoriaFAQController::class)->parameters(['categoriasFAQ' => 'categoria']);
});





//Users Admin






///not mexer nisto

Route::resource('/admin/vinhos', VinhosController::class);



Route::resource('/admin/categoria_vinho', VinhosController::class);

//mensagens


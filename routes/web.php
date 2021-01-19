<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ReceitasController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\VinhosController;


/////         Páginas Frontend       /////

//BlogController
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');

Route::get('/sobre', [App\Http\Controllers\MainController::class, 'sobre'])->name('sobre_vinhos');

Route::get('/sobre_vinhos', [App\Http\Controllers\MainController::class, 'sobre_vinhos'])->name('sobre');

Route::get('/faq', [App\Http\Controllers\MainController::class, 'faq'])->name('faq');

Route::get('/politica_de_privacidade', [App\Http\Controllers\MainController::class, 'pdp'])->name('pdp');



//BlogController
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'indexFrontend'])->name('index_blog_frontend');



//ReceitasController
Route::get('/receitas', [App\Http\Controllers\ReceitasController::class, 'indexFrontend'])->name('receitas');



//MensagensController
Route::get('/contactos', [App\Http\Controllers\MensagensController::class, 'indexFrontend'])->name('index_contactos_frontend');





//UsersController
Route::get('/perfil', [App\Http\Controllers\UsersController::class, 'indexFrontend'])->name('perfil');

Route::delete('/destroy/{user}', [App\Http\Controllers\UsersController::class, 'user_destroy'])->name('users.destroy');



//VinhosController
Route::get('/vinhos', [App\Http\Controllers\VinhosController::class, 'indexFrontend'])->name('vinhos');

Route::get('/vinhos/{vinho}', [App\Http\Controllers\VinhosController::class, 'vinhos_detalhes'])->name('vinho');





/////         Autenticação      /////

//LoginController
Auth::routes(['verify' => true]);

//LoginController
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'indexFrontend'])->name('login');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');





/////         Páginas Backend      /////
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin_dashboard');
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

//Route::get('/admin/vinhos', [App\Http\Controllers\VinhosController::class, 'index'])->name('admin_vinhos');

//Route::get('/admin/vinhos/create', [App\Http\Controllers\VinhosController::class, 'create'])->name('admin_vinhos_create');
//Route::get('/admin/vinhos/edit', [App\Http\Controllers\VinhosController::class, 'edit'])->name('admin_vinhos_edit');

Route::resource('/admin/vinhos', VinhosController::class);

Route::get('/admin/insert_vinho', function () {
    return view('paginas.backend.insert_vinho');
})->name('admin_insert_vinho');

Route::get('/admin/insert_categoria_vinho', function () {
    return view('paginas.backend.insert_categoria_vinho');
})->name('admin_insert_categoria_vinho');

Route::resource('/admin/categoria_vinho', VinhosController::class);

//receitas Admin

//Route::get('/admin/receitas', [App\Http\Controllers\ReceitasController::class, 'index'])->name('receitas.index');
//Route::get('/admin/receitas/{receita}/show', [App\Http\Controllers\ReceitasController::class, 'show'])->name('receitas.show');
//Route::get('/admin/receitas/create', [App\Http\Controllers\ReceitasController::class, 'create'])->name('receitas.create');
//Route::post('/admin/receitas', [App\Http\Controllers\ReceitasController::class, 'store'])->name('receitas.store');

Route::resource('/admin/receitas', ReceitasController::class);

Route::resource('/admin/faq', FAQController::class);

//mensagens
Route::post('/admin/dashboard', [App\Http\Controllers\ChatController::class, 'frontend_store'])->name('mensagens_backend_store');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/contactos', function () {
    return view('paginas.frontend.contactos');
})->name('contactos');
Route::get('/sobre', function () {
    return view('paginas.frontend.sobre');
})->name('sobre');


Route::get('/sobre_vinhos', function () {
    return view('paginas.frontend.sobre_vinhos');
})->name('sobre_vinhos');

Route::get('/login', function () {
    return view('paginas.frontend.login');
})->name('login');

Route::get('/receitas', function () {
    return view('paginas.frontend.receitas');
})->name('receitas');

Route::get('/faq', [App\Http\Controllers\MainController::class, 'faq'])->name('faq');

Route::get('/blog', [App\Http\Controllers\MainController::class, 'blog'])->name('blog');

Route::get('/previewblog/{previewblog}', [App\Http\Controllers\MainController::class, 'previewblog'])->name('previewblog');

Auth::routes();


//Admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');

Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin_dashboard');

Route::get('/admin/faq', [App\Http\Controllers\FAQController::class, 'faq'])->name('faq_admin');

//blog Admin

Route::get('/admin/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('admin_blog');

Route::post('/admin/blog/create', [App\Http\Controllers\BlogController::class, 'inser_blog'])->name('blog.store');

Route::get('/admin/blog/create', [App\Http\Controllers\BlogController::class, 'inserir_blog'])->name('blog.create');

Route::put('/admin/blog/{blog}/update', [App\Http\Controllers\BlogController::class, 'updateBlog'])->name('blog.update');

Route::get('/admin/blog/{blog}/edit/', [App\Http\Controllers\BlogController::class, 'editBlog'])->name('editblog');

Route::get('/admin/blog/{blog}/show/', [App\Http\Controllers\BlogController::class, 'showBlog'])->name('showblog');

Route::delete('/admin/blog/{blog}', [App\Http\Controllers\BlogController::class, 'destroyBlog'])->name('destroy.blog');

//receitas Admin

Route::get('/admin/receitas', [App\Http\Controllers\AdminController::class, 'receitas_index'])->name('receitas_index');


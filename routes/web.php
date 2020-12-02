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
});

Route::get('/login',[MainController::class, 'login']);

Route::get('/contactos', function () {
    return view('paginas.frontend.contactos');
});
Route::get('/sobre', function () {
    return view('paginas.frontend.sobre');
});
Route::get('/sobre_vinhos', function () {
    return view('paginas.frontend.sobre_vinhos');
});
Route::get('/settings', function () {
    return view('includes.frontend.settings');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VacinaController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/admin/vacina', [VacinaController::class, 'create'])->name('vacinas.create');
    Route::post('/admin/vacina', [VacinaController::class, 'store'])->name('vacinas.store');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/vacinas', [VacinaController::class, 'index'])->name('vacinas.index');

    Route::get('/usuario/perfil', [UsuarioController::class, 'show'])->name('usuarios.meu-perfil');
    Route::get('/usuario/perfil-editar', [UsuarioController::class, 'edit'])->name('usuarios.editar-perfil');
    Route::put('/usuario/perfil-editar', [UsuarioController::class, 'update'])->name('usuarios.editar-perfil');
    Route::get('/usuario/caderneta', [UsuarioController::class, 'showCaderneta'])->name('usuarios.minha-caderneta');
    Route::get('/configuracoes', [UsuarioController::class, 'showConfiguracoes'])->name('usuarios.configuracoes');

    Route::get('/vacinas/add', [VacinaController::class, 'createVacinaUsuario'])->name('vacinas.usuario.create');
    Route::post('/vacinas/add', [VacinaController::class, 'storeVacinaUsuario'])->name('vacinas.usuario.store');
});

Route::get('/calendario', [VacinaController::class, 'showCalendario'])->name('vacinas.calendario');

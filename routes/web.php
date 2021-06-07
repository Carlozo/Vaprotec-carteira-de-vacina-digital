<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UsuarioDoseController;
use App\Http\Controllers\VacinaController;
use Illuminate\Support\Facades\Auth;
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
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/usuario/perfil', [UsuarioController::class, 'show'])->name('usuarios.meu-perfil');
    Route::get('/usuario/perfil-editar', [UsuarioController::class, 'edit'])->name('usuarios.editar-perfil');
    Route::put('/usuario/perfil-editar', [UsuarioController::class, 'update'])->name('usuarios.editar-perfil');
    Route::get('/usuario/caderneta', [UsuarioController::class, 'showCaderneta'])->name('usuarios.minha-caderneta');
    Route::get('/configuracoes', [UsuarioController::class, 'showConfiguracoes'])->name('usuarios.configuracoes');
    Route::delete('/usuarios', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

    Route::get('/vacinas', [VacinaController::class, 'index'])->name('vacinas.index');
    Route::get('/menu-vacina', [VacinaController::class, 'showMenuVacina'])->name('vacinas.menu');
    Route::get('/admin/vacina', [VacinaController::class, 'create'])->name('vacinas.create');
    Route::post('/admin/vacina', [VacinaController::class, 'store'])->name('vacinas.store');
    Route::get('/vacinas/{vacina}/doses', [VacinaController::class, 'getDoses'])->name('vacinas.doses.get');

    Route::get('/vacinas/add', [UsuarioDoseController::class, 'create'])->name('doses.create');
    Route::post('/vacinas/add', [UsuarioDoseController::class, 'store'])->name('doses.store');

    Route::post('/usuarios/doses/{usuarioDose}', [UsuarioDoseController::class, 'destroy']);
});

Route::get('/calendario', [VacinaController::class, 'showCalendario'])->name('vacinas.calendario');

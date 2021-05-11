<?php

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
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/admin/vacina', [App\Http\Controllers\VacinaController::class, 'create'])->name('vacinas.create');
    Route::post('/admin/vacina', [App\Http\Controllers\VacinaController::class, 'store'])->name('vacinas.store');
    Route::get('/vacinas', [App\Http\Controllers\VacinaController::class, 'index'])->name('vacinas.index');
});

Route::get('/calendario', [VacinaController::class, 'showCalendario'])->name('vacinas.calendario.index');

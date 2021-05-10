<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/adicionar-vacina', [EventController::class, 'adicionarVacina']);

Route::get('/cadastrar-conta', [EventController::class, 'cadastrarConta']);

Route::get('/calendario', [EventController::class, 'calendario']);

Route::get('/configuracoes', [EventController::class, 'configuracoes']);

Route::get('/editar-perfil', [EventController::class, 'editarPerfil']);

Route::get('/excluir-conta', [EventController::class, 'excluirConta']);

Route::get('/informacoes', [EventController::class, 'informacoes']);

Route::get('/meu-perfil', [EventController::class, 'meuPerfil']);

Route::get('/minha-caderneta', [EventController::class, 'minhaCaderneta']);

Route::get('/redefinir-senha', [EventController::class, 'redefinirSenha']);

Route::get('/vacina', [EventController::class, 'vacina']);




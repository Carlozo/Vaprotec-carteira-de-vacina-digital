<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function adicionarVacina(){
        return view('adicionar-vacina');
    }

    public function cadastrarConta(){
        return view('cadastrar-conta');
    }

    public function calendario(){
        return view('calendario');
    }

    public function configuracoes(){
        return view('configuracoes');
    }

    public function editarPerfil(){
        return view('editar-perfil');
    }

    public function excluirConta(){
        return view('excluir-conta');
    }

    public function informacoes(){
        return view('informacoes');
    }

    public function meuPerfil(){
        return view('meu-perfil');
    }

    public function minhaCaderneta(){
        return view('minha-caderneta');
    }

    public function redefinirSenha(){
        return view('redefinir-senha');
    }

    public function vacina(){
        return view('vacina');
    }
}

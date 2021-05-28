@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6 col-md-6 mx-auto">
                <div class="card border border-1 border-primary shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <img src="{{ asset('images/vacina1.png') }}" alt="" width="50">
                        <h4>Configurações</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            Configurações da conta
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="fas fa-id-badge me-3" style="font-size: 30px;"></i>
                                <span>Alterar dados</span>
                            </div>
                            <a class="btn-primary btn" href="{{ route('usuarios.editar-perfil') }}">Alterar</a>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="fas fa-unlock me-3" style="font-size: 30px;"></i>
                                <span>Senha</span>
                            </div>
                            <a class="btn-primary btn" href="{{ route('password.request') }}">Alterar</a>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="fas fa-trash me-3" style="font-size: 30px;"></i>
                                <span>Minha Conta</span>
                            </div>
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#confirm-exclusao-conta-modal">
                                Excluir
                            </button>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center align-items-center">
                            <a class="btn btn-warning h5" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt me-3" style="font-size: 20px;"></i>
                                {{ __('Sair') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm-exclusao-conta-modal" tabindex="-1" role="dialog"
         aria-labelledby="confirm-exclusao-conta-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">EXCLUSÃO DE CONTA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lembre-se de que esta ação excluirá sua conta permanentemente e todas as informações associadas a
                    ela como os dados do perfil e as doses de vacinas já tomadas.
                    <br>
                    <br>
                    Tem certeza que deseja excluir sua conta?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                    <form action="{{ route('usuarios.destroy') }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">SIM, EXCLUIR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container mb-3">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 mx-auto">

                <div class="card mt-5 border border-1 border-primary shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Vacina</h4>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="adicionar-vacina.php"
                               class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="badge bg-info text-dark me-2">
                                    <img src="{{ asset('images/vacina1.png') }}" width="40">
                                </div>
                                <h4 class="fw-bolder text-center">Adicionar Vacina</h4>
                            </a>
                            <a href="calendario.php"
                               class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="badge bg-info text-dark me-2">
                                    <img src="{{ asset('images/calendario1.png') }}" width="40">
                                </div>
                                <h4 class="fw-bolder text-center">Calendário</h4>
                            </a>
                            <a href="informacoes.php"
                               class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="badge bg-info text-dark me-2">
                                    <img src="{{ asset('images/info.png') }}" width="40">
                                </div>
                                <h4 class="fw-bolder text-center">Informações</h4>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

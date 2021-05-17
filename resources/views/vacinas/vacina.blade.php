@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-6 col-md-6 mx-auto">
                <div class="card border-primary shadow">
                    <h4 class="card-header text-center bg-primary text-white">Menu Vacina</h4>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="{{ route('doses.create') }}"
                               class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="badge bg-info mr-3">
                                    <img src="{{ asset('images/vacina1.png') }}" width="40" alt="">
                                </div>
                                <h4 class="font-weight-bold mt-2">Adicionar Vacina</h4>
                            </a>
                            <a href="{{ route('vacinas.calendario') }}"
                               class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="badge bg-info mr-3">
                                    <img src="{{ asset('images/calendario1.png') }}" width="40" alt="">
                                </div>
                                <h4 class="font-weight-bold mt-2">Calendário</h4>
                            </a>
                            <a href="{{ route('vacinas.index') }}"
                               class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="badge bg-info mr-3">
                                    <img src="{{ asset('images/info.png') }}" width="40" alt="">
                                </div>
                                <h4 class="font-weight-bold mt-2">Informações</h4>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

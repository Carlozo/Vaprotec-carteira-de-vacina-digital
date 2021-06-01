@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Página Inicial') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mt-3 shadow">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Acesso Rápido</h4>
                                        <div class="d-flex justify-content-center">
                                            <div class="p-2">
                                                <a href="{{ route('doses.create') }}"
                                                   class="caixa-home btn btn-outline-success me-2">
                                                    <img src="{{asset('images/vacina1.png')}}" width="60" alt="">
                                                </a>
                                            </div>
                                            <div class="p-2">
                                                <a href="{{ route('vacinas.calendario') }}"
                                                   class="caixa-home btn btn-outline-success">
                                                    <img src="{{'images/calendario1.png'}}" width="60" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mt-3 shadow">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Informações</h4>
                                        <p class="card-text">CoronaVac é uma vacina contra a COVID-19 desenvolvida pela
                                            companhia biofarmacêutica
                                            chinesa Sinovac Biotech em parceria com o Instituto Butantan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

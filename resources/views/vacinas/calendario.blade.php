@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <img class="mt-3 mb-3 img-fluid" src=" {{ asset('images/calendario crianca.png') }}"
                 alt="calendário de vacinação da criança">
            <img class="mb-3 img-fluid" src="{{ asset('images/calendario adolescente.png')}}"
                 alt="calendário de vacinação do adolescente">
            <img class="mb-3 img-fluid" src="{{ asset('images/calendario adulto-idoso.png')}}"
                 alt="calendário de vacinação do adulto e idoso">
            <img class="mb-3 img-fluid" src=".{{ asset('images/calendario gestante.png')}}"
                 alt="calendário de vacinação da gestante">
            <img class="mb-3 img-fluid" src="{{ asset('images/calendario viajante.png')}}"
                 alt="calendário de vacinação do viajante">
        </div>
    </div>
@endsection

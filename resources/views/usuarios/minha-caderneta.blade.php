@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5 w-50">
        <div class="card border border-1 border-primary shadow">
            <div class="card-header fw-bolder bg-primary text-white">
                <div class="row justify-content-md-center d-flex align-items-center">
                    <div class="col-md-2">
                        <img src="{{ asset('images/usuario1.png') }}" width="55px" alt="">
                    </div>

                    <div class="col-10">
                        <h5 class="fw-bolder">{{ auth()->user()->name }} - {{ auth()->user()->age() }} anos</h5>
                    </div>
                </div>
            </div>
            <div class="card-body text-center">
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Corona Virus</td>
                        <td>21/06/2021</td>
                    </tr>
                    <tr>
                        <td>Corona Virus</td>
                        <td>21/06/2021</td>
                    </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-center align-items-center">
                    <a class="btn btn-primary fw-bolda" type="button"
                       href="{{ route('vacinas.usuario.create') }}">
                        <i class="fas fa-syringe" style="font-size: 1.5rem;"></i> Adicionar Vacina</a>
                </div>
            </div>
        </div>
    </div>
@endsection

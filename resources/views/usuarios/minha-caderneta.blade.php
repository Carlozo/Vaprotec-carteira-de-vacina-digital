@extends('layouts.app')

@section('head')
    <script src="https://kit.fontawesome.com/c40b2d583b.js" crossorigin="anonymous"></script>
@endsection

@section('content')
    <div class="container w-50">
        @if(session('successMessage'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('successMessage') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @elseif(session('errorMessage'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('errorMessage') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card border border-1 border-primary shadow">
            <div class="card-header font-weight-bold bg-primary text-white">
                <div class="row justify-content-md-center d-flex align-items-center">
                    <div class="col-md-2">
                        <img src="{{ asset('images/usuario1.png') }}" width="55px" alt="">
                    </div>

                    <div class="col-md-10">
                        <h5 class="font-weight-bold my-auto">{{ $usuario->name . ' - ' .$usuario->getDescricaoIdade() }}</h5>
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
                    @foreach($usuario->doses as $dose)
                        <tr>
                            <td>{{ $dose->dose->vacina->nome }}</td>
                            <td>{{ \Carbon\Carbon::parse($dose->dose->data)->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center align-items-center">
                    <a class="btn btn-primary font-weight-bold"
                       href="{{ route('doses.create') }}">
                        <i class="fas fa-syringe"></i> Adicionar Vacina</a>
                </div>
            </div>
        </div>
    </div>
@endsection

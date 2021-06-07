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
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usuario->doses as $dose)
                        <tr data-id="{{ $dose->id }}">
                            <td>{{ $dose->dose->vacina->nome }}</td>
                            <td>{{ \Carbon\Carbon::parse($dose->dose->data)->format('d/m/Y') }}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-danger"
                                        data-toggle="tooltip" data-placement="top" title="Remover dose"><i
                                        class="fas fa-trash"></i>
                                </button>
                            </td>
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
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
        (function () {
            $('td button').click(function () {
                let td = $(this).closest('tr[data-id]');
                let id = td.data('id');

                $.ajax({
                    method: 'POST',
                    url: '/usuarios/doses/' + id,
                    data: {_token: '{{csrf_token()}}'}
                }).done(function () {
                    td.remove();
                    console.log('success');
                }).fail(function (jqXHR, textStatus) {
                    console.log(textStatus);
                });
            });
        })();
    </script>
@endsection

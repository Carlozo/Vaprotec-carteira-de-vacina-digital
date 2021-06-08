@extends('layouts.app')

@section('head')
    <script src="https://kit.fontawesome.com/c40b2d583b.js" crossorigin="anonymous"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto">
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
                                <h5 class="font-weight-bold my-auto">
                                    Carteirinha - {{ $usuario->name }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <table class="table table-responsive-md table-sm table-hover table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Vacina</th>
                                <th>Dose</th>
                                <th>Data</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($usuario->doses as $dose)
                                <tr data-id="{{ $dose->id }}">
                                    <td class="usuario-dose font-weight-bold"
                                        onclick="showDose({{$dose->id}})"
                                        style="cursor: pointer">{{ $dose->dose->vacina->nome }}</td>
                                    <td>{{ $dose->dose->descricao }}</td>
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
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="vacinaModalLabel">Coronavac</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <span class="text-muted">Doenças evitáveis</span>
                        <span id="doencasEvitaveisModal"></span>
                    </div>
                    <div>
                        <span class="text-muted">Categoria</span>
                        <span id="categoriaModal"></span>
                    </div>
                    <hr>
                    <div>
                        <span class="text-muted">Suas Observações</span>
                        <p id="observacoesModal"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showDose(id) {
            $.get('/usuarios/doses/' + id, function (usuarioDose) {
                $('#vacinaModalLabel').text(usuarioDose.dose.vacina.nome + ' - ' + usuarioDose.dose.descricao + ', ' + usuarioDose.dose.idade_descricao);
                $('#categoriaModal').text(usuarioDose.dose.vacina.categoria);
                $('#dataModal').text(usuarioDose.dose.data);
                $('#doencasEvitaveisModal').text(usuarioDose.dose.vacina.prevencoes);
                $('#observacoesModal').text(usuarioDose.observacoes ? usuarioDose.observacoes : 'Nenhuma');

                $('#exampleModal').modal('show');
            }).fail(function (jqXHR, textStatus) {
                console.log(textStatus);
            });
        }

        (function () {
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });

            $('td button').click(function () {
                let td = $(this).closest('tr[data-id]');
                let id = td.data('id');

                $('[data-toggle="tooltip"]').tooltip('hide');

                $.ajax({
                    method: 'POST',
                    url: '/usuarios/doses/' + id,
                    data: {_token: '{{csrf_token()}}'}
                }).done(function () {
                    td.remove();
                }).fail(function (jqXHR, textStatus) {
                    console.log(textStatus);
                });
            });
        })();
    </script>
@endsection

@extends('layouts.app')

@section('head')
    <script src="https://kit.fontawesome.com/c40b2d583b.js" crossorigin="anonymous"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session('successMessage'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('successMessage') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="card mb-5 shadow">
                    <div class="card-header font-weight-bold text-center h3">{{ __('Cadastrar Vacina') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('vacinas.create') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nome">{{ __('Nome') }}</label>

                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror"
                                       name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                                @error('nome')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="prevencoes">{{ __('Prevenções') }}</label>

                                <textarea id="prevencoes" name="prevencoes"
                                          class="form-control">{{ old('prevencoes') }}</textarea>

                                @error('prevencoes')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="categoria">{{ __('Categoria') }}</label>


                                <select class="custom-select" id="categoria" name="categoria" required>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="repetivel" value="true"
                                           id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Vacina pode ser tomada várias veses? <span class="text-muted">(ao marcar esta opção a vacina só poderá
                                            ter 1 dose)</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="font-weight-bold">Doses</span>
                                <hr>
                                <div id="doses">
                                    <div class="dose row mb-2">
                                        <div class="d-flex align-items-baseline col-md-4">
                                            <div class="numero-dose text-muted mr-3">1.</div>
                                            <select name="idades[]" class="form-control" data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="Idade em que a dose deverá ser tomada">
                                                @foreach ($idades as $value)
                                                    <option
                                                        value="{{ ((object) $value)->idade }}">{{ ((object) $value)->descricao }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="d-flex align-items-baseline col-md-8">
                                            <input type="text" class="form-control mr-3" name="descricoes[]"
                                                   placeholder="Descrição, ex.: Dose única, 2ª dose">
                                            <button type="button"
                                                    class="remover-dose-btn h-50 btn btn-danger btn-sm">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" id="add-dose-button" class="btn btn-primary btn-sm">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="text-center form-group mx-auto mb-0 mt-5">
                                <button type="submit" class="btn btn-primary col-md-6">
                                    {{ __('Cadastrar Vacina') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });

        $('#add-dose-button').click(function () {
            $('.dose').first().clone().insertAfter('div.dose:last');

            $('.remover-dose-btn').off('click');

            $('.remover-dose-btn').click(function () {
                removeDose($(this));
                atualizarNumeroDoses();
            });

            atualizarNumeroDoses();
        });

        function removeDose(btn) {
            if ($('.dose').length > 1) {
                $(btn).closest('.dose').remove();
            }
        }

        function atualizarNumeroDoses() {
            let i = 1;
            $('.dose').each(function () {
                $(this).find('.numero-dose').text(i++ + '.');
            });
        }
    </script>
@endsection

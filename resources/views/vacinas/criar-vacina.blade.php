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
                                <label for="categoria">{{ __('Categoria') }}</label>

                                <input id="categoria" type="text"
                                       class="form-control @error('categoria') is-invalid @enderror" name="categoria"
                                       value="{{ old('categoria') }}" required autocomplete="categoria">

                                @error('categoria')
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
                                <span class="font-weight-bold">Doses</span>
                                <hr>
                                <div id="doses">
                                    <div class="dose d-flex justify-content-start align-items-baseline mb-2">
                                        <div class="numero-dose mr-2">1º dose</div>
                                        <select name="idade[]" class="form-control w-25 mr-2" data-toggle="tooltip"
                                                data-placement="top"
                                                title="Idade em que a dose deverá ser tomada">
                                        </select>
                                        <button type="button"
                                                class="remover-dose-btn btn btn-danger btn-sm">
                                            <i class="fas fa-minus"></i>
                                        </button>
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
        let idadesDoses = @json($idades);

        idadesDoses.forEach(idadeDose =>
            $('select[name="idade[]"]').append(`<option value="${idadeDose.idade}">${idadeDose.descricao}</option>`)
        );

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
                $(this).find('.numero-dose').text(i++ + 'º dose');
            });
        }
    </script>
@endsection

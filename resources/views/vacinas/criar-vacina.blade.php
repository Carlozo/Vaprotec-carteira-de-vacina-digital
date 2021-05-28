@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                                <span for="doses" class="font-weight-bold">Doses</span>
                                <hr>
                                <div id="doses">
                                    <div class="dose d-flex">
                                        <div class="d-flex justify-content-center align-items-baseline mr-2">
                                            <label for="idade" class="mr-2">Idade</label>
                                            <input type="number" name="idade[]" value="0"
                                                   class="form-control" step="0.01">
                                        </div>
                                        <button type="button" id="remove-dose-button"
                                                class="btn btn-sm btn-secondary">-
                                        </button>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="button" id="add-dose-button" class="btn btn-primary btn-sm">+
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

    <script !src="">

        $('#add-dose-button').click(function () {
            $('#doses').append(`
                 <div class="dose d-flex mt-2">
                    <div class="d-flex justify-content-center align-items-baseline mr-2">
                        <label for="idade" class="mr-2">Idade</label>
                        <input type="number" name="idade[]" value="0"
                               class="form-control" step="0.01">
                    </div>
                    <button type="button" id="remove-dose-button" class="btn btn-sm btn-secondary">-</button>
                </div>
            `);

            $('#remove-dose-button').off('click');
            updateRemoveEvent();
        });

        function updateRemoveEvent() {
            $('#remove-dose-button').click(function () {
                removeDose($(this));
            });
        }

        function removeDose(removeButton) {
            console.log($('.dose').length);

            if ($('.dose').length > 1) {
                $(removeButton).closest('.dose').remove();
            }
        }
    </script>
@endsection

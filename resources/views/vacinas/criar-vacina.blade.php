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

                            <div class="text-center form-group mb-0 mx-auto">
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
@endsection

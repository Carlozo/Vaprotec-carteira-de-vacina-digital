@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-5 shadow">
                    <div class="card-header font-weight-bold text-center h3">{{ __('Cadastro no Vaprotec') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">{{ __('Nome') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('E-Mail') }}</label>

                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birthDate">Data de Nascimento</label>
                                        <input id="birthDate" type="date" class="form-control" name="birth_date"
                                               value="{{ old('birth_date') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="gender">Sexo</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender"
                                               value="Masculino" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender"
                                               value="Feminino">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Feminino
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="password">{{ __('Senha') }}</label>

                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password-confirm">{{ __('Confirmação Senha') }}</label>

                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>


                            <div class="text-center form-group mb-0 mx-auto">
                                <button type="submit" class="btn btn-primary col-md-6">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-6 col-md-6 mx-auto">
                <div class="card border border-1 border-primary shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <img src="{{ asset('images/vacina1.png') }} " alt="" width="50">
                        <h4>Editar dados de Perfil</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('usuarios.editar-perfil') }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name">Nome</label>
                                <input name="name" id="name" value="{{ $usuario->name }}" class="form-control"/>
                            </div>

                            <div class="mb-3">
                                <label for="birth_date">Data de nascimento</label>
                                <input type="date" id="birth_date" name="birth_date" class="form-control"
                                       value="{{ $usuario->birth_date }}">
                            </div>

                            <div class="mb-3">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" class="form-control" value="{{ $usuario->email }}"
                                       disabled>
                            </div>

                            <div class="mb-3">
                                <label>Sexo</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender"
                                           id="masculino-radio" value="Masculino"
                                           @if($usuario->gender == 'Masculino') checked @endif>
                                    <label class="form-check-label" for="masculino-radio">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender"
                                           id="feminino-radio" value="Feminino"
                                           @if($usuario->gender == 'Feminino') checked @endif>
                                    <label class="form-check-label" for="feminino-radio">
                                        Feminino
                                    </label>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <button class="btn btn-primary font-weight-bold col-md-6" type="submit">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

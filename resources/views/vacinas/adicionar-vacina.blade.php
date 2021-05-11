@extends('layouts.app')

@section('content')
    <div class="container mb-3">
        <div class="row">
            <div class="col-lg-6 col-md-6 mx-auto">
                <div class="card mt-4 border border-1 border-primary shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <img src="{{ asset('images/vacina1.png') }} " alt="" width="50">
                        <h4>Adicione Vacina a sua Cardeneta</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('vacinas.usuario.create') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="vacina" class="form-label">Vacina</label>
                                <select name="vacina" id="vacina" class="custom-select" required>
                                    @foreach($vacinas as $vacina)
                                        <option value="{{$vacina->id}}">{{$vacina->nome}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="data" class="form-label">Data</label>
                                <input type="date" id="data" name="data" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="observacoes" class="form-label">Observações</label>
                                <textarea name="observacoes" id="observacoes" rows="2" class="form-control"></textarea>
                            </div>

                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary fw-bold col-md-6">Adicionar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

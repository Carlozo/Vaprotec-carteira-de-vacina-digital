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
                        <form action="{{ route('doses.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="vacinas-select" class="form-label">Vacina</label>
                                <select id="vacinas-select" class="custom-select">
                                    @foreach($vacinas as $vacina)
                                        <option value="{{$vacina->id}}">{{$vacina->nome}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div id="dose-form-grop" class="form-group">
                                <label for="dose">Dose</label>
                                <select name="dose" id="dose" class="custom-select" required>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="data" class="form-label">Data</label>
                                <input type="date" id="data" name="data" @if(old('data')) value="{{ old('data') }}"
                                       @else value="{{ Carbon\Carbon::now()->toDateString() }}"
                                       @endif class="form-control"
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="observacoes" class="form-label">Observações</label>
                                <textarea name="observacoes" id="observacoes" rows="2"
                                          class="form-control">{{ old('observacoes') }}</textarea>
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

    <script type="text/javascript">
        let vacinas = @json($vacinas);

        $('#vacinas-select').change(function () {
            let vacinaSelecionada = $('#vacinas-select option:selected').val();
            // let vacina = vacinas.find(vacina => vacina.id === vacinaSelecionada);

            $.get('/vacinas/' + vacinaSelecionada + '/doses', function (doses) {
                let count = 1;

                $('#dose').empty();
                $('#dose-form-grop').show();
                doses.forEach(dose => {
                    let option = document.createElement('option');
                    option.value = dose.id;
                    option.innerText = count + 'ª dose';
                    $('#dose').append(option);
                    count++;
                });
            });
        });
    </script>
@endsection

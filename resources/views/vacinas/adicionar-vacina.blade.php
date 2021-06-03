@extends('layouts.app')

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

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
        (function () {
            let vacinas = @json($vacinas);

            if (vacinas.length > 0) {
                initSelectVacinas(vacinas);

                showDoses(vacinas[0].id);

                function initSelectVacinas(vacinas) {
                    let i = 0;
                    let data = [{
                        text: vacinas[i].categoria,
                        children: []
                    }];

                    vacinas.forEach(vacina => {
                        if (vacina.categoria !== data[i].text) {
                            i++;
                            data.push({
                                text: vacina.categoria,
                                children: []
                            });
                        }

                        vacina.text = vacina.nome;
                        data[i].children.push(vacina);
                    });

                    $('#vacinas-select').select2({
                        data: data
                    });

                    $('#vacinas-select').change(function () {
                        showDoses($('#vacinas-select option:selected').val());
                    });
                }

                function showDoses(vacinaId) {
                    $.get('/vacinas/' + vacinaId + '/doses', function (doses) {
                        $('#dose').empty();
                        $('#dose-form-grop').show();

                        let count = 1;
                        doses.forEach(dose => {
                            let option = document.createElement('option');
                            option.value = dose.id;
                            option.innerText = count + 'ª dose';
                            $('#dose').append(option);
                            count++;
                        });
                    });
                }
            }
        })();
    </script>
@endsection

@extends('layouts.app')

@section('content')
    <main role="main" class="container mb-3">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 mx-auto">
                <div class="card mt-4 border border-1 border-primary shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <img src="{{ asset('images/vacina1.png') }} " alt="" width="50">
                        <h4>Adicione Vacina a sua Cardeneta</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="vacina" class="form-label">Vacina</label>
                                <select name="vacina" id="vacina" class="form-select">
                                    <option>Papilomavírus Humano (HPV)</option>
                                    <option>VIP (vacina inativada contra a poliomielite, Salk)</option>
                                    <option>Meningocócica ACWY</option>
                                    <option>Hepatite B (recombinante)</option>
                                    <option>Dupla bacteriana adulto (dT)</option>
                                    <option>Tríplice Viral (SCR)</option>
                                    <option>Febre Amarela</option>
                                    <option>Dupla bacteriana adulto (dT)</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="data" class="form-label">Data</label>
                                <input type="date" id="data" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="observacoes" class="form-label">Observações</label>
                                <textarea name="observacoes" id="observacoes" rows="2" class="form-control"></textarea>
                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary fw-bold">Adicionar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection

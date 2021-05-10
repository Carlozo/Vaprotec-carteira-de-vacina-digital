@extends('layouts.modelo') {{--essa função puxa o layout modelo da pasta layouts--}}
@section('title', 'adicionar vacina') {{--essa função cria um título para esta pagina a partir do yeld dinamico da tela de layout main--}}
@section('content') {{--essa função cria o conteudo para esta pagina a partir do yeld dinamico da tela de layout main--}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="tela-inicial.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="meu-perfil.php">Meu Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="vacina.php">Vacina</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="calendario.php">Calendário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="configuracoes.php">Configurações</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main role="main" class="container mb-3">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 mx-auto">

                <div class="card mt-4 border border-1 border-primary shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <img src="imagens/vacina1.png" alt="" width="50">
                        <h4>Adicione Vacina a sua Cardeneta</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
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
                                <button class="btn btn-primary fw-bold" type="button">Adicionar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
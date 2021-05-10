@extends('layouts.modelo') {{--essa função puxa o layout modelo da pasta layouts--}}
@section('title', 'calendário') {{--essa função cria um título para esta pagina a partir do yeld dinamico da tela de layout main--}}
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
                            <a class="nav-link" href="vacina.php">Vacina</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="calendario.php">Calendário</a>
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

    <div class="row justify-content-md-center">
        <img class="mt-3 mb-3" src="../imagens/calendario crianca.png" alt="calendário de vacinação da criança" style="width: 55%;">
        <img class="mb-3" src="../imagens/calendario adolescente.png" alt="calendário de vacinação do adolescente" style="width: 55%;">
        <img class="mb-3" src="../imagens/calendario adulto-idoso.png" alt="calendário de vacinação do adulto e idoso" style="width: 55%;">
        <img class="mb-3" src="../imagens/calendario gestante.png" alt="calendário de vacinação da gestante" style="width: 55%;">
        <img class="mb-3" src="../imagens/calendario viajante.png" alt="calendário de vacinação do viajante" style="width: 55%;">
    </div>
@endsection
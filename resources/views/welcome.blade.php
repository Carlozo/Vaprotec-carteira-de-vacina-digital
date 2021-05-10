@extends('layouts.modelo') {{--essa função puxa o layout modelo da pasta layouts--}}
@section('title', 'tela-inicial') {{--essa função cria um título para esta pagina a partir do yeld dinamico da tela de layout main--}}
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
                            <a class="nav-link active" aria-current="page" href="tela-inicial.blade.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="meu-perfil.php">Meu Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="vacina.php">Vacina</a>
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

    <div class="banner-header">
        <img src="/imagens/banner.jpg" alt="banner" style="width: 70%;">
    </div>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-md-center">

        <div class="col-md-4">
            <div class="card mt-3 shadow">
            <div class="card-body">
                <h4 class="card-title text-success text-center">Acesso Rápido</h4>
                <div class="d-flex justify-content-center">
                <div class="p-2">
                    <a href="vacina.php" class="btn btn-outline-success me-2">
                    <img src="/imagens/vacina1.png" width="60">
                    </a>
                </div>
                <div class="p-2">
                    <a href="calendario.php" class="btn btn-outline-success">
                    <img src="/imagens/calendario1.png" width="60">
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3 shadow">
            <div class="card-body">
                <h4 class="card-title text-success text-center">Informações</h4>
                <p class="card-text">CoronaVac é uma vacina contra a COVID-19 desenvolvida pela companhia biofarmacêutica
                chinesa Sinovac Biotech em parceria com o Instituto Butantan.</p>
            </div>
            </div>
        </div>

        </div>
    </div>
@endsection

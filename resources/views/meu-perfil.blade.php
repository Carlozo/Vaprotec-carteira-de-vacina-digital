@extends('layouts.modelo') {{--essa função puxa o layout modelo da pasta layouts--}}
@section('title', 'meu perfil') {{--essa função cria um título para esta pagina a partir do yeld dinamico da tela de layout main--}}
@section('content') {{--essa função cria o conteudo para esta pagina a partir do yeld dinamico da tela de layout main--}}
    <header>
        <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="tela-inicial.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="meuPerfil.php">Meu Perfil</a>
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
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5 mb-5 w-50">
        <div class="card border border-1 border-primary shadow">
            <div class="card-header fw-bolder bg-primary text-white">
                <div class="row justify-content-md-center d-flex align-items-center">
                    <div class="col-md-2">
                    <img src="../imagens\usuario1.png" width="55px">
                    </div>

                    <div class="col-10">
                    <h5 class="fw-bolder">Maria Silva de Santos - 10 Anos</h5>
                    </div>
                </div>
            </div>
            <div class="card-body text-center">
                <img src="../imagens/vacina1.png" width="60px">
                <p class="h4 fw-bolder text-success">Vacinas estão em dia</p>

                <a class="btn btn-info mt-3" href="minha-caderneta.php">
                <img src="../imagens/calendario1.png" width="60px">
                <h5 class="text-white">Minha cardeneta</h5>
                </a>
            </div>
        </div>
    </div>
@endsection
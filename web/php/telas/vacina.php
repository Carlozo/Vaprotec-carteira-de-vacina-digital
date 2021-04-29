<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Vacina</title>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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

                <div class="card mt-5 border border-1 border-primary shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Vacina</h4>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="adicionar-vacina.php"
                                class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="badge bg-info text-dark me-2">
                                    <img src="../imagens/vacina1.png" width="40">
                                </div>
                                <h4 class="fw-bolder text-center">Adicionar Vacina</h4>
                            </a>
                            <a href="calendario.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="badge bg-info text-dark me-2">
                                    <img src="../imagens/calendario1.png" width="40">
                                </div>
                                <h4 class="fw-bolder text-center">Calendário</h4>
                            </a>
                            <a href="informacoes.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="badge bg-info text-dark me-2">
                                    <img src="../imagens/info.png" width="40">
                                </div>
                                <h4 class="fw-bolder text-center">Informações</h4>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-primary">
        <div class="container text-white text-center">
            Companhia da Vacina© 2021. Todos direitos reservados.
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>
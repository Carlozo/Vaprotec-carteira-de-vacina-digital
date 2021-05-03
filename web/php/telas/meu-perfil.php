<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="telaInicial.css">
    <title>Meu Perfil</title>
</head>
<body class="d-flex flex-column h-100">
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

  <footer class="footer mt-auto py-3 bg-primary">
    <div class="container text-white text-center">
      Companhia da Vacina© 2021. Todos direitos reservados.
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
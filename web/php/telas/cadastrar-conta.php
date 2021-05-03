<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Cadastrar Conta</title>
</head>
<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-lg  navbar-dark bg-primary p-4"></nav>
    </header>

    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 mx-auto">
                <div class="card shadow border border-primary">
                    <div class="card-header">
                        <h3 class="text-center ">Cadastro</h3>
                    </div>
                    <div class="card-body">
                        <form class="" action="../comandos/Cadastrar.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label" for="">
                                    Nome:
                                </label>
                                <input name="nome" id="nome" class="form-control" type="text" placeholder="Inserir Nome">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="">
                                    Data de Nascimento:
                                </label>
                                <input name="nasc" id="nasc" class="form-control" type="date" placeholder="Inserir Data de Nascimento">
                            </div>

                            <div class="mb-3">
                                <label class="me-2">Sexo:</label>
                                <input type="radio" id="feminino" name="genero" value="feminino">
                                <label class="me-1" for="feminino">feminino</label>
                                <input type="radio" id="masculino" name="genero" value="masculino">
                                <label for="masculino">masculino</label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="">
                                    Email:
                                </label>
                                <input name="email" id="email" class="form-control" type="email" placeholder="Inserir Email">
                            </div>
                
                            <div class="mb-3">
                                <label class="form-label" for="">
                                    Senha:
                                </label>
                                <input name="senha" id="senha" class="form-control" type="password" placeholder="Inserir Senha">
                            </div>
                            
                            <button class="form-control btn btn-primary mt-3">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>
</html>
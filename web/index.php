<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Login</title>
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
                        <h3 class="text-center ">Login</h3>
                    </div>
                    <div class="card-body">
                        <form class="" action="php/comandos/logar.php" method="POST">
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
    
                            <div class="mb-3 d-flex justify-content-center">
                                <a class="me-4 text-decoration-none" href="php/telas/redefinir-senha.php">esqueceu sua senha?</a>
                                <a class="text-decoration-none" href="php/telas/cadastrar-conta.php">criar uma conta!</a>
                            </div>
                            
                            <button class="form-control btn btn-primary" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-primary">
        <div class="container text-white text-center p-4"></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>
</html>
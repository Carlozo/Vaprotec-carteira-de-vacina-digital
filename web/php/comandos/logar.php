<?php

    echo $_POST["email"];
    echo $_POST["senha"];

    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
        require_once('conn.php');
        require_once('Usuario.classe.php');

        $u = new Usuario();

        $email = addslashes($_POST["email"]);
        $senha = addslashes($_POST["senha"]);

        if ($u->login($email,$senha == true)) {
            if (isset($_SESSION['idu'])) {
                header("Location: php/telas/tela-inicial.php");
            }else{
                header("Location: http://localhost/TCC/web/");
            }
        }else{
            header("Location: http://localhost/TCC/web/");
        }
    }else{
        header("Location: http://localhost/TCC/web/");
    }
?>
<?php

    $Email = addslashes($_POST["email"]);
    $Senha = addslashes($_POST["senha"]);

    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
        require_once('Conn.php');
        require_once('usuarioClasse.php');

        $user = new Usuario();

        if ($user->Login($Email,$Senha == true)) {
            if (isset($_SESSION['id_usuario'])) {
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
<?php
    $Nome = addslashes($_POST["nome"]);
    $Nascimento = addslashes($_POST["nasc"]);
    $Sexo = addslashes($_POST["genero"]);
    $Email = addslashes($_POST["email"]);
    $Senha = addslashes($_POST["senha"]);

    $dados = [$Nome,$Nascimento,$Sexo,$Email,$Senha];

    function verificarDados($dados){
        $n = 0;
        for($i = 0; $i <= strlen($dados); $i++){
        
            if($dados[$i] != Null){
                $n++;
                if($n >= 5){
                    return true;
                }
            }else{
                return false;
            }
        }
    }

    if (verificarDados($dados)) {
        require_once('Conn.php');
        require_once('usuarioClasse.php');

        $user = new Usuario();

        if ($user->Cadastro($dados[0], $dados[1], $dados[2], $dados[3], $dados[4])){
            header("Location: php/telas/tela-inicial.php");
        }else{
            header("Location: http://localhost/TCC/web/php/telas/cadastrar-conta.php");
        }
    }else{
        header("Location: http://localhost/TCC/web/php/telas/cadastrar-conta.php");
    }
?>
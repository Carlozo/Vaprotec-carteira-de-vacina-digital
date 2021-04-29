<?php
include_once("conn.php");
include_once("login.php");
    session_start();

    if((isset($_POST['email'])) && (isset($_POST['senha']))){
	$usuario = pg_escape_string($conn, $_POST['email']);
	$senha = pg_escape_string($conn, $_POST['senha']);
	$senha = md5($senha); 

	$sql = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
	$result = pg_query($conn, $sql);
	$resultado = pg_fetch_assoc($result);

        if(empty($resultado)){
	    $_SESSION['loginErro'] = "Usuário ou senha inválidos";
            header("Location: index.php");
        }elseif(isset($resultado)){
	    header("Location: tela-inicial.php");
	    }else{
            $_SESSION['loginErro'] = "Usuário ou senha inválidos";
            header("Location: index.php");
        }

    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválidos";
        header("Location: index.php");
    }
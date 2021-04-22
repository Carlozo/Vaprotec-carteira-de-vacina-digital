<?php
    $db_dsn = '';
    $db_user = '';
    $db_pass = '';

    try {
        $conn = new PDO('pgsql:host=localhost;dbname=meuBancoDeDados', $db_user, $db_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>


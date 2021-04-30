<?php

    $host = "ec2-3-91-127-228.compute-1.amazonaws.com";
    $user = "ygqmnjoptrzzre";
    $password = "fd1639d1a470bf5fab8240c94a69a3c2be6c75021f7cc198fad6904030bdd75a";
    $dbname = "d8tv52b41bpo4d";
    $port = "5432";

    try {
        $dsn = 'pgsql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname . ';user=' . $user . ';password=' . $password;
        
        $pdo = new PDO($dsn,$user,$password);
        $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        echo 'Falha ao conectar!' . $e->getMessage();
    }
?>



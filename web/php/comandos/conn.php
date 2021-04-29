<?php
    $db_dsn = 'pgsql:host=ec2-3-91-127-228.compute-1.amazonaws.com;dbname=d8tv52b41bpo4d';
    $db_user = 'ygqmnjoptrzzre';
    $db_pass = 'fd1639d1a470bf5fab8240c94a69a3c2be6c75021f7cc198fad6904030bdd75a';

    try {
        $conn = new PDO($db_dsn, $db_user, $db_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'FOIIII';
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>



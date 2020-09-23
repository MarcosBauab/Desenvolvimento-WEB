<?php

    $pdo = new PDO('mysql:host=localhost;dbname=banco_modulo8','root','');
    #Query é outra forma de executar comandos de banco de dados
    /*$tabelas = $pdo->query("SHOW TABLES");
    $tabelas = $tabelas->fetchAll();

    echo '<pre>';
    print_r($tabelas);
    echo '</pre>';*/
    
    #Usa-se o exec() porque não retorna nenhum valor
    $sql = 'CREATE TABLE IF NOT EXISTS criadaPHP(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome_aleatorio VARCHAR(30) NOT NULL
        )';    
    $pdo->exec($sql);
?>
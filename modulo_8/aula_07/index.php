<?php
    #LEFT JOIN = pega com base na tabela da esquerda e mostra todos dela 
    /*$pdo = new PDO('mysql:host=localhost;dbname=banco_modulo8','root','');
    $sql = $pdo->prepare("SELECT * FROM `clients` LEFT JOIN cargos ON `clients`.`cargo` = `cargos`.`id`");
    $sql->execute();
    $clients = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach ($clients as $key => $value) {
        echo $value['nome'];
        echo '=>';
        echo $value['nome_cargo'];
        echo '<hr>';
    }*/


    #RIGHT JOIN = pega com base na tabela da direita e aparece todos dela
    $pdo = new PDO('mysql:host=localhost;dbname=banco_modulo8','root','');
    $sql = $pdo->prepare("SELECT * FROM `clients` RIGHT JOIN cargos ON `clients`.`cargo` = `cargos`.`id`");
    $sql->execute();
    $clients = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach ($clients as $key => $value) {
        echo $value['nome'];
        echo '=>';
        echo $value['nome_cargo'];
        echo '<hr>';
    }
    
    

?>
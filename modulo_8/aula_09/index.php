<?php
    #PESQUISA AVANÇADA

    $pdo = new PDO('mysql:host=localhost;dbname=banco_modulo8','root','');
    //Pesquisa com caracteres parecidos
    $sql = $pdo->prepare("SELECT * FROM clients WHERE nome LIKE '%l%'");
    $sql->execute();

    $nomes = $sql->fetchAll();

    echo '<pre>';
    print_r($nomes);
    echo '</pre>';
?>
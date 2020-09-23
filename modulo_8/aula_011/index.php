<?php
    #SUBQUERY = QUERY DENTRO DA OUTRA

    $pdo = new PDO('mysql:host=localhost;dbname=banco_modulo8','root','');
    
    $sql = $pdo->prepare("SELECT * FROM clients WHERE id =(SELECT id FROM cargos WHERE nome_cargo = 'Programador' )");
    $sql->execute();

    $mostrar = $sql->fetchAll();

    echo '<pre>';
    print_r($mostrar);
    echo '</pre>';
?>
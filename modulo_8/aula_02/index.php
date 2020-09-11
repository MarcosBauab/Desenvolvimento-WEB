<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    $id = 4;
    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Marcos', sobrenome='Vinicius' WHERE id=$id ");
    
    if($sql->execute()){
        echo "Cliente atualizado.";
    }
?>
<?php
    
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    $id = 1;
    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=? ");
    #Seguro executando com array
    if($sql->execute(array($id))){
        echo "Cliente deletado.";
    }
    
?>
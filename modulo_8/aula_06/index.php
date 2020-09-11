<?php

    $pdo = new PDO('mysql:host=localhost;dbname=banco_modulo8','root','');
    #GROUP BY -> agrupa por algum elemento da tabela
    #LIMIT = limita a quantidade de dados de retorno // LIMIT 1,3 = começa do primeiro e retorna 3
    #ORDER BY = ordena por ASC(crescente) ou DESC(decrescente)
    $sql = $pdo->prepare("SELECT * FROM `clients` /*GROUP BY*/ ORDER BY nome DESC LIMIT 4");
    $sql->execute();
    $clients = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach ($clients as $key => $value) {
        echo $value['nome'];
        echo '<hr>';
    }
    
    
    
    
    /*echo '<pre>';
    print_r($clients);
    echo '</pre>';
    */


    #TESTE
    /*$array = ['nome'=>'zé', '2', 3, 'marcos'];
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    foreach ($array as $ar => $value) {
        echo $array['nome'];
    }*/
?>
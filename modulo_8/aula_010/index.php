<?php
    #IN E BETWEEN

    /*$pdo = new PDO('mysql:host=localhost;dbname=banco_modulo8','root','');
    //IN = pega todos que possuem id (1 e 3)
    $sql = $pdo->prepare("SELECT * FROM clients WHERE id IN (1,4)");
    $sql->execute();

    $nomes = $sql->fetchAll();

    echo '<pre>';
    print_r($nomes);
    echo '</pre>';*/
    
    /*$pdo = new PDO('mysql:host=localhost;dbname=banco_modulo8','root','');
    //BETWEEN = pega entre, útil em datas
    $sql = $pdo->prepare("SELECT * FROM clients WHERE `data` BETWEEN '2020-09-01' AND '2020-09-04'");
    $sql->execute();

    $nomes = $sql->fetchAll();

    echo '<pre>';
    print_r($nomes);
    echo '</pre>';*/

    #TESTE
    $pdo = new PDO('mysql:host=localhost;dbname=banco_modulo8','root','');
    #GROUP BY -> agrupa por algum elemento da tabela
    #LIMIT = limita a quantidade de dados de retorno // LIMIT 1,3 = começa do primeiro e retorna 3
    #ORDER BY = ordena por ASC(crescente) ou DESC(decrescente)
    $sql = $pdo->prepare("SELECT * FROM `clients` GROUP BY cargo HAVING data > '2020-09-01' LIMIT 4");
    $sql->execute();
    $clients = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach ($clients as $key => $value) {
        echo $value['cargo'];
        echo '<hr>';
    }
?>
<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    /*$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = ?");
    #Pega da URL a categoria
    $sql->execute(array($_GET['categoria_id']));
    //Retorna um array dos posts
    $info = $sql->fetchAll();
    //Passa por todo o array
    //key = índice do array
    foreach ($info as $key => $value) {
        echo 'Título: '.$value['titulo'];
        echo '<br>';
        echo 'Conteúdo: '.$value['conteudo'];
        echo '<hr>';
    }
    #Ou por meio do for normal:
    
    for($i = 0; $i < count($info); $i++){
        echo 'Título: '.$info[$i]['titulo'];
        echo '<br>';
        echo 'Texto: '.$info[$i]['conteudo'];
        echo '<hr>';
    }
    */
    
    #Relacionando duas tabelas:
    /*$sql = $pdo->prepare("SELECT * FROM categorias");
    $sql->execute();
    //Retorna um array dos posts
    $info = $sql->fetchAll();
    //Passa por todo o array
    //key = índice do array
    foreach ($info as $key => $value) {
        $categoria_id = $value['id'];
        echo 'Exibindo posts de '.$value['nome'];
        echo '<br>';
        $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
        $sql->execute();
        $inf = $sql->fetchAll();
        foreach ($inf as $key => $value) {
            echo 'Título: '.$value['titulo'];
            echo '<br>';
            echo 'Conteúdo: '.$value['conteudo'];
            echo '<hr>';
        }
    }
    */
    #Inner Join junta duas tabelas mas desorganizadamente
    #o ON então faz a comparação entre as duas tabelas para organizar
    $sql = $pdo->prepare("SELECT `posts`.*, `categorias`.*,`posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id`= `categorias`.`id`");
    $sql->execute();
    #PDO::FETCHASSOC = tira os números repetidos dos Arrays que vem do banco de dados
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($info);
    echo '</pre>';
?>
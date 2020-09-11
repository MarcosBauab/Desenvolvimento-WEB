<?php
    define('HOST', 'localhost');
    define('DB', 'modulo_8');
    define('USER', 'root');
    define('PASS', '');
    #try e catch para não mostrar os dados se der erro
    try{                                                                  #Seta o padrão para UTF-8
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e) {
        echo 'Erro ao conectar!';
    }


?>
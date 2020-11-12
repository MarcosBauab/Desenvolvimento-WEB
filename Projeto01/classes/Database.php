<?php
    class Database{
        private static $pdo;
        public static function conectar(){
            try{                                                                  #Seta o padrão para UTF-8
                self::$pdo = new PDO('mysql:host='.SERVIDOR.';dbname='.DATABASE, USUARIO, SENHA, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return self::$pdo;
            } catch(Exception $e) {
                echo 'Erro ao conectar!';
            }
        }   


    }
?>
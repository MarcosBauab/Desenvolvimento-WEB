<?php
    #Não pode ser instanciada
    #serve apenas para ser extendida
    abstract class Teste {
        public function funcao1(){

        }
        
        abstract function funcao2();
    }

    class Principal extends Teste{
        public function funcao2(){

        }
    }
?>
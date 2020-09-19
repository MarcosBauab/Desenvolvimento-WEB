<?php

    class Classe 
    {
        private $nome;
        private $idade;
        public function __construct($nome, $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function mostrar(){
            echo $this->nome;
            echo $this->idade;
        }
    }
    


?>
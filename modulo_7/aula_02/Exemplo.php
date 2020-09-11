<?php
    
    
    class Exemplo
    {
        private $var1;
        public $var2;

        /*public static function funcao(){
            echo 'oi';

        }*/
        //Setar uma variável privada
        public function setVar1($novaVar){
            $this->var1 = $novaVar;
            return $this->var1;
        }
        public function mostraVar1(){
            return $this->var1;
        }

    }

?>
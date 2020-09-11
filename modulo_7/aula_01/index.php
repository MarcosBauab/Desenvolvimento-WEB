<?php

    class Pessoa{
        public function comer(){
            $this;
            echo 'comi';
        }
    }
    $comer = new Pessoa();
    $comer->comer();
?>
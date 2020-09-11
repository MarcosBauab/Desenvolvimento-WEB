<?php

    $texto = "SUPER TEXTO GIGANTÃO SUPER TEXTO GIGANTÃO SUPER TEXTO GIGANTÃO SUPER TEXTO GIGANTÃO SUPER TEXTO GIGANTÃO SUPER TEXTO GIGANTÃOSUPER TEXTO GIGANTÃO SUPER TEXTO GIGANTÃO SUPER TEXTO GIGANTÃO";
    //Serve para recortar uma string:
    //Variável com a string, desde o começo = 0, e o tamanho = 10
    //echo substr($texto, 0, 10);
    //Divide o texto em partes de acordo com o parâmetro
    //nesse caso o espaço e transforma em um array
    $dividido = explode(' ', $texto);
    print_r($dividido);
    //E o implode junta de novo
    //e vira uma string de novo
    implode(' ', $dividido);

    //strip_tags retira todo código html no texto
    $text = '<h1>Super título</h1>';
    //RETIRA O H1
    echo strip_tags($text);

    //htmlentities mostra todos os códigos html sem interpretá-los
    //bom para demonstrar trechos de código sem interpretar
    echo htmlentities($text);
    $var = "Ol";
    switch($var){
        case "Olá":
            echo ("Sim");
            break;
        default:
            echo "Não";
            break;
    }
    
?>
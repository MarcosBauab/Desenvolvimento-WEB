<?php 
    $frase = 'Meu nome é ';
    $nome = 'Marcos';

    //Concatenação:
    echo $frase.$nome;
    //ou
    echo "Meu nome é $nome";

    //Para não dar conflito : \ = lê como string
    echo "<div class=\"$nome\">CONTEÚDO DA DIV</div>"

?>
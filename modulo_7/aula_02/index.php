<?php
    #Inclui uma classe
    include('Exemplo.php');
    //Instanciando a classe
    $exemplo = new Exemplo();
    //Setar a variável que estava vazia
    #Não dá para usar porque é private
    //$exemplo->var1 = 'oi';
    $exemplo->var2 = 'Marcos';
    echo $exemplo->var2;
    #Esse objeto é diferente do objeto ali de cima
    #e portanto as variáveis só se aplicam ao de cima
    $exemplo2 = new Exemplo();


    //Para chamar elementos estáticos é assim:
    #echo Exemplo::funcao();

    $exemplo->setVar1('Mar');
    echo $exemplo->mostraVar1();
?>
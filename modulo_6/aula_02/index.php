<?php

    //Arrays simples:
    $arr = array('oi', 'tchau', 23);
    $arr = ['oi', 'tchau', 23];
    //Adiciona no próximo
    $arr[] = 'amigo';

    //Arrays multidimensionais
    $arr2 = array(array('jeferson', 'clebin'), array('chique', 'nurtimo'));

    //Um índice dentro de outro
    echo $arr2[0][0];
?>
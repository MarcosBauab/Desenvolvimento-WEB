<?php


    //Chave personalizada, começa a contar a partir do vinicius
    $arr = array(/*'chave1'=>*/'marcos', 'vinicius', 'bauab');
    /*
    foreach($arr as $key => $value){
        echo $key; echo '=>'; echo $value; echo '<hr>';
    }
    */
    //Conta quantos elementos existem no array
    $total = count($arr);

    for($i = 0; $i < $total; $i++){
        echo $arr[$i];
        echo '<hr>';
    }
?>
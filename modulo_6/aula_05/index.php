<?php

    //De onde quero pegar a data atual
    date_default_timezone_set('America/Sao_Paulo');
    //Se eu quiser adicionar em segundos:
    /*$data = date('d/m/Y H:i:s', time()+(60*10));

    echo $data;*/

    $titulo = 'Título do site';
    include('header.php');
?>
<h2>Meu conteúdo do site</h2>
<h3>Dividido em partes como o Nunjucks</h3>
<?php

    include('footer.php');

?>
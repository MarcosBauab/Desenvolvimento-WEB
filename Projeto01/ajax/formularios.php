<?php
    include("../config.php");
    $data = [];
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];
    $tel = $_POST['telefone'];
    $corpo = '';
    foreach ($_POST as $key => $value) {
        $corpo.= ucfirst($key).':'.$value;
        $corpo.= '<hr>';
    }

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        //E-mail válido
        $enviar = new Email('smtp.gmail.com','jefinhodaruinha@gmail.com',SENHA_EMAIL,'Jefinho');
        $enviar->addAdress($email,'Nome');
        $enviar->formatarEmail(array('assunto'=>$tel, 'texto'=>$corpo));
        $enviar->enviarEmail();
    } else {
        echo '<script>alert("Insira um e-mail válido!")</script>';
    } 
    if($enviar->enviarEmail()){
        $data['sucesso'] = true;
    } else {
        $data['erro'] = true;
    }
    die(json_encode($data));
?>
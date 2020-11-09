<?php
    include("../config.php");
    

    $data = [];
    $email = $_POST['email'];
    /*$nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];
    $tel = $_POST['telefone'];
    */
    $corpo = '';
    foreach ($_POST as $key => $value) {
        $corpo.= ucfirst($key).':'.$value;
        $corpo.= '<hr>';
    }
    
    //E-mail válido
    $enviar = new Email('smtp.gmail.com','jefinhodaruinha@gmail.com',SENHA_EMAIL,'Jefinho');
    $enviar->addAdress($email,'Nome');
    $enviar->formatarEmail(array('assunto'=>'YEAH', 'texto'=>$corpo));
    $enviar->enviarEmail();
     
    if($enviar->enviarEmail()){
       $data['sucesso'] = true;
       $data['email'] = $email;
    } else {
        $data['erro'] = true;
    }
    
    
    die(json_encode($data)); 
?>
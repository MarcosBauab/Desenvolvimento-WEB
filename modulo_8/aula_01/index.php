<?php
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    //Se o POST dentro do form com o nome acao existir:
    if(isset($_POST['acao'])){

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        //                  Formato de data:
        $momento_registro = date('Y-m-d H-i-s');
        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES(null, ?,?,?)");
        //Seguro com array:
        $sql->execute(array($nome,$sobrenome,$momento_registro));

        echo 'Cliente inserido com sucesso!';
    
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro no banco de dados com form</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nome" id="" required>
        <input type="text" name="sobrenome" id="" required>
        <input type="submit" value="Enviar!" name="acao">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>
</head>
<body>
    <?php
        /*if(isset($_GET['acao'])){
            $nome = $_GET['nome'];
            $email = $_GET['mail'];

            echo $nome;
            echo '<br>';
            echo $email;
        }*/
        if(isset($_POST['acao'])){
           foreach($_POST['valor'] as $key => $value){
                echo $key;
                echo "->";
                echo $value;
                echo "<hr>";
           }
            
            
            /*$nome = $_POST['nome'];
            $email = $_POST['mail'];

            echo $nome;
            echo '<br>';
            echo $email;*/
        }
    ?>
    <form method="POST">
        <input type="checkbox" name="valor[]" value="10" id="">10
        <input type="checkbox" name="valor[]" value="20" id="">20
        <input type="checkbox" name="valor[]" value="30" id="">30

        <input type="text" name="nome" id="">
        <input type="text" name="mail" id="">
        <input type="submit" name="acao" value="Enviar!">
    </form>
</body>
</html>
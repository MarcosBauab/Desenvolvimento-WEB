<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css">
    <title>Login</title>
</head>
<body>
    
    <div class="container">
        <div class="box-login">
            <?php
                if(isset($_POST['entrar'])){
                    $user = $_POST['user'];
                    $password = $_POST['passw'];
                    $sql = Database::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND senha = ?");
                    $sql->execute(array($user, $password));
                    //Checar se o login está certo, login e senha corretos
                    if($sql->rowCount() == 1){
                        $info = $sql->fetch();
                        $_SESSION['login'] = true;
                        $_SESSION['user'] = ucfirst($user);
                        $_SESSION['password'] = $password;
                        $_SESSION['cargo'] = $info['cargo'];
                        $_SESSION['img'] = $info['img'];
                        header('Location: '.INCLUDE_PATH_PAINEL);
                        die();
                    } else{
                        echo '<div class="box-erro-login"><b>Deu ruim na entrada :(</b></div>';
                    }
                }
            ?>
            <h2>Dá uma logada:</h2>
            <form method="POST">
                <input type="text" name="user" id="user" placeholder="Login..." required>
                <input type="password" name="passw" id="passw" placeholder="Senha..." required>
                <input type="submit" name="entrar" value="Entrar" required>
            </form>
        </div>
    </div>
    
</body>
</html>
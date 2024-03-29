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
                        $_SESSION['nome'] = $info['nome'];
                        $_SESSION['user'] = ucfirst($user);
                        $_SESSION['password'] = $password;
                        $_SESSION['cargo'] = $info['cargo'];
                        $_SESSION['img'] = $info['img'];
                        if(isset($_POST['lembrar'])){
                            setcookie('lembre',true,time()+(60*60),'/');
                            setcookie('user',$user,time()+(60*60),'/');
                            setcookie('password',$password,time()+(60*60),'/');
                        } else {
                            setcookie('lembre',false,time()+(60*60),'/');
                            setcookie('user',null,time()+(60*60),'/');
                            setcookie('password',null,time()+(60*60),'/');
                        }
                        header('Location: '.INCLUDE_PATH_PAINEL);
                        die();
                    } else{
                        echo '<div class="box-erro-login"><b>Deu ruim na entrada :(</b></div>';
                    }
                }
            ?>
            <h2>Dá uma logada:</h2>
            <form method="POST">
                <?php
                    if(isset($_COOKIE['lembre'])){
                        echo '<input type="text" name="user" value="'.$_COOKIE['user'].'" id="user" placeholder="Login..." required>';
                        echo '<input type="password" name="passw" value="'.$_COOKIE['password'].'" id="passw" placeholder="Senha..." required>';
                        echo '<div class="lembrar">
                                <input type="checkbox" checked name="lembrar" id="lembrar">
                                <label for="lembrar">Lembrar-me</label>
                            </div>';
                    } else {
                        echo '<input type="text" name="user" id="user" placeholder="Login..." required>';
                        echo '<input type="password" name="passw" id="passw" placeholder="Senha..." required>';
                        echo '<div class="lembrar">
                                <input type="checkbox" name="lembrar" id="lembrar">
                                <label for="lembrar">Lembrar-me</label>
                            </div>';
                    }
                ?>
                <input type="submit" name="entrar" value="Entrar" required>
                <div class="clear"></div>
            </form>
        </div>
    </div>
    
</body>
</html>
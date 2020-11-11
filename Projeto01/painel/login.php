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
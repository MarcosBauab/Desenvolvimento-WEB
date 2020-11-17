<?php
    if(isset($_SESSION['user']) && isset($_SESSION['password'])){
?>
    <?php
        if(isset($_GET['logout'])){
            Painel::logout();
        }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/painel.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH?>styles/all.min.css">
        <title>Painel de controle</title>
    </head>
    <body>
        <aside>
            
        </aside>
        <header>
            <div class="centralizar">
                <h1>Bem-vindo <?php echo $_SESSION['user'] ?></h1>
                <div class="logout">
                    <a href="<?php echo INCLUDE_PATH_PAINEL ?>?logout"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </header>
    </body>
    </html>
    <script src="<?php echo INCLUDE_PATH?>js/all.min.js"></script>
<?php
    } else {
        header('Location: login');
    }
?>


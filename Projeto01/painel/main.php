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
            <div class="wrapper">
                <div class="box-usuario">
                    <?php if($_SESSION['img'] == ''){ ?>
                        <div class="avatar-user">
                            <i class="fa fa-user"></i>
                        </div>
                    <?php } else {?>
                        <div class="imagem-user">
                            <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" alt="">
                        </div>
                    <?php } ?>    
                    <div class="nome-usuario">
                        <p><?php echo $_SESSION['user'] ?></p>
                        <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                    </div>
                </div>
            </div>
        </aside>
        <header>
            <div class="centralizar">
                <div class="menu-btn">
                    <i class="fa fa-bars"></i>                    
                </div>
                <div class="logout">
                    <a href="<?php echo INCLUDE_PATH_PAINEL ?>?logout"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </header>
        <section class="content">
            <div class="box-conteudo w100">

            </div>
            <div class="box-conteudo w50 left">
                
            </div>
            <div class="box-conteudo w50 right">
                
            </div>
            <div class="clear"></div>
        </section>
        <script src="<?php echo INCLUDE_PATH_PAINEL?>js/main.js"></script>
        <script src="<?php echo INCLUDE_PATH?>js/all.min.js"></script>
    </body>
    </html>
<?php
    } else {
        header('Location: login');
    }
?>


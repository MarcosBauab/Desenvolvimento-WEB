<?php include('config.php');  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site daora!">
    <meta name="keywords" content="site,teste,exemplo">
    <link rel="shortcut icon" href="<?php echo INCLUDE_PATH; ?>img/codigo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>styles/style.css">
    <?php
        #Pega a url da página
        #Se existir usa o método : senão usa o 'home'
        $url = isset($_GET['url']) ? $_GET['url'] : 'home' ;
        if($url == 'contato'){
    ?>
    <link rel="stylesheet" href="styles/contato.css">
    <?php
        }
    ?>
    <title>Projeto 1</title>
</head>
<body>
    
    <?php
        switch ($url) {
            case 'sobre':
                //Tag própria
                echo '<target target="sobre" />';
                break;
            
            case 'servicos':
                echo '<target target="servicos" />';
                break;
        }
    
    ?>
    
    <header>
        <div class="center">
            <div class="logomarca left">Logomarca</div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>" >Home</a></li>
                    <li><a href="home#autor">Sobre</a></li>
                    <li><a href="home#servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu"><i class="fas fa-chevron-circle-down"></i></div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>" >Home</a></li>
                    <li><a href="home#autor">Sobre</a></li>
                    <li><a href="home#servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <?php
        
        

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        } else {
            if($url != 'sobre' && $url != 'servicos'){
                $paginaerro = true;
                include('pages/404.php');
            } else {
                include('pages/home.php');
            }
        }

    ?>
    <footer <?php if(isset($paginaerro) && $paginaerro == true) echo 'class="fixed"'; ?>>
        <div class="center">
        <p>&copy; Marcão Dev</p>
        </div>
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>js/index.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/all.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php
        if($url == 'contato'){
    ?>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY ?>&callback=initMap" type="text/javascript">
    </script>
    <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php 
        } 
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/fadeIn.js"></script>
</body>
</html>

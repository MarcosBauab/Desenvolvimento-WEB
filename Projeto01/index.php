<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site daora!">
    <meta name="keywords" content="site,teste,exemplo">
    <link rel="stylesheet" href="styles/style.css">
    <title>Projeto 1</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logomarca left">Logomarca</div>
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu"><i class="fas fa-chevron-circle-down"></i></div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <section id="banner-principal">
        <div class="overlay"></div>
        <div class="center">
            <form action="GET">
                <h2>Manda seu e-mail aí:</h2>
                <input type="email" name="email" id="email" required>
                <input type="submit" value="Cadastrar!" name="acao">
            </form>
        </div>
    </section>
    <section id="autor">
        <div class="center">
            <div class="w50 left">
                <h2>Marcos G. Bauab</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores modi recusandae fugiat error ipsam qui inventore similique consectetur, omnis quo nostrum labore quos minus, vel consequuntur odio rerum sint nihil!</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, in earum. Necessitatibus saepe, aliquam voluptates ut rerum dignissimos aliquid doloremque culpa quos debitis nemo sit aspernatur eum, obcaecati error. Quae.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quo repellendus dicta magnam dignissimos doloremque dolorum. Quod asperiores quisquam consequatur quas nostrum natus id laboriosam doloribus quo, facilis architecto odio?</p>
            </div>
            <div class="w50 left">
                <img class="right" src="img/FotoFuvest.png" alt="">
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidade">
                <h3><i class="fab fa-css3-alt"></i></h3>
                <h3>CSS3</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit aperiam incidunt id ullam laudantium et accusamus est harum in. Architecto neque quas, dicta nostrum accusamus ipsum quidem earum fuga aut.</p>
            </div>
            <div class="w33 left box-especialidade">
                <h3><i class="fab fa-html5"></i></h3>
                <h3>HTML5</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit aperiam incidunt id ullam laudantium et accusamus est harum in. Architecto neque quas, dicta nostrum accusamus ipsum quidem earum fuga aut.</p>
            </div>
            <div class="w33 left box-especialidade">
                <h3><i class="fab fa-js-square"></i></h3>
                <h3>Javascript</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit aperiam incidunt id ullam laudantium et accusamus est harum in. Architecto neque quas, dicta nostrum accusamus ipsum quidem earum fuga aut.</p>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <section class="extras">
        <div class="center">
            <div class="w50 left">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento">
                    <p class="depoimento">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error corporis praesentium deleniti tempora. Nam maxime consequatur at porro in pariatur necessitatibus eaque quasi nesciunt saepe velit libero sed, eveniet id.</p>
                    <p class="autor">Autor D.</p>
                </div>
                <div class="depoimento">
                    <p class="depoimento">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error corporis praesentium deleniti tempora. Nam maxime consequatur at porro in pariatur necessitatibus eaque quasi nesciunt saepe velit libero sed, eveniet id.</p>
                    <p class="autor">Autor D.</p>
                </div>
                <div class="depoimento">
                    <p class="depoimento">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error corporis praesentium deleniti tempora. Nam maxime consequatur at porro in pariatur necessitatibus eaque quasi nesciunt saepe velit libero sed, eveniet id.</p>
                    <p class="autor">Autor D.</p>
                </div>
            </div>
            <div class="w50 left">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptate accusantium in quis, explicabo iure?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptate accusantium in quis, explicabo iure?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptate accusantium in quis, explicabo iure?</li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <footer>
        <div class="center">
        <p>&copy; Marcão dos Sites</p>
        </div>
    </footer>
    <script src="js/index.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>
<?php Site::updateOnline(); 
      Site::contador();
?>
    <section id="banner-principal">
        <div style="background-image: url(<?php echo INCLUDE_PATH; ?>img/codigo.jpg);" class="banner-single"></div>
        <div style="background-image: url(<?php echo INCLUDE_PATH; ?>img/codigo2.jpg);"  class="banner-single sumido"></div>
        <div style="background-image: url(<?php echo INCLUDE_PATH; ?>img/pc.jpg);" class="banner-single sumido"></div>
        <div class="overlay"></div>
        <div class="center">


            
            <form method="POST">
                <h2>Manda seu e-mail aí:</h2>
                <input type="email" name="email" id="email" required>
                <input type="hidden" name="identificador" value="form_home">
                <input type="submit" value="Cadastrar!" name="acao">
            </form>
        </div>
        <div class="bullets"></div>
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
                <img class="right" src="<?php echo INCLUDE_PATH; ?>img/FotoFuvest.png" loading="lazy" alt="">
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidade sumido">
                <h3><i class="fab fa-css3-alt"></i></h3>
                <h3>CSS3</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit aperiam incidunt id ullam laudantium et accusamus est harum in. Architecto neque quas, dicta nostrum accusamus ipsum quidem earum fuga aut.</p>
            </div>
            <div class="w33 left box-especialidade sumido">
                <h3><i class="fab fa-html5"></i></h3>
                <h3>HTML5</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit aperiam incidunt id ullam laudantium et accusamus est harum in. Architecto neque quas, dicta nostrum accusamus ipsum quidem earum fuga aut.</p>
            </div>
            <div class="w33 left box-especialidade sumido">
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
            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div id="servicos">
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
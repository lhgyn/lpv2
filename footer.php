        <!--
            // Rodapé Phenatrim 
        -->

        <section id="site-newsletter" class="">
            <div class="container">
                <div class="col-md-4 left">
                    <h3 class="text-white">Pronta Para Obter Mais Dicas Sobre Perda De Peso?</h3>
                </div>
                <div class="col-md-8 right">
                    <form class="form-inline">
                      <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail3">Seu melhor email</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Seu melhor email">
                      </div>
                      <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword3">Seu nome</label>
                        <input type="text" class="form-control" id="exampleInputPassword3" placeholder="Seu nome">
                      </div>
                      <button type="submit" class="btn btn-default">ENVIAR</button>
                    </form>
                </div>
            </div>
        </section>


        <footer id="site-footer">
            <div class="container">
                <div id="footer-menu" class="container">                    

                    <div class="col-md-4"> 
                        <ul> 
                            <li><h3>Phenatrim</h3></li>
                            <li><a href="como-funciona">Como funciona</a></li>
                            <li><a href="na-midia">Na mídia</a></li>
                            <li><a href="depoimentos">Depoimentos</a></li>
                            <li><a href="perguntas-frequentes">Perguntas frequentes</a></li>
                            <li><a href="garantia">Garantia</a></li>
                            <li><a href="#buy-phenatrim" class="btn-buy">Peça agora!</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4"> 
                        <ul> 
                            <li><h3>Institucional</h3></li>
                            <li><a href="home">Home</a></li>
                            <li><a href="sobre-nos">Sobre nós</a></li>
                        </ul>
                        <br>
                        <ul> 
                            <li><h3>Políticas</h3></li>
                            <li><a href="politica-privacidade">Política de Privacidade</a></li>
                            <li><a href="politica-reembolso">Política de Reembolso</a></li>
                        </ul>
                    </div>

                    <div id="contact-menu" class="col-md-4">
                        <ul> 
                            <li><h3>Contate-nos</h3></li>
                            <li>
                                <span class="icon"><i class="fa fa-phone"></i></span>
                                <span>
                                    pelo SAC: <br> <strong>(62) 3639-2975</strong>
                                </span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-envelope"></i></span>
                                <span>
                                    pelo E-mail: <br> <strong>sac@phenatrim.com.br</strong>
                                </span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-truck"></i></span>
                                <span>
                                    Prazo de entrega: <br> <strong>7 à 15 dias úteis.</strong>
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="col-12">
                    <hr>
                    <p class="text-center text-muted">
                        <i>Phenatrim é um suplemento dietético que não se destina a diagnosticar, tratar, curar ou previnir qualquer doença. *</i>
                    </p>
                </div>
            </div>

            <div class="row-copy" id="site-copy">
                <div class="container">
                    <div class="col-md-12">
                        <p class="text-center"><small>N1 SUPPLEMENTS COMÉRCIO E DISTRIBUIÇÃO LTDA, CNPJ: 15.301.011/0001-89 | &copy; <?php echo date("Y"); ?> Phenatrim - Todos direitos reservados</small></p> 
                    </div>
                </div>
            </div>

        </footer><!--/row-rodape-->

        


        <?php
            ///////////////////////////
            //////////////// LOAD THEME SCRIPTS
            //////////////////////////////////////////////
            foreach ($data['_theme_scripts'] as $script) {
                echo '<script  type="text/javascript" src="'.$script.'"></script>';
            }
        ?>

        <script>
            jQuery(document).ready(function(){
                
            })
            function stockAlert(){
                alert("Desculpe, mas este produto está fora de estoque!");
            }
        </script>


        <script>

            // jQuery("#text-test").fitText(2.0, { minFontSize: '14px', maxFontSize: '30px' });
            // jQuery("#difinitive-title").fitText(1.6, { minFontSize: '42.5px', maxFontSize: '44px' });

        </script>


        <script>
            new gnMenu( document.getElementById( 'gn-menu' ) );
        </script>

        <script>
            jQuery(document).ready(function($) {
                $(".panel-master a").click(function() {

                    //$(".panel-master div.colapse").removeClass('in');

                    var panel = $(this).attr('aria-controls');
                    //$(`#${panel}`).removeClass('in');


                    $('html, body').animate({
                        scrollTop: $(`#${panel}`).offset().top - 50
                    }, 800);


                    
                    
                });
            });
        </script>

        <script>////////////////////////////////////////////////
        /////////////////////// menu active
        ////////////////////////////////////////////////////
            jQuery(document).ready(function($) {
                var route = '<?= $page; ?>';
                $(`#nav-links > li > a[href=${route}]`).parent('li').addClass('active');
            });
        </script>
        
    </body>
        
</html>

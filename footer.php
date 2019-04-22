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
                <div class="col-lg-12 col-md-12">
                    <div class="submenus-rodape col-lg-9 col-md-9 col-sm-9 col-xs-12">

                        

                    </div>
                </div><!--/content-rodape-->

                <div class="container">
                    <div id="footer-menu" class="row">
                        <div class="rodape-contato col-lg-3 col-md-3 col-sm-3"> 
                            <ul> 
                                <li><h3>Contate-nos</h3></li>
                                <li><p>pelo SAC: <br/><strong>(62) 3639-2975</strong></p></li>
                                <li><p>pelo E-mail: <br/><strong>sac@phenatrim.com.br</strong></p></li>
                                <li><p>Prazo de entrega: <br/><strong>7 à 15 dias úteis.</strong></p></li>
                                <li>
                                    <hr>
                                    <p>N1 SUPPLEMENTS COMÉRCIO E DISTRIBUIÇÃO LTDA</p>
                                    <p>CNPJ: <strong>15.301.011/0001-89</strong></p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!--
                                    // trecho do menu intitucional, links relacionados a companhia
                                -->
                                <div class="rodape-our-company col-lg-4 col-md-4 col-sm-4"> 
                                    <ul> 
                                        <li><h3>Institucional</h3></li>
                                        <li><a href="home">Home</a></li>
                                        <li><a href="sobre-nos">Sobre nós</a></li>
                                    </ul>
                                </div>

                                <!--
                                    // trecho do menu especifico do produto
                                -->

                                <div class="rodape-phenatrim col-lg-4 col-md-4 col-sm-4"> 
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

                                <!--
                                    // trecho do menu de politicas, links relacionado a politicas de compra do phenatrim
                                -->

                                <div class="rodape-policies col-lg-4 col-md-4 col-sm-4"> 
                                    <ul> 
                                        <li><h3>Políticas</h3></li>
                                        <li><a href="politica-privacidade">Política de Privacidade</a></li>
                                        <li><a href="politica-reembolso">Política de Reembolso</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <hr style="border-bottom: 1px solid #ddd">
                                <div class="col-md-4">
                                    <h3>Segurança</h3>
                                    <img src="./assets/img/icones/ssl-certificate.png" style="max-width: 120px" alt="" class="img-responsive">
                                </div>
                                <div class="col-md-4">
                                    <h3>Entrega</h3>
                                    <img src="./assets/img/icones/correios-2.png" style="max-width: 160px;" alt="">
                                </div>
                                <div class="col-md-4">
                                    <h3>Pagamento</h3>
                                    <img src="./assets/img/icones/_payments-2.png" style="max-width: 250px" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div>

                        

                        <div class="col-md-12" align="center;"> 
                            <hr style="border-bottom: 1px solid #ddd">                           
                            <ul class="list-inline text-center">
                                <li><a href=""><img class="img-reponsive" style="max-width: 50px;" src="./assets/img/icones/facebook.png" alt=""></a></li>
                                <li><a href=""><img class="img-reponsive" style="max-width: 50px;" src="./assets/img/icones/instagram.png" alt=""></a></li>
                                <li><a href=""><img class="img-reponsive" style="max-width: 50px;" src="./assets/img/icones/whatsapp.png" alt=""></a></li>
                            </ul>
                            <p></p>
                        </div>

                    </div>
                </div>
            </div><!--container-->

            <div class="container">
                <div class="col-12">
                    <p class="text-center text-muted">
                        <i>Phenatrim é um suplemento dietético que não se destina a diagnosticar, tratar, curar ou previnir qualquer doença. *</i>
                    </p>
                </div>
            </div>

            <div class="row-copy" id="site-copy">
                <div class="container">
                    <div class="text-copyright col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p><small>&copy; <?php echo date("Y"); ?> Phenatrim - Todos direitos reservados</small></p> 
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

            jQuery("#text-test").fitText(2.0, { minFontSize: '14px', maxFontSize: '30px' });
            jQuery("#difinitive-title").fitText(1.6, { minFontSize: '30px', maxFontSize: '40px' });

        </script>


        <script>
            new gnMenu( document.getElementById( 'gn-menu' ) );
        </script>
        
    </body>
        
</html>

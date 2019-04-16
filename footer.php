        <!--
            // Rodapé Phenatrim 
        -->

        <div class="row-rodape">
            <div class="container"> 
                <div class="container-fluid"> 
                    <div class="content-rodape col-lg-12 col-md-12">
                        <div class="submenus-rodape col-lg-8 col-md-8 col-sm-8 col-xs-8">

                            <div class="rodape-contato col-lg-3 col-md-3 col-sm-3"> 
                                <ul> 
                                    <li><h4>Contate-nos</h4></li>
                                    <li><p>pelo SAC: <br/><strong>(62) 3639-2975</strong></p></li>
                                    <li><p>pelo E-mail: <br/><strong>sac@phenatrim.com.br</strong></p></li>
                                    <li><p>Prazo de entrega: <br/><strong>7 à 15 dias úteis.</strong></p></li>
                                    <li><p>CNPJ: <br/><strong>15.301.011/0001-89</strong></p></li>
                                </ul>
                            </div>

                            <!--
                                // trecho do menu intitucional, links relacionados a companhia
                            -->
                            <div class="rodape-our-company col-lg-3 col-md-3 col-sm-3"> 
                                <ul> 
                                    <li><h4>Institucional</h4></li>
                                    <li><a href="home">Home</a></li>
                                    <li><a href="sobre-nos">Sobre nós</a></li>
                                </ul>
                            </div>

                            <!--
                                // trecho do menu especifico do produto
                            -->

                            <div class="rodape-phenatrim col-lg-3 col-md-3 col-sm-3"> 
                                <ul> 
                                    <li><h4>Phenatrim</h4></li>
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

                            <div class="rodape-policies col-lg-3 col-md-3 col-sm-3"> 
                                <ul> 
                                    <li><h4>Políticas</h4></li>
                                    <li><a href="politica-privacidade">Política de Privacidade</a></li>
                                    <li><a href="politica-reembolso">Política de Reembolso</a></li>
                                </ul>
                            </div>

                            <!--
                                // Link direto para as redes sociais
                            -->

                            <div class="icons-social-networks col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                                <a href="https://www.facebook.com/Phenatrim-1590715204557680/?fref=ts"><span class="fa fa-facebook-official icon-facebook"></span></a>
                                <a href="#" title="instagram momentâneamente desativado"><span class="fa fa-instagram icon-instagram"></span></a>
                            </div>

                            <div class="rodape-obs col-lg-12 col-md-12 col-sm-12">
                                <i>
                                    Phenatrim é um suplemento dietético que não se destina a diagnosticar, tratar, curar ou previnir qualquer doença. *
                                </i> 
                            </div>

                        </div>

                        <div class="content-newletter-rodape col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="btn-newsletter col-lg-12 col-md-12 col-sm-12"> 
                                <h2>Pronta Para Obter Mais Dicas Sobre Perda De Peso?</h2>
                                <form class="cad-newsletter col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                                    <div class="input-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input class="inpt-default inpt-name inpt col-lg-12 col-md-12 col-sm-12 col-xs-12" name="assinaturas_nomecompleto" id="assinaturas_nomecompleto" placeholder="Nome" type="text"> 
                                    </div>
                                    <div class="input-right col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input class="inpt-default inpt-email inpt col-lg-12 col-md-12 col-sm-12 col-xs-12" name="assinaturas_email" id="assinaturas_email" placeholder="Email" type="text"> 
                                    </div>
                                    <input type="hidden" name="assinaturas_datahora" id="assinaturas_datahora" value="<?php echo $datahoralocalcadastro; ?>">
                                    <input type="hidden" name="assinaturas_siteacessado" id="assinaturas_siteacessado" value="PVBIOD001NL">
                                    <input type="hidden" name="assinaturas_ip" id="assinaturas_ip" size="50" value="<?php echo $ipaddress; ?>">
                                    <button type="submit" id="submitbutton" class="btn btn-warning col-lg-12 col-md-12 col-sm-12 col-xs-12">Cadastrar</button>
                                </form>
                            </div>
                        </div> 

                        <div class="text-copyright col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>
                                &copy; <?php echo date("Y"); ?> Phenatrim - Todos direitos reservados
                            </p> 
                        </div>

                    </div><!--/content-rodape-->
                </div><!--container-fluid-->
            </div><!--container-->
        </div><!--/row-rodape-->


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
            var db = new loki('example.db');
            var users = db.addCollection('users');
            users.insert({
                name: 'Odin',
                age: 50,
                address: 'Asgard'
            });

            // alternatively, insert array of documents
            users.insert([{ name: 'Thor', age: 35}, { name: 'Loki', age: 30}]);
            var odin = users.findOne({ name:'Odin' });
            //alert(odin);
            console.log(odin);
        </script>
        
    </body>
        
</html>

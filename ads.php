
<?php require('config.php'); ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?=$data['site_title']?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow"/>
    <link rel="icon" href="./assets/img/favicon.png" />


    <!-- //////////////////////////////////
    //////// DESENVOLVIMENTO
    ///////////////////// -->
    <!-- <link rel="stylesheet" type="text/css" href="./assets/css/__desenvolvimento.css"> -->

    <!-- //////////////////////////////////
    //////// PRODUÇÃO - BY GULP AUTOMATION
    ///////////////////// -->
    <link rel="stylesheet" type="text/css" href="./assets/css/all.min.css">
        
</head>
<body>

    <header id="site-header">
        <div id="topbar"></div>
        <div class="main-header hidden-sm hidden-xs">
            <div class="container">
                <div class="branding col-md-12">
                    <h1 class="text-center">
                        <a href="home">
                            <img src="assets/img/phenatrim-logo.png" alt="Phenatrim">
                        </a>
                    </h1>
                </div>
            </div>
        </div>
    </header>


    <?php require('views/ads.php'); ?>


        <!-- ///////////////////////////////////////////////
        //////////////// NEWSLETTER
        /////////////////////////////////// -->
        <section id="site-newsletter" class="">
            <div class="container">
                <div class="col-md-4 left">
                    <h3 class="text-white">Pronta Para Obter Mais Dicas Sobre Perda De Peso?</h3>
                </div>
                <div class="col-md-8 right">
                    <form class="form-inline">
                      <div class="form-group">
                        <label class="sr-only" for="assinaturas_email">Seu melhor email</label>
                        <input type="email" class="form-control" id="assinaturas_email" placeholder="Seu melhor email">
                      </div>
                      <div class="form-group">
                        <label class="sr-only" for="assinaturas_nomecompleto">Seu nome</label>
                        <input type="text" class="form-control" id="assinaturas_nomecompleto" placeholder="Seu nome">
                      </div>
                      <input type="hidden" id="assinaturas_siteacessado" value="PHENATRIMOFICIAL">
                      <input type="hidden" id="assinaturas_datahora" value="<?php echo $datahoralocalcadastro; ?>">
                      <input type="hidden" id="assinaturas_ip" value="<?php echo $ipaddress; ?>">
                      <button type="button" id="submitbutton" class="btn btn-default">ENVIAR</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- ///////////////////////////////////////////////
        //////////////// SITE FOOTER
        /////////////////////////////////// -->
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
                            <li><a href="https://phenatrim.com.br/#order" class="btn-buy">Peça agora!</a></li>
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
                        <i>* Os resultados podem variar de pessoa para pessoa</i>
                    </p>
                </div>
            </div>

            <div class="row-copy" id="site-copy">
                <div class="container">
                    <div class="col-md-12">
                        <p class="text-center"><small>N1 SUPPLEMENTS COMÉRCIO E DISTRIBUIÇÃO LTDA, CNPJ: 32.017.806/0001-89 | &copy; <?php echo date("Y"); ?> Phenatrim - Todos direitos reservados</small></p> 
                    </div>
                </div>
            </div>

        </footer><!--/row-rodape-->

        
        <!-- /////////////////////////////////////////
        //////// DESENVOLVIMENTO
        ////////////////////////// -->
        <!-- <script  type="text/javascript" src="./assets/js/_1-jquery.min.js"></script>
        <script  type="text/javascript" src="./assets/js/_2-bootstrap.min.js"></script>
        <script  type="text/javascript" src="./assets/js/_3-jquery.mask.js"></script>
        <script  type="text/javascript" src="./assets/libs/GoogleNexusWebsiteMenu/js/classie.js"></script>
        <script  type="text/javascript" src="./assets/libs/GoogleNexusWebsiteMenu/js/gnmenu.js"></script> -->

        <!-- /////////////////////////////////////////
        //////// PRODUÇÃO
        ////////////////////////// -->
        <script  type="text/javascript" src="./assets/js/all.min.js"></script>

        <script>
            jQuery(document).ready(function($){
                $('.cta_button-comprar').click(function(event) {
                    event.preventDefault();
                    alert('Produto indisponível para comprar');
                });
            })
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


        <script>
            jQuery(document).ready(function($) {

                $('#cta-button').click(function(event) {
                    let error = 0;
                    let name_error = null;
                    let email_error = null;
                    let subject_error = null;
                    let message_error = null; 

                    $('#message-error').html('');

                    if($('input[name=nome]').val() == ''){
                        error = 1;
                        $('input[name=nome]').css('border-color', 'red');
                        $('#message-error').append('<p style="color:#444">*Informe o seu Nome</p>');
                    }else{
                        $('input[name=nome]').css('border-color', 'green');
                    }

                     if($('input[name=email]').val() == ''){
                        error = 1;
                        $('input[name=email]').css('border-color', 'red');
                        $('#message-error').append('<p style="color:#444">*Informe o seu E-mail</p>');
                    }else{
                        $('input[name=email]').css('border-color', 'green');
                    }

                     if($('input[name=assunto]').val() == ''){
                        error = 1;
                        $('input[name=assunto]').css('border-color', 'red');
                        $('#message-error').append('<p style="color:#444">*Informe o Assunto</p>');
                    }else{
                        $('input[name=assunto]').css('border-color', 'green');
                    }
                    
                     if($('textarea[name=mensagem]').val() == ''){
                        error = 1;
                        $('textarea[name=mensagem]').css('border-color', 'red');
                        $('#message-error').append('<p style="color:#444">*Escreva sua mensagem</p>');
                    }else{
                        $('input[name=mensagem]').css('border-color', 'green');
                    }


                    if(error == 0){
                     $('#contactForm').submit();
                    }
                });

                
            });
        </script>
        
    </body>
        
</html>

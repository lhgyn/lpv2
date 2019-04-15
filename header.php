<?php require('config.php'); ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?=$data['site_title']?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="index, follow"/>
        <link rel="icon" href="favicon.ico" />

        <?php
            //////////////////////////
        ///////////// LOAD THEME FONTS
        ////////////////////////////////////
            foreach ( $data['theme_fonts'] as $font ) {
			 echo '<link rel="stylesheet" type="text/css" href="'.$font.'">';
		    }
        ?>

        <?php
            //////////////////////////
        ///////////// LOAD THEME CSS STYLES
        ////////////////////////////////////
            foreach ( $data['_theme_styles'] as $style ) {
                echo '<link rel="stylesheet" type="text/css" href="'.$style.'">';
            }
        ?> 
		
    </head>
    <body>

        <!--
            // Este primeiro bloco de código é destinado a header do site
            // É dividido em dois sub-blocos: header-top e header-bottom
            // * header-top:: conteúdo acima do menu principal
            // * header-bottom:: o próprio menu principal
            // dev Peterson  // 
        -->

        <div class="navbar-phenatrim">
            <div class="container container-header-top">
                <div class="container-fluid">
                    <div class="header-top col-lg-12 hidden-xs">
                        <div class="logo-tipo col-lg-4 col-md-4 ">
                            <a href="home"><img src="assets/img/phenatrim-logo.png" style="max-width: 220px;"></a>
                        </div>
                        

                        <div class="col-lg-8 col-md-8 content-contat-header"> 

                            <div class="icons-chamada">
                                <ul>
                                    <li class="col-md-3 col-sm-3 col-xs-3 icon-client">
                                        <span class="fa fa-thumbs-o-up"></span>
                                        <p>Mais de 25.000</p>
                                        <p>Clientes</p>
                                    </li>
                                    <li class="col-md-3 col-sm-3 col-xs-3 icon-anvisa">
                                        <span class="fa fa-check-square-o"></span>
                                        <p>Aprovado pela</p>
                                        <p>ANVISA</p>
                                    </li>
                                    <li class="col-md-3 col-sm-3 col-xs-3 icon-ingredients">
                                        <span class="fa fa-leaf"></span>    
                                        <p>Ingredientes</p>
                                        <p>naturais</p>
                                    </li>
                                    <li class="col-md-3 col-sm-3 col-xs-3 icon-contact">
                                        <span class="fa fa-phone"></span>
                                        <p>SAC</p>
                                        <p>(62) 3639-2975</p>
                                    </li>
                                </ul>

                            </div><!--/icons-chamada-->

                        </div><!--/content-contat-header-->

                    </div><!--/header-top-->

                </div><!--/container-fluid-->

            </div><!--/container-->

            <div class="loading-page"></div>

            <div class="container container-header-bottom">

                <div class="container-fluid">

                    <nav class="navbar navbar-default header-bottom" role="navigation" id="slide-nav">

                        <div class="navbar-header">
                            <a class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="navbar-brand header-top-xs">
                                <div class="logo-xs">
                                    <a href="home"><img src="assets/img/phenatrim-logo.png" style="max-width: 220px;">
                                    </a>
                                </div>

                                <div class="content-contat-header-xs">
                                    <div class="icon-contact-xs">
                                        <p><i class="fa fa-phone"></i>&nbsp;SAC&nbsp;<span>(62) 3639-2975</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div id="slidemenu" class="navbar-menu-bio">
                            <ul class="nav navbar-nav">
                                <li><a href="home">HOME</a></li>
                                <li><a href="como-funciona">COMO FUNCIONA</a></li>
                                <li><a href="depoimentos">DEPOIMENTOS</a></li>
                                <li><a href="garantia">GARANTIA</a></li>
                                <li><a href="perguntas-frequentes">PERGUNTAS FREQUENTES</a></li>
                                <li><a href="contato">CONTATO</a></li>
                                <li><a href="home#buy-phenatrim" class="">PEÇA AGORA!</a></li>
                                <!--<li><a href="http://phenatrimoficial.com.br">PEÇA AGORA!</a></li>-->
                            </ul>                 
                        </div><!-- /.navbar-collapse -->

                    </nav><!--/navbar-bottom-->

                </div>

            </div>

        </div><!--/navbar-phenatrim-->
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
        <link rel="icon" href="favicon.ico" />

       <!--  <script src="https://unpkg.com/lodash@4/lodash.min.js"></script>
        <script src="https://unpkg.com/lowdb@0.17/dist/low.min.js"></script>
        <script src="https://unpkg.com/lowdb@0.17/dist/LocalStorage.min.js"></script> -->

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
            require('assets/css/header.style.php');
            require('assets/css/footer.style.php');
            require('assets/css/home.style.php');
            require('assets/css/peca-agora.style.php');
            require('assets/css/como-funciona.style.php');
            require('assets/css/depoiments.style.php');
            require('assets/css/garantia.style.php');
            require('assets/css/perguntas-frequentes.style.php');
            require('assets/css/contato.style.php');
            require('assets/css/politicas.style.php');
        ?>

		
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


        <nav id="navbar1" class="navbar navbar-default hidden-sm hidden-xs" role="navigation">
            <div class="container">
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs" href="home">
                        <img src="assets/img/phenatrim-logo.png" alt="Phenatrim">
                    </a>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul id="nav-links" class="nav navbar-nav">
                        <li><a href="home">HOME</a></li>
                        <li><a href="como-funciona">COMO FUNCIONA</a></li>
                        <li><a href="depoimentos">DEPOIMENTOS</a></li>
                        <li><a href="garantia">GARANTIA</a></li>
                        <li><a href="perguntas-frequentes">PERGUNTAS FREQUENTES</a></li>
                        <li><a href="contato">CONTATO</a></li>
                        <li><a href="peca-agora" class="">PEÇA AGORA!</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav id="mobile-nav" class="visible-sm visible-xs">
            <div class="mobile-header">
                
            </div>
            <ul id="gn-menu" class="gn-menu-main" style="z-index: 999; background: #fff; box-shadow: #ddd 0 2px 5px;">
                <li>
                    <a href="home">
                        <img src="assets/img/phenatrim-logo.png" alt="Phenatrim" style="max-width: 180px">
                    </a>
                </li>
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller">
                            <ul class="gn-menu">
                                <li><a href="home" class=""> <i class="fa fa-home"></i> HOME </a></li>
                                <li><a href="como-funciona" class=""> <i class="fa fa-comment"></i> COMO FUNCIONA </a></li>
                                <li><a href="depoimentos" class=""> <i class="fa fa-bullhorn"></i> DEPOIMENTOS </a></li>
                                <li><a href="garantia" class=""> <i class="fa fa-trophy"></i> GARANTIA </a></li>
                                <li><a href="perguntas-frequentes" class=""> <i class="fa fa-question-circle"></i> PERGUNTAS FREQUENTES</a></li>
                                <li><a href="contato" class=""> <i class="fa fa-volume-control-phone"></i> CONTATO </a></li>
                                <li><a href="peca-agora" class=""> <i class="fa fa-shopping-cart"></i> PEÇA AGORA! </a></li>
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
            </ul>
        </nav>
    </header>
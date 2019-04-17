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

        <script src="https://unpkg.com/lodash@4/lodash.min.js"></script>
<script src="https://unpkg.com/lowdb@0.17/dist/low.min.js"></script>
<script src="https://unpkg.com/lowdb@0.17/dist/LocalStorage.min.js"></script>

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
            require('assets/css/home.style.php');
        ?>

		
    </head>
    <body>

        <header id="site-header">
            <div id="topbar"></div>
            <div class="main-header hidden-xs">
                <div class="container">
                    <div class="branding col-md-4">
                        <h1>
                            <a href="home">
                                <img src="assets/img/phenatrim-logo.png" alt="Phenatrim">
                            </a>
                        </h1>
                    </div>
                    <div class="icons col-md-8">
                        <ul>
                            <li>
                                <i class="flaticon-like"></i>
                                <span>Mais de 25.000<br> Clientes</span>
                            </li>
                            <li>
                                <i class="flaticon-check"></i>
                                <span>Aprovado pela<br> ANVISA</span>
                            </li>
                            <li>
                                <i class="flaticon-herbal-spa-treatment-leaves"></i>
                                <span>Ingredientes<br> naturais</span>
                            </li>
                            <li>
                                <i class="flaticon-telephone"></i>
                                <span>SAC<br> (62) 3639-2975</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


    <nav id="navbar1" class="navbar navbar-default" role="navigation">
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
                <ul class="nav navbar-nav">
                    <li class="active"><a href="home">HOME</a></li>
                    <li><a href="como-funciona">COMO FUNCIONA</a></li>
                    <li><a href="depoimentos">DEPOIMENTOS</a></li>
                    <li><a href="garantia">GARANTIA</a></li>
                    <li><a href="perguntas-frequentes">PERGUNTAS FREQUENTES</a></li>
                    <li><a href="contato">CONTATO</a></li>
                    <li><a href="home#buy-phenatrim" class="">PEÇA AGORA!</a></li>
                </ul>
            </div>
        </div>
    </nav>

             <!-- <nav class="navbar navbar-default header-bottom" role="navigation" id="slide-nav">
                <div class="container">
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
                    </div>
                </div>
                
                <div id="slidemenu" class="navbar-menu-bio">
                    <ul class="nav navbar-nav">
                        <li><a href="home">HOME</a></li>
                        <li><a href="como-funciona">COMO FUNCIONA</a></li>
                        <li><a href="depoimentos">DEPOIMENTOS</a></li>
                        <li><a href="garantia">GARANTIA</a></li>
                        <li><a href="perguntas-frequentes">PERGUNTAS FREQUENTES</a></li>
                        <li><a href="contato">CONTATO</a></li>
                        <li><a href="home#buy-phenatrim" class="">PEÇA AGORA!</a></li>
                    </ul>                 
                </div>
                </div>
            </nav> -->
        </header>
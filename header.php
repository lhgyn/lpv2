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
                        <li><a href="https://phenatrim.com.br/#order" class="">PEÇA AGORA! &nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a></li>
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
                                <li><a href="home" class=""> <i class="flaticon-home-icon-silhouette"></i> HOME </a></li>
                                <li><a href="como-funciona" class=""> <i class="flaticon-mortar"></i> COMO FUNCIONA </a></li>
                                <li><a href="depoimentos" class=""> <i class="flaticon-megaphone"></i> DEPOIMENTOS </a></li>
                                <li><a href="garantia" class=""> <i class="flaticon-guarantee"></i> GARANTIA </a></li>
                                <li><a href="perguntas-frequentes" class=""> <i class="flaticon-help"></i> PERGUNTAS FREQUENTES</a></li>
                                <li><a href="contato" class=""> <i class="flaticon-contact"></i> CONTATO </a></li>
                                <li><a href="https://phenatrim.com.br/#order" class=""> <i class="flaticon-shopping-basket"></i> PEÇA AGORA! </a></li>
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
            </ul>
        </nav>
    </header>
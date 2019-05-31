
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


<?php  require('footer.php'); ?>
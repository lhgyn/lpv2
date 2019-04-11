<?php

//print_r($_GET['error']);
/*
if(isset($_GET['error']) && $_GET['error']!= 001){
	$error = (isset($_GET['error']) && !empty($_GET['error'])) ? $_GET['error'] : "Erro desconhecido! Entre em contato com um dos nossos atentendes!";
}else{
	$error = 'Preencha o formulário corretamente!<br />Todos os dados são obrigatórios!';	
}
*/
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Site Oficial Biodryne</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../favicon.ico" />
        <style>
            body {
            	padding:0;
            	margin:0;
            }
        </style>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="../css/font-opensans.css">
        <style>
            body {
    			font-family: "Open Sans";
            }
        </style>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/finalizacao-error.css">
        <script src="../app/ajaxGetPost.js"></script>
        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

    	<div class="row-content-total">
    		<div class="container">
    			<div class="container-fluid">
    				<div class="content-finalizacao-error col-lg-12 col-md-12 col-sm-12 col-xs-12">

    					<div class="content-payment-safe col-lg-12 col-md-12 col-sm-12 col-xs-12">
    						<div class="payment-safe-red col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
    							
    							<p class="text-safe-red col-lg-12 col-md-12 col-sm-12 col-xs-12">
    								<div class="icon-safe col-lg-2 col-md-2 col-sm-2 hidden-xs">
    									<i class="fa fa-shield fa-4x"></i>
    								</div>
    								<div class="title-safe col-lg-10 col-md-10 col-sm-10 hidden-xs">
										<h2>Pagamento Seguro</h2>
    								</div>

    								<div class="title-safe-mobile hidden-lg hidden-md hidden-sm col-12">
										<h2><i class="fa fa-shield fa-4x"></i> Pagamento Seguro</h2>
    								</div>
    							</p>

    							<div class="arrow-red-safe"></div>
    						</div>
    						<div class="payment-safe-grey col-lg-8 col-md-8 col-sm-8 col-xs-12"> 
    							<p class="text-safe-grey col-lg-12 col-md-12 col-sm-12 col-xs-12">
    								<span>Esta transação não foi completada, <strong>tente novamente!</strong></span>
    							</p>
    						</div>
    					</div>

    					<div class="content-txt-fnlz-error col-lg-12 col-md-12 col-sm-12 col-xs-12">
    						<i class="icon-error fa fa-times-circle-o fa-5x"></i>
    						<p class="txt-error col-lg-12 col-md-12 col-sm-12 col-xs-12">
    							<div class="title-txt-error col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    							<h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    								Esta transação não pode ser processada.
	    							</h2>
    							</div>
    							<div class="subtitle-txt-error col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    							<span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    								<span style="color:red;"><?php echo $_GET['error']; ?></span>
	    							</h2>
									<span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    								Por favor, pressione "voltar" e reenvie a transação
	    							</span>
    							</div>
    						</p>
    					</div>

    					<hr class="line-title" />

    					<div class="content-btn-fnlz-error col-lg-12 col-md-12 col-sm-12 col-xs-12">
    						<a href="javascript:window.history.go(-1)" class="btn btn-default btn-fnlz-error">
    							<h4>VOLTAR E TENTAR NOVAMENTE!</h4>
    						</a>
    						<span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Tente reenviar a transação</span>
    					</div>

    				</div>
    			</div>

    		</div>
    	</div>

	    
    	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-78533169-1', 'auto');
		  ga('send', 'pageview');

		</script>
	    <script src="../js/vendor/jquery-1.11.2.min.js"></script>
	    <script src="../js/vendor/bootstrap.min.js"></script>
		
	</body>
	    
</html>

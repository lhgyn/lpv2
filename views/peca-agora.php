<?php
date_default_timezone_set('America/Sao_Paulo');
$datahoralocalcadastro = date('d/m/Y H:i:s', time());
$ipaddress = NULL;
if (getenv('HTTP_CLIENT_IP'))
	$ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
	$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
    $ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
    $ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
    $ipaddress = getenv('REMOTE_ADDR');
else
    $ipaddress = 'UNKNOWN';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Biodryne - Peça agora | Site Oficial</title>
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
            	color: #006F92;
    			font-weight: bold;
    			font-family: "Open Sans";
            }
        </style>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/peca-agora.css">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<script src="../js/vendor/bootstrap.min.js"></script>
		<script src="../js/jquery.validate.js"></script>
		
		<script src="../app/main.js"></script>
		<script src="../app/pecaAgora.js"></script>
		<script src="../app/assinatura.js"></script>
		<script src="../app/ajaxGetPost.js"></script>
		
    </head>
    <body>

    	<!--
			// Este primeiro bloco de código é destinado a header do site
			// É dividido em dois sub-blocos: header-top e header-bottom
			// * header-top:: conteúdo acima do menu principal
			// * header-bottom:: o próprio menu principal
			// dev Peterson  // 
    	-->
    
	    <?php
	    	include 'shared/_cabecalho.html';
	    ?>

	    <div id="page-content">
		    <div class="row-cad-email"> 
				<div class="container container-cad-email">
					<div class="container-fluid container-fluid-cad-email">
						<div class="title-cad-email col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h2>Comece Ainda Hoje a Entrar Em Forma Com Um Produto 100% Natural</h2>
						</div>
						<div class="content-cad-email col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="content-imgs-cad-email col-lg-7 col-md-7 col-sm-6 col-xs-6">
								<div class="selo-sn-cad-email col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<picture>
										<source media="(min-width: 991px)" srcset="../img/selo-satisfaction-nature-991.png">
										<source media="(min-width: 640px)" srcset="../img/selo-satisfaction-nature-640.png">
										<source media="(min-width: 480px)" srcset="../img/selo-satisfaction-nature-480.png">
										<img src="../img/selo-satisfaction-nature-330.png" alt="Selos de satisfação e ingred naturais">
									</picture>
								</div>

								<div class="frasco-cad-email col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<picture>
										<source media="(min-width: 1200px)" srcset="../img/frasco-cad-email-1200.png">
										<source media="(min-width: 991px)" srcset="../img/frasco-cad-email-1200.png">
										<source media="(min-width: 769px)" srcset="../img/frasco-cad-email-769.png">
										<source media="(min-width: 640px)" srcset="../img/frasco-cad-email-769.png">
										<source media="(min-width: 480px)" srcset="../img/frasco-cad-email-769.png">
										<img src="../img/frasco-cad-email-769.png" alt="produto Biodryne">
									</picture>
								</div>

							</div>

							<div class="content-box-cad-email col-lg-5 col-md-5 col-sm-6 col-xs-6">
								<div class="box-cad-email col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="title-box-cad-email col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h3>PREENCHA E INICIE<br/>
										<span>SEU PEDIDO</span></h3>
									</div>
									<form class="frm-cadastro-email" id="frm-cad-email" action="" method="post">
										
										<div class="form-group form-group-cad-email col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<input type="name" name="assinaturas_nomecompleto" id="assinaturas_nomecompleto" class="form-control" placeholder="Digite seu nome">
										</div>
										<div class="form-group form-group-cad-email col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<input type="email" name="assinaturas_email" id="assinaturas_email" class="form-control" placeholder="Digite seu email">
										</div>
										<input type="hidden" name="assinaturas_datahora" id="assinaturas_datahora" value="<?php echo $datahoralocalcadastro; ?>">
										<input type="hidden" name="assinaturas_siteacessado" id="assinaturas_siteacessado" value="PVBIOD001PA">
										<input type="hidden" name="assinaturas_ip" id="assinaturas_ip" size="50" value="<?php echo $ipaddress; ?>">
										
										<button type="submit" id="submitbutton" class="btn btn-warning btn-cad-email col-lg-12 col-md-12 col-sm-12 col-xs-12">CONTINUAR PARA VER<br/>PREÇOS E OFERTAS</button>
									</form>
									
								</div>
								<div class="rodape-box-cad-email col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<span><i class="fa fa-lock"></i> Dados seguros, utilizando Criptografia SSL de 256 bits</span>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	    
		<!--
			// Rodapé Biodryne 
		-->

		<?php
			include 'shared/_rodape.html';
		?>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-78533169-1', 'auto');
		  ga('send', 'pageview');

		</script>		
	</body>
	    
</html>
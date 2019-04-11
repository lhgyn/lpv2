<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Biodryne - Sobre nós | Site Oficial</title>
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
        <link rel="stylesheet" href="../css/contato.css">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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

	    <div class="row row-contato" id="page-content">
	    	<div class="container">
	    		<div class="container-fluid">

	    			<?php
						if (isset($_REQUEST['envio'])) {
							if ($_REQUEST['envio']=='1') {
								?>
									<div class="alert-success alert-dismissible alert" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<strong>Parabéns!</strong> Sua mensagem foi enviada com sucesso!
									</div>
								<?php
							} else if ($_REQUEST['envio']=='0') {
								?>
									<div class="alert-danger alert-dismissible alert" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<strong>Ops!</strong> Ocorreu algum erro ao enviar. <strong>Tente novamente!</strong>
									</div>
								<?php
							}
						}
					?>

				    <div class="content-title-contato">
						<div class="col-xs-12">
							<h1 class="text-left border-title"><i class="fa fa-envelope-o"></i>&nbsp;Contate-nos</h1>
						</div>
					</div>
					<div class="content-forms-contato">
						<div class="col-md-8 col-xs-12 form">
							<form action="../controllers/Email/sendemail.php" id="contactForm" class="form-horizontal" role="form" novalidate="novalidate">
								<div class="form-group">
									<div class="col-md-4 col-xs-12 col-label">
										<label for="contactNameBiod">Nome completo:</label><span class="required">*</span>
									</div>
									<div class="col-md-8 col-xs-12 pull-right">
										<div class="col-md-12 col-xs-12 col-input">
											<input class="form-control" id="contactNameBiod" placeholder="Digite seu nome completo" maxlength="150" data-fv-notempty="true" data-fv-notempty-message="É obrigatório informar o nome completo." name="contactNameBiod" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-4 col-xs-12 col-label">
										<label for="contactEmailBiod">Endereço de email:</label><span class="required">*</span>
									</div>
									<div class="col-md-8 col-xs-12 pull-right">
										<div class="col-md-12 col-xs-12 col-input">
											<input class="form-control" id="contactEmailBiod" placeholder="Digite seu endereço de e-mail" maxlength="150" data-fv-notempty="true" data-fv-notempty-message="É obrigatório informar um endereço de email válido." data-fv-emailaddress="true" data-fv-emailaddress-message="Este email é inválido." name="contactEmailBiod" type="email">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-4 col-xs-12 col-label">
										<label for="contactSubjectBiod">Assunto:</label><span class="required">*</span>
									</div>
									<div class="col-md-8 col-xs-12 pull-right">
										<div class="col-md-12 col-xs-12 col-input">
											<input class="form-control" id="contactSubjectBiod" placeholder="Digite o assunto" maxlength="150" data-fv-notempty="true" data-fv-notempty-message="É obrigatório informar oassunto da mensagem." name="contactSubjectBiod" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-4 col-xs-12 col-label">
										<label for="contactPedidoBiod">Número do pedido:</label>
									</div>
									<div class="col-md-8 col-xs-12 pull-right">
										<div class="col-md-12 col-xs-12 col-input">
											<input class="form-control" id="contactPedidoBiod" placeholder="Digite o número do pedido (opcional)" maxlength="150" data-fv-digits="true" data-fv-digits-message="O número do pedido informado é inválido." data-fv-stringlength-trim="true" data-fv-stringlength-min="7" data-fv-stringlength-max="7" data-fv-stringlength-message="O número do pedido informado é inválido." name="contactPedidoBiod" type="tel">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-4 col-xs-12 col-label">
										<label for="contactMessageBiod">Mensagem:</label><span class="required">*</span>
									</div>
									<div class="col-md-8 col-xs-12 pull-right">
										<div class="col-md-12 col-xs-12 col-input">
											<textarea class="form-control" id="contactMessageBiod" placeholder="Digite sua mensagem" data-fv-notempty="true" data-fv-notempty-message="É obrigatório a informar uma mensagem." name="contactMessageBiod" cols="50" rows="10"></textarea>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-12 col-input content-btn-contato">
										<button type="submit" class="btn btn-success js-spin pull-right">Enviar <i class="fa fa-arrow-right right"></i> </button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-4 col-xs-12 hidden-sm hidden-xs data">
							<div>
								<h3>Gostaríamos de ouvir a sua opinião</h3>
								<p>Como podemos ajudá-lo? Caso tenha alguma questão relacionada com a sua encomenda, por favor não se esqueça de mencionar o seu número de pedido.</p>
								<h3>Perguntas Frequentes</h3>
								<p>Encontre a resposta à sua pergunta na nossa sessão <a href="../views/perguntas-frequentes.php">Perguntas Frequentes</a>.</p>
								<h3>Pode encontrar-nos aqui:</h3>
								<p>
									<strong>Life Health</strong> - Rua T 50, Nº 1473, Setor Bueno, Goiânia-GO, CEP 74215-200
								</p>
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

	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

	    <script src="../js/vendor/bootstrap.min.js"></script>

	    <script type='text/javascript' src="../app/main.js"></script>
	    <script type='text/javascript' src='../js/validate.js'></script>
	</body>
	    
</html>
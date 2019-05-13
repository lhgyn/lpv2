<?php

	require "PHPMailer/PHPMailerAutoload.php";

	$nome = utf8_decode($_GET['nome']);
	$email = utf8_decode($_GET['email']);
	$assunto = utf8_decode($_GET['assunto']);
	$pedido = utf8_decode($_GET['n-pedido']);
	$mensagem = utf8_decode($_GET['mensagem']);

	$Mailer = new PHPMailer(true);
	$Mailer->isSMTP();
	$Mailer->Host = 'smtp.hostinger.com.br';
	$Mailer->Port = 587;
	$Mailer->SMTPAuth = true;
	
	//$Mailer->SMTPDebug = 3;
	$Mailer->Charset = "utf8";
	$Mailer->Username = "sac@phenatrimoficial.com.br";
	$Mailer->Password = 'NGb0spSFRgZV';
	$Mailer->From = "sac@phenatrimoficial.com.br";
	$Mailer->FromName = $nome;
	$Mailer->AddAddress('sac@phenatrimoficial.com.br');
	$Mailer->Subject = "Contato Phenatrim - ". $assunto;
	$Mailer->isHTML(true);

	$Mailer->Body = "<!doctype html>
		<!--[if lt IE 7]>      <html class='no-js lt-ie9 lt-ie8 lt-ie7' lang=''> <![endif]-->
		<!--[if IE 7]>         <html class='no-js lt-ie9 lt-ie8' lang=''> <![endif]-->
		<!--[if IE 8]>         <html class='no-js lt-ie9' lang=''> <![endif]-->
		<!--[if gt IE 8]><!--> <html class='no-js' lang=''> <!--<![endif]-->
			<head>
				<meta charset='utf-8'>
				<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
				<title>Contato - Phenatrim Oficial</title>
				<meta name='description' content='phenatrim.com.br'>
				<meta name='viewport' content='width=device-width, initial-scale=1'>
			</head>
			<body>
				<div class='row-content-total'>
					<div class='container'>
						<div class='container-fluid'>
							<div class='content-email-phenatrim col-lg-12 col-md-12 col-sm-12 col-xs-12'>
								<div class='content-congratulations col-lg-12 col-md-12 col-sm-12 col-xs-12'>
									<h3 class='txt-congratulations col-lg-12 col-md-12 col-sm-12 col-xs-12'>
										Mensagem enviada via formul&aacute;rio de contato phenatrim.com.br  
									</h3>
									<hr>
								</div>
								<div class='content-txt-email col-lg-12 col-md-12 col-sm-12 col-xs-12'>
									<p class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
										<strong>Nome: </strong>". $nome ."
									</p>
									<p class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
										<strong>Email: </strong>". $email ."
									</p>
									<p class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
										<strong>Assunto: </strong>". $assunto ."
									</p>
									<p class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
										<strong>N&uacute;mero do pedido: </strong>". $pedido ."
									</p>
									<p class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
										<strong>Mensagem: </strong>". $mensagem ."
									</p>
									<p>&nbsp;</p>
									<hr/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</body>
		</html>";

	if( $Mailer->send() ) {
		header("Location: http://phenatrimoficial.com.br/contato.php?envio=1");
	} else {
		header("Location: http://phenatrimoficial.com.br/contato.php?envio=0");
	}

?>
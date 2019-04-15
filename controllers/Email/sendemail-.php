<?php

	require "PHPMailer/PHPMailerAutoload.php";

	$nome = utf8_decode($_GET['contactNameBiod']);
	$email = utf8_decode($_GET['contactEmailBiod']);
	$assunto = utf8_decode($_GET['contactSubjectBiod']);
	$pedido = utf8_decode($_GET['contactPedidoBiod']);
	$mensagem = utf8_decode($_GET['contactMessageBiod']);

	$Mailer = new PHPMailer(true);
	$Mailer->isSMTP();
	$Mailer->Host = 'mx1.hostinger.com.br';
	$Mailer->Port = 2525;
	$Mailer->SMTPAuth = true;
	
	// $Mailer->SMTPDebug = 4;
	$Mailer->Charset = "utf8";
	$Mailer->Username = "sac@biodryne.com.br";
	$Mailer->Password = ';3D[$$GYfT';
	$Mailer->From = "sac@biodryne.com.br";
	$Mailer->FromName = $nome;
	$Mailer->AddAddress('sac@biodryne.com.br');
	$Mailer->Subject = "Contato Biodryne - ". $assunto;
	$Mailer->isHTML(true);

	$Mailer->Body = "<!doctype html>
		<!--[if lt IE 7]>      <html class='no-js lt-ie9 lt-ie8 lt-ie7' lang=''> <![endif]-->
		<!--[if IE 7]>         <html class='no-js lt-ie9 lt-ie8' lang=''> <![endif]-->
		<!--[if IE 8]>         <html class='no-js lt-ie9' lang=''> <![endif]-->
		<!--[if gt IE 8]><!--> <html class='no-js' lang=''> <!--<![endif]-->
			<head>
				<meta charset='utf-8'>
				<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
				<title>Contato Biodryne</title>
				<meta name='description' content='biodryne.com.br'>
				<meta name='viewport' content='width=device-width, initial-scale=1'>
				<style>
					body {
						font-family: 'Open Sans';
					}
				</style>
			</head>
			<body>
				<div class='row-content-total'>
					<div class='container'>
						<div class='container-fluid'>
							<div class='content-email-biodryne col-lg-12 col-md-12 col-sm-12 col-xs-12'>
								<div class='content-congratulations col-lg-12 col-md-12 col-sm-12 col-xs-12'>
									<h3 class='txt-congratulations col-lg-12 col-md-12 col-sm-12 col-xs-12'>
										Mensagem enviada via formul&aacute;rio de contato biodryne.com.br  
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
		header("Location: http://www.biodryne.com.br/views/contato.php?envio=1");
	} else {
		header("Location: http://www.biodryne.com.br/views/contato.php?envio=0");
	}

?>
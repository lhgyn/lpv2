<?php
$idTransacaoMoip = (isset($_GET['codigo']) && !empty($_GET['codigo'])) ? $_GET['codigo'] : NULL;
$Boleto = (isset($_GET['boleto']) && !empty($_GET['boleto'])) ? $_GET['boleto'] : NULL;
$CodigoBarras = (isset($_GET['codigobarras']) && !empty($_GET['codigobarras'])) ? $_GET['codigobarras'] : NULL;
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
    	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Site Oficial Biodryne</title>
        <meta name="author" content="LifeHealth">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="icon" href="../favicon.ico" />
        <style>
            body {
            	padding:0;
            	margin:0;
            	font-family: "Open Sans";
            }
			
			iframe:focus { 
				outline: none;
			}
			
			iframe[seamless] { 
				display: block;
			}
        </style>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="../css/font-opensans.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/finalizacao-boleto.css">

        <script src="../app/ajaxGetPost.js"></script>
    	<script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="../js/vendor/jquery-1.11.2.min.js"></script>
		<!--<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>-->
		<script type='text/javascript' src="../app/confirmacaoboleto.js"></script>

	</head>
	<body>

		<div class="loading-page"></div>

		<div class="row-header-biodrine">
	        <div class="container container-header-biodrine">
	            <div class="container-fluid container-fluid-header-biodrine">
	                <div class="content-header-biodryne col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="img-header col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                        <img src="../img/logo-biodryne.png" alt="logo">
	                    </div>
	                    <div class="text-header col-lg-6 col-md-6 col-sm-6 hidden-xs">
	                        <p>
	                            <i class="fa fa-lock"></i> Conexão segura
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <!--/container-fluid-->
	        </div>
	        <!--/container-->
	    </div>

		<div class="row-congratulate container">
			<div class="container-fluid">
				<div class="content-left-congralate col-lg-9 col-lg-9 col-sm-8 col-xs-12">
					<div class="box-title">
						<h1>Obrigado, <span class="nomeCliente"></span></h1>
						<h2>Recebemos seu pedido!</h2>
					</div>
					<p class="box-text">
						Seu pedido está pré-aprovado. <strong>Não esqueça de pagar seu boleto antes do vencimento!</strong>
					</p>
				</div>
				<div class="content-right-congralate col-lg-3 col-lg-3 col-sm-4 col-xs-12">
					<div class="box-order-number">
						<b>CÓDIGO DO SEU PEDIDO: <?php echo $idTransacaoMoip; ?></b>
						<h1 class="code-transacao"></h1>
					</div>
				</div>
			</div>
		</div>

		<div class="row-inf-email-entrega container">
			<div class="container-fluid">
				<div class="box-description box-description-email col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<p><span class="fa fa-envelope-o fa-3x"></span> Você receberá um e-mail em com todas as informações deste pedido. Caso não receba a mensagem nos próximos minutos, verifique sempre sua caixa de SPAM.</p>
				</div>
				<div class="box-description box-description-entrega col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<p><span class="fa fa-truck fa-3x"></span> Seu pedido será enviado aos Correios no primeiro dia útil após a aprovação do pagamento. Nós o manteremos sempre atualizado sobre o status do seu pedido.</p>
				</div>
			</div>
		</div>

		<div class="container container-boleto">
			<div class="container-fluid"> 
				<section class="action">
					<div class="action-1">
						<div class="action-title col-lg-12 col-md-12 col-sm-12 col-xs-12"><strong>E AGORA?</strong></div>
						<div class="row ">
							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 box-text">
								<span class="icon-boleto col-lg-2 col-md-2 col-sm-2 col-xs-12"><i class="fa fa-exclamation fa-2x"></i></span>
								<ul class="content-info-boleto col-lg-10 col-md-10 col-sm-10 col-xs-12">
									<li>
										<i class="fa fa-angle-right"></i> Imprima o boleto e pague em <strong>qualquer agência bancária, lotérica ou dos Correios</strong>, ou tambem pela internet.
									</li>
									<li>
										<i class="fa fa-angle-right"></i> O pagamento do boleto só poderá ser realizado <strong>até a data de vencimento</strong> do mesmo.
									</li>
									<li>
										<i class="fa fa-angle-right"></i> Após o pagamento do boleto, o banco emissor entra em contato conosco confirmado a transação e <strong>automaticamente nós enviamos seus produtos</strong> aos Correios!
									</li>
								</ul>
							</div>
							
						</div>
						
						<p>Codigo de Barra: <?php echo $CodigoBarras; ?></p>
						
						<div id="row-iframe-moip" class="row row-iframe-moip">
							<iframe src="<?php echo $Boleto ; ?>" class="iframe-boleto" width="100%" height="400px" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0"></iframe>
						</div>
					</div>
				</section>
			</div>
		</div>

		<div class="container">
			<div class="container-fluid">
				<div class="row-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="action-title"><strong>SEU PEDIDO</strong></div>
					<div class="purchase-description">
						<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
							<div class="description-pedido">Nome</div>
							<div class="value-pedido"><span class="nomeCliente"></span></div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
							<div class="description-pedido">Número do pedido</div>
							<div class="value-pedido"><span class="code-transacao"></span></div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<div class="description-pedido">Realizado em</div>
							<div class="value-pedido"><span class="data-pedido"></span></div>
						</div>
					</div>
				</div>

				<div class="row-descricao-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="content-descricao-pedido-title col-lg-12 col-md-12 col-sm-12 hidden-xs">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="description-pedido col-lg-2 col-md-2 col-sm-2">
								&nbsp;
							</div>
							<div class="description-pedido col-lg-4 col-md-4 col-sm-4">
								Item
							</div>
							<div class="description-pedido col-lg-2 col-md-2 col-sm-2">
								Preço
							</div>
							<div class="description-pedido col-lg-2 col-md-2 col-sm-2">
								Quantidade
							</div>
							<div class="description-pedido col-lg-2 col-md-2 col-sm-2">
								Total
							</div>
						</div>
					</div>

					<div class="content-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="pedido-total col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="content-img-product col-lg-2 col-md-2 col-sm-2 col-xs-4">
								<img class="img-product" alt="product" src="../img/product/product-one-330.png">
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
								<span class="nomeProduto"></span>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
								<span class="price"></span>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
								<span class="qtddProduto"></span>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
								<span class="price-total"></span>
							</div>
							<div class="pedido-total-xs hidden-lg hidden-md hidden-sm col-xs-8">
								<div class="col-xs-12">
									<p class="description-pedido">Item</p>
									<span class="nomeProduto"></span>
								</div>
								<div class="col-xs-12">
									<p class="description-pedido">Preço</p>
									<span class="price"></span>
								</div>
								<div class="col-xs-12">
									<p class="description-pedido">Quantidade</p>
									<span class="qtddProduto"></span>
								</div>
								<div class="col-xs-12">
									<p class="description-pedido">Total</p>
									<span class="price-total"></span>
								</div>
							</div>
						</div>
					</div>

					<div class="content-descricao-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="title-vlr-pedido col-lg-9 col-md-9 col-sm-9 col-xs-12">
							Valor dos produtos
						</div>
						<div class="total-price col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<span class="price-total"></span>
						</div>
					</div>
				</div>

				<div class="footer-action-3">
					<div class="row-status-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="action-title status-pedido-title"><strong>PRÓXIMOS PASSOS</strong></div>
						<div class="content-status-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="status-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="line-center-status col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
								<div class="status-one status-circle col-lg-3 col-md-3 col-sm-3 col-xs-3">
									<div class="status-horizontal col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="icon-status-pedido icon-one col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<i class="fa fa-check fa-2x"></i>
										</div>
										<p class="text-status-pacote col-lg-12 col-md-12 col-sm-12 col-xs-12 text-success">Pedido<br>feito!</p>
									</div>
									<div class="status-vertical hidden-lg hidden-md hidden-sm col-xs-12">
										<div class="content-icon-xs col-xs-6">
											<div class="icon-status-pedido icon-one">
												<i class="fa fa-check fa-2x"></i>
											</div>
										</div>
										<p class="text-status-pacote col-xs-6 text-success">Pedido<br>feito!</p>
									</div>
								</div>
								<div class="status-two status-circle col-lg-3 col-md-3 col-sm-3 col-xs-3">
									<div class="status-horizontal col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="icon-status-pedido icon-two col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<i class="fa fa-hourglass-half fa-2x"></i>
										</div>
										<p class="text-status-pacote col-lg-12 col-md-12 col-sm-12 col-xs-12 text-alert">Pagamento<br>Aprovado</p>
									</div>
									<div class="status-vertical hidden-lg hidden-md hidden-sm col-xs-12">
										<div class="content-icon-xs col-xs-6">
											<div class="icon-status-pedido icon-two">
												<i class="fa fa-hourglass-half fa-2x"></i>
											</div>
										</div>
										<p class="text-status-pacote col-xs-6 text-alert">Pagamento<br>Aprovado</p>
									</div>
								</div>
								<div class="status-three status-circle col-lg-3 col-md-3 col-sm-3 col-xs-3">
									<div class="status-horizontal col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="icon-status-pedido icon-three col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<i class="fa fa-truck fa-2x"></i>
										</div>
										<p class="text-status-pacote col-lg-12 col-md-12 col-sm-12 col-xs-12">Pacote com<br>os Correios</p>
									</div>
									<div class="status-vertical hidden-lg hidden-md hidden-sm col-xs-12">
										<div class="content-icon-xs col-xs-6">
											<div class="icon-status-pedido icon-three">
												<i class="fa fa-truck fa-2x"></i>
											</div>
										</div>
										<p class="text-status-pacote col-xs-6">Pacote com<br>os Correios</p>
									</div>
								</div>
								<div class="status-four status-circle col-lg-3 col-md-3 col-sm-3 col-xs-3">
									<div class="status-horizontal col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="icon-status-pedido icon-four col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<i class="fa fa-home fa-2x"></i>
										</div>
										<p class="text-status-pacote col-lg-12 col-md-12 col-sm-12 col-xs-12">Pacote<br>entregue</p>
									</div>
									<div class="status-vertical hidden-lg hidden-md hidden-sm col-xs-12">
										<div class="content-icon-xs col-xs-6">
											<div class="icon-status-pedido icon-four">
												<i class="fa fa-home fa-2x"></i>
											</div>
										</div>
										<p class="text-status-pacote col-xs-6">Pacote<br>entregue</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="row-info-pedido user-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="payment-info col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<h2 class="action-title"><strong>DADOS DO PAGAMENTO</strong></h2>
						<div class="type col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<i class="fa fa-barcode fa-4x icon-barcode col-lg-2 col-md-2 col-sm-2 col-xs-12"></i>
							<div class="info col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<p><span class="tipoPagamento"></span></p>
								<p class="venc-boleto">Vencimento: <span class="data_vencimento"></span></p>
								<div id="button" class="button" data-anchor="boleto">
									<div class="bt-content" id="button-paymentinfo">
										<a class="btn btn-view-boleto btn-success btn-sm" href="#row-iframe-moip">VISUALIZAR</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row-info-shipping shipping col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 item-shipping">
								<span class="description-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">Frete</span>
								<span class="price-frete info-shipping col-lg-12 col-md-12 col-sm-12 col-xs-12"></span>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 item-shipping">
								<span class="description-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">Valor dos Produtos</span>
								<span class="price-produto info-shipping col-lg-12 col-md-12 col-sm-12 col-xs-12"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-shipping ">
								<span class="description-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">Valor Total</span>
								<span class="price-total total-info-shipping col-lg-12 col-md-12 col-sm-12 col-xs-12"></span>
							</div>
						</div>
					</div>
					<div class="payment-shipping col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<h2 class="action-title"><strong>DADOS PARA ENTREGA</strong></h2>
						<dl>
							<dt class="description-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">Nome</dt>
							<dd class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class="nomeCliente"></span></dd>
							<dt class="description-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">Email</dt>
							<dd class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class="nomeEmail"></span></dd>
							<dt class="description-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">Telefone</dt>
							<dd class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class="telefone"></span></dd>
							<dt class="description-pedido col-lg-12 col-md-12 col-sm-12 col-xs-12">Endereço</dt>
							<dd class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class="enderecoCompleto"></span></dd>
						</dl>
					</div>
				</section>

				<section class="warning col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p>
						<strong>ATENÇÃO:</strong> Se houver algum problema com os dados da sua compra, entre em contato com a LifeHealth no número: <span>(62) 3928-1213</span>
						<br>
						TENHA SEMPRE EM MÃOS O NÚMERO DO SEU PEDIDO
					</p>
					
					<h3 class="code-transacao">/h3>
				</section>

			</div>
		</div>

		<!--
			// Rodapé Biodryne 
		-->

		<div class="row-rodape-checkout">
	        <div class="container container-rodape-checkout">
	            <div class="container-fluid container-fluid-rodape-checkout">
	                <div class="content-rodape-checkout">
	                    <picture class="img-logo-rodape col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                        <img src="../img/logo-biodryne-rodape.png" alt="logo-rodape">
	                    </picture>
	                    <div class="content-left-rodape col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                        <ul class="menu-rodape-checkout col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                            <li><a href="politica-privacidade.html"><i class="fa fa-caret-right"></i> Politica de Pricacidade</a>
	                            </li>
	                            <li><a href="politica-reembolso.html"><i class="fa fa-caret-right"></i> Politica de Reembolso</a>
	                            </li>
	                            <li class="li-contato">
	                                <strong>Contate-nos:</strong>
	                                <p>pelo E-mail: <strong>sac@biodryne.com.br</strong>
	                                </p>
	                                <p>pelo SAC: <strong>(62) 3928-1213</strong>
	                                </p>
	                            </li>
	                        </ul>
	                    </div>
	                    <div class="content-right-rodape col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                        <p>
	                            <strong class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Life Health</strong>
	                            <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">CNPJ: 15.301.011/0001-89</span>
	                            <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Av. Perimetral, 848, Qd. 21 Lt. 24<br/>Setor Campinas - Goiânia-GO - CEP: 74520-110</span>
	                        </p>
	                    </div>
	                    <span class="msg-rodape col-lg-12 col-md-12 col-sm-12 col-xs-12">Biodryne é um suplemento dietético que não se destina a diagnosticar, tratar, curar ou previnir qualquer doença. *</span>
	                    <p class="txt-copy-biodrine col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                        &copy
	                        <script>
	                            now = new Date;
	                            document.write(now.getFullYear());
	                        </script>
	                        Biodryne. Todos direitos reservados

	                    </p>
	                </div>
	            </div>
	        </div>
	    </div>
			
	</body>
	
	<script type='text/javascript' src='https://www.moip.com.br/transparente/MoipWidget-v2.js' charset="ISO-8859-1"></script>
	<script src="../js/vendor/bootstrap.min.js"></script>

</html>
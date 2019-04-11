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
        <title>Biodryne® | Weight Loss Formula | Site Oficial</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico" />
        <style>
            body {
            	padding:0;
            	margin:0;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/font-opensans.css">
        <style>
            body {
            	color: #006F92;
    			font-weight: bold;
    			font-family: "Open Sans";
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
		<script src="app/ajaxGetPost.js"></script>
		
    </head>
    <body>

    	<!--
			// Este primeiro bloco de código é destinado a header do site
			// É dividido em dois sub-blocos: header-top e header-bottom
			// * header-top:: conteúdo acima do menu principal
			// * header-bottom:: o próprio menu principal
			// dev Peterson  // 
    	-->
    
	    <div class="navbar-biodryne">
			<div class="container container-header-top">
		      	<div class="container-fluid">
			      	<div class="header-top col-lg-12">
				      	<div class="logo-tipo col-lg-4 col-md-4 ">
				      		<a href="index.php"><img src="img/logo-biodryne.png"></a> 
				      	</div>
				      	

				      	<div class="col-lg-8 col-md-8 content-contat-header"> 

				      		<!--
		            	    	// Este trecho refere-se a escolha do idioma e moeda corrente  // 
		            	    	// poderá ser usado futuramente, mas não agora. Por isso, segue comentado  // 
		            	    	// dev Peterson  //

				      		<div class="moeda-idioma col-md-12 col-xd-12 col-sm-12"> 
				                <ul>
				                	<li class="first-form first-form-left"><a href="#">LOCALIZE SEU PEDIDO</a></li>
				                	<li class="first-form first-form-right"><a href="#">CONTATE-NOS</a></li>
				                	
				                	
				                	<li class="last-form last-form-right">
							        	<form>
								            <select id="opc-idioma" name="seletion-idioma">
				                               <option value='en' selected='selected'>Português</option>
				                               <option value='pt' >Inglês</option>
				                               <option value='es' >Espanhol</option>
				                            </select>
								        </form>
							        </li>
							        <li class="last-form last-form-left">
				                		<form method="post" >
											<select id="moeda" name="moeda-corrente">
												<option value="BRS" selected='selected'>Real</option>
												<option value="USD" >Dolar</option>
											</select>
										</form>
								    </li>
							        
				            	</ul>
							</div><!-/-/moeda-idioma-/->
							-->

							<div class="icons-chamada">
								<ul>
									<li class="col-md-3 col-sm-3 col-xs-3 icon-client">
							            <span class="fa fa-thumbs-o-up"></span>
							            <p>Mais de 25.000</p>
							            <p>Clientes</p>
							        </li>
							        <li class="col-md-3 col-sm-3 col-xs-3 icon-anvisa">
							        	<span class="fa fa-check-square-o"></span>
							            <p>Aprovado pela</p>
								        <p>ANVISA</p>
							        </li>
							        <li class="col-md-3 col-sm-3 col-xs-3 icon-ingredients">
							        	<span class="fa fa-leaf"></span>    
							            <p>Ingredientes</p>
							            <p>naturais</p>
							        </li>
							        <li class="col-md-3 col-sm-3 col-xs-3 icon-contact">
							          	<span class="fa fa-phone"></span>
							            <p>SAC</p>
							            <p>(62) 3928-1213</p>
							        </li>
							    </ul>

			    			</div><!--/icons-chamada-->

						</div><!--/content-contat-header-->

					</div><!--/header-top-->

				</div><!--/container-fluid-->

			</div><!--/container-->

			<div class="loading-page"></div>

			<div class="container container-header-bottom">

				<div class="container-fluid">

					<nav class="navbar navbar-default header-bottom" data-spy="affix" data-offset-top="145">

					    <div class="navbar-header" >
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse navbar-menu-bio" id="bs-example-navbar-collapse-1" data-spy="affix" data-offset-top="120">
						    <ul class="nav navbar-nav">
							    <li><a href="index.php">HOME</a></li>
						        <li><a href="views/como-funciona.php">COMO FUNCIONA</a></li>
						        <li><a href="views/na-midia.php">NA MÍDIA</a></li>
						        <li><a href="views/depoimentos.php">DEPOIMENTOS</a></li>
						        <li><a href="views/garantia.php">GARANTIA</a></li>
						        <li><a href="views/perguntas-frequentes.php">PERGUNTAS FREQUENTES</a></li>
						        <li><a href="views/peca-agora.php">PEÇA AGORA!</a></li>
								<!--<li><a href="http://biodryneoficial.com.br">PEÇA AGORA!</a></li>-->
						    </ul>			      
					    </div><!-- /.navbar-collapse -->

					</nav><!--/navbar-bottom-->

				</div>

			</div>

		</div><!--/navbar-biodryne-->

	    <!--
			// Trecho destinado ao banner principal
	    -->
	    <div class="container-banner">
	    	<div class="container">
	    		<div class="container-fluid">
	    			<div class="content-banner-full col-md-12"> 
	    				<div class="banner-left col-lg-3 col-md-3 hidden-sm hidden-xs"> 
	    					<picture>
							    <source media="(min-width: 1200px)" srcset="img\banner\banner-left-1200.png">
							    <source media="(min-width: 991px)" srcset="img\banner\banner-left-991.png">
							    <source media="(min-width: 769px)" srcset="img\banner\banner-left-768.png">
							    <source media="(min-width: 640px)" srcset="img\banner\banner-left-640.png">
							    <source media="(min-width: 480px)" srcset="img\banner\banner-left-480.png">
							    <img src="img\banner\banner-left-480.png" alt="Biodryne-330">
							</picture>
	    				</div>
	    				<div class="content-text-banner col-lg-5 col-md-5 col-sm-8 col-xs-8"> 
	    					<h2 class="title-banner">A MANEIRA MAIS EFICAZ E SEGURA PARA EMAGRECER <span>DEFINITIVAMENTE!</span></h2>
	    					<hr class="line-banner">
	    					<span class="text-banner">Poderosa fórmula com benefícios clinicamente comprovados:</span>
	    					<div class="text-list-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
		    					<p><img class="icon-balance" src="img/icon-scale.png">Perda de peso</p>
		    					<p><img class="icon-fita-metrica" src="img/icon-measure.png">Redução de medidas</p>
		    					<p><img class="icon-celulite" src="img/icon-woman.png">Combate à celulites</p>
		    					<p><i class="fa fa-fire"></i>Queima de gordura teimosa</p>
		    					<p><i class="fa fa-bolt"></i>Energia extra</p> 
	    					</div>
	    					<div class="frasco-480 hidden">
	    						<img src="img\banner\banner-left-330.png" alt="Biodryne-330">
	    					</div>
	    				</div>

	    				<!--

	    				<div class="content-btn-direcionamento-480">
							
							<span>
								Conquiste Um Corpo Lindo E Atraente...
								Sinta-se Mais Confiante E Feliz!
							</span>

							<div class="btn-adquira btn-adquira-480">
								<a href="http://www.biodryne.com.br/peca-agora.php" class="btn-warning btn col-sm-12 col-xs-12">
									<h3 class="btn-uppercase-experimente">EXPERIMENTE<br/>BIODRYNE HOJE!</h3>			
								</a>
							</div>
						</div><! - -/content-btn-direcionamento-->

	    				<div class="banner-right col-lg-4 col-md-4 col-sm-4 col-xs-4"> 
	    					<picture>
							    <source media="(min-width: 1200px)" srcset="img\banner\banner-right-1200.png">
							    <source media="(min-width: 991px)" srcset="img\banner\banner-right-991.png">
							    <source media="(min-width: 768px)" srcset="img\banner\banner-right-768.png">
							    <source media="(min-width: 640px)" srcset="img\banner\banner-right-640.png">
							    <source media="(min-width: 480px)" srcset="img\banner\banner-right-480.png">
							    <img src="img\banner\banner-right-480.png" alt="Biodryne-330">
							</picture>
	    				</div>
	    			</div><!--/cozntent-banner-full-->
	      		</div><!--/container-fluid-->
	      	</div><!--/container-->
	    </div><!--/container-banner-->
	    <!--
			// Fim do trecho destinado ao banner principal
	    -->

		<div class="row-conversao-interessados">
			<div class="container"> 
				<div class="container-fluid"> 

					<div class="content-img-frasco-direcionamento hidden-lg hidden-md col-sm-4 col-xs-4">
						<picture>
						    <source media="(min-width: 768px)" srcset="img\banner\banner-left-768.png">
						    <source media="(min-width: 640px)" srcset="img\banner\banner-left-640.png">
						    <source media="(min-width: 480px)" srcset="img\banner\banner-left-480.png">
						    <img src="img\banner\banner-left-480.png" alt="Biodryne-330">
						</picture>
					</div>

					<div class="content-btn-direcionamento col-lg-12 col-md-12 col-sm-8 col-xs-8"> 
						
						<div class="text-adquira col-lg-6 col-md-5 col-sm-12 hidden-xs">
							<p>
								Conquiste Um Corpo Lindo E Atraente...<br/>
								Sinta-se Mais Confiante E Feliz!
							</p>
						</div>

						<div class="btn-adquira col-lg-6 col-md-7 col-sm-12 col-xs-12">
							<a href="http://www.biodryne.com.br/views/peca-agora.php" class="btn-warning btn col-lg-12 col-md-12">
								<h3 class="btn-uppercase-experimente">EXPERIMENTE BIODRYNE HOJE!</h3>
								<p class="btn-lowercase-experimente">SATISFAÇÃO GARANTIDA OU O SEU DINHEIRO DE VOLTA!</p> 
							</a>
						</div>
					</div><!--/content-btn-direcionamento-->
				</div><!--/container-fluid-->
			</div><!--/container-->
		</div><!--/row-conversao-interessados-->

		<div class="content-lab row-scientificity">
			<div class="container container-scientificity">
				<div class="container-fluid container-fluid-scientificity">

					<!-- // Bloco 2: Cientificidade -->
					<div class="content-scientificity col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="title-scientificity col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h2>Absolutamente Tudo O Que Você Precisa Para Conquistar A Melhor Versão De Si Mesma!</h2>
						</div>

						<div class="content-text-scientificity col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<p class="text-scientificity">
								<span>Biodryne</span> é uma fórmula emagrecedora 100% natural, composta por uma mistura única de ingredientes cuidadosamente selecionados e que oferecem benefícios comprovados cientificamente para perda de peso e queima de gordura.
							</p>
						</div>

						<div class="content-img-scientificity col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="title-img-list hidden col-xs-12"> 
								<h3>FÓRMULA EXCLUSIVA</h3>
							</div>

							<div class="content-img-left col-lg-6 col-md-6 col-sm-5 col-xs-6"> 
								<picture>
									<source media="(min-width: 1200px)" srcset="img/scientificity-large.png">
									<source media="(min-width: 991px)" srcset="img/scientificity-large.png">
									<source media="(min-width: 769px)" srcset="img/scientificity-medio.png">
									<source media="(min-width: 640px)" srcset="img/scientificity-medio.png">
									<source media="(min-width: 481px)" srcset="img/scientificity-large.png">
									<img src="img/scientificity-small.jpg" alt="Imagem Cientificidade" />
								</picture>
							</div>

							<div class="content-img-list-right col-lg-6 col-md-6 col-sm-7 col-xs-6">
								<ul>
									<li><span><i class="fa fa-check"></i>Completa</span></li>
									<li><span><i class="fa fa-check"></i>Sinérgica</span></li>
									<li><span><i class="fa fa-check"></i>Potente</span></li>
									<li><span><i class="fa fa-check"></i>Comprovada</span></li>
								</ul>
							</div>
						</div>
					</div><!--/content-text-convince-->

				</div><!--/container-fluid-->
			</div><!--/container-->
		</div><!--/content-convince-->

		
		<div class="row-after-before">
			<div class=container> 
				<div class="container-fluid">
					<div class="content-after-before col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
						<div class="title-after-before col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h2>Resultados Que Você Também Pode Ter!</h2>
						</div> 

						<div class="block-after-before col-lg-12col-md-12 col-sm-12 col-xs-12">
							
							<div class="content-depo-box col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="content-depo-box-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="border-depo"></div>
									<div class="img-after-before col-lg-12 col-md-12 col-sm-6 col-xs-6">
										<img src="img/img-depoimento1.jpg" class="img-depoimento col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="text-after-before col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<p class="box-antes col-lg-6 col-md-6 col-sm-6 col-xs-6">Antes</p>
											<p class="box-depois col-lg-6 col-md-6 col-sm-6 col-xs-6">Depois</p> 
										</div>
									</div>
									<div class="text-depo-total col-lg-12 col-md-12 col-sm-6 col-xs-6">
										<h2 class="titulo-depoimento col-lg-12 col-md-12 col-sm-12 col-xs-12">Aline</h2>
										<div class="content-text-depo col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<p class="text-depo col-lg-12 col-md-12 col-sm-12 col-xs-12">
												“Perder peso e manter definitivamente não é uma tarefa fácil, mas com Biodryne isso é possível. Nunca me senti tão realizada quanto agora! Viver em paz com a balança é simplesmente maravilhoso! Valeu a pena experimentar.”
											</p>
										</div>
									</div>
								</div>
							</div>

							<div class="content-depo-box col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="content-depo-box-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="border-depo"></div>
									<div class="img-after-before col-lg-12 col-md-12 col-sm-6 col-xs-6">
										<img src="img/img-depoimento2.jpg" class="img-depoimento col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="text-after-before col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<p class="box-antes col-lg-6 col-md-6 col-sm-6 col-xs-6">Antes</p>
											<p class="box-depois col-lg-6 col-md-6 col-sm-6 col-xs-6">Depois</p> 
										</div>
									</div>
									<div class="text-depo-total col-lg-12 col-md-12 col-sm-6 col-xs-6">
										<h2 class="titulo-depoimento col-lg-12 col-md-12 col-sm-12 col-xs-12">Luciana</h2>
										<div class="content-text-depo col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<p class="text-depo col-lg-12 col-md-12 col-sm-12 col-xs-12">
												“Depois de tanto tempo tentando emagrecer, descobri esse produto fantástico! Finalmente consegui perder peso, e o melhor; de forma natural e sem efeito colateral. Sem falar que hoje me sinto muito mais disposta e confiante. Só tenho a agradecer.”
											</p>
										</div>
									</div>
								</div>
							</div>

							<div class="content-depo-box content-depo-box-right col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="content-depo-box-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="border-depo"></div>
									<div class="img-after-before col-lg-12 col-md-12 col-sm-6 col-xs-6">
										<img src="img/img-depoimento3.jpg" class="img-depoimento col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="text-after-before col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<p class="box-antes col-lg-6 col-md-6 col-sm-6 col-xs-6">Antes</p>
											<p class="box-depois col-lg-6 col-md-6 col-sm-6 col-xs-6">Depois</p> 
										</div>
									</div>
									<div class="text-depo-total col-lg-12 col-md-12 col-sm-6 col-xs-6">
										<h2 class="titulo-depoimento col-lg-12 col-md-12 col-sm-12 col-xs-12">Simone</h2>
										<div class="content-text-depo col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<p class="text-depo col-lg-12 col-md-12 col-sm-12 col-xs-12">“Estou muito contente com o meu resultado. Já tomei diversos produtos para emagrecimento e nenhum me proporcionou um resultado satisfatório, mas Biodryne é diferente, pode acreditar...<br>Funciona mesmo!”</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="btn-adquira col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
							<a href="http://www.biodryne.com.br/views/peca-agora.php" class="btn-warning btn col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h3 class="btn-uppercase-experimente">EXPERIMENTE BIODRYNE HOJE!</h3>
								<p class="btn-lowercase-experimente">SEJA A NOSSA PRÓXIMA HISTÓRIA DE SUCESSO!</p> 
							</a>
						</div>

					</div>
				</div>
			</div> 
		</div>
		
		
		<div class="row-wish">
			<div class="back-topo-wish">
				<div class="back-wish-topo"></div>
				<div class="separador"></div>
				<div class="back-wish-bottom"></div>
			</div>
			<div class="content-full-wish container"> 
				<div class="container-fluid">
					<div class="content-wish col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
						
						<div class="title-wish col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
							<h2>
								Imagine Quão Bom Seria Você Magra, Bonita E Cheia De Disposição?
							</h2>
						</div>

						<div class="content-three-wish col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
							
							<div class="wish-individual wish-left col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
								
								<div class="title-img-wish title-left-img-wish col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
									<h4><span>CORPO</span><br/><strong>MAGRO E SAUDÁVEL</strong></h4>
								</div>
								<div class="img-wish col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
									<picture class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<source media="(min-width: 1200px)" srcset="img\wish\img-wish-01-1200.jpg">
										<source media="(min-width: 991px)" srcset="img\wish\img-wish-01-991.jpg">
										<source media="(min-width: 768px)" srcset="img\wish\img-wish-01-768.jpg">
										<source media="(min-width: 640px)" srcset="img\wish\img-wish-01-640.jpg">
										<source media="(min-width: 480px)" srcset="img\wish\img-wish-01-480.jpg">
										<img src="img\wish\img-wish-01-480.jpg" alt="wish-left">
									</picture>
								</div>
								<div class="text-rodape-img-wish col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
									<span>Desfile um corpo incrivelmente <br><strong>lindo e atraente</strong></span>
								</div>
							</div>

							<div class="wish-individual wish-center col-lg-4 col-md-4 col-sm-4 col-xs-12"> 

								<div class="title-img-wish title-center-img-wish col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
									<h4><span>MAIS</span><br/><strong>AUTOESTIMA</strong></h4>
								</div>
								<div class="img-wish col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
									<picture class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<source media="(min-width: 1200px)" srcset="img\wish\img-wish-02-1200.jpg">
										<source media="(min-width: 991px)" srcset="img\wish\img-wish-02-991.jpg">
										<source media="(min-width: 768px)" srcset="img\wish\img-wish-02-768.jpg">
										<source media="(min-width: 640px)" srcset="img\wish\img-wish-02-640.jpg">
										<source media="(min-width: 480px)" srcset="img\wish\img-wish-02-480.jpg">
										<img src="img\wish\img-wish-02-480.jpg" alt="wish-left">
									</picture>
								</div>
								<div class="text-rodape-img-wish txt-rdp-img-wish-center col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
									<span>Você altamente <br><strong>feliz e confiante</strong></span>
								</div>
								
							</div>

							<div class="wish-individual wish-right col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
								
								<div class="title-img-wish title-right-img-wish col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
									<h4><span>RESULTADOS</span><br/><strong>SURPREENDENTES</strong></h4>
								</div>
								<div class="img-wish col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<picture class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<source media="(min-width: 1200px)" srcset="img\wish\img-wish-03-1200.jpg">
										<source media="(min-width: 991px)" srcset="img\wish\img-wish-03-991.jpg">
										<source media="(min-width: 768px)" srcset="img\wish\img-wish-03-768.jpg">
										<source media="(min-width: 640px)" srcset="img\wish\img-wish-03-640.jpg">
										<source media="(min-width: 480px)" srcset="img\wish\img-wish-03-480.jpg">
										<img src="img\wish\img-wish-03-480.jpg" alt="wish-left">
									</picture>
								</div>
								<div class="text-rodape-img-wish col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
									<span>Resultados reais que você <br><strong>sempre desejou conquistar</strong></span>
								</div>

							</div>

						</div>

					</div>
				</div>
			</div>
		</div>

		

		<div class="content-scientist row-scientist">
			<div class="container">
				<div class="container-fluid"> 

					<!-- // Bloco destinado ao trecho de texto com icones -->
					
					<div class="content-icon-scientist col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
						
						<div class="content-img-doctor col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
							<img class="img-doctor" src="img\img-doctor.png" alt="doutor">
						</div>

						<div class="content-list-scientist col-lg-12 col-md-12 col-sm-12 col-xs-12"> 

							<p class="icon-txt-scientist content-icon-1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<span><i class="fa fa-file-text-o"></i>Sem necessidade<br/>de receita</span>
							</p>
							
							<p class="icon-txt-scientist content-icon-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<span><i class="fa fa-ambulance"></i>Sem substâncias<br/> farmacêuticas perigosas</span>
							</p>
							
							<p class="icon-txt-scientist content-icon-3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<span><i class="fa fa-stethoscope"></i>Sem efeitos<br/> colaterais nocivos</span>
							</p>

						</div>
						
					</div><!--/content-text-scientist-->

					<!-- // Bloco destinado ao trecho somente ao texto-->
					
					<div class="content-text-scientist col-lg-8 col-md-8 col-sm-8 col-xs-12">

						<h2>Você Pode Mudar A Sua Realidade Agora Mesmo!</h2>

						<div class="content-text-full-scientist col-lg-12 col-md-12 col-sm-12 col-xs-12">

							<p>
							Se você realmente quer perder peso, Biodryne definitivamente é a melhor solução que você pode encontrar hoje no mercado. Este emagrecedor é fruto de uma longa investigação que finalmente resultou no desenvolvimento de uma perfeita formulação que age sinergicamente no organismo para promover o equilíbrio da função metabólica e contribuir consideravelmente para o processo de emagrecimento.<br/><br/>
							E para obter melhores resultados tome Biodryne corretamente, mantenha uma alimentação saudável e pratique atividades físicas de forma moderada e sempre acompanhada por um profissional qualificado.
							</p>

						</div>

					</div><!--/content-img-scientist-->
					
				</div>
			</div> 
		</div>


		<!--
			// Deste trecho para baixo está em desenvolvimento
		-->

		<div class="content-cta">
			<div class="container">
				<div class="container-fluid">

					<!-- // Bloco destinado ao trecho com o botão para direcioonamento às vendas-->
					
					<div class="content-btn-cta col-lg-8 col-md-8 col-sm-8 col-xs-8">

						<h2 class="title-cta col-lg-12 col-md-12 col-sm-12 col-xs-12">O Que Você Ainda Está Esperando?</h2>

						<div class="text-cta col-lg-12 col-md-12 col-sm-12 col-xs-12">							
							<p>Dê o primeiro passo para você conquistar o corpo, a saúde e o bem estar que você sempre quis!</p>
							<p>Milhares de pessoas já conseguiram resultados surpreendentes com Biodryne. E você não pode ficar de fora!</p>							
							<p>Então, venha fazer parte desse time de sucesso!</p>
						</div>

						<div class="content-img-cta content-img-cta-small hidden">
							<div class="frasco-cta col-xs-12">
								<picture>
									<source media="(min-width: 480px)" srcset="img/frasco-cta-640.png">
									<img src="img/frasco-cta-640.png" alt="produto Biodryne">
								</picture>
							</div>
						</div>

						<div class="btn-cta col-lg-12 col-md-12 hidden-sm col-xs-12"> 
							<a href="http://www.biodryne.com.br/views/peca-agora.php" class="btn-warning btn col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h3 class="btn-uppercase-experimente">GARANTA JÁ O SEU!</h3>
								<p class="btn-lowercase-experimente">Estoques Limitados: Peça Agora Com Risco Zero!</p> 
							</a>
						</div>

					</div><!--/content-img-convince-->

					<!-- // Bloco destinado ao trecho a imagem do frasco do produto -->
					
					<div class="content-img-cta-large col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="content-img-cta col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<picture>
								<source media="(min-width: 1200px)" srcset="img/frasco-cta-1200.png">
								<source media="(min-width: 991px)" srcset="img/frasco-cta-991.png">
								<source media="(min-width: 769px)" srcset="img/frasco-cta-769.png">
								<img src="img/frasco-cta-769.png" alt="produto Biodryne">
							</picture>
						</div>
					</div>

					<div class="content-btn-wdt100 hidden-lg hidden-md col-sm-12 col-xs-12">
						<div class="btn-cta col-sm-12 col-sm-12"> 
							<a href="http://www.biodryne.com.br/views/peca-agora.php" class="btn-warning btn col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h3 class="btn-uppercase-experimente">GARANTA JÁ O SEU!</h3>
								<p class="btn-lowercase-experimente">Estoques Limitados: Peça Agora Com Risco Zero!</p> 
							</a>
						</div>
					</div>

				</div><!--/container-fluid-->
			</div><!--/container-->
		</div><!--/content-cta-->

		<!--
			// Rodapé Biodryne 
		-->

		<div class="row-rodape">
			<div class="container"> 
				<div class="container-fluid"> 
					<div class="content-rodape col-lg-12 col-md-12">
						<div class="submenus-rodape col-lg-8 col-md-8 col-sm-8 col-xs-8">

							<div class="rodape-contato col-lg-3 col-md-3 col-sm-3"> 
								<ul> 
									<li><h4>Contate-nos</h4></li>
									<li><p>pelo SAC: <br/><strong>(62) 3928-1213</strong></p></li>
									<li><p>pelo E-mail: <br/><strong>sac@biodryne.com.br</strong></p></li>
								</ul>
							</div>

							<!--
								// trecho do menu intitucional, links relacionados a companhia
							-->
							<div class="rodape-our-company col-lg-3 col-md-3 col-sm-3"> 
								<ul> 
									<li><h4>Institucional</h4></li>
									<li><a href="index.php">Home</a></li>
									<li><a href="views/sobre-nos.php">Sobre nós</a></li>
								</ul>
							</div>

							<!--
								// trecho do menu especifico do produto
							-->

							<div class="rodape-biodryne col-lg-3 col-md-3 col-sm-3"> 
								<ul> 
									<li><h4>Biodryne</h4></li>
									<li><a href="views/como-funciona.php">Como funciona</a></li>
									<li><a href="views/na-midia.php">Na mídia</a></li>
									<li><a href="views/depoimentos.php">Depoimentos</a></li>
									<li><a href="views/perguntas-frequentes.php">Perguntas frequentes</a></li>
									<li><a href="views/garantia.php">Garantia</a></li>
									<li><a href="views/peca-agora.php">Peça agora!</a></li>
								</ul>
							</div>

							<!--
								// trecho do menu de politicas, links relacionado a politicas de compra do biodryne
							-->

							<div class="rodape-policies col-lg-3 col-md-3 col-sm-3"> 
								<ul> 
									<li><h4>Políticas</h4></li>
									<li><a href="views/politica-privacidade.php">Política de Privacidade</a></li>
									<li><a href="views/politica-reembolso.php">Política de Reembolso</a></li>
								</ul>
							</div>

							<!--
								// Link direto para as redes sociais
							-->

							<div class="icons-social-networks col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
								<a href="https://www.facebook.com/Biodryne-1590715204557680/?fref=ts"><span class="fa fa-facebook-official icon-facebook"></span></a>
								<a href="#" title="instagram momentâneamente desativado"><span class="fa fa-instagram icon-instagram"></span></a>
							</div>

							<div class="rodape-obs col-lg-12 col-md-12 col-sm-12">
								<i>
									Biodryne é um suplemento dietético que não se destina a diagnosticar, tratar, curar ou previnir qualquer doença. *
								</i> 
							</div>

						</div>

						<div class="content-newletter-rodape col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<div class="btn-newsletter col-lg-12 col-md-12 col-sm-12"> 
								<h2>Pronta Para Obter Mais Dicas Sobre Perda De Peso?</h2>
								<form class="cad-newsletter col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
									<div class="input-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<input class="inpt-default inpt-name inpt col-lg-12 col-md-12 col-sm-12 col-xs-12" name="assinaturas_nomecompleto" id="assinaturas_nomecompleto" placeholder="Nome" type="text"> 
									</div>
									<div class="input-right col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<input class="inpt-default inpt-email inpt col-lg-12 col-md-12 col-sm-12 col-xs-12" name="assinaturas_email" id="assinaturas_email" placeholder="Email" type="text"> 
									</div>
									<input type="hidden" name="assinaturas_datahora" id="assinaturas_datahora" value="<?php echo $datahoralocalcadastro; ?>">
									<input type="hidden" name="assinaturas_siteacessado" id="assinaturas_siteacessado" value="PVBIOD001NL">
									<input type="hidden" name="assinaturas_ip" id="assinaturas_ip" size="50" value="<?php echo $ipaddress; ?>">
									<button type="submit" id="submitbutton" class="btn btn-warning col-lg-12 col-md-12 col-sm-12 col-xs-12">Cadastrar</button>
								</form>
							</div>
						</div> 

						<div class="text-copyright col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p>
								&copy 
								<script>
									now = new Date;
									document.write(now.getFullYear());
								</script>
								Biodryne. Todos direitos reservados
							</p> 
						</div>

					</div><!--/content-rodape-->
				</div><!--container-fluid-->
			</div><!--container-->
		</div><!--/row-rodape-->		

	    <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-78533169-1', 'auto');
		  ga('send', 'pageview');

		</script>
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

	    <script src="js/vendor/bootstrap.min.js"></script>
	    
	    <script src="app/main.js"></script>
		<script src="app/newsLetter.js"></script>
		
	</body>
	    
</html>

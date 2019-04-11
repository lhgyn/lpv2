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
        <title>Biodryne Rx | Weight Loss Formula | Site Oficial</title>
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
        <link rel="stylesheet" href="css/news-home.css">

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
			      	<div class="header-top col-lg-12 hidden-xs">
				      	<div class="logo-tipo col-lg-4 col-md-4 ">
				      		<a href="index.php"><img src="img/logo-biodryne.png"></a> 
				      	</div>
				      	

				      	<div class="col-lg-8 col-md-8 content-contat-header"> 

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

					<nav class="navbar navbar-default header-bottom" role="navigation" id="slide-nav">

					    <div class="navbar-header">
							<a class="navbar-toggle">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<div class="navbar-brand header-top-xs">
								<div class="logo-xs">
									<a href="index.php"><img src="img/logo-biodryne.png">
									</a>
								</div>

								<div class="content-contat-header-xs">
									<div class="icon-contact-xs">
										<p><i class="fa fa-phone"></i>&nbsp;SAC&nbsp;<span>(62) 3928-1213</span></p>
									</div>
								</div>
							</div>
						</div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div id="slidemenu" class="navbar-menu-bio">
						    <ul class="nav navbar-nav">
							    <li><a href="index.php">HOME</a></li>
						        <li><a href="views/como-funciona.php">COMO FUNCIONA</a></li>
						        <li><a href="views/depoimentos.php">DEPOIMENTOS</a></li>
						        <li><a href="views/garantia.php">GARANTIA</a></li>
						        <li><a href="views/perguntas-frequentes.php">PERGUNTAS FREQUENTES</a></li>
						        <li><a href="views/contato.php">CONTATO</a></li>
						        <li><a href="#buy-biodryne" class="btn-buy">PEÇA AGORA!</a></li>
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
	    <div id="page-content">
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
								<a href="#buy-biodryne" class="btn-buy btn-warning btn col-lg-12 col-md-12">
									<h3 class="btn-uppercase-experimente">EXPERIMENTE BIODRYNE RX HOJE!</h3>
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

							<div class="content-text-scientificity col-lg-7 col-md-8 col-sm-8 col-xs-12">
								<p class="text-scientificity">
									<span>Biodryne Rx</span> é uma fórmula emagrecedora 100% natural, composta por uma mistura única de ingredientes cuidadosamente selecionados e que oferecem benefícios comprovados cientificamente para perda de peso e queima de gordura.
								</p>
							</div>

							<div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 content-img-verao"> 
			    				<img src="img/conquista-verao.png" alt="conquita verao">
			    			</div>

							<!-- <div class="content-img-scientificity col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
							</div> -->
						</div><!--/content-text-convince-->

					</div><!--/container-fluid-->
				</div><!--/container-->
			</div><!--/content-convince-->

			<div class="row-content-justification row-content-justification-home">
			    <div class="container content-full-justification"> 
			    	<div class="container-fluid">
			    		<hr/>
			    		<div class="box-container-title-justification"> 
			    			<h3 class="title-justification col-md-12">FINALMENTE UMA ALTERNATIVA NATURAL, SEGURA E EFICAZ</h3>
			    		</div>
			    		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 box-content-text-justification">
			    			<p>
			    				Se você realmente quer perder peso ou se livrar daquela gordurinha extra e ter um corpo magro e atraente; com Biodryne Rx você pode obter resultados reais.<br/><br/>

								Como você mesma pode perceber, Biodryne Rx foi perfeitamente formulado e precisamente equilibrado para atender às necessidades de cada mulher, quando se trata de perder peso.
			    			</p>

			    			<!-- <img class="img-justification-480" src="img/img-lab-1200.png" alt="img-convince-mobile"> -->

			    			<h4 class="col-lg-12 col-md-12 hidden-sm hidden-xs"><strong>Definitivamente, você nunca viu nada igual...</strong></h4>
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
							<br>
							<h4 class="hidden-lg hidden-md col-sm-12 col-xs-12"><strong>Definitivamente, você nunca viu nada igual...</strong></h4>
							<br>
						</div>

			    		<!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 box-content-img-justification">
			    			<picture> 
								<source media="(min-width: 1200px)" srcset="img/img-lab-1200.png">
								<source media="(min-width: 991px)" srcset="img/img-lab-991.png">
								<source media="(min-width: 768px)" srcset="img/img-lab-769.png">
								<source media="(min-width: 640px)" srcset="img/img-lab-640.png">
								<img src="../img/img-lab-1200.png" alt="img-convince-mobile">
							</picture>
			    		</div> -->

			    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content-points-justification">

			    			<div class="row-point-just row-just-complete col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
			    				<div class="col-md-1 col-sm-2 col-xs-2 img-points-justification img-just-complete">
			    					<img src="img/complete-justification.jpg">
			    				</div>

			    				<div class="col-md-11 col-sm-10 col-xs-10 text-points-just text-just-complete">
			    					<h3 class="title-points-just title-complete"><i class="fa fa-check"></i>Completa</h3>

			    					<p>
			    						Nenhuma outra fórmula contém ingredientes 100% naturais, seguros e eficazes para ajudar estabelecer o equilíbrio metabólico e ativar o seu metabolismo no modo queimador de gordura. Este fator é crucial para acelerar a perda de peso. Afinal, com o metabolismo operando em ritmo lento nada irá contribuir para que você emagreça de forma eficiente.
			    					</p>
			    				</div>
			    			</div>

			    			<div class="row-point-just row-just-proven col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
			    				<div class="col-md-1 col-sm-2 col-xs-2 img-points-justification img-just-proven">
			    					<img src="img/proven-justification.jpg">
			    				</div>

			    				<div class="col-md-11 col-sm-10 col-xs-10 text-points-just text-just-proven">
			    					<h3 class="title-points-just title-proven"><i class="fa fa-check"></i>Comprovada</h3>

			    					<p>
			    						Diversos estudos realizados nos EUA revelam que os compostos do Biodryne Rx – ácido clorogênico, sinefrina, caffeine anhydrous, irvingia gabonensis, metilxantinas e Green tea – intensificam consideravelmente a oxidação de gordura, especialmente aquela que se localiza na barriga, nas coxas e no bumbum.
			    					</p>
			    				</div>
			    			</div>

			    			<div class="row-point-just row-just-powerful col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
			    				<div class="col-md-1 col-sm-2 col-xs-2 img-points-justification img-just-powerful">
			    					<img src="img/powerful-justification.jpg">
			    				</div>

			    				<div class="col-md-11 col-sm-10 col-xs-10 text-points-just text-just-powerful">
			    					<h3 class="title-points-just title-powerful"><i class="fa fa-check"></i>Potente</h3>

			    					<p>
			    						Uma mistura única que reúne as melhores substâncias aprovadas pela ANVISA, na dosagem exata para ser capaz de proporcionar os melhores resultados, sem risco e sem efeito sanfona.
			    					</p>
			    				</div>
			    			</div>

			    			<div class="row-point-just row-just-synergy col-lg-12 col-md-12 col-sm-12 col-xs-12">
			    				<div class="col-md-1 col-sm-2 col-xs-2 img-points-justification img-just-synergy">
			    					<img src="img/synergy-justification.jpg">
			    				</div>

			    				<div class="col-md-11 col-sm-10 col-xs-10 text-points-just text-just-synergy">
			    					<h3 class="title-points-just title-synergy"><i class="fa fa-check"></i>Sinérgica</h3>

			    					<p>
			    						Cada componente foi cuidadosamente selecionado e trabalha em perfeita sinergia, atacando a gordura diretamente em sua fonte, promovendo assim até 3x mais perda de peso.
			    					</p>
			    				</div>
			    			</div>

			    		</div>

			    	</div>
			    </div>
			</div>

			<div class="row row-cta-body">
				<div class="container">
					<div class="container-fluid">
						<div class="content-cta-body col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
							<div class="btn-adquira col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
								<a href="#buy-biodryne" class="btn-buy btn-warning btn col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<h3 class="btn-uppercase-experimente">EXPERIMENTE BIODRYNE RX HOJE!</h3>
									<p class="btn-lowercase-experimente">SEJA A NOSSA PRÓXIMA HISTÓRIA DE SUCESSO!</p> 
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row-after-before">
				<div class="container"> 
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
													“Perder peso e manter definitivamente não é uma tarefa fácil, mas com Biodryne Rx isso é possível. Nunca me senti tão realizada quanto agora! Viver em paz com a balança é simplesmente maravilhoso! Valeu a pena experimentar.”
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
												<p class="text-depo col-lg-12 col-md-12 col-sm-12 col-xs-12">“Estou muito contente com o meu resultado. Já tomei diversos produtos para emagrecimento e nenhum me proporcionou um resultado satisfatório, mas Biodryne Rx é diferente, pode acreditar...<br>Funciona mesmo!”</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="btn-adquira col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
								<a href="#buy-biodryne" class="btn-buy btn-warning btn col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<h3 class="btn-uppercase-experimente">EXPERIMENTE BIODRYNE RX HOJE!</h3>
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
								Se você realmente quer perder peso, Biodryne Rx definitivamente é a melhor solução que você pode encontrar hoje no mercado. Este emagrecedor é fruto de uma longa investigação que finalmente resultou no desenvolvimento de uma perfeita formulação que age sinergicamente no organismo para promover o equilíbrio da função metabólica e contribuir consideravelmente para o processo de emagrecimento.<br/><br/>
								E para obter melhores resultados tome Biodryne Rx corretamente, mantenha uma alimentação saudável e pratique atividades físicas de forma moderada e sempre acompanhada por um profissional qualificado.
								</p>

							</div>

							<div class="content-cta-body cta-autoridade-medica col-lg-12 col-md-12 hidden-sm hidden-xs"> 
								<div class="btn-adquira col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
									<a href="#buy-biodryne" class="btn-buy btn-warning btn col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h3 class="btn-uppercase-experimente">EXPERIMENTE BIODRYNE RX HOJE!</h3>
										<p class="btn-lowercase-experimente">SEJA A NOSSA PRÓXIMA HISTÓRIA DE SUCESSO!</p> 
									</a>
								</div>
							</div>

						</div><!--/content-img-scientist-->
						
						<div class="content-cta-body cta-autoridade-medica-sm hidden-lg hidden-md col-sm-12 col-xs-12"> 
							<div class="btn-adquira col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
								<a href="#buy-biodryne" class="btn-buy btn-warning btn col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<h3 class="btn-uppercase-experimente">EXPERIMENTE BIODRYNE RX HOJE!</h3>
									<p class="btn-lowercase-experimente">SEJA A NOSSA PRÓXIMA HISTÓRIA DE SUCESSO!</p> 
								</a>
							</div>
						</div>

					</div>
				</div> 
			</div>

			<div class="row-quote">
			    <div class="container">
			    	<div class="container-fluid"> 
			    		<div class="content-quote col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
			    			<div class="title-quote col-md-12"> 
			    				<h3>O QUE A MÍDIA ESTÁ DIZENDO SOBRE OS COMPOSTOS DO BIODRYNE RX</h3>
			    			</div>

			    			<div class="quote-midia col-md-12" style="margin-bottom: 30px;">

			    				<div class="box-quote box-quote-globoreporter col-lg-6 col-md-6 col-sm-12 col-xs-12">
			    					<div class="content-box-quote content-box-quote-glbrp col-md-12 col-sm-12 col-xs-12">
				    					<div class="img-quote-midia img-quote-midia-glbrp col-md-5 col-sm-4 col-xs-4">
				    						<img src="img/globo-reporter-reduce.png" alt="globoreporter">
				    					</div>

				    					<div class="text-quote-midia col-md-7 col-sm-8 col-xs-8">
				    						<h4>Globo Reporter</h4>
				    						<i>"O chá verde, tão simples, guarda uma substância poderosa contra a gordura: a catequina."</i>
				    					</div>
				    				</div>
			    				</div>

			    				<div class="box-quote box-quote-r7 col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="content-box-quote col-md-12 col-sm-12 col-xs-12">
				    					<div class="img-quote-midia img-quote-midia-r7 col-md-5 col-sm-4 col-xs-4">
				    						<img src="img/r7-reduce.png" alt="r7">
				    					</div>

				    					<div class="text-quote-midia col-md-7 col-sm-8 col-xs-8"> 
				    						<h4>R7</h4>
				    						<i>
				    							"O café verde é rico em substâncias que aceleram o metabolismo e por isso pode auxiliar no emagrecimento."
				    						</i>
				    					</div>
			    					</div>
			    				</div>

			    				<div class="box-quote box-quote-soumaiseu col-lg-6 col-md-6 col-sm-12 col-xs-12">
			    					<div class="content-box-quote col-md-12 col-sm-12 col-xs-12">
				    					<div class="img-quote-midia img-quote-midia-soumaiseu col-md-5 col-sm-4 col-xs-4">
				    						<img src="img/sou-mais-eu-reduce.png" alt="sou mais eu (Revista)">
				    					</div>

				    					<div class="text-quote-midia col-md-7 col-sm-8 col-xs-8"> 
				    						<h4>Sou mais eu (REVISTA)</h4>
				    						<i>
				    							"A manga africana faz sucesso por causa de sua eficácia no combate à obesidade, explica a nutricionista"
				    						</i>
				    					</div>
				    				</div>
			    				</div>

			    				<div class="box-quote box-quote-dietaja col-lg-6 col-md-6 col-sm-12 col-xs-12">
			    					<div class="content-box-quote col-md-12 col-sm-12 col-xs-12">
				    					<div class="img-quote-midia img-quote-midia-dietaja col-md-5 col-sm-4 col-xs-4">
				    						<img src="img/dieta-ja-reduce.png" alt="dieta já">
				    					</div>

				    					<div class="text-quote-midia col-md-7 col-sm-8 col-xs-8">
				    						<h4>Dieta já</h4>
				    						<i>
				    							"O poder da sociedade é um dos fatores que faz da fruta uma aliada para a perda de peso. Rica em antioxidantes, ela também ajuda a eliminar radicais livres do organismo"
				    						</i>
				    					</div>
				    				</div>
			    				</div>
			    			</div>

			    		</div>
			    	</div>
			    </div>
			</div>

			<div class="row-warranty" style="margin: 0 0 25px;">
			    <div class="container container-warranty">
			    	<div class="container-fluid container-fluid-warranty">
			    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content-full-warranty">

				    		<div class="title-warranty col-lg-12 col-md-12 col-sm-12 col-xs-12">
				    			
				    			<h2>Satisfação 100% Garantida!</h2>
								<p>
				    				Sabemos que oferecemos um produto verdadeiramente eficaz e com alto padrão de qualidade.<br/>
									Por isso, confiamos completamente em nossa fórmula e garantimos a sua satisfação.
								</p>

				    		</div>

				    		<div class="content-warranty-term col-lg-12 col-md-12 col-sm-12 col-xs-12">
				    			
				    			<div class="img-warranty-term col-lg-3 col-md-4 col-md-4 col-sm-4 col-xs-4">
				    				<picture> 
					    				<source media="(min-width: 1200px)" srcset="img/selo-gold-warranty-1200.png">
					    				<source media="(min-width: 991px)" srcset="img/selo-gold-warranty-991.png">
					    				<source media="(min-width: 769px)" srcset="img/selo-gold-warranty-769.png">
					    				<source media="(min-width: 640px)" srcset="img/selo-gold-warranty-640.png">
					    				<source media="(min-width: 480px)" srcset="img/selo-gold-warranty-480.png">
					    				<img src="img/selo-gold-warranty-480.png" alt="comprar com segurança">
					    			</picture>

				    			</div>

				    			<div class="text-warranty-term col-lg-9 col-md-8 col-sm-8 col-xs-8">
				    				<h3>EXPERIMENTE BIODRYNE RX AGORA COM RISCO ZERO</h3>

				    				<p class="sub-title-warranty-term">É exatamente isso que você acabou de ler.</p>

				    				<img class="img-warranty-term-480 hidden" src="img/selo-gold-warranty-480.png" alt="comprar com segurança">

				    				<p class="rzero">RISCO ZERO!</p>

				    				<p class="hidden-sm hidden-xs">
				    					Você está convidada a experimentar <strong>Biodryne Rx</strong> e se por algum motivo não estiver 100% satisfeita, basta solicitar devolução dentro do prazo estipulado e devolver o produto (mesmo que a embalagem esteja vazia) para receber o seu reembolso. Nos pedidos acima de um frasco essa garantia é válida para uma embalagem aberta e as demais lacradas e em perfeitas condições.
				    				</p>

				    				<p class="hidden-sm hidden-xs"><strong>IMPORTANTE:</strong> Somente para os clientes que realizam o pedido no site oficial.</p>
				    			</div>

				    			<div class="text-extra-warranty-term text-warranty-term hidden-lg hidden-md col-sm-12 col-xs-12">
				    				<p>
				    					Você está convidada a experimentar <strong>Biodryne Rx</strong> e se por algum motivo não estiver 100% satisfeita, basta solicitar devolução dentro do prazo estipulado e devolver o produto (mesmo que a embalagem esteja vazia) para receber o seu reembolso. Nos pedidos acima de um frasco essa garantia é válida para uma embalagem aberta e as demais lacradas e em perfeitas condições.
				    				</p>
				    				<p><strong>IMPORTANTE:</strong> Somente para os clientes que realizam o pedido no site oficial.</p>
				    			</div>
				    			
				    		</div>

				    	</div>
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
						
						<!-- <div class="content-btn-cta col-lg-8 col-md-8 col-sm-8 col-xs-8">

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

						</div> --><!--/content-img-convince-->

						<!-- // Bloco destinado ao trecho a imagem do frasco do produto -->
						
						<!-- <div class="content-img-cta-large col-lg-4 col-md-4 col-sm-4 col-xs-4">
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
						</div> -->

						<div class="packages col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="wrap col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<section class="page-section">
									<div class="title-buy col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h2 class="text-center">O Que Você Ainda Está Esperando?</h2>
										<h4 class="text-center">Dê o primeiro passo para você conquistar o corpo, a saúde e o bem estar que você sempre quis!</h4>
										<h4 class="text-center">Milhares de pessoas já conseguiram resultados surpreendentes com Biodryne Rx. E você não pode ficar de fora!</h4>
										<h4 class="text-center">Então, venha fazer parte desse time de sucesso!</h4>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="buy-biodryne">
										  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product-one">
											  	<div class="product-block first">
													<div class="product-title">
											  			<h3>MELHOR OFERTA</h3>
											  			<p>Super desconto! Economize 50%</p>
											  		</div>
											  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content-img-product-one">					  	
													  	<img class="six-bottle-package" src="img/product-one-frascos.png">
													</div>
											  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center content-txt-product-one">
											  			<div class="txt-product-one">
												  			<div class="row">
														  		<div class="col-xs-12">	
														  			<form action="https://www.bcash.com.br/checkout/car/" method="post" target="carrinho">
																	  	<p class="product-name">LEVE 3 <strong>(1 GRÁTIS)</strong></p>
																	  	<p class="product-price"><span><s class="old-price">DE R$599,96</s></span><br/><span>Por apenas</span><br>3x R$99,95</p>
																	  	<input type="hidden" value="add" name="acao">
																		<input type="hidden" value="contato@lifehealth24h.com" name="email_loja"> 
																		<input type="hidden" value="2SEO_LIFE0001" name="cod_prod">
																		<input type="hidden" value="Biodryne Rx (4 Potes + Frete Grátis)" name="nome_prod">
																		<input type="hidden" value="299.85" name="valor_prod">
																		<input type="hidden" value="000" name="peso_prod">
																		<input type="hidden" name="quant_prod" value="1">
																		<button id="form-cad-deliveri" type="submit" class="btn btn-lg btn-warning btn-finalizar-compra">
									                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <strong>&nbsp;COMPRAR</strong>
									                                    </button>
									                                    <ul class="factors-cta">
									                                    	<li><i class="glyphicon glyphicon-plane" style="color: #333;"></i> <strong>FRETE GRÁTIS E RÁPIDO</strong></li>
									                                    	<li><img src="img/icon-discount.png"> <strong>PELA METADE DO PREÇO</strong></li>
									                                    	<li><i class="fa fa-check"></i> <strong>SATISFAÇÃO GARANTIDA</strong></li>
									                                    </ul>
									                                </form>
																</div>
															</div>
						                                </div>		  	
													</div>
												</div>
										  </div>
										  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content-product-two">
										  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product-two">
											  	<div class="product-block second">
												  	<div class="product-title">
												  			<h3>MAIS POPULAR!</h3>
												  			<p>Super desconto!<span> </span>Economize 39%</p>
											  		</div>
											  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content-img-product-two">					  	
													  	<img class="six-bottle-package" src="img/product-two-frascos.png">
													</div>
											  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center content-txt-product-two">
											  			<div class="txt-product-two">
													  		<div class="row">
														  		<div class="col-xs-12">
														  			<form action="https://www.bcash.com.br/checkout/car/" method="post" target="carrinho">
																  		<p class="product-name">LEVE 2<br></p>
																		<p class="product-price"><span><s class="old-price">DE R$299,98</s></span><br/><span>Por apenas</span><br>3x R$59,95</p>
																		<input type="hidden" value="add" name="acao">
																		<input type="hidden" value="contato@lifehealth24h.com" name="email_loja"> 
																		<input type="hidden" value="2SEO_LIFE0002" name="cod_prod">
																		<input type="hidden" value="Biodryne Rx (2 Potes)" name="nome_prod">
																		<input type="hidden" value="179.85" name="valor_prod">
																		<input type="hidden" value="250" name="peso_prod">
																		<input type="hidden" name="quant_prod" value="1">		  	
																		<button id="form-cad-deliveri" type="submit" class="btn btn-lg btn-warning btn-finalizar-compra">
									                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <strong>&nbsp;COMPRAR</strong>
									                                    </button>
									                                    <ul class="factors-cta">
									                                    	<li><i class="fa fa-trophy"></i> <strong>CAMPEÃO DE VENDAS</strong></li>
									                                    	<li><i class="fa fa-check"></i> <strong>SATISFAÇÃO GARANTIDA</strong></li>
									                                    </ul>
									                                </form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										  </div>
										  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content-product-three">
										  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product-three">
											  	<div class="product-block last">
											  		<div class="product-title">
											  			<h3>PARA COMEÇAR</h3>
											  			<p>Super desconto!<span> </span>Economize 27%</p>
											  		</div>
											  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content-img-product-three">					  	
													  	<img class="six-bottle-package" src="img/product-three-frascos.png">
													</div>
											  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center content-txt-product-three">
												  		<div class="txt-product-two">
													  		<div class="row">
														  		<div class="col-xs-12">
														  			<form action="https://www.bcash.com.br/checkout/car/" method="post" target="carrinho">
																  		<p class="product-name">LEVE 1</p>
																		<p class="product-price"><span><s class="old-price">DE R$149,99</s></span><br/><span>Por apenas</span><br>R$99,95</p>
																		<input type="hidden" value="add" name="acao">
																		<input type="hidden" value="contato@lifehealth24h.com" name="email_loja"> 
																		<input type="hidden" value="2SEO_LIFE0003" name="cod_prod">
																		<input type="hidden" value="Biodryne Rx (1 Pote)" name="nome_prod">
																		<input type="hidden" value="99.95" name="valor_prod">
																		<input type="hidden" value="250" name="peso_prod">
																		<input type="hidden" name="quant_prod" value="1">			  	
																	  	<button type="submit" class="btn btn-lg btn-warning btn-finalizar-compra">
									                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <strong>&nbsp;COMPRAR</strong>
									                                    </button>
									                                    <ul class="factors-cta">
									                                    	<li><i class="fa fa-check"></i> <strong>SATISFAÇÃO GARANTIDA</strong></li>
									                                    </ul>
									                                </form>
															  	</div>
															</div>
														</div>
												  	</div>
												  </div>
											  </div>
										  </div>
									</div>
								</section>
							</div>
						</div>


					</div><!--/container-fluid-->
				</div><!--/container-->
			</div><!--/content-cta-->
		</div>

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
									<li><p>Prazo de entrega: <br/><strong>7 à 15 dias úteis.</strong></p></li>
									<li><p>CNPJ: <br/><strong>15.301.011/0001-89</strong></p></li>
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
									<li><h4>Biodryne Rx</h4></li>
									<li><a href="views/como-funciona.php">Como funciona</a></li>
									<li><a href="views/na-midia.php">Na mídia</a></li>
									<li><a href="views/depoimentos.php">Depoimentos</a></li>
									<li><a href="views/perguntas-frequentes.php">Perguntas frequentes</a></li>
									<li><a href="views/garantia.php">Garantia</a></li>
									<li><a href="#buy-biodryne" class="btn-buy">Peça agora!</a></li>
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
									Biodryne Rx é um suplemento dietético que não se destina a diagnosticar, tratar, curar ou previnir qualquer doença. *
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
								Biodryne Rx. Todos direitos reservados
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

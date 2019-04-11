<?php
$nome = (isset($_GET['nomecompleto']) && !empty($_GET['nomecompleto'])) ? $_GET['nomecompleto'] : NULL;
$nomesobrenome = explode(" ",$nome, 2);
$email = (isset($_GET['email']) && !empty($_GET['email'])) ? $_GET['email'] : NULL;
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Site Oficial Biodryne</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico" />
    <style>
        body {
        	font-family: "Open Sans";
            padding: 0;
            margin: 0;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/font-opensans.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/checkout.css">
    <link rel="stylesheet" type="text/css" href="css/validarcartaocredito.css">
    <link rel="stylesheet" type="text/css" href="css/lobibox.min.css">
    <link rel="stylesheet" type="text/css" href="css/escassez.css">

</head>

<body>

	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKL6HCD" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>

	<section class="barra-fixa">
		<nav class="navbar navbar-default navbar-fixed-top top-caps">
			<div class="container">
				<div class="row">
					<div class="text-data-hora hidden-xs hidden-sm col-md-7 col-lg-7">
						<p class="text-left">
							<span class="back-red">Atenção!</span>
							Devido a grande demanda de pedidos, a partir de hoje 
							(<script>
								now = new Date;
								var dia = now.getDate();
								var mes = now.getMonth()+1;
								if (dia.toString().length == 1) dia = "0"+dia;
								if (mes.toString().length == 1) mes = "0"+mes;
								document.write(dia+'/'+mes+'/'+now.getFullYear());
							</script>),<br>
							nós temos um estoque limitado de potes prontos para envio em 24 horas.
						</p>
					</div>
					<div class="text-data-hora hidden-xs col-sm-7 hidden-md hidden-lg">
						<p class="text-left">
							<span class="back-red">Atenção!</span>
							Devido a grande demanda de pedidos, a partir de hoje 
							(<script>
								document.write(dia+'/'+mes+'/'+now.getFullYear());
							</script>), nós temos um estoque limitado para envio em 24 horas.
						</p>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 text-right">
						<div class="temos-apenas col-xs-5 col-sm-5 col-md-5 col-lg-5"> 
							<h3><strong>TEMOS <br>APENAS</strong></h3>
							<div class="setas-text-right setas-t-r-1">
								<div class="seta-direita seta-1"></div>
								<div class="seta-direita seta-2"></div>
								<div class="seta-direita seta-3"></div>
							</div>
							<div class="setas-text-right setas-t-r-2">
								<div class="seta-direita seta-1"></div>
								<div class="seta-direita seta-2"></div>
								<div class="seta-direita seta-3"></div>
							</div>
							<div class="setas-text-right setas-t-r-3">
								<div class="seta-direita seta-1"></div>
								<div class="seta-direita seta-2"></div>
								<div class="seta-direita seta-3"></div>
							</div>
						</div>

						<div class="text-estoque col-xs-7 col-sm-7 col-md-7 col-lg-7"> 
							<h3><strong>POTES EM<br> ESTOQUE</strong></h3>
						</div>

						<div class="text-center" id="current"></div>
					</div>
				</div>
			</div>
		</nav>
	</section>


	<!-- //trecho escassez antigo
    <div class="row-disp-estoque hidden-xs">
        <div class="container container-disp-estoque">
            <div class="container-fluid container-fluid-disp-estoque col-lg-12 col-md-12 col-sm-12 hidden-xs">
                <div class="content-seta-left col-lg-2 col-md-2 col-sm-2 hidden-xs">
                    <div class="seta-left-01 col-lg-4 col-md-4 col-sm-4 hidden-xs">
                        <div class="top-left"></div>
                        <div class="bottom-left"></div>
                    </div>
                    <div class="seta-left-02 col-lg-4 col-md-4 col-sm-4 hidden-xs">
                        <div class="top-left"></div>
                        <div class="bottom-left"></div>
                    </div>
                    <div class="seta-left-03 col-lg-4 col-md-4 col-sm-4 hidden-xs">
                        <div class="top-left"></div>
                        <div class="bottom-left"></div>
                    </div>
                </div>
                <div class="content-msg-estoque col-lg-8 col-md-8 col-sm-8 hidden-xs">
                    <p class="content-msg-disp-estoque col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
                        Estoque:
                        <strong class="green-msg-estoque">Disponível </strong> - Risco de Esgotar:
                        <span class="yellow-msg-estoque"> ALTO. </span>
                        <br /> Preços promocionais válidos até meia noite de
                        <span class="yellow-msg-estoque">
	    					  	<script>
									now = new Date;
									document.write(now.getDate()+'/'+(now.getMonth()+1)+'/'+now.getFullYear());
								</script>
							</span>
                    </p>
                </div>
                <div class="content-seta-right col-lg-2 col-md-2 col-sm-2 hidden-xs">
                    <div class="seta-right-01 col-lg-4 col-md-4 col-sm-4 hidden-xs">
                        <div class="top-right"></div>
                        <div class="bottom-right"></div>
                    </div>
                    <div class="seta-right-02 col-lg-4 col-md-4 col-sm-4 hidden-xs">
                        <div class="top-right"></div>
                        <div class="bottom-right"></div>
                    </div>
                    <div class="seta-right-03 col-lg-4 col-md-4 col-sm-4 hidden-xs">
                        <div class="top-right"></div>
                        <div class="bottom-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->

	<!--
		// Fim do trecho destinado ao banner principal
	-->

    <div class="row-header-biodrine">
        <div class="container container-header-biodrine">
            <div class="container-fluid container-fluid-header-biodrine">
                <div class="content-header-biodryne col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="img-header col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <img src="img/logo-biodryne.png" alt="logo">
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
    <!--/row-header-biodrine-->

    <div class="row-title-checkout">
        <div class="container container-produt">
            <div class="container-fluid container-fluid-produt">
                <h3 class="col-lg-12 col-md-12 col-sm-12 hidden-xs">Aproveite os preços exclusivos do nosso site</h3>
                <h1 class="col-lg-12 col-md-12 col-sm-12 hidden-xs">Escolha a melhor oferta para você!</h1>
            </div>
            <!--/container-fluid-->
        </div>
        <!--/container-->
    </div>
    <!--/content-convince-->

    <form name="form1" id="form-cad-deliveri" class="form-deliveri col-lg-12 col-md-12 col-sm-12 col-xs-12" action="" method="post">

        <div class="row-product">
            <div class="container container-product">
                <div class="container-fluid container-fluid-product">
                    <div class="title-product title-etapa-checkout">
                        <h3>
							<span class="number-etapa-checkout">1</span> SELECIONE SUA OFERTA EXCLUSIVA
						</h3>
                    </div>

                    <div class="btn-group content-product col-lg-12 col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">

                        <div class="content-product-list col-lg-4 col-md-4 col-sm-4 col-xs-12" data-produtoid="002" data-price="179.00">
                            <div class="btn product-two col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="radio" name="codigoproduto" id="codigoproduto codigoproduto2" autocomplete="off" value="CODBIOD002" hidden/>
                                <div class="title-box-product title-box-product-two col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <p>COMPRE 2 E LEVE</p>
                                    <h2>3 POTES</h2>
                                </div>
                                <div class="msg-discount-box-product col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <span>1 pote grátis!</span>
                                </div>
                                <div class="img-product img-product-two col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="img/product/product-two-1200.png">
                                            <source media="(min-width: 991px)" srcset="img/product/product-two-991.png">
                                                <img src="img/product/product-two-769.png" alt="product-two" />
                                    </picture>
                                </div>

                                <div class="discription-product col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <span>
											Kit mais popular: Compre 2 e Leve 3 + Garantia de Satisfação + Risco Zero
										</span>
                                </div>
                                <div class="price-product price-product-two col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <!--<span>R$ 194,00 <small>(25% de desconto)</small><br><strong>ou</strong></span>-->
                                    <s>R$ 338,00</s>
                                    <h1>6x R$47,04</h1>
                                </div>

                                <div class="content-text-p-two-xs hidden-lg hidden-md hidden-sm col-xs-6">
                                    <div class="title-box-product-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <p>COMPRE 2 E LEVE</p>
                                        <h2>3 POTES</h2>
                                    </div>

                                    <div class="msg-discount-box-product-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <span class="discount-wid-640">1 pote grátis!</span>
                                        <span class="discount-wid-480 hidden">1 grátis!</span>
                                    </div>

                                    <div class="discription-product-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <span>
												Kit mais popular: Compre 2 e Leve 3 + Garantia de Satisfação + Risco Zero
											</span>
                                    </div>
                                    <div class="price-product-xs price-product-two-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <!--<span class="hidden-lg hidden-md hidden-sm col-xs-12">R$ 194,00 <small>(25% de desconto)</small><br><strong>ou</strong></span>-->
                                        <s>R$ 338,00</s>
                                        <h1 class="hidden-lg hidden-md hidden-sm col-xs-12">6x R$47,04</h1>
                                    </div>
                                </div>

                                <div class="content-img-product-xs hidden-lg hidden-md hidden-sm col-xs-6">
                                    <div class="img-product-xs img-product-two-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <picture>
                                            <source media="(min-width: 640px)" srcset="img/product/product-two-640.png">
                                                <source media="(min-width: 480px)" srcset="img/product/product-two-480.png">
                                                    <img src="img/product/product-two-330.png" alt="product-two" />
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content-product-list col-lg-4 col-md-4 col-sm-4 col-xs-12 checked" data-produtoid="003" data-price="249.0">
                            <div class="btn active product-three col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="radio" name="codigoproduto" id="codigoproduto codigoproduto3" autocomplete="off" value="CODBIOD003" checked hidden />
                                <div class="title-box-product title-box-product-three col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <p>COMPRE 3 E LEVE</p>
                                    <h1>5 POTES</h1>
                                </div>
                                <div class="msg-discount-box-product col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <span>2 potes grátis!</span>
                                </div>
                                <div class="img-product img-product-one col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="img/product/product-three-1200.png">
                                            <source media="(min-width: 991px)" srcset="img/product/product-three-991.png">
                                                <img src="img/product/product-three-769.png" alt="product-three">
                                    </picture>
                                </div>
                                <div class="discription-product col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <span>
											Nossa melhor oferta: Compre 3 e Leve 5 + Satisfação 100% Garantida + Risco Zero.
										</span>
                                </div>
                                <div class="price-product price-product-three col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <!--<span>R$ 292,00 <small>(25% de desconto)</small><br><strong>ou</strong></span>-->
                                    <s>R$ 507,00</s>
                                    <h1>6x R$70,56</h1>
                                </div>

                                <div class="content-text-p-three-xs hidden-lg hidden-md hidden-sm col-xs-6">
                                    <div class="title-box-product-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <p>COMPRE 3 E LEVE</p>
                                        <h1>5 POTES</h1>
                                    </div>

                                    <div class="msg-discount-box-product-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <span class="discount-wid-640">2 potes grátis!</span>
                                        <span class="discount-wid-480 hidden">2 grátis!</span>
                                    </div>

                                    <div class="discription-product-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <span>
												Nossa melhor oferta: Compre 3 e Leve 5 + Satisfação 100% Garantida + Risco Zero.
											</span>
                                    </div>
                                    <div class="price-product-xs price-product-three-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <!--<span class="hidden-lg hidden-md hidden-sm col-xs-12">R$ 292,00 <small>(25% de desconto)</small><br><strong>ou</strong></span>-->
                                        <s>R$ 507,00</s>
                                        <h1 class="hidden-lg hidden-md hidden-sm col-xs-12">6x R$70,56</h1>
                                    </div>
                                </div>

                                <div class="content-img-product-xs hidden-lg hidden-md hidden-sm hidden-lg hidden-md hidden-sm col-xs-6">
                                    <div class="img-product-xs img-product-three-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <picture>
                                            <source media="(min-width: 640px)" srcset="img/product/product-three-640.png">
                                                <source media="(min-width: 480px)" srcset="img/product/product-three-480.png">
                                                    <img src="img/product/product-three-330.png" alt="product-three">
                                        </picture>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="content-product-list col-lg-4 col-md-4 col-sm-4 col-xs-12" data-produtoid="001" data-price="98.0">
                            <div class="btn product-one col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="radio" name="codigoproduto" id="codigoproduto codigoproduto1" autocomplete="off" value="CODBIOD001" hidden />
                                <div class="title-box-product title-box-product-one col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <p>LEVE</p>
                                    <h2>1 POTE</h2>
                                </div>
                                <div class="msg-discount-box-product col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <span>Super desconto!</span>
                                </div>
                                <div class="img-product img-product-one col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="img/product/product-one-1200.png">
                                            <source media="(min-width: 991px)" srcset="img/product/product-one-991.png">
                                                <img src="img/product/product-one-769.png" alt="product-one">
                                    </picture>
                                </div>

                                <div class="discription-product col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <span>Pacote inicial: Leve 1 pote Com Desconto Especial + Satisfação Garantida + Risco Zero.</span>
                                </div>
                                <div class="price-product price-product-one col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                    <!--<span>R$ 97,00 <small>(25% de desconto)</small><br><strong>ou</strong></span>-->
                                    <s>R$ 169,00</s>
                                    <h1>6x R$23,53</h1>
                                </div>

                                <div class="content-text-p-one-xs hidden-lg hidden-md hidden-sm col-xs-6">
                                    <div class="title-box-product-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <p>LEVE</p>
                                        <h2>1 POTE</h2>
                                    </div>

                                    <div class="msg-discount-box-product-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <span class="discount-wid-640">Super desconto!</span>
                                        <span class="discount-wid-480 hidden">Super desconto!</span>
                                    </div>

                                    <div class="discription-product-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <span>Pacote inicial: Leve 1 pote Com Desconto Especial + Satisfação Garantida + Risco Zero.</span>
                                    </div>
                                    <div class="price-product-xs price-product-two-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <!--<span class="hidden-lg hidden-md hidden-sm col-xs-12">R$ 97,00 <small>(25% de desconto)</small><br><strong>ou</strong></span>-->
                                        <s>R$ 169,00</s>
                                        <h1 class="hidden-lg hidden-md hidden-sm col-xs-12">6x R$23,53</h1>
                                    </div>
                                </div>

                                <div class="content-img-product-xs hidden-lg hidden-md hidden-sm col-xs-6">
                                    <div class="img-product-xs img-product-one-xs hidden-lg hidden-md hidden-sm col-xs-12">
                                        <picture>
                                            <source media="(min-width: 640px)" srcset="img/product/product-one-640.png">
                                                <source media="(min-width: 480px)" srcset="img/product/product-one-480.png">
                                                    <img src="img/product/product-one-330.png" alt="product-one">
                                        </picture>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <!--/container-fluid-->
            </div>
            <!--/container-->
        </div>
        <!--/content-convince-->

        <table class="hidden table table-default" id="clienteTableTr">
            <tr>
                <td><strong>Nome do produto</strong>
                </td>
                <td><strong>Codigo do produto</strong>
                </td>
                <td><strong>Valor do produto</strong>
                </td>
                <td><strong>Valor do frete</strong>
                </td>
                <td><strong>Valor do parcelamento</strong>
                </td>
                <td><strong>Valor do frete parcelado</strong>
                </td>
                <td><strong>Valor do parcelamento + frete</strong>
                </td>
            </tr>
        </table>

        <div class="loading-page"></div>

        <div class="row-remaining-steps">
            <div class="container container-remaining-steps">
                <div class="container-fluid container-fluid-remaining-steps">
                    <div class="content-remaining-steps col-lg-8 col-md-8 col-sm-8 col-xs-12">

                        <div id="content-frm-deliveri" class="content-frm-deliveri col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="title-frm-deliveri title-etapa-checkout">
                                <h3>
									<span class="number-etapa-checkout">2</span> ONDE DEVEMOS ENTREGAR?
								</h3>
                            </div>

                            <div class="form-group nome-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" name="cliente_nome" id="cliente_nome" type="text" value="<?php echo $nomesobrenome[0]; ?>" placeholder="Nome" />
                            </div>
                            <div class="form-group sobrenome-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" name="cliente_sobrenome" id="cliente_sobrenome" type="text" value="<?php echo isset($nomesobrenome[1]) ? $nomesobrenome[1] : ''; ?>" placeholder="Sobrenome" />
                            </div>

                            <div class="form-group email-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" name="cliente_email" id="cliente_email" type="text" value="<?php echo $email; ?>" placeholder="Email" />
                            </div>

                            <div class="form-group tel-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" name="cliente_ddi" id="cliente_ddi" type="hidden" value="55" />
								<!--<input class="form-control" name="cliente_ddd" id="cliente_ddd" type="text" data-mask="00" minlength="2" placeholder="DDD" />-->
								<input class="form-control" name="cliente_telefone" id="cliente_telefone" type="text" data-mask="(00) 00000-0000" minlength="14" placeholder="Telefone" />
                            </div>

                            <!--
                            <div class="form-group dt-nas-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" name="cliente_datanascimento" id="cliente_datanascimento" type="text" placeholder="Data nascimento" data-mask="00/00/0000" minlength="10" data-mask-reverse="true" data-mask-selectonfocus="true" />
                            </div>
                            -->

                            <div class="form-group cpf-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" name="cpf" id="cpf" type="text" reverse="true" minlength="14" data-mask="000.000.000-00" placeholder="CPF" />
                            </div>

                            <div class="form-group cep-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" type="text" name="cep" id="cep" data-mask="00000-000" placeholder="CEP" maxlength="8" />
                                <a class="link-encontre-cep label label-default" href="http://www.buscacep.correios.com.br/sistemas/buscacep" target="_blank">Não sei meu CEP</a>
                            </div>

                            <div class="col-lg-6 form-group msg-address col-md-6 col-sm-6 col-xs-12">
                            	<div class="msg-address-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                            <i class="fa fa-check-circle fa-2x col-lg-1 col-md-1 col-sm-1 col-xs-1"></i><span class="col-lg-11 col-md-11 col-sm-11 col-xs-11 recebe-address"></span>
		                            <input class="form-control" type="hidden" name="cliente_rua" id="rua" />
		                            <input class="form-control" type="hidden" name="cliente_bairro" id="bairro" />
		                            <input class="form-control" type="hidden" name="cliente_cidade" id="cidade" />
		                            <input class="form-control" type="hidden" name="cliente_estado" id="estado" />
		                            <input class="form-control" type="hidden" name="cliente_pais" id="pais" value="Brasil" />
                                </div>
                            </div>

                            <div class="form-group rua-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            	<input class="form-control" type="text" name="cliente_rua_inpt" id="rua-inpt" placeholder="Rua"/>
                            </div>

                            <div class="form-group bairro-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            	<input class="form-control" type="text" name="cliente_bairro_inpt" id="bairro-inpt" placeholder="Bairro" />
                            </div>

                            <div class="form-group numero-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" type="number" name="cliente_numero" id="numero" placeholder="Número" />
                            </div>

                            <div class="form-group complemento-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" type="text" name="cliente_complemento" id="complemento" placeholder="Complemento" />
                            </div>

                            <button id="form-cad-deliveri" type="submit" class="btn btn-default hidden col-lg-12 col-md-12 col-sm-12 col-xs-12"></button>

                        </div>

                        <div id="content-frm-pagament" class="content-frm-pagament col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="title-frm-pagament title-etapa-checkout col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-9 col-md-9 col-sm-11 col-xs-12">
                                    <h3><span class="number-etapa-checkout">3</span> COMO VOCÊ PREFERE PAGAR?</h3>
                                </div>
                                <div class="powered-copy col-lg-3 col-md-3 col-sm-1 hidden-xs">
                                    <div class="img-powered col-lg-12 col-md-12 col-sm-12">
                                        <img src="img/logo-moip.svg"/>
                                    </div>
                                    <small class="txt-powered col-lg-12 col-md-12 col-sm-12">POWERED</small>
                                </div>
                            </div>

                            <div class="content-opc-pagament col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                <div class="btn-opc-payment btn-group col-lg-12 col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                                    <div class="content-btn-payment content-btn-payment-card col-lg-12 col-md-12 col-sm-6 col-xs-6">
                                        <div class="btn active btn-payment btn-payment-card col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <label class="control control--radio">Cartões de crédito
                                                <input type="radio" name="formapagamento" id="cartaocredito" value="cartaocredito" checked/>
                                                <div class="control__indicator"></div>
                                            </label>

                                            <div class="flag-btn-payment">
                                                <span class="visa">
														<img src="img/payment/visa-small.png"> 
													</span>
                                                <span class="mastercard">
														<img src="img/payment/mastercard-small.png"> 
													</span>
                                                <span class="american">
														<img src="img/payment/american-small.png">
													</span>
                                                <span class="hipercard">
														<img src="img/payment/hipercard-small.png"> 
													</span>
                                                <span class="elo">
														<img src="img/payment/elo-small.png"> 
													</span>
                                                <span class="diners">
														<img src="img/payment/diners-small.png"> 
													</span>
                                            </div>

                                            <div class="payment-active"></div>
                                        </div>
                                    </div>
                                    <div class="content-btn-payment content-btn-payment-boleto col-lg-12 col-md-12 col-sm-6 col-xs-6">
                                        <div class="btn btn-payment btn-payment-boleto col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <label class="control control--radio">Boleto bancário
                                                <input type="radio" name="formapagamento" id="boleto" value="boleto" />
                                                <div class="control__indicator"></div>
                                            </label>

                                            <div class="flag-btn-payment">
                                                <span class="boleto">
														<img src="img/payment/boleto-small.png"> 
													</span>
                                            </div>

                                            <div class="payment-active"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="icon-amb-security col-lg-12 col-md-12 hidden-sm hidden-xs">
                                    <i class="fa fa-lock fa-3x col-md-2"></i>
                                    <p class="text-icon-security col-md-10">
                                        <strong class="col-md-12">VOCÊ ESTÁ EM</strong>
                                        <span class="col-md-12">AMBIENTE SEGURO</span>
                                        <small class="col-md-12">SSL Criptografia 128 bits</small>
                                    </p>

                                </div>

                                <div class="line-separation col-lg-12 col-md-12 hidden-sm hidden-xs">
                                    <hr class="hr-content-payment" />
                                </div>

                                <div class="icon-vendedor col-lg-12 col-md-12 hidden-sm hidden-xs">
                                    <i class="fa fa-user fa-3x col-md-2"></i>
                                    <p class="col-md-10">
                                        <span>PRECISA DE AJUDA?</span>
                                        <small><a href="#">CONTATO DO VENDEDOR</a></small>
                                    </p>
                                </div>

                            </div>
                            <div class="content-type-payment col-lg-8 col-md-8 col-sm-12 col-xs-12">

                                <div class="content-payment-card col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="title-buy-card col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h4 class="title-payment-card"><i class="fa fa-credit-card fa-lg"></i>Cartão de Crédito</h4>
                                    </div>

                                    <div class="form-group num-card-group col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <input class="form-contro2" id="numerocartao" name="numerocartao" type="text" placeholder="Digite o n&uacute;mero do cart&atilde;o" minLength="17" data-mask="9999 9999 9999 9999" />
										
                                        <div class="flags-inpt-card">
                                            <span class="visa">
													<img src="img/payment/visa-inpt.jpg"> 
												</span>
                                            <span class="mastercard">
													<img src="img/payment/mastercard-inpt.jpg"> 
												</span>
                                            <span class="american">
													<img src="img/payment/american-inpt.jpg">
												</span>
                                            <span class="hipercard">
													<img src="img/payment/hipercard-inpt.jpg"> 
												</span>
                                            <span class="elo">
													<img src="img/payment/elo-inpt.jpg"> 
												</span>
                                            <span class="diners">
													<img src="img/payment/diners-inpt.jpg"> 
												</span>
                                        </div>
                                    </div>

                                    <div class="form-group nome-titul-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input class="form-control" id="nomecartao" name="nomecartao" type="text" placeholder="Nome do titular (como está gravado no cartão)" />
                                    </div>

                                    <div class="form-group val-mes-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <select class="form-control" required id='mesvalidadecartao' name='mesvalidadecartao'>
                                            <option disabled="disabled" label='Valido até/Mês' hidden selected>Valido até/Mês</option>
                                            <option label="01" value='01'>01</option>
                                            <option label="02" value='02'>02</option>
                                            <option label="03" value='03'>03</option>
                                            <option label="04" value='04'>04</option>
                                            <option label="05" value='05'>05</option>
                                            <option label="06" value='06'>06</option>
                                            <option label="07" value='07'>07</option>
                                            <option label="08" value='08'>08</option>
                                            <option label="09" value='09'>09</option>
                                            <option label="10" value='10'>10</option>
                                            <option label="11" value='11'>11</option>
                                            <option label="12" value='12'>12</option>
                                        </select>
                                    </div>

                                    <div class="form-group ano-mes-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <select class="form-control" required id='anovalidadecartao' name='anovalidadecartao'>
                                            <option disabled="disabled" label='Valido até/Ano' hidden selected>Valido até/Ano</option>
                                            <option label="2017" value="2017">2017</option>
                                            <option label="2018" value="2018">2018</option>
                                            <option label="2019" value="2019">2019</option>
                                            <option label="2020" value="2020">2020</option>
                                            <option label="2021" value="2021">2021</option>
                                            <option label="2022" value="2022">2022</option>
                                            <option label="2023" value="2023">2023</option>
                                            <option label="2024" value="2024">2024</option>
                                            <option label="2025" value="2025">2025</option>
                                            <option label="2026" value="2026">2026</option>
                                            <option label="2027" value="2027">2027</option>
                                            <option label="2028" value="2028">2028</option>
                                            <option label="2029" value="2029">2029</option>
                                            <option label="2030" value="2030">2030</option>
                                            <option label="2031" value="2031">2031</option>
                                            <option label="2032" value="2032">2032</option>
                                            <option label="2033" value="2033">2033</option>
                                            <option label="2034" value="2034">2034</option>
                                            <option label="2035" value="2035">2035</option>
                                        </select>
                                    </div>

                                    <div class="form-group cvv-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <input class="form-control" id="cvvcartao" name="cvvcartao" type="text" data-mask="0000" placeholder="CVV" />
                                        <div class="flag-inpt-cvv">
                                            <span class="fa-stack fa-lg">
													<i class="fa fa-credit-card fa-stack-2x"></i>
													<i class="fa fa-ban fa-circle-o fa-stack-1x text-danger"></i>
												</span>
                                        </div>
                                    </div>

                                    <div class="form-group opc-parcela-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <select class="form-control" id='pricecard' name='pricecard'>
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="msg-juros-payment-cad col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <sub>*Valor total incluindo juros de parcelamento de 1,99% a.m.</sub>
                                    </div>

                                </div>

                                <div class="content-payment-boleto col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="title-buy-boleto col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h4 class="title-payment-card"><i class="fa fa-barcode fa-lg"></i>Boleto Bancário <span>(25% de desconto)</span></h4>
                                    </div>

                                    <div class="text-payment-boleto col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h5>
											Esta opção gera um boleto bancário para pagamento <strong>à vista</strong>. O boleto pode ser pago na agência bancária de sua preferência ou pelo internet banking. O produto será enviado <strong>após</strong> a confirmação de pagamento do boleto.
										</h5>
										<p class="date-venciment"></p>
                                    </div>
                                </div>

                            </div>

                            <div class="icon-amb-security hidden-lg hidden-md col-sm-6 col-xs-5">
                                <i class="fa fa-lock fa-3x col-sm-2 col-xs-2"></i>
                                <p class="text-icon-security col-sm-10 col-xs-10">
                                    <strong class="col-sm-12 col-xs-12">VOCÊ ESTÁ EM</strong>
                                    <span class="col-sm-12 col-xs-12">AMBIENTE SEGURO</span>
                                    <small class="col-sm-12 col-xs-12">SSL Criptografia 128 bits</small>
                                </p>
                            </div>

                            <div class="icon-vendedor hidden-lg hidden-md col-sm-6 col-xs-5">
                                <i class="fa fa-user fa-3x col-sm-2 col-xs-2"></i>
                                <p class="col-sm-10 col-xs-10">
                                    <span class="col-sm-12 col-xs-12">PRECISA DE AJUDA?</span>
                                    <small class="col-sm-12 col-xs-12"><a href="#">CONTATO DO VENDEDOR</a></small>
                                </p>
                            </div>
                            <div class="powered-copy moip-powered-rodape hidden-lg hidden-md hidden-sm col-xs-2">
                                <div class="img-powered col-xs-12">
                                    <img class="col-xs-12" src="img/logo-moip.svg"/>
                                    <small class="col-xs-12 txt-powered">POWERED</small>
                                </div>
                            </div>

                        </div>

                        <div class="content-summary-buy col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="title-summary-buy title-etapa-checkout">
                                <h3><span class="number-etapa-checkout">4</span> RESUMO DA SUA COMPRA</h3>
                            </div>

                            <div class="content-summary-if-boleto col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                
                                <div class="summary-buy-boleto col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="content-subtotal col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="txt-subtotal col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p>Subtotal:</p>
                                        </div>
                                        <div class="price-subtotal col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p>R$ 170,00</p>
                                        </div>
                                    </div>

									<!-- // comment descont code
                                    <div class="content-cupom col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="txt-cupom col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p>Cupom de desconto:</p>
                                        </div>
                                        <input class="form-control" id="cupom" name="cupom" type="text" placeholder="INSIRA AQUI" />
                                    </div>
                                    -->

                                    <div class="content-frete col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="txt-frete col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p>Frete:</p>
                                        </div>
                                        <div class="price-frete col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p>3x de R$6,35</p>
                                        </div>
                                    </div>

                                    <div class="content-total col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="txt-total col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p>Total:</p>
                                        </div>
                                        <div class="price-total col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p><strong>R$ 170,00</strong>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content-msg-jurus col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <sub><i>*Valor total incluindo juros de parcelamento de 1,99% a.m.</i></sub>
                                    </div>

                                </div>
                            </div>

                            <div class="content-summary-if-card col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="summary-buy-card col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="content-subtotal col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="txt-subtotal col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p>Subtotal:</p>
                                        </div>
                                        <div class="price-subtotal col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p>3x de R$54,81</p>
                                        </div>
                                    </div>

                                    <!-- // comment descont code
                                    <div class="content-cupom col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="txt-cupom col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p>Cupom de desconto:</p>
                                        </div>
                                        <input class="form-control" id="cupom" name="cupom" type="text" placeholder="INSIRA AQUI" />
                                    </div>
                                    -->

                                    <div class="content-frete col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="txt-frete col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p>Frete:</p>
                                        </div>
                                        <div class="price-frete col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p>3x de R$6,35</p>
                                        </div>
                                    </div>

                                    <div class="content-total col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="txt-total col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p>Total:</p>
                                        </div>
                                        <div class="price-total col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p><strong>3x de R$54,81</strong>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content-msg-jurus col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <sub><i>*Valor total incluindo juros de parcelamento de 1,99% a.m.</i></sub>
                                    </div>

                                </div>
                            </div>

                            <div class="content-finaliza col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="content-btn-finaliza col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                    <button id="form-cad-deliveri" type="submit" class="btn btn-success btn-finalizar-compra">
                                        <h3><strong>FINALIZAR O MEU PEDIDO</strong></h3>
                                        <span>Ao fazer o pedido, concordo com os termos de uso</span>
                                    </button>

                                </div>

                                <div class="content-msg-finaliza col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <span><i class="fa fa-lock"></i> Conexão segura</span>
                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="content-separate-col col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <div class="content-icon-deliveri col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="icon-separate-col icon-deliveri-separate-col col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                <i class="fa fa-truck fa-3x"></i>
                            </div>
                            <div class="text-separate-col text-deliveri-separate-col col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                <p>
                                    Entrega para todo o Brasil com a segurança dos Correios. Você receberá o código de rastreio de sua entrega por e-mail e poderá consultar o andamento do seu pedido a qualquer momento no site dos Correios. Prazo de entrega: 7 à 15 dias úteis.
                                </p>
                            </div>
                        </div>

                        <div class="content-icon-security col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="icon-separate-col icon-security-separate-col col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                <i class="fa fa-shield fa-3x"></i>
                            </div>
                            <div class="text-separate-col text-security-separate-col col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                <p>
                                    Compra 100% segura: seus dados são encriptados, seus dados pessoais são sigilosos e protegidos por sistema anti-fraude de padrão internacional.
                                </p>
                            </div>
                        </div>

                        <div class="content-icon-treatment col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="icon-separate-col icon-treatment-separate-col col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                <i class="fa fa-life-ring fa-3x"></i>
                            </div>
                            <div class="text-separate-col text-treatment-separate-col col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                <p>
                                    Atendimento ao consumidor: seja antes ou depois da compra, você pode contar com nossos atendentes para esclarecer suas dúvidas sobre o produto. Ligue no nosso SAC: (62) 3928 – 1213 ou envie um e-mail para: sac@biodryne.com.br
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </form>

    <div id="TB_overlay" class="TB_overlayBG"></div>

	<div id="TB_window" class="modal_commensagem">
		<div id="TB_title">
			<div id="TB_ajaxWindowTitle"></div>
			<div id="TB_closeAjaxWindow"><a id="TB_closeWindowButton"><i class="fa fa-times"></i></a></div>
		</div>
		<div id="TB_ajaxContent">
			<div class="processarErroCartao modal-error-processor">
				<div class="error-box">
					<strong>SEU PAGAMENTO NÃO FOI CONCLUÍDO</strong>
					<p id="labelErroProcessarCartao">A transação foi cancelada. A rede financeira qualificou a transação como inválida.</p>
					<i class="msg-serv"></i>
				</div>
				<strong class="ask-alternatives">O que você pode fazer?</strong>
				<ul class="alternatives">
					<li class="clearfix">
						<span class="option-index">1. </span>
						<div class="option-text">Clique no botão "Revisar dados do pagamento" para efetuar a correção ou escolher outro cartão.</div>
					</li>
					<li class="clearfix">
						<span class="option-index">2. </span>
						<div class="option-text">Selecione um meio de pagamento à vista abaixo e conclua sua compra.</div>
					</li>
				</ul>

				<a href="#content-frm-deliveri" class="btn btn-success btn-lg review-form-btn pd_btn">Revisar dados do pagamento</a>

				<div class="payment-container">
					<strong>SE PREFERIR, ESCOLHA UM MEIO DE PAGAMENTO À VISTA:</strong>
					<div class="lnk-boleto">
						<a class="btn btn-boleto-modal btn-sm btn-default" href="#content-frm-pagament"> 
							<span><i class="fa fa-barcode fa-2x"></i>&nbsp;Pagar por boleto bancário</span>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="row-rodape-checkout">
        <div class="container container-rodape-checkout">
            <div class="container-fluid container-fluid-rodape-checkout">
                <div class="content-rodape-checkout">
                    <picture class="img-logo-rodape col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="img/logo-biodryne-rodape.png" alt="logo-rodape">
                    </picture>
                    <div class="content-left-rodape col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <ul class="menu-rodape-checkout col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <li><a href="views/politica-privacidade.html"><i class="fa fa-caret-right"></i> Politica de Pricacidade</a>
                            </li>
                            <li><a href="views/politica-reembolso.html"><i class="fa fa-caret-right"></i> Politica de Reembolso</a>
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

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-78533169-1', 'auto');
		ga('send', 'pageview');

		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-TKL6HCD');

	</script>

	<!-- carregamendo ajax -->
	<script src="app/ajaxGetPost.js"></script>
    
	<script src="libs/pagarme/pagarme.js"></script>
	
    <script type="text/javascript" src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>    
    <script type="text/javascript" src="js/vendor/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="app/dados.js"></script>	
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/jquery.mask.js"></script>
	<script type="text/javascript" src="app/validarcartaocredito.js"></script>	
    <script type="text/javascript" src="app/checkout.js"></script>
    <script type="text/javascript" src="js/lobibox.min.js"></script>
	<script type="text/javascript" src="app/escassez.js"></script>

</body>

</html>

<?php

//lib Slim
require_once ("../../libs/Slim/Slim.php");

//Cabecalho api Slim Framework inicio
\Slim\Slim::registerAutoloader();
$slim_app = new \Slim\Slim();
$slim_app->response()->header('Content-Type', 'application/json;charset=utf-8');
//Cabecalho api Slim Framework fim

$slim_app->get('/', function () { //protecao da pasta controllers/webservice
  	echo "ACESSO RESTRITO!";
});

$slim_app->get('/produtos','produtos');

$slim_app->post('/consultarCep','consultarCep');

$slim_app->run();

function produtos(){
	$produtos = '{
				"produtos" : [
					{
						"produto_nome": "Biodryne 1 frasco",
						"produto_codigo": "CODBIOD001",
						"produto_valor": "129,90",
						"produto_frete": "34,52",
						"parcelamento_produto" : [
							{ 
								"pp1": "1x de R$129,91",
							  	"pp2": "2x de R$68,21",
							  	"pp3": "3x de R$45,73",
							  	"pp4": "4x de R$34,49",
							  	"pp5": "5x de R$27,91",
							  	"pp6": "6x de R$23,53",
							  	"pp7": "7x de R$20,40",
							  	"pp8": "8x de R$18,06",
							  	"pp9": "9x de R$16,25",
							  	"pp10": "10x de R$14,80",
							  	"pp11": "11x de R$13,54",
							  	"pp12": "12x de R$12,48"
							}
						],
						"parcelamento_frete" : [
							{ 
								"pf1": "1x de R$34,53",
							  	"pf2": "2x de R$18,13",
							  	"pf3": "3x de R$12,16",
							  	"pf4": "4x de R$9,17",
							  	"pf5": "5x de R$7,42",
							  	"pf6": "6x de R$6,26",
							  	"pf7": "7x de R$5,43",
							  	"pf8": "8x de R$4,81",
							  	"pf9": "9x de R$4,32",
							  	"pf10": "10x de R$3,94",
							  	"pf11": "11x de R$3,60",
							  	"pf12": "12x de R$3,33"
							}
						],
						"parcelamento_produtofrete" : [
							{ 
								"ppf1": "1x de R$164,43",
							  	"ppf2": "2x de R$86,33",
							  	"ppf3": "3x de R$57,88",
							  	"ppf4": "4x de R$43,65",
							  	"ppf5": "5x de R$35,32",
							  	"ppf6": "6x de R$29,78",
							  	"ppf7": "7x de R$25,82",
							  	"ppf8": "8x de R$22,86",
							  	"ppf9": "9x de R$20,56",
							  	"ppf10": "10x de R$18,73",
							  	"ppf11": "11x de R$17,13",
								"ppf12": "12x de R$15,80"
							}
						]
					},{
						"produto_nome": "Biodryne 2 frascos - Compre 1 Leve 2",
						"produto_codigo": "CODBIOD002",
						"produto_valor": "259,80",
						"produto_frete": "34,52",
						"parcelamento_produto" : [
							{ 								
								"pp1": "1x de R$259,81",
							  	"pp2": "2x de R$136,40",
							  	"pp3": "3x de R$91,45",
							  	"pp4": "4x de R$68,97",
							  	"pp5": "5x de R$55,81",
							  	"pp6": "6x de R$47,04",
							  	"pp7": "7x de R$40,79",
							  	"pp8": "8x de R$36,11",
							  	"pp9": "9x de R$32,48",
							  	"pp10": "10x de R$29,59",
							  	"pp11": "11x de R$27,06",
							  	"pp12": "12x de R$24,96"
							}
						],
						"parcelamento_frete" : [
							{ 
								"pf1": "1x de R$34,53",
							  	"pf2": "2x de R$18,13",
							  	"pf3": "3x de R$12,16",
							  	"pf4": "4x de R$9,17",
							  	"pf5": "5x de R$7,42",
							  	"pf6": "6x de R$6,26",
							  	"pf7": "7x de R$5,43",
							  	"pf8": "8x de R$4,81",
							  	"pf9": "9x de R$4,32",
							  	"pf10": "10x de R$3,94",
							  	"pf11": "11x de R$3,60",
							  	"pf12": "12x de R$3,33"
							}
						],
						"parcelamento_produtofrete" : [
							{ 
								"ppf1": "1x de R$294,33",
							  	"ppf2": "2x de R$154,53",
							  	"ppf3": "3x de R$103,60",
							  	"ppf4": "4x de R$78,14",
							  	"ppf5": "5x de R$63,22",
							  	"ppf6": "6x de R$53,29",
							  	"ppf7": "7x de R$46,21",
							  	"ppf8": "8x de R$40,91",
							  	"ppf9": "9x de R$36,80",
							  	"ppf10": "10x de R$33,52",
							  	"ppf11": "11x de R$30,66",
							  	"ppf12": "12x de R$28,28"
							}
						]
					},{
						"produto_nome": "Biodryne 3 frascos - Compre 2 Leve 3",
						"produto_codigo": "CODBIOD003",
						"produto_valor": "389,70",
						"produto_frete": "34,52",
						"parcelamento_produto" : [
							{ 
								"pp1": "1x de R$389.71",
							  	"pp2": "2x de R$204,60",
							  	"pp3": "3x de R$137,17",
							  	"pp4": "4x de R$103,45",
							  	"pp5": "5x de R$83,71",
							  	"pp6": "6x de R$70,56",
							  	"pp7": "7x de R$61,18",
							  	"pp8": "8x de R$54,17",
							  	"pp9": "9x de R$48,72",
							  	"pp10": "10x de R$44,38",
							  	"pp11": "11x de R$40,59",
							  	"pp12": "12x de R$37,43"
							}
						],
						"parcelamento_frete" : [
							{ 
								"pf1": "1x de R$34,53",
							  	"pf2": "2x de R$18,13",
							  	"pf3": "3x de R$12,16",
							  	"pf4": "4x de R$9,17",
							  	"pf5": "5x de R$7,42",
							  	"pf6": "6x de R$6,26",
							  	"pf7": "7x de R$5,43",
							  	"pf8": "8x de R$4,81",
							  	"pf9": "9x de R$4,32",
							  	"pf10": "10x de R$3,94",
							  	"pf11": "11x de R$3,60",
							  	"pf12": "12x de R$3,33"
							}
						],
						"parcelamento_produtofrete" : [
							{ 
								"ppf1": "1x de R$424,23",
							  	"ppf2": "2x de R$222,72",
							  	"ppf3": "3x de R$149,32",
							  	"ppf4": "4x de R$112,62",
							  	"ppf5": "5x de R$91,12",
							  	"ppf6": "6x de R$76,81",
							  	"ppf7": "7x de R$66,60",
							  	"ppf8": "8x de R$58,96",
							  	"ppf9": "9x de R$53,04",
							  	"ppf10": "10x de R$48,31",
							  	"ppf11": "11x de R$44,18",
							  	"ppf12": "12x de R$40,75"
							}
						]
					}
				]}';
	echo $produtos;
}

function consultarCep(){
	$request = \Slim\Slim::getInstance()->request();
	$cep = json_decode($request->getBody());

	$reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep->cep);
	 
	$dados['sucesso'] = (string) $reg->resultado;
	$dados['rua']     = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
	$dados['bairro']  = (string) $reg->bairro;
	$dados['cidade']  = (string) $reg->cidade;
	$dados['estado']  = (string) $reg->uf;
	
	echo json_encode($dados);
}
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
						"produto_nome": "Biodryne 2 frascos - Compre 1 Leve 2",
						"produto_codigo": "CODBIOD002",
						"produto_valor": "209,94",
						"produto_frete": "35,70",
						"parcelamento_produto" : [
							{ 								
								"pp1": "1x de R$209,94",
							  	"pp2": "2x de R$104,97",
							  	"pp3": "3x de R$69,98",
							  	"pp4": "4x de R$52,49",
							  	"pp5": "5x de R$41,99",
							  	"pp6": "6x de R$34,99",
							  	"pp7": "7x de R$29,99",
							  	"pp8": "8x de R$26,24",
							  	"pp9": "9x de R$23,33",
							  	"pp10": "10x de R$20,99",
							  	"pp11": "11x de R$19,09",
							  	"pp12": "12x de R$17,50"
							}
						],
						"parcelamento_frete" : [
							{ 
								"pf1": "1x de R$35,70",
							  	"pf2": "2x de R$17,85",
							  	"pf3": "3x de R$11,90",
							  	"pf4": "4x de R$8,93",
							  	"pf5": "5x de R$7,14",
							  	"pf6": "6x de R$5,95",
							  	"pf7": "7x de R$5,10",
							  	"pf8": "8x de R$4,46",
							  	"pf9": "9x de R$3,97",
							  	"pf10": "10x de R$3,57",
							  	"pf11": "11x de R$3,25",
							  	"pf12": "12x de R$2,98"
							}
						],
						"parcelamento_produtofrete" : [
							{ 
								"ppf1": "1x de R$245,64",
							  	"ppf2": "2x de R$122,82",
							  	"ppf3": "3x de R$81,88",
							  	"ppf4": "4x de R$61,41",
							  	"ppf5": "5x de R$49,13",
							  	"ppf6": "6x de R$40,94",
							  	"ppf7": "7x de R$35,09",
							  	"ppf8": "8x de R$30,71",
							  	"ppf9": "9x de R$27,29",
							  	"ppf10": "10x de R$24,56",
							  	"ppf11": "11x de R$22,33",
							  	"ppf12": "12x de R$20,47"
							}
						]
					},{
						"produto_nome": "Biodryne 4 frascos - Compre 3 Leve 4",
						"produto_codigo": "CODBIOD004",
						"produto_valor": "319,02",
						"produto_frete": "35,70",
						"parcelamento_produto" : [
							{ 
								"pp1": "1x de R$319,02",
							  	"pp2": "2x de R$159,51",
							  	"pp3": "3x de R$106,34",
							  	"pp4": "4x de R$79,76",
							  	"pp5": "5x de R$63,80",
							  	"pp6": "6x de R$53,17",
							  	"pp7": "7x de R$45,57",
							  	"pp8": "8x de R$39,88",
							  	"pp9": "9x de R$35,45",
							  	"pp10": "10x de R$31,90",
							  	"pp11": "11x de R$29,00",
							  	"pp12": "12x de R$26,59"
							}
						],
						"parcelamento_frete" : [
							{ 
								"pf1": "1x de R$35,70",
							  	"pf2": "2x de R$17,85",
							  	"pf3": "3x de R$11,90",
							  	"pf4": "4x de R$8,93",
							  	"pf5": "5x de R$7,14",
							  	"pf6": "6x de R$5,95",
							  	"pf7": "7x de R$5,10",
							  	"pf8": "8x de R$4,46",
							  	"pf9": "9x de R$3,97",
							  	"pf10": "10x de R$3,57",
							  	"pf11": "11x de R$3,25",
							  	"pf12": "12x de R$2,98"
							}
						],
						"parcelamento_produtofrete" : [
							{ 
								"ppf1": "1x de R$354,72",
							  	"ppf2": "2x de R$177,36",
							  	"ppf3": "3x de R$118,24",
							  	"ppf4": "4x de R$88,68",
							  	"ppf5": "5x de R$70,94",
							  	"ppf6": "6x de R$59,12",
							  	"ppf7": "7x de R$50,67",
							  	"ppf8": "8x de R$44,34",
							  	"ppf9": "9x de R$39,41",
							  	"ppf10": "10x de R$35,47",
							  	"ppf11": "11x de R$32,25",
							  	"ppf12": "12x de R$29,56"
							}
						]
					},{
						"produto_nome": "Biodryne 6 frascos - Compre 5 Leve 6",
						"produto_codigo": "CODBIOD006",
						"produto_valor": "396,00",
						"produto_frete": "35,70",
						"parcelamento_produto" : [
							{ 
								"pp1": "1x de R$396,00",
							  	"pp2": "2x de R$198,00",
							  	"pp3": "3x de R$132,00",
							  	"pp4": "4x de R$99,00",
							  	"pp5": "5x de R$79,20",
							  	"pp6": "6x de R$66,00",
							  	"pp7": "7x de R$56,57",
							  	"pp8": "8x de R$49,50",
							  	"pp9": "9x de R$44,00",
							  	"pp10": "10x de R$39,60",
							  	"pp11": "11x de R$36,00",
							  	"pp12": "12x de R$33,00"
							}
						],
						"parcelamento_frete" : [
							{ 
								"pf1": "1x de R$35,70",
							  	"pf2": "2x de R$17,85",
							  	"pf3": "3x de R$11,90",
							  	"pf4": "4x de R$8,93",
							  	"pf5": "5x de R$7,14",
							  	"pf6": "6x de R$5,95",
							  	"pf7": "7x de R$5,10",
							  	"pf8": "8x de R$4,46",
							  	"pf9": "9x de R$3,97",
							  	"pf10": "10x de R$3,57",
							  	"pf11": "11x de R$3,25",
							  	"pf12": "12x de R$2,98"
							}
						],
						"parcelamento_produtofrete" : [
							{ 
								"ppf1": "1x de R$431,70",
							  	"ppf2": "2x de R215,85",
							  	"ppf3": "3x de R$143,90",
							  	"ppf4": "4x de R$107,93",
							  	"ppf5": "5x de R$86,34",
							  	"ppf6": "6x de R$71,95",
							  	"ppf7": "7x de R$61,67",
							  	"ppf8": "8x de R$53,96",
							  	"ppf9": "9x de R$47,97",
							  	"ppf10": "10x de R$43,17",
							  	"ppf11": "11x de R$39,25",
							  	"ppf12": "12x de R$35,98"
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
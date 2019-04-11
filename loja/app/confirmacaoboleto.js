jQuery(document).ready(function($) {
	$(document).bind("ajaxSend", function(){
		$(".loading-page").show();
	}).bind("ajaxComplete", function(){
		$(".loading-page").hide();
	});

	funcaoSucesso = function(data){
        //alert('Sucesso\n' + JSON.stringify(data));
        window.open(data.url);
    };

    funcaoFalha = function(data) {
        //alert('Falha\n' + JSON.stringify(data));
    };

    pagarBoleto = function() {
        var settings = {
            "Forma": "BoletoBancario"
        }
        MoipWidget(settings);
    }

	var codecompra = window.location.search.substr(1).split('=');
	var url = 'http://liffehealth.com.br/wslh/controllers/webservice/consultarCompraClienteLoja/'+codecompra[2];
	$.ajax({
		type: "GET",
		dataType: "json",
		url: url,
		success: function (data) {
			//alert(JSON.stringify(data));
			
			var dados = data.dadoscompra[0]
			var data = dados.data_compra; // data da compra
			//var data = new Date(); // data atual
			var dt = new Date(data + "Z");
			var day = ("0" + dt.getDate()).slice(-2);
			var mother = ("0" + (dt.getMonth() + 1)).slice(-2);
			var data_compra = (day+"/"+mother+"/"+dt.getFullYear());
			var nome = dados.nome;
			var email = dados.email;
			var codigo = dados.codigo;
			var descricao = dados.descricao;

			function proximoDiaUtil(dt) {
				var datestrap = dt;
				var dia = dt.getDay();
				
				if (dia == 5) {
					datestrap.setDate(datestrap.getDate() + 3 );
					var datestrap_final = datestrap;
				} else if (dia == 6) {
					datestrap.setDate(datestrap.getDate() + 2 );
					datestrap_final = datestrap;
				} else {
					datestrap.setDate(datestrap.getDate() + 1 );
					datestrap_final = datestrap;
				}

				var day_vencimento = ("0" + datestrap_final.getDate()).slice(-2);
				var mother_vencimento = ("0" + (datestrap_final.getMonth() + 1)).slice(-2);
				var data_vencimento = (day_vencimento+"/"+mother_vencimento+"/"+datestrap_final.getFullYear());

				return data_vencimento;
			}
			/*
			function proximoDiaUtil(dt) {
				var datestrap = dt;
				datestrap.setDate(datestrap.getDate() + 10 );
				var dia = datestrap.getDay();
				
				if (dia == 6) {
					datestrap.setDate(datestrap.getDate() + 2 );
					var datestrap_final = datestrap;
				} else if (dia == 0) {
					datestrap.setDate(datestrap.getDate() + 1 );
					datestrap_final = datestrap;
				} else {
					datestrap_final = datestrap;
				}

				var day_vencimento = ("0" + datestrap_final.getDate()).slice(-2);
				var mother_vencimento = ("0" + (datestrap_final.getMonth() + 1)).slice(-2);
				var data_vencimento = (day_vencimento+"/"+mother_vencimento+"/"+datestrap_final.getFullYear());

				return data_vencimento;
			}*/

			if (codigo == 'CODBIOD001') {
				var price = '121.95';
				descricao_produto = descricao;
			}
			if (codigo == 'CODBIOD002') {
				price = '218.95';
				descricao_produto = descricao.replace("2 1", "2+1");
			}
			if (codigo == 'CODBIOD003') {
				price = '316.95';
				descricao_produto = descricao.replace("3 2", "3+2");
			}
			var quantidade = dados.quantidade;
			var valorTotal = parseFloat(quantidade)*parseFloat(price);
			var tipoPagamento = dados.forma_pagamento;
			var codeTransacao = dados.id_transacao;
			var token = dados.token;
			var telefone = dados.telefone;
			var endereco_completo = (dados.endereco+", "+dados.numero_endereco+", "+dados.bairro+", "+dados.cidade+"-"+dados.estado);
			$('.nomeCliente').html(nome);
			$('.nomeEmail').html(email);
			$('.code-transacao').html(codeTransacao);
			$('.nomeProduto').html(descricao_produto);
			$('.price').html("R$ "+price.replace('.',','));
			$('.qtddProduto').html(quantidade);
			$('.price-total').html("R$ "+(valorTotal.toString()).replace(".",","));
			$('.tipoPagamento').html(tipoPagamento);
			$('.data_vencimento').html(proximoDiaUtil(dt));
			$('.data-pedido').html(data_compra);
			$('.price-frete').html("R$ 24,95");
			$('.price-produto').html("R$ "+((price-24.95).toFixed(2)).replace(".",","));
			$('.telefone').html(telefone);
			$('.enderecoCompleto').html(endereco_completo);
			
			//$('.code').html(code);
		}
	});

	$(function() {
	    $('.btn-view-boleto').bind('click', function(event) {
	    	var $anchor = $(this);
	        $('html, body').animate({ scrollTop: $($anchor.attr('href')).offset().top}, 'slow');
	        event.preventDefault();
	    });
	});

	
});
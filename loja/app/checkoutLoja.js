$(window).load(function () {
	//cpf
	jQuery.validator.addMethod("cpf", function (value, element) {
		value = jQuery.trim(value);

		value = value.replace('.', '');
		value = value.replace('.', '');
		cpf = value.replace('-', '');
		while (cpf.length < 11) cpf = "0" + cpf;
		var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
		var a = [];
		var b = new Number;
		var c = 11;
		for (i = 0; i < 11; i++) {
			a[i] = cpf.charAt(i);
			if (i < 9) b += (a[i] * --c);
		}
		if ((x = b % 11) < 2) {
			a[9] = 0
		} else {
			a[9] = 11 - x
		}
		b = 0;
		c = 11;
		for (y = 0; y < 10; y++) b += (a[y] * c--);
		if ((x = b % 11) < 2) {
			a[10] = 0;
		} else {
			a[10] = 11 - x;
		}

		var retorno = true;
		if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) retorno = false;

		return this.optional(element) || retorno;

	}, "Informe um CPF v&aacute;lido");

	//cep
	$.validator.addMethod("cep", function (value) {
		
		encode=JSON.stringify({'cep':value});
		var url = 'controllers/ws/consultarCep';

		function foo(value, url, encode) {
	    	var cep = $.ajax({
		    	type: "POST",
				headers: {
					'Accept': 'application/json',
					'Content-Type': 'text/plain'
				},
				dataType: "json",
				url: url,
				data: encode,
				async: false
		    });
		    return cep.responseText[12];
		}

	    if (foo(value, url, encode)!=0)  {
	    	return true;
	    } else {
	    	$('#rua-inpt-error.error').css("display", "none");
	    	$('#bairro-inpt-error.error').css("display", "none");
	    	return false;
	    }

	}, "Informe um CEP v&aacute;lido!");

	//cartao de credito
	jQuery.validator.addMethod("numerocartao", function(value, element, param) {
		// aceitar apenas espacos, digitos e traços
		if (/[^0-9 \-]+/.test(value)) {
			return false;
		}
		
		var nCheck = 0,
			nDigit = 0,
			bEven = false;
	
		value = value.replace(/\D/g, "");
	
		for (var n = value.length - 1; n >= 0; n--) {
			var cDigit = value.charAt(n);
			nDigit = parseInt(cDigit, 10);
			if ( bEven ) {
				if ( (nDigit *= 2) > 9 ) {
					nDigit -= 9;
				}
			}
			nCheck += nDigit;
			bEven = !bEven;
		}
	
		return (nCheck % 10) === 0;
	
		/*
		var validTypes = 0x0000;
	
		if (param.mastercard)
			validTypes |= 0x0001;
		if (param.visa)
			validTypes |= 0x0002;
	
		if (validTypes & 0x0001 && /^(5[1-5])/.test(value)) { //mastercard
			return value.length == 16;
		}
		if (validTypes & 0x0002 && /^(4)/.test(value)) { //visa
			return value.length == 16;
		}
		return false;
		*/
	}, "Informe um n&uacute;mero de cart&atilde;o v&aacute;lido.");
	//
	
	/* rule to validate a certain data attribute */
	jQuery.validator.addMethod("numerocartao111", function(value, element, param) {
		if ( this.optional(element) ) {
				return "dependency-mismatch";
			}
			value = $(element).data("cc-number");
	
	
			// aceitar apenas espacos, digitos e traços
			if ( /[^0-9 \-]+/.test(value) ) {
				return false;
			}
			var nCheck = 0,
				nDigit = 0,
				bEven = false;
	
			value = value.replace(/\D/g, "");
	
			for (var n = value.length - 1; n >= 0; n--) {
				var cDigit = value.charAt(n);
				nDigit = parseInt(cDigit, 10);
				if ( bEven ) {
					if ( (nDigit *= 2) > 9 ) {
						nDigit -= 9;
					}
				}
				nCheck += nDigit;
				bEven = !bEven;
			}
	
			return (nCheck % 10) === 0; 
	});
	
	$(document).ready(function () {
		$('#form-cad-deliveri').validate({
			rules: {
				cpf: {
					cpf: true,
					required: true
				},
				cliente_nome: {
					required: true
				},
				cliente_sobrenome: {
					required: true
				},
				cliente_email: {
					required: true,
					email: true
				},
				cliente_telefone: {
					required: true
				},
				cliente_cpf: {
					required: true
				},
				cliente_sexo: {
					required: true
				},
				cep: {
					cep: true,
					required: true
				},
				cliente_rua: {
					required: true
				},
				cliente_bairro: {
					required: true
				},
				cliente_cidade: {
					required: true
				},
				cliente_estado: {
					required: true
				},
				cliente_rua_inpt: {
					required: true
				},
				cliente_bairro_inpt: {
					required: true
				},
				numero: {
					required: true
				},
				numerocartao: {
					//required: true
					numerocartao: true,
					required: true
				},
				nomecartao: {
					required: true
				},
				mesvalidadecartao: {
					required: true
				},
				anovalidadecartao: {
					required: true
				},
				cvvcartao: {
					required: true
				},
				pricecard: {
					required: true
				}

			},
			messages: {
				cpf: {
					cpf: 'CPF inv&aacute;lido'
				},
				nome_cliente: {
					required: "Obrigat&oacute;rio"
				},
				cliente_sobrenome: {
					required: "Obrigat&oacute;rio"
				},
				cliente_email: {
					required: "Obrigat&oacute;rio",
					email: "Digite um e-mail v&aacute;lido"
				},
				cliente_telefone: {
					required: "Obrigat&oacute;rio"
				},
				cpf: {
					required: "Obrigat&oacute;rio"
				},
				cliente_sexo: {
					required: "Obrigat&oacute;rio"
				},
				cep: {
					required: "Obrigat&oacute;rio"
				},
				cliente_rua: {
					required: "Obrigat&oacute;rio"
				},
				cliente_bairro: {
					required: "Obrigat&oacute;rio"
				},
				cliente_cidade: {
					required: "Obrigat&oacute;rio"
				},
				cliente_estado: {
					required: "Obrigat&oacute;rio"
				},
				cliente_rua_inpt: {
					required: "Obrigat&oacute;rio"
				},
				cliente_bairro_inpt: {
					required: "Obrigat&oacute;rio"
				},
				numero: {
					required: "Obrigat&oacute;rio"
				},
				numerocartao: {
					required: "Obrigat&oacute;rio"
				},
				nomecartao: {
					required: "Obrigat&oacute;rio"
				},
				mesvalidadecartao: {
					required: "Obrigat&oacute;rio"
				},
				anovalidadecartao: {
					required: "Obrigat&oacute;rio"
				},
				cvvcartao: {
					required: "Obrigat&oacute;rio"
				},
				pricecard: {
					required: "Obrigat&oacute;rio"
				}
			},
			submitHandler: function (form) {

				var codigoproduto = $('input:radio[name=codigoproduto]:checked').val();

				var nomecompleto = $("#cliente_nome").val() + " " + $("#cliente_sobrenome").val();
				var email = $("#cliente_email").val();
				//var identicacao = $("#cliente_identificacao").val();	
				var identicacao = $("#cliente_email").val();
				if ( $("#rua").val() == '' ) { var rua = $("#rua-inpt").val(); } else {var rua = $("#rua").val();}
				var numero = $("#numero").val();
				var complemento = $("#complemento").val();
				var cidade = $("#cidade").val();
				if ( $("#bairro").val() == '' ) { var bairro = $("#bairro-inpt").val(); } else {var bairro = $("#bairro").val();}
				var estado = $("#estado").val();
				var pais = $("#pais").val();
				var cep = $("#cep").val();
				var telefone = $("#cliente_telefone").val();

				var formapagamento = $('input:radio[name=formapagamento]:checked').val();

				var datanascimento = $("#cliente_datanascimento").val();
				var cpf = $("#cpf").val();
				//var sexo = $("#cliente_sexo").val();

				if (formapagamento == 'cartaocredito') {
					var Forma = 'CartaoCredito';
					var Numero = $("#numerocartao").val().replace(/\s/g, "");

					// http://www.regular-expressions.info/creditcard.html
					var regexVisa = /^4[0-9]{12}(?:[0-9]{3})?/;
					var regexMaster = /^5[1-5][0-9]{14}/;
					var regexAmex = /^3[47][0-9]{13}/;
					var regexDiners = /^3(?:0[0-5]|[68][0-9])[0-9]{11}/;
					var regexElo = /^((((636368)|(438935)|(504175)|(451416)|(636297))\d{0,10})|((5067)|(4576)|(4011))\d{0,12})/;
					var regexHiperCard = /^(606282\d{10}(\d{3})?)|(3841\d{15})$/;
					//var regexHiper = /^(38|60)\d{11}(?:\d{3})?(?:\d{3})?$/;

					if (regexVisa.test(Numero)) {
						var Instituicao = 'VISA';
					}
					if (regexMaster.test(Numero)) {
						var Instituicao = 'MASTERCARD';
					}
					if (regexAmex.test(Numero)) {
						var Instituicao = 'AMEX';
					}
					if (regexDiners.test(Numero)) {
						var Instituicao = 'DINERS';
					}
					if (regexElo.test(Numero)) {
						var Instituicao = 'ELO';
					}
					if (regexHiperCard.test(Numero)) {
						var Instituicao = 'HIPERCARD';
					}
					/*
					if(regexHiper.test(Numero)){
						var Instituicao = 'HIPER';
					}
					*/

					var Parcelas = $("#pricecard").val().split("x"); //retorna somente a parcela

					var Expiracao = $("#mesvalidadecartao").val() + "/" + $("#anovalidadecartao").val();
					var CodigoSeguranca = $("#cvvcartao").val();
					var Nome = $("#nomecartao").val();
					encode = JSON.stringify({
						'codigoproduto': codigoproduto,
						'nomecompleto': nomecompleto,
						'identicacao': identicacao,
						'email': email,
						'cep': cep,
						'rua': rua,
						'numero': numero,
						'complemento': complemento,
						'bairro': bairro,
						'cidade': cidade,
						'estado': estado,
						'pais': pais,
						'formapagamento': Forma,
						'datanascimento': datanascimento,
						'telefone': telefone,
						'identidade': cpf,
						'bandeiracartao': Instituicao,
						'quantidadeparcelas': Parcelas[0],
						'numerocartao': Numero,
						'validadecartaoate': Expiracao,
						'cvvcartao': CodigoSeguranca,
						'nomecartao': Instituicao
					});

				} else {
					var Forma = 'BoletoBancario';
					encode = JSON.stringify({
						'codigoproduto': codigoproduto,
						'nomecompleto': nomecompleto,
						'identicacao': identicacao,
						'email': email,
						'cep': cep,
						'rua': rua,
						'numero': numero,
						'complemento': complemento,
						'bairro': bairro,
						'cidade': cidade,
						'estado': estado,
						'pais': pais,
						'formapagamento': Forma,
						'datanascimento': datanascimento,
						'telefone': telefone,
						'identidade': cpf
					});
				}

				//var url = 'http://liffehealth.com.br/wslh/controllers/webservice-sandbox/vendaCliente';

				alert(encode);

				//
				$.ajax({
					type: "POST",
					headers: {
						'Accept': 'application/json',
						'Content-Type': 'text/plain'
					},
					dataType: "json",
					url: url,
					data: encode,
					success: function (data) {
						//alert(JSON.stringify(data));
						if (data.status != "") {
							if (data.Forma == 'BoletoBancario') {
								location.href = 'views/finalizacao-boleto.php?token=' + data.Token + '&codigo=' + data.IdTransacao;
							} else {
								location.href = 'views/finalizacao-card.php?codigo=' + data.IdTransacao;
							}
						} else {
							location.href = 'views/finalizacao-error.php?error=' + data.Mensagem;
						}
					}

					//});
				}).done(function (response) {
					/*
					 *Quando a chamada Ajax é terminada com sucessso,
					 *o javascript confirma o status da operacao
					 *com a variavel que enviamos no formato json.
					 */
					//alert(response.status);

					if (response.status) {
						//Se for positivo, mostra ao utilizador uma janela de sucesso.
						//alert("Transacao aceita com Sucesso!");
					} else {
						//Caso contrario dizemos que aconteceu algum erro.
						//alert("Uups! Ocorreu algum erro!");
						location.href = 'views/finalizacao-error.php?error=' + data.Mensagem;
					}
				}).fail(function (xhr, desc, err) {
					/*
					 *Caso haja algum erro na chamada Ajax,
					 *o utilizador e alertado e serao enviados detalhes
					 para a consola javascript que pode ser visualizada
					 *atraves das ferramentas de desenvolvedor do browse.
					 */
					//alert("Uups! Ocorreu algum erro!");
					console.log(xhr);
					console.log("Detalhes: " + desc + "nErro: " + err);
				});

				return false;

				/*
					var dados = $( form ).serialize();
					$.ajax({
						type: "POST",
						url: "processa.php",
						data: dados,
						success: function( data )
						{
							alert( data );
						}
					});
	
					return false;
					*/
			}
		});
	});

}); //]]>
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
				cliente_ddd: {
					required: true
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
				cliente_ddd: {
					required: "Obrigat&oacute;rio"
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

				var formapagamento = $('input:radio[name=formapagamento]:checked').val();
				
				var url = 'http://liffehealth.com.br/wslh/controllers/pagarme/vendaCliente';
				
				if (formapagamento == 'cartaocredito') {
					
					PagarMe.encryption_key = "ek_test_1QmN8zQBDhBWK9nwro8bXW1GEZwZwT";
					
					// inicializa um objeto de cartao de credito e completa
					// com os dados do form
					var creditCard = new PagarMe.creditCard();
					creditCard.cardHolderName = $("#form-cad-deliveri #nomecartao").val();
					creditCard.cardExpirationMonth = $("#form-cad-deliveri #mesvalidadecartao").val();
					creditCard.cardExpirationYear = $("#form-cad-deliveri #anovalidadecartao").val();
					creditCard.cardNumber = $("#form-cad-deliveri #numerocartao").val();
					creditCard.cardCVV = $("#form-cad-deliveri #cvvcartao").val();
				
					// pega os erros de validacao nos campos do form
					var fieldErrors = creditCard.fieldErrors();
				
					//Verifica se existe erros
					var hasErrors = false;
					for(var field in fieldErrors) { hasErrors = true; break; }
				
					if(hasErrors) {
						// realiza o tratamento de errors
						//alert(fieldErrors.card_cvv);
						//alert(fieldErrors.card_expiration_month);
						//alert(fieldErrors.card_expiration_year);
						//alert(fieldErrors.card_holder_name);
						//alert(fieldErrors.card_number);
						console.log(fieldErrors);
					} else {
						// se nao exite erros, gera o card_hash...
						creditCard.generateHash(function(cardHash) {
							///console.log(cardHash);
							/*
							alert(creditCard.cardHolderName);
							alert(creditCard.cardExpirationMonth);
							alert(creditCard.cardExpirationYear);
							alert(creditCard.cardNumber);
							alert(creditCard.cardCVV);
							alert(amount);
							*/
							//alert(cardHash);
							//
							
							//
							now = new Date;
							var mesatual = now.getMonth()+1;
							var anoatual = now.getFullYear();
							
							creditCard.cardExpirationMonth = creditCard.cardExpirationMonth.replace(/^0+(?!\.|$)/, '');//retira o zero a esquerda da data
						
							var CardHash;
							
							if(creditCard.cardExpirationYear<anoatual){
								CardHash = "";
							}else{
								if(creditCard.cardExpirationYear==anoatual){
									if(creditCard.cardExpirationMonth<mesatual){
										CardHash = "";
									}else{
										CardHash = cardHash;
									}
								}else{
									CardHash = cardHash;
								}
							}
							//testa validade do cartao de credito fim
							
							if(CardHash != ""){
								var Parcelas = $("#pricecard").val().split("x"); //retorna somente a parcela
								var codigoproduto = $('input:radio[name=codigoproduto]:checked').val();
								var nomecompleto = $("#cliente_nome").val() + " " + $("#cliente_sobrenome").val();
								var email = $("#cliente_email").val();
								if ( $("#rua").val() == '' ) { var rua = $("#rua-inpt").val(); } else {var rua = $("#rua").val();}
								var numero = $("#numero").val();
								var complemento = $("#complemento").val();
								var cidade = $("#cidade").val();
								if ( $("#bairro").val() == '' ) { var bairro = $("#bairro-inpt").val(); } else {var bairro = $("#bairro").val();}
								var estado = $("#estado").val();
								var pais = $("#pais").val();
								var cep = $("#cep").val();
								var ddi = $("#cliente_ddi").val();
								var ddd = $("#cliente_ddd").val();
								var telefone = $("#cliente_telefone").val();
								var cpf = $("#cpf").val();
					
								encode = JSON.stringify({
									'cardhash': CardHash,
									'quantidadeparcelas': Parcelas[0],
									'codigoproduto': codigoproduto,
									'nomecompleto': nomecompleto,
									'email': email,
									'cep': cep,
									'rua': rua,
									'numero': numero,
									'complemento': complemento,
									'bairro': bairro,
									'cidade': cidade,
									'estado': estado,
									'pais': pais,
									'formapagamento': 'credit_card',
									'ddi': ddi,
									'ddd': ddd,
									'telefone': telefone,
									'identidade': cpf
								});
								
								//alert(encode);
								//alert(url);
								
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
										alert(JSON.stringify(data));
										console.log(JSON.stringify(data));
										if (data.status != "") {
											//location.href = 'views/finalizacao-card.php?codigo=' + data.IdTransacao + '&mensagem=' + data.Mensagem;
										}
									}
				
								});
				
								return false;
								
							}else{
								alert("Data Invalida!");
							}
								
						});
					}
					
				} else {
					var codigoproduto = $('input:radio[name=codigoproduto]:checked').val();
					var nomecompleto = $("#cliente_nome").val() + " " + $("#cliente_sobrenome").val();
					var email = $("#cliente_email").val();
					if ( $("#rua").val() == '' ) { var rua = $("#rua-inpt").val(); } else {var rua = $("#rua").val();}
					var numero = $("#numero").val();
					var complemento = $("#complemento").val();
					var cidade = $("#cidade").val();
					if ( $("#bairro").val() == '' ) { var bairro = $("#bairro-inpt").val(); } else {var bairro = $("#bairro").val();}
					var estado = $("#estado").val();
					var pais = $("#pais").val();
					var cep = $("#cep").val();
					var ddi = $("#cliente_ddi").val();
					var ddd = $("#cliente_ddd").val();
					var telefone = $("#cliente_telefone").val();
					var cpf = $("#cpf").val();
				
					encode = JSON.stringify({
						'codigoproduto': codigoproduto,
						'nomecompleto': nomecompleto,
						'email': email,
						'cep': cep,
						'rua': rua,
						'numero': numero,
						'complemento': complemento,
						'bairro': bairro,
						'cidade': cidade,
						'estado': estado,
						'pais': pais,
						'formapagamento': 'boleto',
						'ddi': ddi,
						'ddd': ddd,
						'telefone': telefone,
						'identidade': cpf
					});
							
					//alert(encode);
					
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
							alert(JSON.stringify(data));
							console.log(JSON.stringify(data));
							if (data.status != "") {
								//location.href = 'views/finalizacao-boleto.php?codigo=' + data.IdTransacao + '&mensagem=' + data.Mensagem + '&boleto=' + data.boleto_url + '&codigobarras=' + data.boleto_barcode;	
							}
						}
	
					});
	
					return false;
					//
				}
				//

			}
			
		});
	});

}); //]]>
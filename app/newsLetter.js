jQuery(document).ready(function($) {

	$("#submitbutton").click(function() {		

		var nomecompleto = $("#assinaturas_nomecompleto").val();
		var email = $("#assinaturas_email").val();
		var siteacessado = $("#assinaturas_siteacessado").val();
		var datahoracadastro = $("#assinaturas_datahora").val();
		var ip = $("#assinaturas_ip").val();
		
		encode=JSON.stringify({'assinaturas_nomecompleto': nomecompleto, 'assinaturas_email': email, 'assinaturas_siteacessado': siteacessado, 'assinaturas_datahora': datahoracadastro, 'assinaturas_ip': ip});
		
		var url = 'http://liffehealth.com.br/wslh/controllers/webservice/assinarNewsletter';

		if (nomecompleto=='') {
			alert("Digite seu nome completo.");
			$('#assinaturas_nomecompleto').focus();
			return false;
		}
		
		if (email=='') {
			alert("Digite seu email.");
			$('#assinaturas_email').focus();
			return false;
		}

		if (nomecompleto!="" && email!="") {
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
				if (siteacessado=='PVBIOD001NL') {
					alert("Cadastrado com sucesso!");
					$('#assinaturas_nomecompleto').val("");
					$('#assinaturas_email').val("");
				} else {
					location.href =	'http://biodryneoficial.com.br/#footer';
				}
			}			
		//});
		}).done(function(response) {
			/*
			 *Quando a chamada Ajax é terminada com sucessso,
			 *o javascript confirma o status da operacao
			 *com a variavel que enviamos no formato json.
			 */
			//alert(response.status);
			
			if(response.status){
				//Se for positivo, mostra ao utilizador uma janela de sucesso.
				//alert("Transacao aceita com Sucesso!");
			}else{
				//Caso contrario dizemos que aconteceu algum erro.
				//alert("Uups! Ocorreu algum erro!");
				//location.href =	'views/finalizacao-error.php';
			}
		}).fail(function(xhr, desc, err) {
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
		}
	});


});

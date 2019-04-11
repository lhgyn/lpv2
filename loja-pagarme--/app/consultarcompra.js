$(document).ready(function() {
	$("#submitbutton").click(function() {	
		var idtransacao = $("#idtransacao").val();
		var email = $("#email").val();
		encode=JSON.stringify({'idtransacao':idtransacao,'email':email});
		
		var url = 'http://liffehealth.com.br/wslh/controllers/webservice/consultarCompraCliente';

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
				//alert(JSON.stringify(data));
				location.href =	'painel-cliente.php?p='+data.id;
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
	});
});
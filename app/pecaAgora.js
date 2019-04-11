jQuery(document).ready(function($) { 
	$("#frm-cad-email").validate({
		// Define as regras
		rules:{
			assinaturas_nomecompleto: {
				// nome_cliente será obrigatório (required) e terá tamanho mínimo (minLength)
				required: true, minlength: 3
			},
			assinaturas_email: {
				// email_cliente será obrigatório (required) e precisará ser um e-mail válido (email)
				required: true, email: true
			}
		},
		// Define as mensagens de erro para cada regra
		messages: {
			assinaturas_nomecompleto: {
				required: "Digite o seu nome",
				minlength: $.validator.format( "O seu nome deve conter, no mínimo, {0} caracteres." )
			},
			assinaturas_email: {
				required: "Digite o seu e-mail para contato",
				email: "Digite um e-mail válido"
			}
		}
	});
});

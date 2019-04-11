jQuery(document).ready(function($) { 
	$(".scroll").click(function(event){        
	    event.preventDefault();
	    $('html,body').animate({scrollTop:$(this.hash).offset().top-113}, 700);
	});

	if ($('.back-to-top').length) {
	var scrollTrigger = 100, // px
	    backToTop = function () {
	        var scrollTop = $(window).scrollTop();
	        if (scrollTop > scrollTrigger) {
	            $('.back-to-top').addClass('show');
	        } else {
	            $('.back-to-top').removeClass('show');
	        }
	    };
	backToTop();
	$(window).on('scroll', function () {
	    backToTop();
	});
	$('.back-to-top').on('click', function (e) {
	    e.preventDefault();
	    $('html,body').animate({
	        scrollTop: 0
	    }, 700);
	});
	}

	$("#frm-cad-email").validate({
		// Define as regras
		rules:{
			nome_cliente:{
				// nome_cliente será obrigatório (required) e terá tamanho mínimo (minLength)
				required: true, minlength: 3
			},
			email_cliente:{
				// email_cliente será obrigatório (required) e precisará ser um e-mail válido (email)
				required: true, email: true
			}
		},
		// Define as mensagens de erro para cada regra
		messages: {
			nome_cliente:{
				required: "Digite o seu nome",
				minlength: $.validator.format( "O seu nome deve conter, no mínimo, {0} caracteres." )
			},
			email_cliente:{
				required: "Digite o seu e-mail para contato",
				email: "Digite um e-mail válido"
			}
		}
	});

});


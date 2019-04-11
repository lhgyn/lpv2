jQuery(document).ready(function($) {
	/*
	$('#cliente_telefone').mask('(00) 00000-0000', {placeholder: "(__) _____-____)"});
	$('#cliente_datanascimento').mask('00/00/0000');
	$('#cliente_cpf').mask('000.000.000-00', {reverse: true});
	$('#cep').mask('00000-000');	
	*/
	
	if ( $("#cliente_nome").val() != '')  $("#cliente_nome").css({'border' : 'solid 1px #009f00', 'color' : '#009f00'});
	if ( $("#cliente_sobrenome").val() != '') $("#cliente_sobrenome").css({'border' : 'solid 1px #009f00', 'color' : '#009f00'});
	if ( $("#cliente_email").val() != '') $("#cliente_email").css({'border' : 'solid 1px #009f00', 'color' : '#009f00'});
	    
	$('#rua-inpt').hide();
	$('#bairro-inpt').hide();
	$('#numero').hide();
	$('#complemento').hide();
	$('.msg-address-group').hide();

	$('.content-frete').hide();

	$(document).bind("ajaxSend", function(){
		$(".loading-page").show();
	}).bind("ajaxComplete", function(){
		$(".loading-page").hide();
	});
	
	var dt = new Date();
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
	$(".date-venciment").html("Data de vencimento: "+proximoDiaUtil(dt));

	$('.review-form-btn').bind('click', function(event) {
    	var $anchor = $(this);
        $('html, body').animate({ scrollTop: $($anchor.attr('href')).offset().top - 80}, 'slow');
        event.preventDefault();
    });

    $('.btn-boleto-modal').bind('click', function(event) {
    	var $anchor = $(this);
        $('html, body').animate({ scrollTop: $($anchor.attr('href')).offset().top - 80}, 'slow');
        event.preventDefault();
    });

	$("#TB_title").click(function() {
		$('#TB_overlay').css("display", "none");
		$('#TB_window').css("display", "none");
	});

	$(".review-form-btn").click(function() {
		$('#TB_overlay').css("display", "none");
		$('#TB_window').css("display", "none");
	});

	$(".btn-boleto-modal").click(function() {
		$('.btn-payment-boleto').trigger('click');
		$('#TB_overlay').css("display", "none");
		$('#TB_window').css("display", "none");
	});

	var url = 'controllers/ws/produtos';
	
	$.ajax({
		type: "GET",
	  	dataType: "json",
	  	url: url,
	}).done(function (data) {
	  	//console.log(data);
		$.each(data.produtos, function(i,data) {		
			
			for (var contador = 0; contador < data.parcelamento_produto.length; contador++) {
				var parcela = data.parcelamento_produto[contador];
			}

			for (var contador = 0; contador < data.parcelamento_frete.length; contador++) {
				var frete = data.parcelamento_frete[contador];
			}

			for (var contador = 0; contador < data.parcelamento_produtofrete.length; contador++) {
				var parcelafrete = data.parcelamento_produtofrete[contador];
			}

			var cont = 
			("<tr><td>"+data.produto_nome+
			"</td><td>"+data.produto_codigo+
			"</td><td class='valor-produto-"+(i+1)+"'>"+data.produto_valor+
			"</td><td class='valor-frete-"+(i+1)+"'>"+data.produto_frete+
			"</td><td class='row-parcela-product-"+(i+1)+"'><select class='select-parc-product-"+(i+1)+"'><option class='parcela-1'>" +parcela.pp1+
			"</option><option class='parcela-2'>"+parcela.pp2+
			"</option><option class='parcela-3'>"+parcela.pp3+
			"</option><option class='parcela-4'>"+parcela.pp4+
			"</option><option class='parcela-5'>"+parcela.pp5+
			"</option><option class='parcela-6' selected>"+parcela.pp6+
			"</option><option class='parcela-7'>"+parcela.pp7+
			"</option><option class='parcela-8'>"+parcela.pp8+
			"</option><option class='parcela-9'>"+parcela.pp9+
			"</option><option class='parcela-10'>"+parcela.pp10+
			"</option><option class='parcela-11'>"+parcela.pp11+
			"</option><option class='parcela-12'>"+parcela.pp12+
			"</td><td class='row-frete-product-"+(i+1)+"'><select class='select-frete-product-"+(i+1)+"'><option class='frete-1'>"+frete.pf1+
			"</option><option class='frete-2'>"+frete.pf2+
			"</option><option class='frete-3'>"+frete.pf3+
			"</option><option class='frete-4'>"+frete.pf4+
			"</option><option class='frete-5'>"+frete.pf5+
			"</option><option class='frete-6'>"+frete.pf6+
			"</option><option class='frete-7'>"+frete.pf7+
			"</option><option class='frete-8'>"+frete.pf8+
			"</option><option class='frete-9'>"+frete.pf9+
			"</option><option class='frete-10'>"+frete.pf10+
			"</option><option class='frete-11'>"+frete.pf11+
			"</option><option class='frete-12'>"+frete.pf12+
			"</td><td class='row-parcelafrete-product-"+(i+1)+"'><select class='select-parcelafrete-product-"+(i+1)+"'><option class='parcelafrete-1'>"+parcelafrete.ppf1+
			"</option><option class='parcelafrete-2'>"+parcelafrete.ppf2+
			"</option><option class='parcelafrete-3'>"+parcelafrete.ppf3+
			"</option><option class='parcelafrete-4'>"+parcelafrete.ppf4+
			"</option><option class='parcelafrete-5'>"+parcelafrete.ppf5+
			"</option><option class='parcelafrete-6' selected>"+parcelafrete.ppf6+
			"</option><option class='parcelafrete-7'>"+parcelafrete.ppf7+
			"</option><option class='parcelafrete-8'>"+parcelafrete.ppf8+
			"</option><option class='parcelafrete-9'>"+parcelafrete.ppf9+
			"</option><option class='parcelafrete-10'>"+parcelafrete.ppf10+
			"</option><option class='parcelafrete-11'>"+parcelafrete.ppf11+
			"</option><option class='parcelafrete-12'>"+parcelafrete.ppf12+
			"</td></tr>");
			
			$(cont).appendTo("#clienteTableTr");
		});

		var htmlpreco1 = $('.select-parcelafrete-product-1').html();
		var htmlpreco2 = $('.select-parcelafrete-product-2').html();
		var htmlpreco3 = $('.select-parcelafrete-product-3').html();
		var frete1 = $('.select-frete-product-1 .frete-6').text();
		var frete2 = $('.select-frete-product-2 .frete-6').text();
		var frete3 = $('.select-frete-product-3 .frete-6').text();
		var subtotal3 = $('.select-parc-product-3 .parcela-6').text();
		var total3 = $('.select-parcelafrete-product-3 .parcelafrete-6').text();
		var subtotal2 = $('.select-parc-product-2 .parcela-6').text();
		var total2 = $('.select-parcelafrete-product-2 .parcelafrete-6').text();
		var subtotal1 = $('.select-parc-product-1 .parcela-6').text();
		var total1 = $('.select-parcelafrete-product-1 .parcelafrete-6').text();
		var valorproduto1 = $('.valor-produto-1').text().replace(',','.');
		var valorproduto2 = $('.valor-produto-2').text().replace(',','.');
		var valorproduto3 = $('.valor-produto-3').text().replace(',','.');
		var valorfrete = $('.valor-frete-1').text().replace(',','.');
		$('#pricecard').html(htmlpreco3);
		$('.price-subtotal p').text(subtotal3);
		$('.price-frete').text(frete3);
		$('.price-total p strong').text(total3);

		//alert((Math.floor(valorproduto3*0.75)+24.95).toFixed(2).replace('.',','));

		$('.product-one').click( function() {
			if ( $('.btn-payment-card').hasClass('active') ) {
				$('#pricecard').html(htmlpreco1);
				$('.price-subtotal p').text(subtotal1);
				$('.price-frete').text(frete1);
				$('.price-total p strong').text(total1);
			} else if ( $('.btn-payment-boleto').hasClass('active') ) {
				$('.price-subtotal p').text("R$"+(Math.floor(valorproduto1*0.75).toFixed(2).replace('.',',')));
				$('.price-frete').text("R$24,95");
				$('.price-total p strong').text("R$"+((Math.floor(valorproduto1*0.75)+24.95).toFixed(2).replace('.',',')));
			}
		});
		$('.product-two').click( function() {
			if ( $('.btn-payment-card').hasClass('active') ) {
				$('#pricecard').html(htmlpreco2);
				$('.price-subtotal p').text(subtotal2);
				$('.price-frete').text(frete2);
				$('.price-total p strong').text(total2);
			} else if ( $('.btn-payment-boleto').hasClass('active') ) {
				$('.price-subtotal p').text("R$"+(Math.floor(valorproduto2*0.75).toFixed(2).replace('.',',')));
				$('.price-frete').text("R$24,95");
				$('.price-total p strong').text("R$"+((Math.floor(valorproduto2*0.75)+24.95).toFixed(2).replace('.',',')));
			}
		});
		$('.product-three').click( function() {
			if ( $('.btn-payment-card').hasClass('active') ) {
				$('#pricecard').html(htmlpreco3);
				$('.price-subtotal p').text(subtotal3);
				$('.price-frete').text(frete3);
				$('.price-total p strong').text(total3);
			} else if ( $('.btn-payment-boleto').hasClass('active') ) {
				$('.price-subtotal p').text("R$"+(Math.floor(valorproduto3*0.75).toFixed(2).replace('.',',')));
				$('.price-frete').text("R$24,95");
				$('.price-total p strong').text("R$"+((Math.floor(valorproduto3*0.75)+24.95).toFixed(2).replace('.',',')));
			}
		});

		$('.btn-payment-card').click( function () {
			if ( $('.product-one input').is(":checked")) {
				$('#pricecard').html(htmlpreco1);
				$('.price-subtotal p').text(subtotal1);
				$('.price-frete').text(frete1);
				$('.price-total p strong').text(total1);
			} else if ( $('.product-two input').is(":checked") ) {
				$('#pricecard').html(htmlpreco2);
				$('.price-subtotal p').text(subtotal2);
				$('.price-frete').text(frete2);
				$('.price-total p strong').text(total2);
			} else if ( $('.product-three input').is(":checked") ) {
				$('#pricecard').html(htmlpreco3);
				$('.price-subtotal p').text(subtotal3);
				$('.price-frete').text(frete3);
				$('.price-total p strong').text(total3);
			}
		});

		$('.btn-payment-boleto').click( function(){	
			if ( $('.product-one input').is(":checked") ) {
				$('.price-frete').text("R$24,95");
				$('.price-subtotal p').text("R$"+(Math.floor(valorproduto1*0.75).toFixed(2).replace('.',',')));
				$('.price-total p strong').text("R$"+((Math.floor(valorproduto1*0.75)+24.95).toFixed(2).replace('.',',')));
			} else if ( $('.product-two input').is(":checked") ) {
				$('.price-frete').text("R$24,95");
				$('.price-subtotal p').text("R$"+(Math.floor(valorproduto2*0.75).toFixed(2).replace('.',',')));
				$('.price-total p strong').text("R$"+(((Math.floor(valorproduto2*0.75)+24.95).toFixed(2).replace('.',','))));
			} else if ( $('.product-three input').is(":checked") ) {
				$('.price-frete').text("R$24,95");
				$('.price-subtotal p').text("R$"+(Math.floor(valorproduto3*0.75).toFixed(2).replace('.',',')));
				$('.price-total p strong').text("R$"+((Math.floor(valorproduto3*0.75)+24.95).toFixed(2).replace('.',',')));
			}
		});

		$('#pricecard').change( function () {
			var nparcela = $('#pricecard option:selected').attr('class').substr(13);
			var subtotal1parcela = $(".select-parc-product-1 .parcela-"+nparcela+"").text();
			var freteparcela = $(".select-frete-product-1 .frete-"+nparcela+"").text();
			var total1parcela = $(".select-parcelafrete-product-1 .parcelafrete-"+nparcela+"").text();
			var subtotal2parcela = $(".select-parc-product-2 .parcela-"+nparcela+"").text();
			var total2parcela = $(".select-parcelafrete-product-2 .parcelafrete-"+nparcela+"").text();
			var subtotal3parcela = $(".select-parc-product-3 .parcela-"+nparcela+"").text();
			var total3parcela = $(".select-parcelafrete-product-3 .parcelafrete-"+nparcela+"").text();
			
			if ( $('.product-one input').is(":checked") ) {
				$('.price-subtotal p').text(subtotal1parcela);
				$('.price-frete').text(freteparcela);
				$('.price-total p strong').text(total1parcela);
			} else if ( $('.product-two input').is(":checked") ) {
				$('.price-subtotal p').text(subtotal2parcela);
				$('.price-frete').text(freteparcela);
				$('.price-total p strong').text(total2parcela);
			} else if ( $('.product-three input').is(":checked") ) {
				$('.price-subtotal p').text(subtotal3parcela);
				$('.price-frete').text(freteparcela);
				$('.price-total p strong').text(total3parcela);
			}
		
		});
		
		$(".product-two").click( function(){
			if ( ($('.recebe-address').html() != "") ) {
				$('.content-frete').show();
			} else {
				$('.content-frete').hide();
			}
		});

		$(".product-three").click( function(){
			if ( ($('.recebe-address').html() != "") ) {
				$('.content-frete').show();
			} else {
				$('.content-frete').hide();
			}
		});

		$(".product-one").click( function(){
			if ( ($('.recebe-address').html() != "") ) {
				$('.content-frete').show();
			} else {
				$('.content-frete').hide();
			}
		});

		$(".form-control").blur( function(){
			if ($(this).val() != "") {
		    	$(this).addClass('success');
		    } else {
		    	$(this).removeClass('success');
		    }
		});

		$("#cliente_telefone").blur( function(){
		    if ($(this).val() == "(") {
		    	var filled = $(this).val();
		    	var clear = $(this).val("");
		    	$('#cliente_telefone').removeClass('success');
		    }
		});

		$("#numerocartao").blur( function(){
		    if ($(this).val() == "   ") {
		    	var filled = $(this).val();
		    	var clear = $(this).val("");
		    	$('#numerocartao').removeClass('success');
		    }
		});

		$(".val-mes-group select").blur( function(){
		    if ($(this).val() == null) {
		    	$(this).removeClass('success');
		    }
		});

		$(".ano-mes-group select").blur( function(){
		    if ($(this).val() == null) {
		    	$(this).removeClass('success');
		    }
		});
	});

	$('#cep').bind('keyup change input paste', function verificacep(e){
		var $this = $(this);
	    var val = $this.val();
	    var valLength = val.length;
	    var maxCount = $this.attr('maxlength');
	    if(valLength==maxCount){
	        /* Configura a requisição AJAX */
	        var Cep = $("#cep").val();
			encode=JSON.stringify({'cep':Cep});
			var url = 'controllers/ws/consultarCep';
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
					if(data.sucesso == 1){
						$('.msg-address-group').show();
						$('.recebe-address').html(data.rua +", "+ data.bairro +" / "+ data.cidade +" - "+ data.estado);
						$('.form-group.rua-group').css("margin", "0");
						$('.form-group.bairro-group').css("margin", "0");
						$('.numero-group').css("padding-right", "0");

						$('#rua-inpt').val(data.rua);
						$('#bairro-inpt').val(data.bairro);
						$('#rua').val(data.rua);
						$('#bairro').val(data.bairro);
						$('#cidade').val(data.cidade);
						$('#estado').val(data.estado);
						
						$('#rua-inpt-error.error').css("display", "none");
	    				$('#bairro-inpt-error.error').css("display", "none");
						$('#rua-inpt').hide();
						$('#bairro-inpt').hide();
						$('#numero').show();
						$('#complemento').show();
						$('#numero').focus();
						$("#cep").removeClass('error');

						$('.content-frete').show();

					} else if(data.sucesso == 2){
						$('.msg-address-group').show();
						$('.recebe-address').html(data.cidade +" - "+ data.estado);
						$('.form-group.rua-group').css("margin-bottom", "15px");
						$('.form-group.bairro-group').css("margin-bottom", "15px");
						if (window.matchMedia('(max-width: 769px)').matches) {
							$('.numero-group').css("padding-right", "0");
						} else {
							$('.numero-group').css("padding-right", "15px");
						}

						$('#cidade').val(data.cidade);
						$('#estado').val(data.estado);

						$('#rua-inpt').val('');
						$('#bairro-inpt').val('');
						$('#rua-inpt').show();
						$('#bairro-inpt').show();
						$('#numero').show();
						$('#complemento').show();
						$('#rua-inpt').focus();
						$("#cep").removeClass('error');

						$('.content-frete').show();

					} else if(data.sucesso == 0) {
						$('.msg-address-group').hide();
						$('#rua-inpt-error.error').css("display", "none");
	    				$('#bairro-inpt-error.error').css("display", "none");
						$('#rua-inpt').hide();
						$('#bairro-inpt').hide();
						$('#numero').hide();
						$('#complemento').hide();

						/*$.validator.methods.cepcorreios = function() {
							return true;
						}*/

						$('.msg-address-group').hide();

						$("#cep").addClass('error');

						$('.content-frete').hide();

					}
			
	    		}

	    	});

	    }

	    if ( ($('.recebe-address').html() != "") && ( $('.product-one').hasClass('active') ) ) {
			$('.content-frete').show();
		} else {
			$('.content-frete').hide();
		}

		return false;

	});

	$(".product-two").click( function(){
		if ( ($('.recebe-address').html() != "") ) {
			$('.content-frete').show();
		} else {
			$('.content-frete').hide();
		}
	});

	$(".product-three").click( function(){
		if ( ($('.recebe-address').html() != "") ) {
			$('.content-frete').show();
		} else {
			$('.content-frete').hide();
		}
	});

	$(".product-one").click( function(){
		if ( ($('.recebe-address').html() != "") ) {
			$('.content-frete').show();
		} else {
			$('.content-frete').hide();
		}
	});

	$(".form-control").blur( function(){
		if ($(this).val() != "") {
	    	$(this).addClass('success');
	    } else {
	    	$(this).removeClass('success');
	    }
	});

	$("#cliente_telefone").blur( function(){
	    if ($(this).val() == "(") {
	    	var filled = $(this).val();
	    	var clear = $(this).val("");
	    	$('#cliente_telefone').removeClass('success');
	    }
	});

	$("#numerocartao").blur( function(){
	    if ($(this).val() == "   ") {
	    	var filled = $(this).val();
	    	var clear = $(this).val("");
	    	$('#numerocartao').removeClass('success');
	    }
	});

	$(".val-mes-group select").blur( function(){
	    if ($(this).val() == null) {
	    	$(this).removeClass('success');
	    }
	});

	$(".ano-mes-group select").blur( function(){
	    if ($(this).val() == null) {
	    	$(this).removeClass('success');
	    }
	});

	$('.content-payment-boleto').hide();
	$('.content-summary-if-boleto').hide();

	$('.btn-payment-card').on('click', function (e) {
        e.preventDefault();
        $('.content-payment-card').show() 
        && $('.content-summary-if-card').show()
        && $('.content-payment-boleto').hide()
        && $('.content-summary-if-boleto').hide();
        
    });
    
    $('.btn-payment-boleto').on('click', function (e) {
        e.preventDefault();
        $('.content-payment-card').hide() 
        && $('.content-summary-if-card').hide()
        && $('.content-payment-boleto').show()
        && $('.content-summary-if-boleto').show();    
    });

	$('.icon-pac-ok').show();
	$('.icon-pac-fail').hide();
	$('.icon-sedex-ok').hide();
	$('.icon-sedex-fail').show();

	$('.btn-frete-sedex').on('click', function() {
		$('.icon-sedex-ok').show();
		$('.icon-sedex-fail').hide();
		$('.icon-pac-ok').hide();
		$('.icon-pac-fail').show();
	});

	$('.btn-frete-pac').on('click', function() {
		$('.icon-pac-ok').show();
		$('.icon-pac-fail').hide();
		$('.icon-sedex-ok').hide();
		$('.icon-sedex-fail').show();
	});

});
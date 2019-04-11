stock = Math.floor(Math.random() * (97 - 77 + 1)) + 77;
kit_um = 1;
kit_dois = 3;
kit_tres = 5;
$(document).ready(function () {
	$('#current').html(stock);
});

function geo_localization() {
	var getGeo = $.getJSON("http://ip-api.com/json/?fields=regionName,city&callback=?", function (data) {
		if (data.city != "") {
			$("#city-place").html(data.city);
		} else {
			$("#city-place").html(data.regionName);
		}
	});
	return getGeo;
}

function verify_stock() {
	stock_verify = $('#current').text();
	if (stock_verify < 0) {
		$('#current').html('00');
	} else if (stock_verify.toString().length == 1) {
		$('#current').html("0"+stock_verify);
	}
}
setTimeout(function () {
	geo_localization();
	Lobibox.notify('error', {
		size: 'normal',
		width: 450,
		title: false,
		soundPath: 'vendor/lobibox/sounds/',
		messageHeight: 100,
		icon: 'false',
		delayIndicator: true,
		position: 'bottom left',
		img: 'img/capsulas.png',
		//msg: '1 pessoa acabou de comprar o <b>Kit <span id="notification"></span></b> BIODRYNE em São Paulo',
		msg: 'Mais uma compra realizada em São Paulo',
		delay: 5000
	});
	$("#notification").html(3);
	stock = $('#current').text();
	$('#current').html(stock - kit_tres);
	verify_stock();
}, 1000 * 2);
setTimeout(function () {
	geo_localization();
	Lobibox.notify('error', {
		size: 'normal',
		width: 450,
		title: false,
		soundPath: 'vendor/lobibox/sounds/',
		messageHeight: 100,
		icon: 'false',
		delayIndicator: true,
		position: 'bottom left',
		img: 'img/capsulas.png',
		//msg: '1 pessoa acabou de finalizar a compra de um <b>Kit <span id="notification"></span></b> BIODRYNE em <span id="city-place"></span>',
		msg: 'Mais uma compra realizada em <span id="city-place"></span>',
		delay: 5000
	});
	$("#notification").html(3);
	stock = $('#current').text();
	$('#current').html(stock - kit_tres);
	verify_stock();
}, 1000 * 13);
setTimeout(function () {
	geo_localization();
	Lobibox.notify('error', {
		size: 'normal',
		width: 450,
		title: false,
		soundPath: 'vendor/lobibox/sounds/',
		messageHeight: 100,
		icon: 'false',
		delayIndicator: true,
		position: 'bottom left',
		img: 'img/capsulas.png',
		//msg: '2 pessoas acabaram de comprar o <b>Kit <span id="notification"></span></b> do Plano BIODRYNE na Bahia',
		msg: 'Mais 2 pedidos realizados na Bahia',
		delay: 5000
	});
	$("#notification").html(2);
	stock = $('#current').text();
	$('#current').html(stock - kit_dois * 2);
	verify_stock();
}, 1000 * 25);
setTimeout(function () {
	geo_localization();
	Lobibox.notify('error', {
		size: 'normal',
		width: 450,
		title: false,
		soundPath: 'vendor/lobibox/sounds/',
		messageHeight: 100,
		icon: 'false',
		delayIndicator: true,
		position: 'bottom left',
		img: 'img/capsulas.png',
		//msg: '1 pessoa acabou de comprar o <b>Kit <span id="notification"></span></b> do Plano BIODRYNE em <span id="city-place"></span>',
		msg: 'Mais uma compra finalizada em <span id="city-place"></span>',
		delay: 5000
	});
	$("#notification").html(3);
	stock = $('#current').text();
	$('#current').html(stock - kit_tres);
	verify_stock();
}, 1000 * 36);
setTimeout(function () {
	geo_localization();
	Lobibox.notify('error', {
		size: 'normal',
		title: false,
		width: 450,
		soundPath: 'vendor/lobibox/sounds/',
		messageHeight: 100,
		icon: 'false',
		delayIndicator: true,
		position: 'bottom left',
		img: 'img/capsulas.png',
		//msg: '3 pessoas acabaram de comprar o <b>Kit <span id="notification"></span></b> do Plano BIODRYNE no Distrito Federal',
		msg: 'Mais 3 pedidos realizados no Distrito Federal',
		delay: 5000
	});
	$("#notification").html(1);
	stock = $('#current').text();
	$('#current').html(stock - kit_um * 3);
	verify_stock();
}, 1000 * 47);
setTimeout(function () {
	geo_localization();
	Lobibox.notify('error', {
		size: 'normal',
		width: 450,
		title: false,
		soundPath: 'vendor/lobibox/sounds/',
		messageHeight: 100,
		icon: 'false',
		delayIndicator: true,
		position: 'bottom left',
		img: 'img/capsulas.png',
		//msg: '2 pessoas acabaram de comprar o <b>Kit <span id="notification"></span></b> do Plano BIODRYNE em Minas Gerais',
		msg: 'Mais 2 pedidos realizados em Minas Gerais',
		delay: 5000
	});
	$("#notification").html(2);
	stock = $('#current').text();
	$('#current').html(stock - kit_dois * 2);
	verify_stock();
}, 1000 * 59);
setTimeout(function () {
	geo_localization();
	Lobibox.notify('error', {
		size: 'normal',
		width: 450,
		title: false,
		soundPath: 'vendor/lobibox/sounds/',
		messageHeight: 100,
		icon: 'false',
		delayIndicator: true,
		position: 'bottom left',
		img: 'img/capsulas.png',
		//msg: '1 pessoa acabou de comprar o <b>Kit <span id="notification"></span></b> do Plano BIODRYNE em <span id="city-place"></span>',
		msg: 'Mais uma compra finalizada em <span id="city-place"></span>',
		delay: 5000
	});
	$("#notification").html(1);
	stock = $('#current').text();
	$('#current').html(stock - kit_dois);
	verify_stock();
}, 1000 * 66);
setTimeout(function () {
	geo_localization();
	Lobibox.notify('error', {
		size: 'normal',
		width: 450,
		title: false,
		soundPath: 'vendor/lobibox/sounds/',
		messageHeight: 100,
		icon: 'false',
		delayIndicator: true,
		position: 'bottom left',
		img: 'img/capsulas.png',
		//msg: '3 pessoas acabaram de comprar o <b>Kit <span id="notification"></span></b> do Plano BIODRYNE em <span id="city-place"></span>',
		msg: 'Mais 3 pedidos realizados em <span id="city-place"></span>',
		delay: 5000
	});
	$("#notification").html(3);
	stock = $('#current').text();
	$('#current').html(stock - kit_tres * 3);
	verify_stock();
}, 1000 * 77);
setTimeout(function () {
	geo_localization();
	Lobibox.notify('error', {
		size: 'normal',
		width: 450,
		title: false,
		soundPath: 'vendor/lobibox/sounds/',
		messageHeight: 100,
		icon: 'false',
		delayIndicator: true,
		position: 'bottom left',
		img: 'img/capsulas.png',
		//msg: '1 pessoa acabou de comprar o <b>Kit <span id="notification"></span></b> do Plano BIODRYNE no Ceará',
		msg: 'Mais uma compra finalizada no Ceará',
		delay: 5000
	});
	$("#notification").html(2);
	stock = $('#current').text();
	$('#current').html(stock - kit_dois * 2);
	verify_stock();
}, 1000 * 87);
setTimeout(function () {
	geo_localization();
	Lobibox.notify('error', {
		size: 'normal',
		width: 450,
		title: false,
		soundPath: 'vendor/lobibox/sounds/',
		messageHeight: 100,
		icon: 'false',
		delayIndicator: true,
		position: 'bottom left',
		img: 'img/capsulas.png',
		//msg: '1 pessoa acabou de comprar o <b>Kit <span id="notification"></span></b> do Plano BIODRYNE em Pernambuco',
		msg: 'Mais uma compra finalizada em Pernambuco',
		delay: 5000
	});
	$("#notification").html(2);
	stock = $('#current').text();
	$('#current').html(stock - kit_dois);
	verify_stock();
}, 1000 * 99);
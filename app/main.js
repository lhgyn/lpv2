jQuery(document).ready(function($) {

	$(document).bind("ajaxSend", function(){
		$(".loading-page").show();
	}).bind("ajaxComplete", function(){
		$(".loading-page").hide();
	});
	
	$(".scroll").click(function(event){        
	    event.preventDefault();
	    if ( $(window).width() <= 991 ) {
	    	$('html,body').animate({scrollTop:$(this.hash).offset().top-151}, 700);
	    } else {
	    	$('html,body').animate({scrollTop:$(this.hash).offset().top-113}, 700);
	    }
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


    //stick in the fixed 100% height behind the navbar but don't wrap it
    $('#slide-nav.navbar .container').append($('<div id="navbar-height-col"></div>'));

    // Enter your ids or classes
    var toggler = '.navbar-toggle';
    var pagewrapper = '#page-content';
    var navigationwrapper = '.navbar-header';
    var menuwidth = '100%'; // the menu inside the slide menu itself
    var slidewidth = '80%';
    var menuneg = '-100%';
    var slideneg = '-80%';

    $(".btn-buy").click(function(event){
    	
    	var selected = $("#slide-nav").hasClass('slide-active');

        $('#slidemenu').stop().animate({
        	left: '-100%'
        });

        $('#navbar-height-col').stop().animate({
        	left: '-80%'
        });

        $(pagewrapper).stop().animate({
        	left: '0px'
        });

        $(navigationwrapper).stop().animate({
        	left: '0px'
        });

        $("#slidemenu").toggleClass('slide-active', !selected);
        $('#slidemenu').toggleClass('slide-active');

        $('#page-content, .navbar, body, .navbar-header').toggleClass('slide-active');

	    event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 900);
	});

	$(".btn-buy").click(function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 900);
	});

    $("#slide-nav").on("click", toggler, function (e) {

        var selected = $(this).hasClass('slide-active');

        $('#slidemenu').stop().animate({
            left: selected ? menuneg : '0px'
        });

        $('#navbar-height-col').stop().animate({
            left: selected ? slideneg : '0px'
        });

        $(pagewrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });

        $(navigationwrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });


        $(this).toggleClass('slide-active', !selected);
        $('#slidemenu').toggleClass('slide-active');


        $('#page-content, .navbar, body, .navbar-header').toggleClass('slide-active');


    });


    var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';


    $(window).on("resize", function () {

        if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
            $(selected).removeClass('slide-active');
        }


    });

});


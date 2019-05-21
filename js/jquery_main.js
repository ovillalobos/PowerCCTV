$(function() {	
	
	/* GENERAL
	*****************************************************************/	
	var contador = 1;
	posicionarMenu();	
	$('.headSilverBack').removeClass('fixedMidMenu');
	$('.headSilverBack').addClass('fixedHidden');
	$('.headSilverBack').slideUp(0);
	$('.headBlue').show(0);
	$('.middMenu').hide(0);
	/* SCROLL PARA OCULTAR OBJETOS
	*****************************************************************/	
	$(window).scroll(function() {
		var sizeWindowWidth = $( window ).width();
		
		posicionarMenu();
		
		$('.animationLeft').each(function(){
			var imagePos = $(this).offset().top;

			var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+650) {
				$(this).addClass("fadeIn");
			}
			if( $(window).scrollTop() == 0 ){
				$(this).removeClass("fadeIn");
			}
		});
		
		$('.animationRight').each(function(){
			var imagePos = $(this).offset().top;
			
			var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+650) {
				$(this).addClass("fadeIn");
			}
			if( $(window).scrollTop() == 0 ){
				$(this).removeClass("fadeIn");
			}
		});
		
		$('.middMenu').each(function(){
			var imagePos = $(this).offset().top;
			var topOfWindow = $(window).scrollTop();

			if (imagePos < topOfWindow+50) {
				if( sizeWindowWidth <= 800 ){
					$('.middMenu').hide(0);
				} else {
					$('.headSilverBack').addClass('fixedMidMenu');
					$('.headSilverBack').removeClass('fixedHidden');	
					$('.headSilverBack').slideDown(300);
					$('.middMenu').show(0);
					$('.middMenuBottom').hide(0);
				}				
			} else {
				$('.headSilverBack').removeClass('fixedMidMenu');
				$('.headSilverBack').addClass('fixedHidden');
				$('.headSilverBack').slideUp(0);
				$('.middMenuBottom').hide(0);
			}
		});
		$('.middMenuServ').each(function(){
			var imagePos = $(this).offset().top;
			var topOfWindow = $(window).scrollTop();

			if (imagePos < topOfWindow+50) {
				if( sizeWindowWidth <= 800 ){
				} else {
					$('.headSilverBack').addClass('fixedMidMenu');
					$('.headSilverBack').removeClass('fixedHidden');	
					$('.headSilverBack').slideDown(300);
				}				
			} else {
				$('.headSilverBack').removeClass('fixedMidMenu');
				$('.headSilverBack').addClass('fixedHidden');
				$('.headSilverBack').slideUp(0);
				
			}
		});
	});	
	/* BOTON SCROLL TOP
	*****************************************************************/
	$(".btn_upBlue").click( function () {
		$('html, body').animate({ scrollTop: 0 }, 1000);
	});
	
	$(".midMenu").bind( 'click', function (event) {
		var object 		= $(this).attr("id");
		var position 	= $("."+object).position();
		position		= position.top-100;
		$('html, body').stop().animate({ scrollTop: position }, 1000);
		event.preventDefault();
	});
	
	$(".iconMidMenu").bind( 'click', function (event) {
		var position 	= $(".posMidMenu").position();
		position		= position.top-100;
		$('html, body').stop().animate({ scrollTop: position }, 1000);
		event.preventDefault();
	});
	/* BOTON PARA OCULTAR MENU MOVIL
	*****************************************************************/
	$(".boMenuMovil").click(function() {
		if(contador == 1){
			$('#cssmenu').animate({ left: '0' }); contador = 0;
		} else {
			$('#cssmenu').animate({ left: '-100%' }); contador = 1;
		}
	});	
	/* FUNCTIONS
	*****************************************************************/	
	function posicionarMenu() {
		if ($(window).scrollTop() >= 110){
			$('.headBlue').addClass('fixed');
			$('.btn_upBlue').fadeIn(0);
			$('.headBlue').slideDown(300);
		} else {
			$('.headBlue').removeClass('fixed');
			$('.btn_upBlue').fadeOut(0);
			$('.headBlue').slideUp(0);
		}
		if( $(window).scrollTop() == 0 || $(window).scrollTop() < 50 ){
			$('.headBlue').slideDown(0);
		}
	}
	
});


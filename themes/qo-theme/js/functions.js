var $=jQuery.noConflict();
 
(function($){
	"use strict";
	$(function(){
 
		/*------------------------------------*\
			#GLOBAL
		\*------------------------------------*/

		$(document).ready(function() {
			if( parseInt( isHome ) ){
				proyectoSize();
				logoScroll();
				setTimeout( function(){
			    	imageMasonry();
			   	}, 300);				
			}
			isotopeMultipleQO();
			if ($('.my-calendar-date-switcher').length > 0) {
				$('.my-calendar-date-switcher input[type=submit]').val('Ir');
			}

			/* Si se va a modificar el estatus de cotización  */
			if(window.location.href.indexOf("#estatus-cotizacion") > -1) {
				console.log('Modificar estatus');
				$('#modal-estatus-cotizacion').show();
			}
			/* Si se ha modificado exitosamente el estatus de la cotización */
			if(window.location.href.indexOf("#notice-estatus-cotizacion") > -1) {
				console.log('Estatus modificado');
				$('#modal-notice-estatus-cotizacion').show();
			}
			/* Si se va a modificar el estatus del brief  */
			if(window.location.href.indexOf("#estatus-brief") > -1) {
				console.log('Modificar estatus');
				$('#modal-estatus-brief').show();
			}
			/* Si se ha modificado exitosamente el estatus del brief */
			if(window.location.href.indexOf("#notice-estatus-brief") > -1) {
				console.log('Estatus modificado');
				$('#modal-notice-estatus-brief').show();
			}
			/* Si se va a modificar el tiempo cotizado del brief  */
			if(window.location.href.indexOf("#tiempo-cotizado") > -1) {
				console.log('Modificar estatus');
				$('#modal-tiempo-cotizado').show();
			}
			/* Si se ha modificado exitosamente el tiempo cotizado del brief */
			if(window.location.href.indexOf("#notice-tiempo-cotizado") > -1) {
				console.log('Estatus modificado');
				$('#modal-notice-tiempo-cotizado').show();
			}
			/* Si se ha modificado exitosamente el tiempo creativo del brief */
			if(window.location.href.indexOf("#notice-tiempo-creativo") > -1) {
				console.log('Estatus modificado');
				$('#modal-notice-tiempo-creativo').show();
			}
			/* Si se ha enviado el email (nuevo, actualizado) del brief */
			if(window.location.href.indexOf("#notice-email-brief") > -1) {
				console.log('Notificación enviada');
				$('#modal-notice-email-brief').show();
			}

		});
 
		$(window).on('resize', function(){
			if( parseInt( isHome ) ){
				proyectoSize();
				// Eliminar overflow hidden si menú móvil se quedo abierto
				if ($('.js-header.active').length > 0) {
					$('.js-header').removeClass('active');
					$('html').removeClass('snow');	
				}
				setTimeout( function(){
			    	imageMasonry();
			   	}, 300);
			}
		});
 
		$(document).scroll(function() {
			if( parseInt( isHome ) ){
				logoScroll();
			}
		});

		//Nav Index
		$(".btn-header-open").click(function() {
			$('.js-header').addClass('active');		
			$('html').addClass('snow');		
		});
		$(".btn-header-close").click(function() {
			$('.js-header').removeClass('active');		
			$('html').removeClass('snow');		
		});

		//Scroll menú
		$("a.item-scroll").click(function() {
			//buttonMenuScroll();
			var idOption = $(this).attr('id'); //Opción del menú
			// console.log(idOption);
			var idSection = "#section-" + idOption; //Sección a la que se dirigirá
			// console.log(idSection); 
			$('html, body').animate({		
				scrollTop: $(idSection).offset().top - 80
			}, 1000);
			$('.js-header').removeClass('active');
			$('html').removeClass('snow');	

			if( parseInt( isHome ) ){
				var audio = document.getElementById("audio-scroll");
				audio.volume = 0.1;
				audio.play();
			}
		});

		/*if( parseInt( isHome ) ){
			$("a.item-scroll, .redes a").hover(function() {  //#section-nosotros .col,.bg-arrow, .services-pager span, footer a
				var audio = document.getElementById("audio-click");
				audio.volume = 0.1;
				audio.play();
			});
		}*/

		$(".bg-arrow, .services-pager span").click(function() {
			var audio = document.getElementById("audio-slider");
			audio.volume = 0.2;
			audio.play();
		});

		//Email
		$("#link-mail").click(function() {
			$(this).attr('href', 'mailto: contacto@queonda.com.mx');
		});

		//Nav QO
		$(".btn-nav").click(function() {
			$('.archive-header nav').addClass('active');
			$('html').addClass('snow');	
		});
		$(".archive-header .icon-cancel").click(function() {
			$('.archive-header nav').removeClass('active');
			$('html').removeClass('snow');	
		});

		//Buttons sistema
		$("#show-more-btn-sistema").click(function() {
			$('#extra-buttons-sistema').fadeIn(	);		
			$('#show-less-btn-sistema').fadeIn(	);		
			$('#show-more-btn-sistema').addClass('hide');		
		});

		//Botones año cotización
		$(".btns-group-ano button").click(function() {
			var idButton = $(this).attr('id');
			$('.btns-group-mes').addClass('hide');
			$('.btns-group-mes button.empty-value').click();		
			$('.btns-group-mes-' + idButton).removeClass('hide');		
		});

		// Modal
		$(".open-modal").click(function() {
			var idModal = $(this).attr('id');
			$('#modal-' + idModal).show();
			$('body').addClass('overflow-hide');
		});
		$(".close-modal, .exit-modal").click(function() {
			$('.modal').hide();
			$('body').removeClass('overflow-hide');
		});

		/* Botón imprimir*/
		$("#print-page").click(function() {
			console.log('click');
			window.print();
		});

		/* Video PROYECT */
		$(".next-itemProject, .prev-itemProject").click(function() {
			/* Si hay o no hay video */
			if ($('#section-trabajos .morph-button.open .cycle-slide-active .slideVideo').length > 0){
				$("video")[0].pause(); /*Detener video si se reproduco en el slide anterior*/
				console.log('Hay video');
				var idVideo = $('#section-trabajos .morph-button.open .cycle-slide-active .slideVideo').attr('id');
				document.getElementById(idVideo).play();
			} else {
				console.log('Sin video');
				/* Si hay un video corriendo lo pausa */
				$("video").each(function () { this.pause() });
			}
		});
		$(".morph-button .icon-close").click(function(){
			/* Si hay un video corriendo lo pausa y regresa al inicio */
			console.log('Detener videos');
			/* En lugar de $("video")[0].pause(); para aplicar a todas las etiquetas de video */
			$("video").each(function () { this.pause() });
			$("video").each(function () { this.currentTime = 0 });
		});
		$(".view-project").click(function() {
			/* Si hay o no hay video */
			setTimeout( function(){ /* Dar tiempo de que se active el modal (.morph-button.open) */
				if ($('#section-trabajos .morph-button.open .cycle-slide-active .slideVideo').length > 0){
					console.log('Hay video');
					var idVideo = $('#section-trabajos .morph-button.open .cycle-slide-active .slideVideo').attr('id');
					document.getElementById(idVideo).play();
				}
		   	}, 300);
		});
		
	});
})(jQuery);


/*Masonry galería*/
function imageMasonry(){
	// init Packery
	var $grid = $('.grid-images').packery({
		itemSelector: '.grid-item',
		percentPosition: true
	});
	// layout Packery after each image loads
	$grid.imagesLoaded().progress( function() {
		$grid.packery();
	}); 
}

/*Filtros Brief's y cotización (multiple) */

function isotopeMultipleQO(){
    var $container = $('.grid'),
        filters = {};

    $container.isotope({
      itemSelector : '.element-item',
    });

    // filter buttons
    $('.filter button').click(function(){
      var $this = $(this);
      // don't proceed if already selected
      if ( $this.hasClass('selected') ) {
        return;
      }
      
      var $optionSet = $this.parents('.option-set');
      // change selected class
      $optionSet.find('.selected').removeClass('selected');
      $this.addClass('selected');
      
      // store filter value in object
      var group = $optionSet.attr('data-filter-group');
      filters[ group ] = $this.attr('data-filter-value');
      // convert object into array
      var isoFilters = [];
      for ( var prop in filters ) {
        isoFilters.push( filters[ prop ] )
      }
      var selector = isoFilters.join('');
      $container.isotope({ filter: selector });

      return false;
    });
};

function logoScroll() {
	// get the position logo
	var finalPositionLogo = $('#section-nosotros').offset();
	var finalPositionLogo = finalPositionLogo.top - 50;
	//console.log(finalPositionLogo);

	var y = $(this).scrollTop();
	//If the current Y is bigger than the element.
	if(y >= finalPositionLogo){
		$('.bg-logo-secondary').addClass('logo-fixed');
		$('header.js-header').removeClass('hide');
	}else{
		$('.bg-logo-secondary').removeClass('logo-fixed');
		$('header.js-header').addClass('hide');
	}
}

/*Obtener ancho proyecto*/
function proyectoSize() {
	var widthColProject 		= widthProyecto() - 24;

	var heightColProjectCorta 	= widthColProject / 2;
	var heightColProjectLarga 	= widthColProject * 1.35;

	$('.project-item .morph-button, .project-item .morph-button .morph-content').css('width', widthColProject);
	/* Altura según ancho */
	$('.project-item .morph-button.size_corta, .project-item .morph-button.size_corta .morph-content').css('height', heightColProjectCorta);
	$('.project-item .morph-button.size_larga, .project-item .morph-button.size_larga .morph-content').css('height', heightColProjectLarga);
}
function widthProyecto() {
	return $('#section-trabajos .project-item').outerWidth();
}
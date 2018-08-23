var $=jQuery.noConflict();
 
(function($){
	"use strict";
	$(function(){
 
		/*------------------------------------*\
			#GLOBAL
		\*------------------------------------*/

		$(document).ready(function() {
			if( parseInt( isHome ) ){
				if ($('.grid-item').length > 0) {
					imageMasonry();
				}				
				logoScroll();
				colorMenu();
			}			
			isotopeQO();
			isotopeMultipleQO();
			if ($('.my-calendar-date-switcher').length > 0) {
				$('.my-calendar-date-switcher input[type=submit]').val('Ir');
			}
		});
 
		$(window).on('resize', function(){
			if( parseInt( isHome ) ){
				if ($('.grid-item').length > 0) {
					imageMasonry();
				}
				// Eliminar overflow hidden si menú móvil se quedo abierto
				if ($('.js-header.active').length > 0) {
					$('.js-header').removeClass('active');
					$('html').removeClass('snow');	
				}
			}
		});
 
		$(document).scroll(function() {
			if( parseInt( isHome ) ){
				logoScroll();
				colorMenu();
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

			var audio = document.getElementById("audio-scroll");
			audio.volume = 0.1;
			audio.play();
		});

		$("a.item-scroll").hover(function() {  //.bg-arrow, .services-pager span, footer a
			var audio = document.getElementById("audio-click");
			audio.volume = 0.1;
			audio.play();
		});

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
		});
		$(".archive-header .icon-cancel").click(function() {
			$('.archive-header nav').removeClass('active');		
		});

		//Buttons sistema
		$("#show-more-btn-sistema").click(function() {
			$('#extra-buttons-sistema').fadeIn(	);		
			$('#show-less-btn-sistema').fadeIn(	);		
			$('#show-more-btn-sistema').addClass('hide');		
		});
		
	});
})(jQuery);

/*Filtros CotizaciónQO */

function isotopeQO(){
	// init Isotope
	var $grid = $('.grid').isotope({
	  itemSelector: '.element-item',
	  layoutMode: 'fitRows'
	});
	// bind filter button click
	$('#filters').on( 'click', 'button', function() {
	  var filterValue = $( this ).attr('data-filter');
	  // use filterFn if matches value
	  filterValue = /*filterFns[ filterValue ] ||*/ filterValue;
	  $grid.isotope({ filter: filterValue });
	});

	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = $( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
	    $buttonGroup.find('.is-checked').removeClass('is-checked');
	    $( this ).addClass('is-checked');
	  });
	});
}

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

/*Filtros Brief's */

function isotopeMultipleQO(){
    var $container = $('.grid'),
        filters = {};

    $container.isotope({
      itemSelector : '.element-item',
      /*masonry: {
        columnWidth: 80
      }*/
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
      // i.e. filters.color = 'red'
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
	var initPositionLogo = $('#header-logo-qo').offset();
	var finalPositionLogo = initPositionLogo.top + 180;
	//console.log(finalPositionLogo);

	var y = $(this).scrollTop();
	//If the current Y is bigger than the element.
	if(y >= finalPositionLogo){
		$('.bg-logo-secondary').addClass('logo-fixed');
	}else{
		$('.bg-logo-secondary').removeClass('logo-fixed');
	}
}

// Cambiar tonos menú desktop en bg-colores-qo
function colorMenu() {
	// get the position logo
	var positionBg = $('.bg-colores-qo').offset();
	var finalPositionBg = positionBg.top - 200;
	console.log(finalPositionBg);

	var y = $(this).scrollTop();
	//If the current Y is bigger than the element.
	if(y >= finalPositionBg){
		$('.qo-nav').addClass('nav-clare');
	}else{
		$('.qo-nav').removeClass('nav-clare');
	}
}
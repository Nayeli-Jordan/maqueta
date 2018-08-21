var $=jQuery.noConflict();
 
(function($){
	"use strict";
	$(function(){
 
		/*------------------------------------*\
			#GLOBAL
		\*------------------------------------*/

		$(document).ready(function() {
			//footerBottom();
			isotopeQO();
			isotopeMultipleQO();
			if ($('.my-calendar-date-switcher').length > 0) {
				$('.my-calendar-date-switcher input[type=submit]').val('Ir');
			}
		});
 
		$(window).on('resize', function(){
			//footerBottom();
		});
 
		$(document).scroll(function() {

		});
 
		// if( parseInt( isHome ) ){

		// } 

		// if( parseInt( isSingular ) ){

		// } 
		//Nav Index
		$(".btn-header-open").click(function() {
			$('.js-header').addClass('active');		
		});
		$(".btn-header-close").click(function() {
			$('.js-header').removeClass('active');		
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
 
/**
 * Fija el footer abajo
 */
/*
function footerBottom(){
	var alturaFooter = getFooterHeight();
	$('.main-body').css('padding-bottom', alturaFooter );
}
function getHeaderHeight(){
	return $('.js-header').outerHeight();
}// getHeaderHeight
function getFooterHeight(){
	return $('footer').outerHeight();
}// getFooterHeight
*/

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
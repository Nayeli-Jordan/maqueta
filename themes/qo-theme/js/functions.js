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
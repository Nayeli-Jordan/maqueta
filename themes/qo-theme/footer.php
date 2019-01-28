		<?php if (is_home() || is_front_page()) :?>
				<div class="relative">
					<div class="bg-image bg-absolute bg-colores-qo" style="background-image: url(<?php echo THEMEPATH; ?>images/fondos/colores-qo-footer.png);"></div>
					<?php include (TEMPLATEPATH . '/templates-qo/template-footer.php'); ?>
				</div><!-- end content bg-colores-qo -->
			</div><!-- end main-body -->
		<?php endif; ?>
		<?php if (is_home()) : ?>
			<script src="<?php echo THEMEPATH; ?>js/classie.js"></script>
			<script src="<?php echo THEMEPATH; ?>js/uiMorphingButton_fixed.js"></script>
			<script>
				(function() {
					var docElem = window.document.documentElement, didScroll, scrollPosition;

					// trick to prevent scrolling when opening/closing button
					function noScrollFn() {
						window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
					}

					function noScroll() {
						window.removeEventListener( 'scroll', scrollHandler );
						window.addEventListener( 'scroll', noScrollFn );
					}

					function scrollFn() {
						window.addEventListener( 'scroll', scrollHandler );
					}

					function canScroll() {
						window.removeEventListener( 'scroll', noScrollFn );
						scrollFn();
					}

					function scrollHandler() {
						if( !didScroll ) {
							didScroll = true;
							setTimeout( function() { scrollPage(); }, 60 );
						}
					};

					function scrollPage() {
						scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
						didScroll = false;
					};

					scrollFn();

					[].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
						new UIMorphingButton( bttn, {
							closeEl : '.icon-close',
							onBeforeOpen : function() {
								// don't allow to scroll
								noScroll();
							},
							onAfterOpen : function() {
								// can scroll again
								canScroll();
							},
							onBeforeClose : function() {
								// don't allow to scroll
								noScroll();
							},
							onAfterClose : function() {
								// can scroll again
								canScroll();
							}
						} );
					} );

					// for demo purposes only
					[].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) { 
						bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
					} );
				})();
			</script>
		<?php endif; ?>  
		<?php wp_footer(); ?>
	</body>
</html>
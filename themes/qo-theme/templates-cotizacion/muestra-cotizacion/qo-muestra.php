<div class="content-cotizacion content-cotizacion-muestra relative"  style="page-break-after: always;">
	<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-header.php'); ?>
	<div class="container container-large">
		<p class="date"><?php echo get_the_date(); ?></p>
		<img class="img-client" src="<?php the_post_thumbnail_url('medium'); ?>">				
		<div class="content-muestra relative">
			<div class="content-center">
				<?php if( $muestraA != "") : ?>
					<img class="responsive-img inline-block" src="<?php echo $muestraA; ?>">
				<?php endif; ?>
				<?php if( $muestraB != "") : ?>
				<img class="responsive-img inline-block" src="<?php echo $muestraB; ?>">
				<?php endif; ?>
				<?php if( $muestraC != "") : ?>
				<img class="responsive-img inline-block" src="<?php echo $muestraC; ?>">
				<?php endif; ?>
				<?php if( $muestraD != "") : ?>
				<img class="responsive-img inline-block" src="<?php echo $muestraD; ?>">
				<?php endif; ?>				
			</div>
		</div>				
		<p class="text-center"><strong>Muestra</strong></p>
		<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-footer.php'); ?>
	</div>			
</div> <!-- end content-cotizacion -->
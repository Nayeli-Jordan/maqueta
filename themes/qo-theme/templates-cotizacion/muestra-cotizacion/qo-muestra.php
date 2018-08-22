<div class="content-cotizacion content-cotizacion-muestra relative"  style="page-break-after: always;">
	<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-header.php'); ?>
	<div class="container container-large">
		<p class="date"><?php echo get_the_date(); ?></p>
		<img class="img-client" src="<?php the_post_thumbnail_url('medium'); ?>">				
		<div class="content-muestra relative">
			<div class="content-center">
				<?php if( $muestraA != "") : ?>
					<div>
						<img class="responsive-img inline-block" src="<?php echo $muestraA; ?>">
						<p><?php echo get_post(pippin_get_image_id($muestraA))->post_content; ?></p>		
					</div>				
				<?php endif; ?>
				<?php if( $muestraB != "") : ?>
					<div>
						<img class="responsive-img inline-block" src="<?php echo $muestraB; ?>">
						<p><?php echo get_post(pippin_get_image_id($muestraB))->post_content; ?></p>
					</div>
				<?php endif; ?>
				<?php if( $muestraC != "") : ?>
					<div>
						<img class="responsive-img inline-block" src="<?php echo $muestraC; ?>">
						<p><?php echo get_post(pippin_get_image_id($muestraC))->post_content; ?></p>
					</div>
				<?php endif; ?>
				<?php if( $muestraD != "") : ?>
					<div>
						<img class="responsive-img inline-block" src="<?php echo $muestraD; ?>">
						<p><?php echo get_post(pippin_get_image_id($muestraD))->post_content; ?></p>
					</div>
				<?php endif; ?>				
			</div>
		</div>				
		<p class="text-center"><strong>Muestra</strong></p>
		<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-footer.php'); ?>
	</div>			
</div> <!-- end content-cotizacion -->
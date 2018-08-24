<div class="content-cotizacion content-cotizacion-muestra relative"  style="page-break-after: always;">
	<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-header.php'); ?>
	<div class="container container-large">
		<p class="date"><?php echo get_the_date(); ?></p>
		<img class="img-client" src="<?php the_post_thumbnail_url('medium'); ?>">				
		<div class="content-muestra relative">
			<div class="content-center">
				<?php if( $muestraA != "") : ?>
					<div>
						<?php $image_thumb = wp_get_attachment_image_src(qo_get_image_id($muestraA), 'large'); ?>
						<img class="responsive-img inline-block" src="<?php echo $image_thumb[0]; ?>">
						<p><?php echo get_post(qo_get_image_id($muestraA))->post_content; ?></p>		
					</div>				
				<?php endif; ?>
				<?php if( $muestraB != "") : ?>
					<div>
						<?php $image_thumb = wp_get_attachment_image_src(qo_get_image_id($muestraB), 'large'); ?>
						<img class="responsive-img inline-block" src="<?php echo $image_thumb[0]; ?>">
						<p><?php echo get_post(qo_get_image_id($muestraB))->post_content; ?></p>
					</div>
				<?php endif; ?>
				<?php if( $muestraC != "") : ?>
					<div>
						<?php $image_thumb = wp_get_attachment_image_src(qo_get_image_id($muestraC), 'large'); ?>
						<img class="responsive-img inline-block" src="<?php echo $image_thumb[0]; ?>">
						<p><?php echo get_post(qo_get_image_id($muestraC))->post_content; ?></p>
					</div>
				<?php endif; ?>
				<?php if( $muestraD != "") : ?>
					<div>
						<?php $image_thumb = wp_get_attachment_image_src(qo_get_image_id($muestraD), 'large'); ?>
						<img class="responsive-img inline-block" src="<?php echo $image_thumb[0]; ?>">
						<p><?php echo get_post(qo_get_image_id($muestraD))->post_content; ?></p>
					</div>
				<?php endif; ?>				
			</div>
		</div>				
		<p class="text-center"><strong>Muestra</strong></p>
		<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-footer.php'); ?>
	</div>			
</div> <!-- end content-cotizacion -->
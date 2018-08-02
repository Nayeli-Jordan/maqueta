<div class="content-cotizacion relative">
			<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-header.php'); ?>
			<div class="container container-large">
				<p class="date"><?php echo get_the_date(); ?></p>
				<img class="img-client" src="<?php the_post_thumbnail_url('medium'); ?>">				
				<div class="content-muestra relative">
					<img class="responsive-img inline-block" src="<?php echo $muestra; ?>">
				</div>				
				<p class="text-center"><strong>Muestra</strong></p>
				<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-footer.php'); ?>
			</div>			
		</div> <!-- end content-cotizacion -->
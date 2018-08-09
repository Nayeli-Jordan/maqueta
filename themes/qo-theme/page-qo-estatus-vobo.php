<?php get_header(); ?>
	<section class="[ container container-large ]">
		<div class="row buttons-sistema buttons-responsables margin-bottom-large">
			<ul>
				<li><a href="<?php echo SITEURL; ?>qo-estatus-vobo">VoBo</a></li>
				<li><a href="<?php echo SITEURL; ?>qo-estatus-facturada">Facturada</a></li>
			</ul>
		</div>
		<div class="row">
		<?php
	        $args = array(
	            'post_type' 		=> 'qo_cotizaciones',
	            'posts_per_page' 	=> -1,
	            'orderby' 			=> 'date',
	            'order' 			=> 'ASC'
	            );
	        $loop = new WP_Query( $args );
	        $i = 1;
	        if ( $loop->have_posts() ) {
	            while ( $loop->have_posts() ) : $loop->the_post(); 

					$custom_fields 	= get_post_custom();
					$post_id 		= get_the_ID();

					$estatus      	= get_post_meta( $post_id, 'qo_cotizaciones_estatus', true );
	            	?>

					<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-card-cotizaciones.php'); ?>

	            <?php $i ++;  endwhile;
	        } 
	        wp_reset_postdata();
	    ?>
		</div>
	</section>
<?php get_footer(); ?>
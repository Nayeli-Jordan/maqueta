<?php get_header(); ?>
	<section class="[ container container-large ]">
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

					
	            	?>

					<div class="col s12 m6 l4">
						<div class="shadow relative card-cotizacion">
							<div class="info-general">
								<div class="num-tiket bg-gradient-qo">
									<div class="bg-light">
										<p>000<?php echo get_the_ID(); ?></p>
									</div>						
								</div>
								<div class="title-tiket bg-gradient-qo">
									<p>Proyecto: <?php the_title(); ?></p>
								</div>
							</div>
							<p class="date margin-bottom-small"><?php echo get_the_date(); ?></p>
							<img class="img-client margin-auto block" src="<?php the_post_thumbnail_url('medium'); ?>">
						</div>
					</div>		        		  	        		

	            <?php $i ++;  endwhile;
	        } 
	        wp_reset_postdata();
	    ?>					

		</div>
	</section>
<?php get_footer(); ?>
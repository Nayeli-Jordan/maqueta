<header class="container container-large header-cotizacion">
	<img class="img-qo-logo" src="<?php echo THEMEPATH; ?>images/identidad/qo-logo.png">
	<div class="info-general">
		<div class="num-tiket bg-gradient-qo">
			<div class="bg-light">
				<!-- <?php
					$cur_id = get_the_ID();
			        $args = array(
			        	'post_type' 		=> 'qo_cotizaciones',
			            'posts_per_page' 	=> 1,
			            'post__not_in' 		=> array( $cur_id ),
			            );
			        $loop = new WP_Query( $args );
			        if ( $loop->have_posts() ) {
			            while ( $loop->have_posts() ) : $loop->the_post(); ?>
			                		
		            		<?php echo get_the_ID(); ?>
		            		<?php the_title(); ?>

			            <?php endwhile;
			        } 
			        wp_reset_postdata();
			    ?> --><!--/.products-->	
				<p><?php echo date("y") . date("m"); ?><?php echo get_the_ID(); ?></p>
			</div>						
		</div>
		<div class="title-tiket bg-gradient-qo">
			<p>Proyecto: <?php the_title(); ?></p>
		</div>
	</div>	
	<div class="status shadow-small">									
		<?php if( $estatus === "Facturada" ) : ?>
			<span class="icon-ok"></span><span class="etiqueta-text">Facturada</span>
		<?php else : ?>
			<span class="icon-clock-circled"></span><span class="etiqueta-text">VoBo</span>	
		<?php endif; ?>
	</div>
</header>
<img class="responsive-img" src="<?php echo THEMEPATH; ?>images/cotizacion/shadow.png">
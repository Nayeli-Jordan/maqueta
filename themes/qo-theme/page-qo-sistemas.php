<?php get_header(); ?>
	<section class="[ container container-large ]">
		<?php include (TEMPLATEPATH . '/templates-sistema/buttons-sistema.php'); ?>	
		<div class="row margin-top">
		<?php
	        $args = array(
	            'post_type' 		=> 'sistema',
	            'posts_per_page' 	=> -1,
	            'orderby' 			=> 'date',
	            'order' 			=> 'ASC'
	            );
	        $loop = new WP_Query( $args );
	        $i = 1;
	        if ( $loop->have_posts() ) {
	            while ( $loop->have_posts() ) : $loop->the_post(); 

				$custom_fields 			= get_post_custom();
				$post_id 				= get_the_ID();

			    $estatus            	= get_post_meta( $post_id, 'sistema_estatus', true );     
			    
			    $cliente            	= get_post_meta( $post_id, 'sistema_cliente', true );     
			    $marca            		= get_post_meta( $post_id, 'sistema_marca', true );     
			    $proyecto           	= get_post_meta( $post_id, 'sistema_proyecto', true );     
			    $tiempoCotizado    		= get_post_meta( $post_id, 'sistema_tiempoCotizado', true );    
			 
			    $fechaRequerida    		= get_post_meta( $post_id, 'sistema_fechaRequerida', true );    
			    $fechaEntrega    		= get_post_meta( $post_id, 'sistema_fechaEntrega', true ); 
    			$prioridad    			= get_post_meta( $post_id, 'sistema_prioridad', true ); 
					
	            	?>

				<?php include (TEMPLATEPATH . '/templates-sistema/card-sistema.php'); ?>	

	            <?php $i ++;  endwhile;
	        } 
	        wp_reset_postdata();
	    ?>					

		</div>
	</section>
<?php get_footer(); ?>
<?php get_header(); ?>
	<?php if (is_user_logged_in()) : ?>
		<header class="container container-large archive-header">
			<div class="bg-image bg-contain bg-qo-logo inline-block" style="background-image: url(<?php echo THEMEPATH; ?>images/identidad/logo.png)"></div>
			<div class="title-archive">Brief´s</div>
			<?php include (TEMPLATEPATH . '/templates-qo/nav-qo.php'); ?>		
		</header>
		<section class="[ container container-large ]">
			<?php include (TEMPLATEPATH . '/templates-sistema/buttons-sistema.php'); ?>	
			<div class="row margin-top">
				<div class="grid">
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
			</div>
		</section>
	<?php else: ?>
		<?php include (TEMPLATEPATH . '/templates-qo/template-404.php'); ?>	
	<?php endif; ?>
<?php get_footer(); ?>
<?php get_header(); ?>
	<?php if (is_user_logged_in()) : ?>
		<header class="container container-large archive-header">
			<a href="<?php echo SITEURL; ?>"><div class="bg-image bg-contain bg-qo-logo inline-block" style="background-image: url(<?php echo THEMEPATH; ?>images/identidad/logo.png)"></div></a>
			<div class="title-archive">Brief´s</div>
			<?php include (TEMPLATEPATH . '/templates-qo/nav-qo.php'); ?>		
		</header>
		<section class="[ container container-large ] margin-bottom-60">
			<?php include (TEMPLATEPATH . '/templates-sistema/buttons-sistema.php'); ?>	
			<div class="row margin-top">
				<div class="grid">
				<?php
			        $args = array(
			            'post_type' 		=> 'sistema',
			            'posts_per_page' 	=> -1,
			            'orderby' 			=> 'date',
			            'order' 			=> 'ASC',
						'tax_query' 		=> array(
							array(
								'taxonomy' 	=> 'estatus-brief',
								'field'	   	=> 'slug',
								'terms'	 	=> 'archivada',
								'operator'	=> 'NOT IN',
							)
						)
			            );
			        $loop = new WP_Query( $args );
			        if ( $loop->have_posts() ) {
			            while ( $loop->have_posts() ) : $loop->the_post(); 

						$custom_fields 			= get_post_custom();
						$post_id 				= get_the_ID();

					    $estatus            	= get_post_meta( $post_id, 'sistema_estatus', true );	    
					    $cliente            	= get_post_meta( $post_id, 'sistema_cliente', true );     
					    $marca            		= get_post_meta( $post_id, 'sistema_marca', true );     
					    $proyecto           	= get_post_meta( $post_id, 'sistema_proyecto', true );     
					    $tiempoCotizado    		= get_post_meta( $post_id, 'sistema_tiempoCotizado', true ); 
					    $fechaEntrega    		= get_post_meta( $post_id, 'sistema_fechaEntrega', true ); 
		    			$prioridad    			= get_post_meta( $post_id, 'sistema_prioridad', true );
		    			$ent_fecha1_ext    		= get_post_meta( $post_id, 'sistema_ent_fecha1_ext', true );
		    			$ent_fecha2_ext    		= get_post_meta( $post_id, 'sistema_ent_fecha2_ext', true );
		    			$ent_fecha3_ext    		= get_post_meta( $post_id, 'sistema_ent_fecha3_ext', true );
		    			$ent_fecha4_ext    		= get_post_meta( $post_id, 'sistema_ent_fecha4_ext', true );

		    				include (TEMPLATEPATH . '/templates-sistema/card-sistema.php'); 

		    			endwhile;
			        } 
			        wp_reset_postdata();
			    ?>				
				</div>
			</div>
		</section>
		<div class="content-fixed-buttons">
			<a href="<?php echo SITEURL; ?>my-calendar" class="btn btn-purple shadow margin-left-right-xxsmall">Ver calendario</a>
		</div>
	<?php else: ?>
		<?php include (TEMPLATEPATH . '/templates-qo/template-404.php'); ?>	
	<?php endif; ?>
<?php get_footer(); ?>
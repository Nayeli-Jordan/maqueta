<?php get_header(); ?>
	<?php if (is_user_logged_in()) : ?>
		<header class="container container-large archive-header">
			<div class="bg-image bg-contain bg-qo-logo inline-block" style="background-image: url(<?php echo THEMEPATH; ?>images/identidad/logo.png)"></div>
			<div class="title-archive">Cotizaciones</div>
			<?php include (TEMPLATEPATH . '/templates-qo/nav-qo.php'); ?>		
		</header>
		<section class="[ container container-large ]">
			<div  id="filters" class="button-group row margin-bottom-large text-center">
				<button class="btn-primaryQO is-checked" data-filter="*">Todas</button>
				<button class="btn-primaryQO" data-filter=".VoBo">VoBo</button>			
				<button class="btn-primaryQO" data-filter=".Facturada">Facturada</button>			
			</div>
			<div class="row">
				<div class="grid">
				<?php
			        $args = array(
			            'post_type' 		=> 'qo_cotizaciones',
			            'posts_per_page' 	=> -1,
			            'orderby' 			=> 'date',
			            'order' 			=> 'ASC'
			            );
			        $loop = new WP_Query( $args );
			        $cotizacionNumber = 1;
			        if ( $loop->have_posts() ) {
			            while ( $loop->have_posts() ) : $loop->the_post(); 

							$custom_fields 	= get_post_custom();
							$post_id 		= get_the_ID();

							$estatus      	= get_post_meta( $post_id, 'qo_cotizaciones_estatus', true );

							include (TEMPLATEPATH . '/templates-cotizacion/qo-card-cotizaciones.php'); 

						$cotizacionNumber ++;  endwhile;
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
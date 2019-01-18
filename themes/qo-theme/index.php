<?php get_header(); ?>
	<audio id="audio-scroll">
		<source src="<?php echo THEMEPATH; ?>sound/scroll.mp3" type="audio/mpeg"></source>
	</audio>
	<audio id="audio-click">
		<source src="<?php echo THEMEPATH; ?>sound/click.mp3" type="audio/mpeg"></source>
	</audio>
	<audio id="audio-slider">
		<source src="<?php echo THEMEPATH; ?>sound/slider.mp3" type="audio/mpeg"></source>
	</audio>
	<div class="relative">
		<div class="bg-image bg-absolute bg-textura" style="background-image: url(<?php echo THEMEPATH; ?>images/fondos/textura.png);"></div>
		<section id="section-initial">			
			<div class="container relative">
				<i class="icon-menu btn-header-open"></i>
				<div id="header-logo-qo" class="bg-logo bg-image bg-contain margin-auto" style="background-image: url(<?php echo THEMEPATH; ?>images/identidad/qo-logo.png);"></div>
				<div class="bg-logo-secondary bg-image bg-contain" style="background-image: url(<?php echo THEMEPATH; ?>images/identidad/logo.png);"></div>
			</div>			
		</section>
		<div class="container">
			<hr class="line-shadow">
		</div>
		<section id="section-nosotros" class="container text-center padding-top-bottom-50">
			<div class="row relative">
				<div class="bg-image bg-contain bg-puntos margin-auto" style="background-image: url(<?php echo THEMEPATH; ?>images/fondos/puntos.png);"></div>
				<?php
			        $args = array(
			            'post_type' 		=> 'nosotros',
			            'posts_per_page' 	=> 1,
			            'orderby' 			=> 'date',
			            'order' 			=> 'ASC'
			            );
			        $loop = new WP_Query( $args );
			        $i = 1;
			        if ( $loop->have_posts() ) {
			            while ( $loop->have_posts() ) : $loop->the_post(); ?>		

							<div class="col s12 l10 offset-l1">
								<div class="box-opacity">
									<?php the_content(); ?>
								</div>
							</div>
			            <?php $i ++;  endwhile;
			        } 
			        wp_reset_postdata();
			    ?>
			</div>
		</section>		
	</div>
	<section id="section-servicios" class="container relative">
		<div class="bg-degrade-fondo"></div>
		<h2>Servicios</h2>
		<div id="slider-servicios" class="cycle-slideshow" data-cycle-fx="flipHorz" data-cycle-timeout="12000" data-cycle-slides="> div" data-cycle-next="#next-service" data-cycle-prev="#prev-service" data-cycle-pager=".services-pager">
			<?php
		        $args = array(
		            'post_type' 		=> 'servicios',
		            'posts_per_page' 	=> -1,
		            'orderby' 			=> 'date',
		            'order' 			=> 'ASC'
		            );
		        $loop = new WP_Query( $args );
		        $i = 1;
		        if ( $loop->have_posts() ) {
		            while ( $loop->have_posts() ) : $loop->the_post(); ?>		

						<div>
							<div class="content-card">
								<div class="content-card-image">
									<div class="bg-image" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);"></div>									
								</div>
								<div class="content-card-body">
									<h3><?php the_title(); ?></h3>
									<div class="hr bg-gradient-qo"></div>					
								</div>					
							</div>
						</div>
		            <?php $i ++;  endwhile;
		        } 
		        wp_reset_postdata();
		    ?>
		</div>
		<div class="services-pager"></div>
	    <div id="prev-service" class="bg-image bg-contain bg-arrow" style="background-image: url(<?php echo THEMEPATH; ?>images/servicios/atras.png);"></div>
	    <div id="next-service" class="bg-image bg-contain bg-arrow" style="background-image: url(<?php echo THEMEPATH; ?>images/servicios/delante.png);"></div>
	</section>
	<div class="relative z-index-100">
		<div class="bg-image bg-absolute bg-colores-qo" style="background-image: url(<?php echo THEMEPATH; ?>images/fondos/colores-qo.png);"></div>
		<section id="section-clientes" class="container relative text-center">
			<h2 class="color-light">Clientes</h2>
			<div class="row margin-bottom-xlarge">
			<?php
		        $args = array(
		            'post_type' 		=> 'clientes',
		            'posts_per_page' 	=> -1,
		            'orderby' 			=> 'rand',
		            //'order' 			=> 'ASC'
		            );
		        $loop = new WP_Query( $args );
		        $i = 1;
		        if ( $loop->have_posts() ) {
		            while ( $loop->have_posts() ) : $loop->the_post(); ?>		

		            	<div class="bg-image bg-contain" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>);"></div>
		            	<?php if ($i === 5 || $i === 10 || $i === 15 || $i === 20 || $i === 25 || $i === 30 || $i === 35 || $i === 40 || $i === 45) : ?>
		            		<div class="clearfix-l-and-up"></div>
		            	<?php endif ?>		

		            <?php $i ++;  endwhile;
		        } 
		        wp_reset_postdata();
		    ?>				
			</div>
		</section>
		<section id="section-trabajos" class="container">
			<h2 class="color-light">Proyectos</h2>
			<div class="row grid-images">
			<?php
		        $args = array(
		            'post_type' 		=> 'proyectos',
		            'posts_per_page' 	=> -1,
		            'orderby' 			=> 'date',
		            'order' 			=> 'ASC'
		            );
		        $loop = new WP_Query( $args );
		        $i = 1;
		        if ( $loop->have_posts() ) {
		            while ( $loop->have_posts() ) : $loop->the_post();
		            	$custom_fields  = get_post_custom();
    					$post_id        = get_the_ID();
					    $item1      	= get_post_meta( $post_id, 'proyectos_item1', true );
					    $item2      	= get_post_meta( $post_id, 'proyectos_item2', true );
					    $item3      	= get_post_meta( $post_id, 'proyectos_item3', true );
					    $item4      	= get_post_meta( $post_id, 'proyectos_item4', true );
					    $item5      	= get_post_meta( $post_id, 'proyectos_item5', true );
					    $item6      	= get_post_meta( $post_id, 'proyectos_item6', true );
					    $item7      	= get_post_meta( $post_id, 'proyectos_item7', true );
					    $item8      	= get_post_meta( $post_id, 'proyectos_item8', true );
					    $item9      	= get_post_meta( $post_id, 'proyectos_item9', true );
					    $item10     	= get_post_meta( $post_id, 'proyectos_item10', true );
					    $itemType1  	= get_post_meta( $post_id, 'proyectos_itemType1', true );
					    $itemType2  	= get_post_meta( $post_id, 'proyectos_itemType2', true );
					    $itemType3  	= get_post_meta( $post_id, 'proyectos_itemType3', true );
					    $itemType4  	= get_post_meta( $post_id, 'proyectos_itemType4', true );
					    $itemType5  	= get_post_meta( $post_id, 'proyectos_itemType5', true );
					    $itemType6  	= get_post_meta( $post_id, 'proyectos_itemType6', true );
					    $itemType7  	= get_post_meta( $post_id, 'proyectos_itemType7', true );
					    $itemType8  	= get_post_meta( $post_id, 'proyectos_itemType8', true );
					    $itemType9  	= get_post_meta( $post_id, 'proyectos_itemType9', true );
					    $itemType10 	= get_post_meta( $post_id, 'proyectos_itemType10', true );
		            	// Get ancho taxonomy
						$terms_proyecto = get_the_term_list( $post->ID, 'dimensiones', '', ', ', '' ) ; 

						?>		
						<div id="project_<?php echo $post_id; ?>" class="col s12 m6 l4 grid-item project-item col_<?php echo $post_id; ?>">
							<div class="morph-button morph-button-modal morph-button-modal-<?php echo $i; ?> morph-button-fixed size_<?php echo strip_tags($terms_proyecto); ?>">
								<button type="button" class="bg-image view-project" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">
									<div><i class="icon-eye content-center"></i></div>
								</button>
								<div class="morph-content">
									<div>
										<div class="projectHeader">
											<span class="icon-close icon-cancel"></span>
											<div><?php the_title(); ?></div>
										</div>									
										<div class="projectContent content-center">
											<div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-timeout="0" data-cycle-slides="> div" data-cycle-next="#next-item_<?php echo $post_id; ?>" data-cycle-prev="#prev-item_<?php echo $post_id; ?>" data-cycle-pager=".<?php echo $post_id; ?>-pager">
												<?php $count = 1; 
												$totalItems = 0; /* Obtener total de slides */
												while ( $count < 11) {
													$item 		= ${'item' . $count}; 
													$itemType 	= ${'itemType' . $count};
													if ($item != '') { ?>
														<div>
															<?php if ($itemType === 'Imagen'): ?>
																<div class="slideImage bg-image bg-contain" style="background-image: url(<?php echo $item; ?>);"></div>
															<?php else: ?>
																<video id="video_project_<?php echo $post_id . '_' . $count; ?>" src="<?php echo $item; ?>" class="slideVideo width-100p" controls></video>
															<?php endif ?>
														</div>
													<?php $totalItems++;
													}
													$count++;
                								}
                								/* Cuando no hay imagenes o videos del proyecto se muestra la imagen destacada con zoom */
                								if ($totalItems < 1) { ?>
                									<div>
                										<div class="bg-image bg-contain" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                									</div>
                								<?php } ?>
											</div>
											<?php if ($totalItems > 1) { ?> 
												<div id="prev-item_<?php echo $post_id; ?>" class="bg-image bg-contain bg-arrow prev-itemProject" style="background-image: url(<?php echo THEMEPATH; ?>images/servicios/atras.png);"></div>
												<div id="next-item_<?php echo $post_id; ?>" class="bg-image bg-contain bg-arrow next-itemProject" style="background-image: url(<?php echo THEMEPATH; ?>images/servicios/delante.png);"></div>												
											<?php } ?>
										</div>
										<?php if ($totalItems > 1) { ?>
											<div class="<?php echo $post_id; ?>-pager projectPager"></div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
		            <?php $i ++;  endwhile;
		        } 
		        wp_reset_postdata();
		    ?>
		   	</div> 
			<div class="row grid-images hide">
			<?php
		        $args = array(
		            'post_type' 		=> 'proyectos',
		            'posts_per_page' 	=> -1,
		            'orderby' 			=> 'date',
		            'order' 			=> 'ASC'
		            );
		        $loop = new WP_Query( $args );
		        $i = 1;
		        if ( $loop->have_posts() ) {
		            while ( $loop->have_posts() ) : $loop->the_post(); 

	            	// Get ancho taxonomy
					$terms_proyecto = get_the_term_list( $post->ID, 'dimensiones', '', ', ', '' ) ; ?>		

					<div class="col s12 sm6 l4 grid-item">
						<div class="bg-image width-<?php echo strip_tags($terms_proyecto); ?> margin-bottom" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);"></div>
					</div>				

		            <?php $i ++;  endwhile;
		        } 
		        wp_reset_postdata();
		    ?>
	   		</div> 
		</section>		

<?php get_footer(); ?>
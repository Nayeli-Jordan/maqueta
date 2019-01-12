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
			            	// Get ancho taxonomy
							$terms_proyecto = get_the_term_list( $post->ID, 'dimensiones', '', ', ', '' ) ; ?>		
							<div class="col s12 sm6 l4 grid-item">
								<div class="morph-button morph-button-modal morph-button-modal-<?php echo $i; ?> morph-button-fixed size_<?php echo strip_tags($terms_proyecto); ?>">
									<button type="button" class="bg-image " style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);"></button>
									<div class="morph-content">
										<div>
											<div class="content-style-form content-style-form-1">
												<span class="icon-close icon-cancel"></span>
												<div><?php the_title(); ?></div>
											</div>
										</div>
									</div>
								</div><!-- morph-button -->
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
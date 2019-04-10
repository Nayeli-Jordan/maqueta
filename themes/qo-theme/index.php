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
				<div id="content-btn-down" class="text-center">
					<div id="nosotros2" class="bg-image bg-contain bg-down item-scroll" style="background-image: url(<?php echo THEMEPATH; ?>images/fondos/down.png);"></div>
				</div>
			</div>			
		</section>		
	</div>
	<section id="section-nosotros">
		<div id="section-nosotros2" class="row relative">
			<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="5000" data-cycle-slides="> div">
				<div class="bg-image" style="background-image: url(<?php echo THEMEPATH; ?>images/nosotros/slide1.jpg);"></div>
				<div class="bg-image" style="background-image: url(<?php echo THEMEPATH; ?>images/nosotros/slide2.png);"></div>
				<div class="bg-image" style="background-image: url(<?php echo THEMEPATH; ?>images/nosotros/slide3.png);"></div>
			</div>
			<p><span class="color-primary">Diseñamos</span> una experiencia única <br class="hide-on-med-and-down">para cada consumidor</p>
		</div>
	</section>
	<section id="section-servicios" class="relative padding-top-80 padding-bottom-50">
		<div class="bg-image bg-absolute bg-textura" style="background-image: url(<?php echo THEMEPATH; ?>images/fondos/textura.png);"></div>
		<div class="container relative">
			<div class="row">
				<div class="col s12 sm6 l3">
					<div class="cycle-slideshow" data-cycle-fx="flipHorz" data-cycle-timeout="4000" data-cycle-slides="> div">
						<div>
							<div class="bg-image" style="background-image: url(<?php echo THEMEPATH; ?>images/servicios/print.jpg);"></div>
							<h4>Print</h4>
						</div>
						<div>
							<div class="bg-image" style="background-image: url(<?php echo THEMEPATH; ?>images/servicios/programacion.jpg);"></div>
							<h4>Programación</h4>
						</div>
					</div>
				</div>
				<div class="col s12 sm6 l3">
					<div class="cycle-slideshow" data-cycle-fx="flipHorz" data-cycle-timeout="4000" data-cycle-slides="> div">
						<div>
							<div class="bg-image" style="background-image: url(<?php echo THEMEPATH; ?>images/servicios/logo.jpg);"></div>
							<h4>Diseño</h4>
						</div>
						<div>
							<div class="bg-image" style="background-image: url(<?php echo THEMEPATH; ?>images/servicios/fotografia.jpg);"></div>
							<h4>Fotografía</h4>
						</div>
					</div>
				</div>
				<div class="col s12 sm6 l3">
					<div class="cycle-slideshow" data-cycle-fx="flipHorz" data-cycle-timeout="4000" data-cycle-slides="> div">
						<div>
							<div class="bg-image" style="background-image: url(<?php echo THEMEPATH; ?>images/servicios/social-media.png);"></div>
							<h4>Social Media</h4>
						</div>
						<div>
							<div class="bg-image" style="background-image: url(<?php echo THEMEPATH; ?>images/servicios/motion-graphic.jpg);"></div>
							<h4>Motion Graphics</h4>
						</div>
					</div>
				</div>
				<div class="col s12 sm6 l3">
					<div class="cycle-slideshow" data-cycle-fx="flipHorz" data-cycle-timeout="4000" data-cycle-slides="> div">
						<div>
							<div class="bg-image" style="background-image: url(<?php echo THEMEPATH; ?>images/servicios/desarrolloweb.png);"></div>
							<h4>Desarrollo web</h4>
						</div>
						<div>
							<div class="bg-image" style="background-image: url(<?php echo THEMEPATH; ?>images/servicios/qo.jpg);"></div>
							<h4>Publicidad</h4>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</section>
	<div class="relative z-index-100">
		<div class="bg-image bg-absolute bg-colores-qo hide-on-med-and-up" style="background-image: url(<?php echo THEMEPATH; ?>images/fondos/colores-qo.png);"></div>
		<div class="bg-image bg-absolute bg-colores-qo hide-on-sm-and-down" style="background-image: url(<?php echo THEMEPATH; ?>images/fondos/colores-qo-clientes.png);"></div>
		<section id="section-clientes" class="container relative text-center padding-bottom-xlarge">
			<p class="color-light uppercase margin-bottom-50">No hay mejor publicidad que un cliente satisfecho</p>
			<div class="row">
			<?php
		        $args = array(
		            'post_type' 		=> 'clientes',
		            'posts_per_page' 	=> -1,
		            'orderby' 			=> 'date',
		            'order' 			=> 'DESC'
		            );
		        $loop = new WP_Query( $args );
		        $i = 1;
		        if ( $loop->have_posts() ) {
		            while ( $loop->have_posts() ) : $loop->the_post(); ?>		

		            	<span><img src="<?php the_post_thumbnail_url('medium'); ?>"></span>
		            	<?php if ($i === 5 || $i === 10 || $i === 15 ) : ?>
		            		<div class="clearfix-l-and-up"></div>
		            	<?php endif ?>		

		            <?php $i ++;  endwhile;
		        } 
		        wp_reset_postdata();
		    ?>				
			</div>
		</section>
	</div>
	<section id="section-trabajos" class="bg-light relative">
		<div class="grid-images">
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

					$tipo           = get_post_meta( $post_id, 'proyectos_tipo', true );
					$ancho          = get_post_meta( $post_id, 'proyectos_ancho', true );
					$visualizacion  = get_post_meta( $post_id, 'proyectos_visualizacion', true );
					/*Imagen*/
					$imagenTipo     = get_post_meta( $post_id, 'proyectos_imagenTipo', true );
					$imagenElementos= get_post_meta( $post_id, 'proyectos_imagenElementos', true );
					/*Video*/
					$videoElementos= get_post_meta( $post_id, 'proyectos_videoElementos', true );
					/*Sitio web*/
					$urlSitioWeb    = get_post_meta( $post_id, 'proyectos_urlSitioWeb', true ); 
					/*Modal*/
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

				    if ($tipo === 'Sitio Web') { ?>
					    <div class="grid-item width-<?php echo $ancho; ?>p">
					    	<img class="responsive-img" src="<?php echo $visualizacion; ?>">
					    	<a href="<?php echo $urlSitioWeb; ?>" target="_blank" class="enlaceSitioWeb"><i class="icon-eye content-center"></i></a>
					    </div>					    
				    <?php } else { 
				    	if ($imagenElementos === 'Si' || $videoElementos === 'Si'): ?>
							<div id="project_<?php echo $post_id; ?>" class="grid-item project-item width-<?php echo $ancho; ?>p">
								<div class="morph-button morph-button-modal morph-button-modal-<?php echo $i; ?> morph-button-fixed">
									<button type="button" class="bg-image view-project <?php if ($imagenTipo === 'Parallax') { echo 'buttonParrallax'; } ?>">
								    	<?php if ($tipo === 'Imagen') { 
								    		if ($imagenTipo === 'Parallax') { ?>
												<div class="parallax" style="background-image: url(<?php echo $visualizacion; ?>);"></div>
								    		<?php } else { ?>
								    			<img src="<?php echo $visualizacion; ?>">
								    		<?php } ?>
								    	<?php } else { /*If is video con modal*/ ?>
								    		<?php if ( wp_is_mobile() && has_post_thumbnail()) { ?>
												<img class="responsive-img" src="<?php the_post_thumbnail_url('large'); ?>">
											<?php } else { ?>
												<video src="<?php echo $visualizacion; ?>" class="videoMuestra width-100p 1" autoplay muted loop></video>
											<?php } ?>
								    	<?php } ?>
										<div><i class="icon-resize-full content-center"></i></div>
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
																	<img class="responsive-img" src="<?php echo $item; ?>">
																<?php else: ?>
																	<video id="video_project_<?php echo $post_id . '_' . $count; ?>" src="<?php echo $item; ?>" class="slideVideo width-100p" controls></video>
																<?php endif ?>
															</div>
														<?php $totalItems++;
														} $count++;
	                								} ?>
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
				    	<?php else: 
				    		if ($tipo === 'Imagen') {
				    			if ($imagenTipo === 'Parallax') { ?>
				    				<div class="grid-item width-<?php echo $ancho; ?>p">
										<div class="parallax" style="background-image: url(<?php echo $visualizacion; ?>);"></div>
									</div>
					    		<?php } else { ?>
					    			<div class="grid-item width-<?php echo $ancho; ?>p">
								    	<img class="responsive-img" src="<?php echo $visualizacion; ?>">
								    </div>
					    		<?php } ?>
				    		<?php } else { /*If is video*/ ?>
								<div class="grid-item width-<?php echo $ancho; ?>p">
									<?php if ( wp_is_mobile() && has_post_thumbnail()) { ?>
										<img class="responsive-img" src="<?php the_post_thumbnail_url('large'); ?>">
									<?php } else { ?>
										<video src="<?php echo $visualizacion; ?>" class="videoMuestra width-100p 1" autoplay muted loop></video>
									<?php } ?>
							    </div>
				    		<?php } 
				    	endif; /*Si hay o no elementos en modal*/ 
				    } /*Si es o no sitio web*/ ?>		


	            <?php $i ++;  endwhile;
	        } 
	        wp_reset_postdata();
	    ?>
		</div>
	</section>		

<?php get_footer(); ?>
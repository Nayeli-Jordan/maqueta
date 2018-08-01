<?php get_header(); ?>
	<section class="[ container container-large ]">
		<div class="table-clients">
			<div class="content-clients">
				<div id="head-table-clients" class="row hide-on-sm-and-down">
        			<div class="col col-number color-purple ">
        				<p>No.</p>
        			</div>
        			<div class="col col-title color-purple">
        				<p>Cliente</p>
        			</div>
        			<div class="col col-razon_social">
        				<p>Razón Social</p>
        			</div>
        			<div class="col col-rfc">
        				<p>RFC</p>
        			</div>
        			<div class="col col-direction">
        				<p>Dirección</p>
        			</div>
        			<div class="col col-proyectos">
        				<p>Proyectos</p>
        			</div>
        			<div class="col col-actividad">
        				<p>Actividad</p>
        			</div>
        			<div class="col col-contactComercial">
        				<p>Contacto Comercial</p>
        			</div>
        			<div class="col col-telefono">
        				<p>Teléfono</p>
        			</div>
        			<div class="col col-email">
        				<p>Email</p>
        			</div>
        			<div class="col col-cumpleanos">
        				<p>Cumpleaños</p>
        			</div>    
        		</div>  
			<?php
		        $args = array(
		            'post_type' 		=> 'qo_clientes',
		            'posts_per_page' 	=> -1,
		            'orderby' 			=> 'title',
		            'order' 			=> 'ASC'
		            );
		        $loop = new WP_Query( $args );
		        $i = 1;
		        if ( $loop->have_posts() ) {
		            while ( $loop->have_posts() ) : $loop->the_post(); 

						$custom_fields 	= get_post_custom();
						$post_id 		= get_the_ID();

						$razon_social    	= get_post_meta( $post_id, 'qo_clientes_razon_social', true );    
						$rfc          		= get_post_meta( $post_id, 'qo_clientes_rfc', true );    
						$direction       	= get_post_meta( $post_id, 'qo_clientes_direction', true );    
						$proyectos       	= get_post_meta( $post_id, 'qo_clientes_proyectos', true );    
						$actividad       	= get_post_meta( $post_id, 'qo_clientes_actividad', true ); 
						$contactComercial 	= get_post_meta( $post_id, 'qo_clientes_contactComercial', true ); 
						$telefono  			= get_post_meta( $post_id, 'qo_clientes_telefono', true ); 
						$email   			= get_post_meta( $post_id, 'qo_clientes_email', true ); 
						$cumpleanos  		= get_post_meta( $post_id, 'qo_clientes_cumpleanos', true ); 
		            	?>		

		        		<div class="row">
		        			<div class="col col-number color-purple ">
		        				<strong><?php echo $i; ?></strong>
		        			</div>
		        			<div class="col col-title color-purple">
		        				<?php the_title(); ?>
		        			</div>
		        			<div class="col col-razon_social">
		        				<p class="hide-on-med-and-up inline-block">Razón Social: </p>
		        				<?php if( $razon_social != "" ) : ?><?php echo $razon_social; ?><?php endif; ?>
		        			</div>
		        			<div class="col col-rfc">
		        				<p class="hide-on-med-and-up inline-block">RFC: </p>
		        				<?php if( $rfc != "" ) : ?><?php echo $rfc; ?><?php endif; ?>
		        			</div>
		        			<div class="col col-direction">
		        				<p class="hide-on-med-and-up inline-block">Dirección: </p>
		        				<?php if( $direction != "" ) : ?><?php echo $direction; ?><?php endif; ?>
		        			</div>
		        			<div class="col col-proyectos">
		        				<p class="hide-on-med-and-up inline-block">Proyectos: </p>
		        				<?php if( $proyectos != "" ) : ?><?php echo $proyectos; ?><?php endif; ?>
		        			</div>
		        			<div class="col col-actividad">
		        				<p class="hide-on-med-and-up inline-block">Actividad: </p>
		        				<?php if( $actividad != "" ) : ?><?php echo $actividad; ?><?php endif; ?>
		        			</div>
		        			<div class="col col-contactComercial">
		        				<p class="hide-on-med-and-up inline-block">Contacto Comercial: </p>
		        				<?php if( $contactComercial != "" ) : ?><?php echo $contactComercial; ?><?php endif; ?>
		        			</div>
		        			<div class="col col-telefono">
		        				<p class="hide-on-med-and-up inline-block">Teléfono: </p>
		        				<?php if( $telefono != "" ) : ?><?php echo $telefono; ?><?php endif; ?>
		        			</div>
		        			<div class="col col-email">
		        				<p class="hide-on-med-and-up inline-block">Email: </p>
		        				<?php if( $email != "" ) : ?><?php echo $email; ?><?php endif; ?>
		        			</div>
		        			<div class="col col-cumpleanos">
		        				<p class="hide-on-med-and-up inline-block">Cumpleaños: </p>
		        				<?php if( $cumpleanos != "" ) : ?><?php echo $cumpleanos; ?><?php endif; ?>
		        			</div>    
		        		</div>  	        		

		            <?php $i ++;  endwhile;
		        } 
		        wp_reset_postdata();
		    ?>

			</div> <!-- end clients -->
		</div>		  
	</section>
<?php get_footer(); ?>
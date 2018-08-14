<?php get_header(); ?>
	<header class="container container-large archive-header">
		<div class="bg-image bg-contain bg-qo-logo inline-block" style="background-image: url(<?php echo THEMEPATH; ?>images/identidad/logo.png)"></div>
		<div class="title-archive"><?php the_title(); ?></div>
		<?php include (TEMPLATEPATH . '/templates-qo/nav-qo.php'); ?>		
	</header>
	<section class="[ container container-large ]">
		<div class="table-proveedores shadow">
			<div class="content-proveedores">
				<div id="head-table-proveedores" class="row hide-on-sm-and-down">
        			<div class="col col-number color-purple ">
        				<p>No.</p>
        			</div>
        			<div class="col col-razon_social color-purple">
        				<p>Razón Social</p>
        			</div>
        			<div class="col col-ruc">
        				<p>RUC</p>
        			</div>
        			<div class="col col-direction">
        				<p>Dirección</p>
        			</div>
        			<div class="col col-prod_serv">
        				<p>Producto/Servicio</p>
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
        			<div class="col col-fecha_ingreso">
        				<p>Fecha de ingreso</p>
        			</div>    
        		</div>  
			<?php
		        $args = array(
		            'post_type' 		=> 'qo_proveedores',
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

						$razon_social    	= get_post_meta( $post_id, 'qo_proveedores_razon_social', true );    
						$ruc          		= get_post_meta( $post_id, 'qo_proveedores_ruc', true );    
						$direction       	= get_post_meta( $post_id, 'qo_proveedores_direction', true );    
						$prod_serv  = get_post_meta( $post_id, 'qo_proveedores_prod_serv', true );    
						$actividad       	= get_post_meta( $post_id, 'qo_proveedores_actividad', true ); 
						$contactComercial 	= get_post_meta( $post_id, 'qo_proveedores_contactComercial', true ); 
						$telefono  			= get_post_meta( $post_id, 'qo_proveedores_telefono', true ); 
						$email   			= get_post_meta( $post_id, 'qo_proveedores_email', true ); 
						$fecha_ingreso  	= get_post_meta( $post_id, 'qo_proveedores_fecha_ingreso', true ); 
		            	?>		

		        		<div class="row">
		        			<div class="col col-number color-purple ">
		        				<strong><?php echo $i; ?></strong>
		        			</div>
		        			<div class="col col-razon_social color-purple">
		        				<p class="hide-on-med-and-up inline-block">Razón Social: </p>
		        				<?php if( $razon_social != "" ) : ?><?php echo $razon_social; ?><?php endif; ?>
		        			</div>
		        			<div class="col col-ruc">
		        				<p class="hide-on-med-and-up inline-block">RUC: </p>
		        				<?php if( $ruc != "" ) : ?><?php echo $ruc; ?><?php endif; ?>
		        			</div>
		        			<div class="col col-direction">
		        				<p class="hide-on-med-and-up inline-block">Dirección: </p>
		        				<?php if( $direction != "" ) : ?><?php echo $direction; ?><?php endif; ?>
		        			</div>
		        			<div class="col col-prod_serv">
		        				<p class="hide-on-med-and-up inline-block">Producto/Servicio: </p>
		        				<?php if( $prod_serv != "" ) : ?><?php echo $prod_serv; ?><?php endif; ?>
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
		        			<div class="col col-fecha_ingreso">
		        				<p class="hide-on-med-and-up inline-block">Fecha de ingreso: </p>
		        				<?php if( $fecha_ingreso != "" ) : ?><?php echo $fecha_ingreso; ?><?php endif; ?>
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
<?php 
/*
	* Template Name: Estilo con Descripción
	* Template Post Type: qo_cotizaciones
*/
	get_header(); 
	global $post;
	
	while ( have_posts() ) : the_post();

	$custom_fields 	= get_post_custom();
	$post_id 		= get_the_ID();

	$modelo       = get_post_meta( $post_id, 'qo_cotizaciones_modelo', true );
	$nota         = get_post_meta( $post_id, 'qo_cotizaciones_nota', true );   
	$piezas       = get_post_meta( $post_id, 'qo_cotizaciones_piezas', true );    
	$precio       = get_post_meta( $post_id, 'qo_cotizaciones_precio', true );
	$muestra       = get_post_meta( $post_id, 'qo_cotizaciones_muestra', true );		
	$iva_inc      = get_post_meta( $post_id, 'qo_cotizaciones_iva_inc', true );
?>
	<div class="content-cotizacion relative"  style="page-break-after: always;">
		<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-header.php'); ?>
		<div class="container container-large">
			<p class="date"><?php echo get_the_date(); ?></p>
			<img class="img-client" src="<?php the_post_thumbnail_url('medium'); ?>">
			<div class="row margin-bottom-xsmall">
				<div class="col col-1_5">
					<div class="item-cotizacion"><p>Modelo</p></div>
					<div class="opt-cotizacion">
						<div class="modelo"><?php if( $modelo != "" ) : ?><?php echo $modelo; ?><?php endif; ?></div>
					</div>
				</div>
				<div class="col col-1_5">
					<div class="item-cotizacion"><p>Nota</p></div>
					<div class="opt-cotizacion">
						<div class="nota"><?php if( $nota != "" ) : ?><?php echo $nota; ?><?php endif; ?></div>
					</div>
				</div>
				<div class="col col-1_5">
					<div class="item-cotizacion"><p>Piezas</p></div>
					<div class="opt-cotizacion">
						<div><?php if( $piezas != "" ) : ?><?php echo $piezas; ?><?php endif; ?></div>
					</div>
				</div>
				<div class="col col-1_5">
					<div class="item-cotizacion"><p>Precio</p></div>
					<div class="opt-cotizacion">
						<div><?php if( $precio != "" ) : ?>$<?php echo $precio; ?><?php endif; ?></div>
					</div>
				</div>
				<div class="col col-1_5">
					<div class="item-cotizacion"><p>Total</p></div>
					<div class="opt-cotizacion">
						<div>
							<?php if( $piezas != "" && $precio != "") : 
								$total_bruto 	= $piezas * $precio;
								$iva 			= $total_bruto * .16;
								$total_neto 	= $total_bruto + $iva;
								?>
								<?php if( $iva_inc == "Sí" ) : ?>
									$<?php echo $total_neto; ?>
								<?php else: ?>
									$<?php echo $total_bruto; ?>
								<?php endif; ?>						
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<div class="item-cotizacion"><p>Detalles</p></div>
					<div class="opt-cotizacion description">					
						<div><?php the_content(); ?></div>
					</div>
				</div>
			</div>
			<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-footer.php'); ?>
		</div>	
	</div> <!-- end content-cotizacion -->

	<?php if( $muestra != "" ) : ?>
		<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-muestra.php'); ?>
	<?php endif; ?>

<?php 
	endwhile; // end of the loop
	get_footer(); 
?>	
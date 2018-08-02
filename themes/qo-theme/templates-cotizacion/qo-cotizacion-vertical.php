<?php 
/*
	* Template Name: Estilo Vertical c/imagen
	* Template Post Type: qo_cotizaciones
*/
	get_header(); 
	global $post;
	
	while ( have_posts() ) : the_post();

	$custom_fields 	= get_post_custom();
	$post_id 		= get_the_ID();

	$modelo       = get_post_meta( $post_id, 'qo_cotizaciones_modelo', true );
	$modelo2       = get_post_meta( $post_id, 'qo_cotizaciones_modelo2', true );
	$modelo3       = get_post_meta( $post_id, 'qo_cotizaciones_modelo3', true );
	$modelo4       = get_post_meta( $post_id, 'qo_cotizaciones_modelo4', true );
	$nota         = get_post_meta( $post_id, 'qo_cotizaciones_nota', true );    
	$nota2         = get_post_meta( $post_id, 'qo_cotizaciones_nota2', true );    
	$nota3         = get_post_meta( $post_id, 'qo_cotizaciones_nota3', true );    
	$nota4         = get_post_meta( $post_id, 'qo_cotizaciones_nota4', true );    
	$piezas       = get_post_meta( $post_id, 'qo_cotizaciones_piezas', true );    
	$piezas2       = get_post_meta( $post_id, 'qo_cotizaciones_piezas2', true );    
	$piezas3       = get_post_meta( $post_id, 'qo_cotizaciones_piezas3', true );    
	$piezas4       = get_post_meta( $post_id, 'qo_cotizaciones_piezas4', true );    
	$precio       = get_post_meta( $post_id, 'qo_cotizaciones_precio', true );
	$precio2       = get_post_meta( $post_id, 'qo_cotizaciones_precio2', true );
	$precio3       = get_post_meta( $post_id, 'qo_cotizaciones_precio3', true );
	$precio4       = get_post_meta( $post_id, 'qo_cotizaciones_precio4', true );
	$muestra       = get_post_meta( $post_id, 'qo_cotizaciones_muestra', true );
	$iva_inc      = get_post_meta( $post_id, 'qo_cotizaciones_iva_inc', true );
?>
	<div class="content-cotizacion relative"  style="page-break-after: always;">
		<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-header.php'); ?>
		<div class="container container-large">
			<p class="date margin-bottom-xlarge"><?php echo get_the_date(); ?></p>
			<div class="row margin-bottom-xlarge">
				<div class="col s7">
					<div class="col s4">
						<div class="opt-cotizacion"><div>Modelo</div></div>
						<div class="opt-cotizacion"><div>Nota</div></div>
						<div class="opt-cotizacion"><div>Piezas</div></div>
						<div class="opt-cotizacion"><div>Precio</div></div>
						<div class="opt-cotizacion"><div>Total</div></div>
					</div>
					<div class="col s4">
						<div class="opt-cotizacion"><div class="modelo"><?php if( $modelo != "" ) : ?><?php echo $modelo; ?><?php endif; ?></div></div>
						<div class="opt-cotizacion"><div class="nota"><?php if( $nota != "" ) : ?><?php echo $nota; ?><?php endif; ?></div></div>
						<div class="opt-cotizacion"><div><?php if( $piezas != "" ) : ?><?php echo $piezas; ?><?php endif; ?></div></div>
						<div class="opt-cotizacion"><div><?php if( $precio != "" ) : ?><?php echo $precio; ?><?php endif; ?></div></div>
						<div class="opt-cotizacion"><div>
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
						</div></div>
					</div>
					<div class="col s4">
						<div class="opt-cotizacion"><div class="modelo"><?php if( $modelo2 != "" ) : ?><?php echo $modelo2; ?><?php endif; ?></div></div>
						<div class="opt-cotizacion"><div class="nota"><?php if( $nota2 != "" ) : ?><?php echo $nota2; ?><?php endif; ?></div></div>
						<div class="opt-cotizacion"><div><?php if( $piezas2 != "" ) : ?><?php echo $piezas2; ?><?php endif; ?></div></div>
						<div class="opt-cotizacion"><div><?php if( $precio2 != "" ) : ?><?php echo $precio2; ?><?php endif; ?></div></div>
						<div class="opt-cotizacion"><div>
							<?php if( $piezas2 != "" && $precio2 != "") : 
								$total_bruto 	= $piezas2 * $precio2;
								$iva 			= $total_bruto * .16;
								$total_neto 	= $total_bruto + $iva;
								?>
								<?php if( $iva_inc == "Sí" ) : ?>
									$<?php echo $total_neto; ?>
								<?php else: ?>
									$<?php echo $total_bruto; ?>
								<?php endif; ?>						
							<?php endif; ?>
						</div></div>
					</div>
				</div>
				<div class="col s5 text-center">
					<img class="img-client mabot" src="<?php the_post_thumbnail_url('medium'); ?>">
					<?php if( $muestra != "" ) : ?>
						<img class="responsive-img inline-block margin-top-large" src="<?php echo $muestra; ?>">
					<?php endif; ?>
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
<div class="content-cotizacion relative contentVertical"  style="page-break-after: always;">
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
					<div class="opt-cotizacion"><div class="modelo"><?php if( $modeloA != "" ) : ?><?php echo $modeloA; ?><?php endif; ?></div></div>
					<div class="opt-cotizacion"><div class="nota"><?php if( $notaA != "" ) : ?><?php echo $notaA; ?><?php endif; ?></div></div>
					<div class="opt-cotizacion"><div><?php if( $piezasA != "" ) : ?><?php echo $piezasA; ?><?php endif; ?></div></div>
					<div class="opt-cotizacion"><div><?php if( $precioA != "" ) : ?><?php echo $precioA; ?><?php endif; ?></div></div>
					<div class="opt-cotizacion"><div>
						<?php if( $piezasA != "" && $precioA != "") : 
							$total_bruto 	= $piezasA * $precioA;
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
					<div class="opt-cotizacion"><div class="modelo"><?php if( $modeloB != "" ) : ?><?php echo $modeloB; ?><?php endif; ?></div></div>
					<div class="opt-cotizacion"><div class="nota"><?php if( $notaB != "" ) : ?><?php echo $notaB; ?><?php endif; ?></div></div>
					<div class="opt-cotizacion"><div><?php if( $piezasB != "" ) : ?><?php echo $piezasB; ?><?php endif; ?></div></div>
					<div class="opt-cotizacion"><div><?php if( $precioB != "" ) : ?><?php echo $precioB; ?><?php endif; ?></div></div>
					<div class="opt-cotizacion"><div>
						<?php if( $piezasB != "" && $precioB != "") : 
							$total_bruto 	= $piezasB * $precioB;
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
				<img class="img-client" src="<?php the_post_thumbnail_url('medium'); ?>">
				<div class="content-img-Vertical">
					<div class="content-center">
						<?php if( $muestraA != "") : ?>
							<div>
								<?php $image_thumb = wp_get_attachment_image_src(qo_get_image_id($muestraA), 'large'); ?>
								<img class="responsive-img inline-block" src="<?php echo $image_thumb[0]; ?>">
								<p><?php echo get_post(qo_get_image_id($muestraA))->post_content; ?></p>		
							</div>				
						<?php endif; ?>
						<?php if( $muestraB != "") : ?>
							<div>
								<?php $image_thumb = wp_get_attachment_image_src(qo_get_image_id($muestraB), 'large'); ?>
								<img class="responsive-img inline-block" src="<?php echo $image_thumb[0]; ?>">
								<p><?php echo get_post(qo_get_image_id($muestraB))->post_content; ?></p>
							</div>
						<?php endif; ?>
						<?php if( $muestraC != "") : ?>
							<div>
								<?php $image_thumb = wp_get_attachment_image_src(qo_get_image_id($muestraC), 'large'); ?>
								<img class="responsive-img inline-block" src="<?php echo $image_thumb[0]; ?>">
								<p><?php echo get_post(qo_get_image_id($muestraC))->post_content; ?></p>
							</div>
						<?php endif; ?>
						<?php if( $muestraD != "") : ?>
							<div>
								<?php $image_thumb = wp_get_attachment_image_src(qo_get_image_id($muestraD), 'large'); ?>
								<img class="responsive-img inline-block" src="<?php echo $image_thumb[0]; ?>">
								<p><?php echo get_post(qo_get_image_id($muestraD))->post_content; ?></p>
							</div>
						<?php endif; ?>						
					</div>					
				</div>
			</div>
		</div>
		<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-footer.php'); ?>
	</div>	
</div> <!-- end content-cotizacion -->
<header class="container container-large header-cotizacion">
	<img class="img-qo-logo" src="<?php echo THEMEPATH; ?>images/identidad/qo-logo.png">
	<div class="info-general">
		<div class="num-tiket bg-gradient-qo">
			<div class="bg-light">
				<p><?php echo date("y") . date("m")?><?php  if( !has_term( 'template', 'estatus-cotizacion' ) ) : echo post_number_qo_cotizaciones(get_the_ID()); else: echo "QO"; endif; ?></p>
			</div>						
		</div>
		<div class="title-tiket bg-gradient-qo">
			<p>Proyecto: <?php the_title(); ?></p>
		</div>
	</div>	
	<div class="status shadow-small">									
		<?php if( $estatus === "Facturada" ) : ?>
			<span class="icon-money"></span><span class="etiqueta-text">Facturada</span>
		<?php else : ?>
			<span class="icon-clock"></span><span class="etiqueta-text">VoBo</span>	
		<?php endif; ?>
	</div>
</header>
<img class="responsive-img" src="<?php echo THEMEPATH; ?>images/cotizacion/shadow.png">
<div class="col s12 m6 l4">
	<div class="shadow relative card-sistema">
		<div class="card-head">
			<div class="status shadow-small bg-<?php echo $estatus; ?>"><span class="icon-lock-open"></span><span class="etiqueta-text"><?php echo $estatus; ?></span></div>
			<h2><?php the_title(); ?></h2>												
		</div>
		<div class="bg-gradient-qo hr hr-3"></div>
		<div class="card-body">
			
			<span class="etiqueta-prioridad bg-<?php echo $prioridad; ?> shadow-small"><span class="etiqueta-text"><?php echo $prioridad; ?></span></span>
			<?php echo get_the_term_list( $post->ID, 'requerimiento', '<p><span class="icon-tag icon-size-small"></span><span class="font-strong">', ', </span><span>', '</span></p>' );
			 ?>									
			<?php echo get_the_term_list( $post->ID, 'responsable', '<p><span class="icon-user icon-size-small"></span><span>', ', </span><span>', '</span></p>' );
			 ?>
			<div class="hr bg-gradient-qo margin-top-xsmall margin-bottom-xsmall"></div>
			<p><span class="uppercase color-purple font-strong">Cliente:</span> <?php echo $cliente; ?></p>
			<p><span class="uppercase color-purple font-strong">Marca:</span> <?php echo $marca ?></p>
			<p><span class="uppercase color-purple font-strong">Proyecto:</span> <?php echo $proyecto; ?></p>
			<p class="margin-top-xsmall"><span class="icon-calendar-inv"></span>Requerida: <?php echo $fechaRequerida; ?></p>
			<p><span class="icon-calendar-inv"></span>Entrega: <?php echo $fechaEntrega; ?></p>

			<a href="<?php echo the_permalink(); ?>"><div class="shadow btn-primary-rounded"><span class="icon-eye"></span><span class="etiqueta-text"><?php echo $estatus; ?></span></div></a>
		</div>							
	</div>
</div>	
<div class="col s12 m6 l4 xl3 element-item <?php echo $estatus; ?>">
	<div class="shadow relative card-cotizacion">
		<div class="info-general">
			<div class="num-tiket bg-gradient-qo">
				<div class="bg-light">
					<p><?php echo date("y") . date("m"); ?><?php echo get_the_ID(); ?></p>
				</div>						
			</div>
			<div class="status shadow-small">									
				<?php if( $estatus === "Facturada" ) : ?>
					<span class="icon-ok"></span><span class="etiqueta-text">Facturada</span>
				<?php else : ?>
					<span class="icon-clock-circled"></span><span class="etiqueta-text">VoBo</span>	
				<?php endif; ?>
			</div>
			<a class="btn-show-cotizacion" href="<?php echo the_permalink(); ?>"><div class="shadow btn-primary-rounded"><span class="icon-eye"></span><span class="etiqueta-text"><?php echo $estatus; ?></span></div></a>
			<div class="title-tiket bg-gradient-qo">
				<a href="<?php the_permalink(); ?>" class="color-light">
					<p>Proyecto: <?php the_title(); ?></p>
				</a>
			</div>
		</div>
		<p class="date margin-bottom-small"><?php echo get_the_date(); ?></p>
		<img class="img-client margin-auto block" src="<?php the_post_thumbnail_url('medium'); ?>">
	</div>
</div>
<div class="row buttons-sistema buttons-responsables">
	<?php 
	$terms = get_terms( 'responsable' );
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		echo '<ul>';
			foreach ( $terms as $term ) {
				echo '<li><a href="' . SITEURL . 'responsable/' . $term->slug . '">' . $term->name . '</a></li>';
			}
		echo '</ul>';
	}
	?>
</div>
<div class="row buttons-sistema buttons-requerimiento">
	<?php 
	$terms = get_terms( 'requerimiento' );
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		echo '<ul>';
			foreach ( $terms as $term ) {
				echo '<li><a href="' . SITEURL . 'requerimiento/' . $term->slug . '">' . $term->name . '</a></li>';
			}
		echo '</ul>';
	}
	?>
</div>
<div class="row buttons-sistema buttons-estatus">
	<ul>
		<li>Abierto</li>
		<li>Enterado</li>
		<li>Trabajando</li>
		<li>Hecho</li>
		<li>Cerrado</li>
		<li>Reabierto</li>
	</ul>
</div>
<div class="row buttons-sistema buttons-prioridad">
	<ul>
		<li class="btn-baja">Prioridad Baja</li>
		<li class="btn-media">Prioridad Media</li>
		<li class="btn-alta">Prioridad Alta</li>
		<li class="btn-urgente">Prioridad Urgente</li>
	</ul>
</div>	
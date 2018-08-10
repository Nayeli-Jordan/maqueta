<div  id="filters" class="button-group row margin-bottom-large text-center">
	<button class="btn-primaryQO is-checked" data-filter="*">Todas</button>
	<?php 
	$terms = get_terms( 'responsable' );
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		foreach ( $terms as $term ) {
			echo '<button class="btn-primaryQO" data-filter=".' . $term->slug . '">' . $term->name . '</button>';
		}
	}
	echo '<br>';
	$terms = get_terms( 'requerimiento' );
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		foreach ( $terms as $term ) {
			echo '<button class="btn-primaryQO btn-area" data-filter=".' . $term->slug . '">' . $term->name . '</button>';
		}
	}
	?>
	<br>
	<button class="btn-primaryQO btn-estatus" data-filter=".Abierto">Abierto</button>	
	<button class="btn-primaryQO btn-estatus" data-filter=".Enterado">Enterado</button>	
	<button class="btn-primaryQO btn-estatus" data-filter=".Trabajando">Trabajando</button>	
	<button class="btn-primaryQO btn-estatus" data-filter=".Hecho">Hecho</button>	
	<button class="btn-primaryQO btn-estatus" data-filter=".Cerrado">Cerrado</button>	
	<button class="btn-primaryQO btn-estatus" data-filter=".Reabierto">Reabierto</button>
	<br>	
	<button class="btn-primaryQO btn-prioridad" data-filter=".Baja">Baja</button>	
	<button class="btn-primaryQO btn-prioridad" data-filter=".Media">Media</button>	
	<button class="btn-primaryQO btn-prioridad" data-filter=".Alta">Alta</button>	
	<button class="btn-primaryQO btn-prioridad" data-filter=".Urgente">Urgente</button>	
</div>
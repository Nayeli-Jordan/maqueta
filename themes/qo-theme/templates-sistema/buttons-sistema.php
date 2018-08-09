<div  id="filters" class="button-group row margin-bottom-large text-center">
	<button class="btn-primaryQO is-checked" data-filter="*">Todas</button>
	<button class="btn-primaryQO" data-filter=".VoBo">VoBo</button>			
	<?php 
	$terms = get_terms( 'responsable' );
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		foreach ( $terms as $term ) {
			//echo '<li><a href="' . SITEURL . 'responsable/' . $term->slug . '">' . $term->name . '</a></li>';
			echo '<button class="btn-primaryQO" data-filter=".' . $term->slug . '">' . $term->name . '</button>';
		}
	}
	echo '<br>';
	$terms = get_terms( 'requerimiento' );
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		foreach ( $terms as $term ) {
			echo '<button class="btn-primaryQO" data-filter=".' . $term->slug . '">' . $term->name . '</button>';
		}
	}
	?>
	<br>
	<button class="btn-primaryQO" data-filter=".Abierto">Abierto</button>	
	<button class="btn-primaryQO" data-filter=".Enterado">Enterado</button>	
	<button class="btn-primaryQO" data-filter=".Trabajando">Trabajando</button>	
	<button class="btn-primaryQO" data-filter=".Hecho">Hecho</button>	
	<button class="btn-primaryQO" data-filter=".Cerrado">Cerrado</button>	
	<button class="btn-primaryQO" data-filter=".Reabierto">Reabierto</button>
	<br>	
	<button class="btn-primaryQO" data-filter=".Baja">Baja</button>	
	<button class="btn-primaryQO" data-filter=".Media">Media</button>	
	<button class="btn-primaryQO" data-filter=".Alta">Alta</button>	
	<button class="btn-primaryQO" data-filter=".Urgente">Urgente</button>	
</div>
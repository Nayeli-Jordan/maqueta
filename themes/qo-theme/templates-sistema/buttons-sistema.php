<div class="filter option-set button-group row margin-bottom-xsmall text-center btns-group-responsable" data-filter-group="responsable">
	<?php 
	$terms = get_terms( array( 
	    'taxonomy' => 'responsable',
	    'hide_empty' => false,
	) );
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		foreach ( $terms as $term ) {
			echo '<button data-filter-value=".' . $term->slug . '">' . $term->name . '</button>';
		}
	}
	?>	
	<button data-filter-value="" class="selected">x</button>
</div>
<div class="filter option-set button-group row margin-bottom-xsmall text-center btns-group-area" data-filter-group="area">
	<?php 
	$terms = get_terms( array( 
	    'taxonomy' => 'requerimiento',
	    'hide_empty' => false,
	) );
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		foreach ( $terms as $term ) {
			echo '<button data-filter-value=".' . $term->slug . '">' . $term->name . '</button>';
		}
	}
	?>
	<button data-filter-value="" class="selected">x</button>
</div>
<div id="show-more-btn-sistema" class="btn-primary-rounded margin-auto">+</div>
<div id="extra-buttons-sistema" class="hide">		
	<div class="filter option-set button-group row margin-bottom-xsmall text-center btns-group-estatus" data-filter-group="estatus">
		<button data-filter-value=".Abierto">Abierto</button>
		<button data-filter-value=".Enterado">Enterado</button>
		<button data-filter-value=".Trabajando">Trabajando</button>
		<button data-filter-value=".Hecho">Hecho</button>
		<button data-filter-value=".Cerrado">Cerrado</button>
		<button data-filter-value=".Reabierto">Reabierto</button>
		<button data-filter-value="" class="selected">x</button>
	</div>
	<div class="filter option-set button-group row margin-bottom-large text-center btns-group-prioridad" data-filter-group="prioridad">
		<button data-filter-value=".Baja">Baja</button>
		<button data-filter-value=".Media">Media</button>
		<button data-filter-value=".Alta">Alta</button>
		<button data-filter-value=".Urgente">Urgente</button>
		<button data-filter-value="" class="selected">x</button>	
	</div>
</div>

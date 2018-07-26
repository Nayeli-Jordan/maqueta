<?php


// TAXONOMIES ////////////////////////////////////////////////////////////////////////
add_action( 'init', 'custom_taxonomies_callback', 0 );
function custom_taxonomies_callback(){

	
	if( ! taxonomy_exists('subservicios')){

		$labels = array(
			'name'              => 'Subservicios',
			'singular_name'     => 'Subservicios',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Subservicios',
			'update_item'       => 'Actualizar Subservicios',
			'add_new_item'      => 'Nueva Subservicios',
			'menu_name'         => 'Subservicios'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'subservicios' ),
		);

		register_taxonomy( 'subservicios', 'servicios', $args );
	}	

}
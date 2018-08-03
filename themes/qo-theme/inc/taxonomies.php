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

	/*
		**SISTEMA**
	*/

	if( ! taxonomy_exists('solicitante')){

		$labels = array(
			'name'              => 'Solicitante',
			'singular_name'     => 'Solicitante',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Solicitante',
			'update_item'       => 'Actualizar Solicitante',
			'add_new_item'      => 'Nueva Solicitante',
			'menu_name'         => 'Solicitante'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'solicitante' ),
		);

		register_taxonomy( 'solicitante', 'sistema', $args );
	}

	if( ! taxonomy_exists('requerimiento')){

		$labels = array(
			'name'              => 'Requerimiento',
			'singular_name'     => 'Requerimiento',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Requerimiento',
			'update_item'       => 'Actualizar Requerimiento',
			'add_new_item'      => 'Nueva Requerimiento',
			'menu_name'         => 'Requerimiento'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'requerimiento' ),
		);

		register_taxonomy( 'requerimiento', 'sistema', $args );
	}

	if( ! taxonomy_exists('responsable')){

		$labels = array(
			'name'              => 'Responsable',
			'singular_name'     => 'Responsable',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Responsable',
			'update_item'       => 'Actualizar Responsable',
			'add_new_item'      => 'Nueva Responsable',
			'menu_name'         => 'Responsable'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'responsable' ),
		);

		register_taxonomy( 'responsable', 'sistema', $args );
	}	


	if( ! taxonomy_exists('prioridad')){

		$labels = array(
			'name'              => 'Prioridad',
			'singular_name'     => 'Prioridad',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Prioridad',
			'update_item'       => 'Actualizar Prioridad',
			'add_new_item'      => 'Nueva Prioridad',
			'menu_name'         => 'Prioridad'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'prioridad' ),
		);

		register_taxonomy( 'prioridad', 'sistema', $args );
	}	

}
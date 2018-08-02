<?php

// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////



add_action('init', function(){

	$labels = array(
		'name'          => 'Nosotros',
		'singular_name' => 'Nosotros',
		'add_new'       => 'Nuevo Nosotros',
		'add_new_item'  => 'Nuevo Nosotros',
		'edit_item'     => 'Editar Nosotros',
		'new_item'      => 'Nuevo Nosotros',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Nosotros',
		'search_items'  => 'Buscar Nosotros',
		'not_found'     => 'No hay Nosotros.',
		'menu_name'     => 'Nosotros'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'nosotros' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail', 'editor' ),
		'menu_icon' 		 => 'dashicons-groups'
	);
	register_post_type( 'nosotros', $args );	

	$labels = array(
		'name'          => 'Servicio',
		'singular_name' => 'Servicio',
		'add_new'       => 'Nuevo servicio',
		'add_new_item'  => 'Nuevo servicio',
		'edit_item'     => 'Editar servicio',
		'new_item'      => 'Nuevo servicio',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver servicio',
		'search_items'  => 'Buscar servicio',
		'not_found'     => 'No hay servicio.',
		'menu_name'     => 'Servicios'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'servicios' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail', 'editor' ),
		'menu_icon' 		 => 'dashicons-art'
	);
	register_post_type( 'servicios', $args );	

	$labels = array(
		'name'          => 'Cliente',
		'singular_name' => 'Cliente',
		'add_new'       => 'Nuevo Cliente',
		'add_new_item'  => 'Nuevo Cliente',
		'edit_item'     => 'Editar Cliente',
		'new_item'      => 'Nuevo Cliente',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Cliente',
		'search_items'  => 'Buscar Cliente',
		'not_found'     => 'No hay Cliente.',
		'menu_name'     => 'Clientes'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'clientes' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail', 'editor' ),
		'menu_icon' 		 => 'dashicons-money'
	);
	register_post_type( 'clientes', $args );	

	$labels = array(
		'name'          => 'Proyecto',
		'singular_name' => 'Proyecto',
		'add_new'       => 'Nuevo Proyecto',
		'add_new_item'  => 'Nuevo Proyecto',
		'edit_item'     => 'Editar Proyecto',
		'new_item'      => 'Nuevo Proyecto',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Proyecto',
		'search_items'  => 'Buscar Proyecto',
		'not_found'     => 'No hay Proyecto.',
		'menu_name'     => 'Proyectos'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'proyectos' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail', 'editor' ),
		'menu_icon' 		 => 'dashicons-admin-customizer'
	);
	register_post_type( 'proyectos', $args );	

	$labels = array(
		'name'          => 'Reconocimiento',
		'singular_name' => 'Reconocimiento',
		'add_new'       => 'Nuevo Reconocimiento',
		'add_new_item'  => 'Nuevo Reconocimiento',
		'edit_item'     => 'Editar Reconocimiento',
		'new_item'      => 'Nuevo Reconocimiento',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Reconocimiento',
		'search_items'  => 'Buscar Reconocimiento',
		'not_found'     => 'No hay Reconocimiento.',
		'menu_name'     => 'Reconocimientos'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'reconocimientos' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail', 'editor' ),
		'menu_icon' 		 => 'dashicons-awards'
	);
	register_post_type( 'reconocimientos', $args );	

	$labels = array(
		'name'          => 'Sistema',
		'Singular_name' => 'Sistema',
		'add_new'       => 'Nuevo Sistema',
		'add_new_item'  => 'Nuevo Sistema',
		'edit_item'     => 'Editar Sistema',
		'new_item'      => 'Nuevo Sistema',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Sistema',
		'search_items'  => 'Buscar Sistema',
		'not_found'     => 'No hay Sistema.',
		'menu_name'     => 'Sistema'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'sistema' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail', 'editor' ),
		'menu_icon' 		 => 'dashicons-id-alt'
	);
	register_post_type( 'sistema', $args );	

	$labels = array(
		'name'          => 'Cliente',
		'Singular_name' => 'Cliente',
		'add_new'       => 'Nuevo Cliente',
		'add_new_item'  => 'Nuevo Cliente',
		'edit_item'     => 'Editar Cliente',
		'new_item'      => 'Nuevo Cliente',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Cliente',
		'search_items'  => 'Buscar Cliente',
		'not_found'     => 'No hay Cliente.',
		'menu_name'     => 'QO Clientes'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'qo_clientes' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title' ),
		'menu_icon' 		 => 'dashicons-list-view'
	);
	register_post_type( 'qo_clientes', $args );	

	$labels = array(
		'name'          => 'Proveedor',
		'Singular_name' => 'Proveedor',
		'add_new'       => 'Nuevo Proveedor',
		'add_new_item'  => 'Nuevo Proveedor',
		'edit_item'     => 'Editar Proveedor',
		'new_item'      => 'Nuevo Proveedor',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Proveedor',
		'search_items'  => 'Buscar Proveedor',
		'not_found'     => 'No hay Proveedor.',
		'menu_name'     => 'QO Proveedores'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'qo_proveedores' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title' ),
		'menu_icon' 		 => 'dashicons-list-view'
	);
	register_post_type( 'qo_proveedores', $args );

	$labels = array(
		'name'          => 'Cotizacion',
		'Singular_name' => 'Cotizacion',
		'add_new'       => 'Nuevo Cotizacion',
		'add_new_item'  => 'Nuevo Cotizacion',
		'edit_item'     => 'Editar Cotizacion',
		'new_item'      => 'Nuevo Cotizacion',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Cotizacion',
		'search_items'  => 'Buscar Cotizacion',
		'not_found'     => 'No hay Cotizacion.',
		'menu_name'     => 'QO Cotizaciones'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'qo_cotizaciones' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail', 'editor' ),
		'menu_icon' 		 => 'dashicons-list-view'
	);
	register_post_type( 'qo_cotizaciones', $args );		


});
<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////

add_action('init', function(){

	
	if( ! get_page_by_path('qo-clientes') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Lista de Clientes',
			'post_name'   => 'qo-clientes',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	if( ! get_page_by_path('qo-proveedores') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Lista de Proveedores',
			'post_name'   => 'qo-proveedores',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}
	if( ! get_page_by_path('qo-estatus-vobo') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Cotizaciones VoBo',
			'post_name'   => 'qo-estatus-vobo',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}
	if( ! get_page_by_path('qo-estatus-facturada') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Cotizaciones Facturada',
			'post_name'   => 'qo-estatus-facturada',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	if( ! get_page_by_path('qo-sistemas') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Lista de sistemas',
			'post_name'   => 'qo-sistemas',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}


});
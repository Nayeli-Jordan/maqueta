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


});
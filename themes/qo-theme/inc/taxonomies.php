<?php


// TAXONOMIES ////////////////////////////////////////////////////////////////////////
add_action( 'init', 'custom_taxonomies_callback', 0 );
function custom_taxonomies_callback(){


	if( ! taxonomy_exists('dimensiones')){

		$labels = array(
			'name'              => 'Dimensiones',
			'singular_name'     => 'Dimensiones',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Dimensiones',
			'update_item'       => 'Actualizar Dimensiones',
			'add_new_item'      => 'Nueva Dimensiones',
			'menu_name'         => 'Dimensiones'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'dimensiones' ),
		);

		register_taxonomy( 'dimensiones', 'proyectos', $args );
	}
	wp_insert_term( 'larga', 'dimensiones' );
	wp_insert_term( 'corta', 'dimensiones' );

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

	if( ! taxonomy_exists('cotizacion-stm')){

		$labels = array(
			'name'              => 'Cotización',
			'singular_name'     => 'Cotización',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Cotización',
			'update_item'       => 'Actualizar Cotización',
			'add_new_item'      => 'Nueva Cotización',
			'menu_name'         => 'Cotización'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'cotizacion-stm' ),
		);

		register_taxonomy( 'cotizacion-stm', 'sistema', $args );
	}

	$args = array(
        'post_type'         => 'qo_cotizaciones',
        'posts_per_page'    => -1,
        'orderby'           => 'date',
        'order'             => 'ASC'
        );
    $loop = new WP_Query( $args );
    $i = 1;
    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
        	global $post;

        	wp_insert_term( $post->post_title, 'cotizacion-stm' );

        $i ++;  endwhile;
    } 
    wp_reset_postdata();

	if( ! taxonomy_exists('calendario-stm')){

		$labels = array(
			'name'              => 'Calendario',
			'singular_name'     => 'Calendario',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Calendario',
			'update_item'       => 'Actualizar Calendario',
			'add_new_item'      => 'Nueva Calendario',
			'menu_name'         => 'Calendario'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'calendario-stm' ),
		);

		register_taxonomy( 'calendario-stm', 'sistema', $args );
	}

	$args = array(
        'post_type'         => 'mc-events',
        'posts_per_page'    => -1,
        'orderby'           => 'date',
        'order'             => 'ASC'
        );
    $loop = new WP_Query( $args );
    $i = 1;
    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
        	global $post;

        	wp_insert_term( $post->post_title, 'calendario-stm' );

        $i ++;  endwhile;
    } 
    wp_reset_postdata();    


    if( ! taxonomy_exists('estatus-brief')){

		$labels = array(
			'name'              => 'Estatus Brief',
			'singular_name'     => 'Estatus Brief',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Estatus Brief',
			'update_item'       => 'Actualizar Estatus Brief',
			'add_new_item'      => 'Nueva Estatus Brief',
			'menu_name'         => 'Estatus Brief'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'estatus-brief' ),
		);

		register_taxonomy( 'estatus-brief', 'sistema', $args );
	}
	wp_insert_term( 'Archivada', 'estatus-brief' );


    if( ! taxonomy_exists('estatus-cotizacion')){

		$labels = array(
			'name'              => 'Estatus Cotización',
			'singular_name'     => 'Estatus Cotización',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Estatus Cotización',
			'update_item'       => 'Actualizar Estatus Cotización',
			'add_new_item'      => 'Nueva Estatus Cotización',
			'menu_name'         => 'Estatus Cotización'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'estatus-cotizacion' ),
		);

		register_taxonomy( 'estatus-cotizacion', 'qo_cotizaciones', $args );
	}
	wp_insert_term( 'Template', 'estatus-cotizacion' );	

}
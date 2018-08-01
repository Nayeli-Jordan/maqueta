<?php 

/**
* Define paths to javascript, styles, theme and site.
**/
define( 'JSPATH', get_stylesheet_directory_uri() . '/js/' );
define( 'THEMEPATH', get_stylesheet_directory_uri() . '/' );
define( 'SITEURL', get_site_url() . '/' );


/*------------------------------------*\
	#SNIPPETS
\*------------------------------------*/
require_once( 'inc/post-types.php' );
require_once( 'inc/taxonomies.php' );
require_once( 'inc/pages.php' );


/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

/**
* Enqueue frontend scripts and styles
**/
add_action( 'wp_enqueue_scripts', function(){
 
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(''), '2.1.1', true );
	// wp_enqueue_script( 'materialize_js', JSPATH.'bin/materialize.min.js', array('jquery'), '1.0', true );
    // wp_enqueue_script( 'imagesloaded_js', JSPATH.'imagesloaded.pkgd.min.js', array(), '', true );
	// wp_enqueue_script( 'masonry_js', JSPATH.'packery.pkgd.min.js', array(), '', true );
	wp_enqueue_script( 'qo_functions', JSPATH.'functions.js', array('materialize_js'), '1.0', true );
 
	wp_localize_script( 'qo_functions', 'siteUrl', SITEURL );
	wp_localize_script( 'qo_functions', 'theme_path', THEMEPATH );
	
	// $is_home = is_front_page() ? "1" : "0";
	// wp_localize_script( 'qo_functions', 'isHome', $is_home );
 
});

/**
* Configuraciones WP
*/

// Agregar css y js al administrador
function load_custom_files_wp_admin() {
        wp_register_style( 'qo_wp_admin_css', THEMEPATH . '/admin/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'qo_wp_admin_css' );

        /*wp_register_script( 'qo_wp_admin_js', THEMEPATH . 'admin/admin-script.js', false, '1.0.0' );
        wp_enqueue_script( 'qo_wp_admin_js' ); */       
}
add_action( 'admin_enqueue_scripts', 'load_custom_files_wp_admin' );

//Habilitar thumbnail en post
add_theme_support( 'post-thumbnails' ); 

//Habilitar menú (aparece en personalizar)
add_action('after_setup_theme', 'add_top_menu');
function add_top_menu(){
	register_nav_menu('top_menu',__('Top menu'));
}

//Delimitar número palabras excerpt
/*function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );*/


/**
* Optimización
*/

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/**
* SEO y Analitics
**/

//Código Analitics
// function add_google_analytics() {
//     echo '<script src="https://www.google-analytics.com/ga.js" type="text/javascript"></script>';
//     echo '<script type="text/javascript">';
//     echo 'var pageTracker = _gat._getTracker("UA-117075138-1");';
//     echo 'pageTracker._trackPageview();';
//     echo '</script>';
// }
// add_action('wp_footer', 'add_google_analytics');

/* Aplaza el análisis de JavaScript para una carga más rápida */
if(!is_admin()) {
    // Move all JS from header to footer
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}


/**
* CUSTOM FUNCTIONS
*/

//Sistema
add_action( 'add_meta_boxes', 'sistema_custom_metabox' );

function sistema_custom_metabox(){
	add_meta_box( 'sistema_meta', 'Información Sucursal', 'display_sistema_atributos', 'sistema', 'advanced', 'default');
}

function display_sistema_atributos( $sistema ){
    $solicitante            = esc_html( get_post_meta( $sistema->ID, 'sistema_solicitante', true ) );    
    $cliente            = esc_html( get_post_meta( $sistema->ID, 'sistema_cliente', true ) );    
    $marca            = esc_html( get_post_meta( $sistema->ID, 'sistema_marca', true ) );    
    $proyecto            = esc_html( get_post_meta( $sistema->ID, 'sistema_proyecto', true ) );    
    $noBrief            = esc_html( get_post_meta( $sistema->ID, 'sistema_noBrief', true ) );    

    $requerimientos            = esc_html( get_post_meta( $sistema->ID, 'sistema_requerimientos', true ) ); 
?>

<div id="sistema">
	<div class="row">
		<label>Solicitante</label>
		<input type="text" name="sistema_solicitante" value="<?php echo $solicitante; ?>">
	</div>
	<div class="row">
		<label>Cliente</label>
		<input type="text" name="sistema_cliente" value="<?php echo $cliente; ?>">
	</div>
	<div class="row">
		<label>Marca</label>
		<input type="text" name="sistema_marca" value="<?php echo $marca; ?>">
	</div>
	<div class="row">
		<label>Proyecto</label>
		<input type="text" name="sistema_proyecto" value="<?php echo $proyecto; ?>">
	</div>
	<div class="row">
		<label>No. Brief</label>
		<input type="text" name="sistema_noBrief" value="<?php echo $noBrief; ?>">
	</div>

	</br>
	<h2>Sistemas</h2>
	<div class="row">
		<label>Requerimientos</label>
		<input type="text" name="sistema_requerimientos" value="<?php echo $requerimientos; ?>">
	</div>
</div>
<?php

}

add_action( 'save_post', 'sistema_save_metas', 10, 2 );
function sistema_save_metas( $idsistema, $sistema ){
	//Comprobamos que es del tipo que nos interesa
	if ( $sistema->post_type == 'sistema' ){
	//Guardamos los datos que vienen en el POST
        if ( isset( $_POST['sistema_solicitante'] ) ){
            update_post_meta( $idsistema, 'sistema_solicitante', $_POST['sistema_solicitante'] );
        } 
        if ( isset( $_POST['sistema_cliente'] ) ){
            update_post_meta( $idsistema, 'sistema_cliente', $_POST['sistema_cliente'] );
        }
        if ( isset( $_POST['sistema_marca'] ) ){
            update_post_meta( $idsistema, 'sistema_marca', $_POST['sistema_marca'] );
        }
        if ( isset( $_POST['sistema_proyecto'] ) ){
            update_post_meta( $idsistema, 'sistema_proyecto', $_POST['sistema_proyecto'] );
        } 
        if ( isset( $_POST['sistema_noBrief'] ) ){
            update_post_meta( $idsistema, 'sistema_noBrief', $_POST['sistema_noBrief'] );
        } 
        if ( isset( $_POST['sistema_requerimientos'] ) ){
            update_post_meta( $idsistema, 'sistema_requerimientos', $_POST['sistema_requerimientos'] );
        }
	}
}


//qo_clientes
add_action( 'add_meta_boxes', 'qo_clientes_custom_metabox' );

function qo_clientes_custom_metabox(){
	add_meta_box( 'qo_clientes_meta', 'Información Cliente', 'display_qo_clientes_atributos', 'qo_clientes', 'advanced', 'default');
}

function display_qo_clientes_atributos( $qo_clientes ){
    $razon_social       = esc_html( get_post_meta( $qo_clientes->ID, 'qo_clientes_razon_social', true ) );    
    $rfc            	= esc_html( get_post_meta( $qo_clientes->ID, 'qo_clientes_rfc', true ) );    
    $direction          = esc_html( get_post_meta( $qo_clientes->ID, 'qo_clientes_direction', true ) );    
    $proyectos          = esc_html( get_post_meta( $qo_clientes->ID, 'qo_clientes_proyectos', true ) );    
    $actividad          = esc_html( get_post_meta( $qo_clientes->ID, 'qo_clientes_actividad', true ) ); 
    $contactComercial   = esc_html( get_post_meta( $qo_clientes->ID, 'qo_clientes_contactComercial', true ) ); 
    $telefono   		= esc_html( get_post_meta( $qo_clientes->ID, 'qo_clientes_telefono', true ) ); 
    $email   			= esc_html( get_post_meta( $qo_clientes->ID, 'qo_clientes_email', true ) ); 
    $cumpleanos   		= esc_html( get_post_meta( $qo_clientes->ID, 'qo_clientes_cumpleanos', true ) ); 
?>

<div>
	<div class="row">
		<label>Razón social</label>
		<input type="text" name="qo_clientes_razon_social" value="<?php echo $razon_social; ?>">
	</div>
	<div class="row">
		<label>RFC</label>
		<input type="text" name="qo_clientes_rfc" value="<?php echo $rfc; ?>">
	</div>
	<div class="row">
		<label>Dirección</label>
		<input type="text" name="qo_clientes_direction" value="<?php echo $direction; ?>">
	</div>
	<div class="row">
		<label>Proyectos</label>
		<input type="text" name="qo_clientes_proyectos" value="<?php echo $proyectos; ?>">
	</div>
	<div class="row">
		<label>Actividad</label>
		<input type="text" name="qo_clientes_actividad" value="<?php echo $actividad; ?>">
	</div>
	<div class="row">
		<label>Contacto Comercial</label>
		<input type="text" name="qo_clientes_contactComercial" value="<?php echo $contactComercial; ?>">
	</div>
	<div class="row">
		<label>Teléfono</label>
		<input type="text" name="qo_clientes_telefono" value="<?php echo $telefono; ?>">
	</div>
	<div class="row">
		<label>Email</label>
		<input type="text" name="qo_clientes_email" value="<?php echo $email; ?>">
	</div>
	<div class="row">
		<label>Cumpleaños</label>
		<input type="text" name="qo_clientes_cumpleanos" value="<?php echo $cumpleanos; ?>">
	</div>
</div>
<?php

}

add_action( 'save_post', 'qo_clientes_save_metas', 10, 2 );
function qo_clientes_save_metas( $idqo_clientes, $qo_clientes ){
	//Comprobamos que es del tipo que nos interesa
	if ( $qo_clientes->post_type == 'qo_clientes' ){
	//Guardamos los datos que vienen en el POST
        if ( isset( $_POST['qo_clientes_razon_social'] ) ){
            update_post_meta( $idqo_clientes, 'qo_clientes_razon_social', $_POST['qo_clientes_razon_social'] );
        }
        if ( isset( $_POST['qo_clientes_rfc'] ) ){
            update_post_meta( $idqo_clientes, 'qo_clientes_rfc', $_POST['qo_clientes_rfc'] );
        }
        if ( isset( $_POST['qo_clientes_direction'] ) ){
            update_post_meta( $idqo_clientes, 'qo_clientes_direction', $_POST['qo_clientes_direction'] );
        } 
        if ( isset( $_POST['qo_clientes_proyectos'] ) ){
            update_post_meta( $idqo_clientes, 'qo_clientes_proyectos', $_POST['qo_clientes_proyectos'] );
        } 
        if ( isset( $_POST['qo_clientes_actividad'] ) ){
            update_post_meta( $idqo_clientes, 'qo_clientes_actividad', $_POST['qo_clientes_actividad'] );
        }
        if ( isset( $_POST['qo_clientes_contactComercial'] ) ){
            update_post_meta( $idqo_clientes, 'qo_clientes_contactComercial', $_POST['qo_clientes_contactComercial'] );
        }
        if ( isset( $_POST['qo_clientes_telefono'] ) ){
            update_post_meta( $idqo_clientes, 'qo_clientes_telefono', $_POST['qo_clientes_telefono'] );
        }
        if ( isset( $_POST['qo_clientes_email'] ) ){
            update_post_meta( $idqo_clientes, 'qo_clientes_email', $_POST['qo_clientes_email'] );
        }
        if ( isset( $_POST['qo_clientes_cumpleanos'] ) ){
            update_post_meta( $idqo_clientes, 'qo_clientes_cumpleanos', $_POST['qo_clientes_cumpleanos'] );
        }
	}
}
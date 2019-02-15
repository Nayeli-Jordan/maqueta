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
    if (is_home()) {
        wp_enqueue_script( 'imagesloaded_js', JSPATH.'imagesloaded.pkgd.min.js', array(), '', true );
        wp_enqueue_script( 'masonry_js', JSPATH.'packery.pkgd.min.js', array(), '', true );
        wp_enqueue_script( 'cycle_js', JSPATH.'jquery.cycle2.min.js', array(), '', true );
        /* Proyectos */
        /* Morphin button */
        /*wp_enqueue_script( 'modernizr_js', JSPATH.'modernizr.custom.js', array(), '', true );
        wp_enqueue_script( 'classie_js', JSPATH.'classie.js', array(), '', true );
        wp_enqueue_script( 'uiMB_fixed_js', JSPATH.'uiMorphingButton_fixed.js', array(), '', true );
        wp_enqueue_script( 'uiMB_inflow_js', JSPATH.'uiMorphingButton_inflow.js', array(), '', true );*/
    }
    wp_enqueue_script( 'qo_parsley', JSPATH.'parsley.min.js', array(), '1.0', true );
    wp_enqueue_script( 'isotope_js', JSPATH.'isotope.pkgd.min.js', array(), '', true );	
	wp_enqueue_script( 'qo_functions', JSPATH.'functions.js', array(), '1.0', true );
 
	wp_localize_script( 'qo_functions', 'siteUrl', SITEURL );
	wp_localize_script( 'qo_functions', 'theme_path', THEMEPATH );
	
	$is_home = is_front_page() ? "1" : "0";
	wp_localize_script( 'qo_functions', 'isHome', $is_home );
 
});

/**
* Configuraciones WP
*/

// Agregar css y js al administrador
function load_custom_files_wp_admin() {
        wp_register_style( 'qo_wp_admin_css', THEMEPATH . '/admin/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'qo_wp_admin_css' );
        wp_register_script( 'qo_wp_admin_js', THEMEPATH . 'admin/admin-script.js', false, '1.0.0' );
        wp_enqueue_script( 'qo_wp_admin_js' );       
}
add_action( 'admin_enqueue_scripts', 'load_custom_files_wp_admin' );

//Change style login
add_action( 'login_enqueue_scripts', 'load_custom_files_wp_admin' );
function my_login_logo_url() {
  return home_url();
}//end my_login_logo_url()
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
  return '¿Qué Onda?';
}//end my_login_logo_url_title()
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

//Habilitar thumbnail en post
add_theme_support( 'post-thumbnails' ); 

//Habilitar menú (aparece en personalizar)
add_action('after_setup_theme', 'add_top_menu');
function add_top_menu(){
    register_nav_menu('top_menu',__('Top menú'));
	register_nav_menu('qo_menu',__('QO menú'));
}

/* Send mail by SMTP */
add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->Username   = SMTP_USERNAME;
    $phpmailer->Password   = SMTP_PASSWORD;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_FROMNAME;
}

if ( $GLOBALS['pagenow'] != 'wp-login.php' ) { /* Evitar errores con email recuperar contraseña */
    /* $message wp_mail in html (not text/plain) */
    function transforme_content_type(){
        return "text/html";
    }
    add_filter( 'wp_mail_content_type','transforme_content_type' );    
}

/**
* Configuraciones WP - QO posts
*/

//Númerar posts
function post_number_sistema($postID){
    $getOrderedPostsSistema= new WP_Query('post_type=sistema&orderby=date&order=ASC&posts_per_page=-1');
    $count = 1;
    if($getOrderedPostsSistema->have_posts()) {
        while ($getOrderedPostsSistema->have_posts()) {
            $getOrderedPostsSistema->the_post();
            if ($postID != get_the_ID()){
                $count++;
            } else {
                $postNumberSistema= $count;
            }
        }
    }
    wp_reset_query();
    return $postNumberSistema;
}

function post_number_qo_cotizaciones($postID){
     $args = array(
        'post_type'         => 'qo_cotizaciones',
        'posts_per_page'    => -1,
        'orderby'           => 'date',
        'order'             => 'ASC',
        'tax_query'         => array(
            array(
                'taxonomy'  => 'estatus-cotizacion',
                'field'     => 'slug',
                'terms'     => 'template',
                'operator'  => 'NOT IN',
            )
        )
    );
    $getOrderedPostsCotizacion= new WP_Query($args);
    $count = 1;
    if($getOrderedPostsCotizacion->have_posts()) {
        while ($getOrderedPostsCotizacion->have_posts()) {
            $getOrderedPostsCotizacion->the_post();
            if ($postID != get_the_ID()){
                $count++;
            } else {
                $postNumberCotizacion= $count;
            }
        }
    }
    wp_reset_query();
    return $postNumberCotizacion;
}

// Get ID if image cotización
function qo_get_image_id($image_url) {
    global $wpdb;
    $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
        return $attachment[0]; 
}

//Hide item admin menu for certain user profile
function qo_remove_menu_items() {
    remove_menu_page('edit.php'); // Posts
    remove_menu_page('edit-comments.php'); // Comments
    //Editor
    if( current_user_can( 'editor' ) ):

        remove_menu_page( 'edit.php?post_type=nosotros' );
        remove_menu_page( 'edit.php?post_type=servicios' );
        remove_menu_page( 'edit.php?post_type=clientes' );
        remove_menu_page( 'edit.php?post_type=proyectos' );
        remove_menu_page( 'edit.php?post_type=reconocimientos' );

        remove_menu_page( 'edit.php?post_type=qo_clientes' );
        remove_menu_page( 'edit.php?post_type=qo_proveedores' );
        remove_menu_page( 'edit.php?post_type=qo_cotizaciones' );
        remove_submenu_page( 'edit.php?post_type=sistema', 'post-new.php?post_type=sistema' );
        remove_submenu_page( 'edit.php?post_type=sistema', 'edit-tags.php?taxonomy=solicitante&amp;post_type=sistema' );
        remove_submenu_page( 'edit.php?post_type=sistema', 'edit-tags.php?taxonomy=requerimiento&amp;post_type=sistema' );
        remove_submenu_page( 'edit.php?post_type=sistema', 'edit-tags.php?taxonomy=responsable&amp;post_type=sistema' );
        remove_submenu_page( 'edit.php?post_type=sistema', 'edit-tags.php?taxonomy=cotizacion-stm&amp;post_type=sistema' );
        remove_submenu_page( 'edit.php?post_type=sistema', 'edit-tags.php?taxonomy=calendario-stm&amp;post_type=sistema' );

        remove_menu_page('edit.php'); // Posts
        remove_menu_page('edit.php?post_type=page'); // Pages
        remove_menu_page( 'upload.php' ); //Multimedia
        remove_menu_page('edit-comments.php'); // Comments
        remove_menu_page('tools.php'); // Tools
    endif;
    //Administrator Jeaninne
    $current_user = wp_get_current_user();
    if ( 4 == $current_user->ID ) :
        remove_menu_page('edit.php'); // Posts        
        remove_menu_page('edit.php?post_type=page'); // Pages
        remove_menu_page('plugins.php'); // Plugins
        remove_menu_page('edit-comments.php'); // Comments
        remove_menu_page('themes.php'); // Appearance
        remove_menu_page('tools.php'); // Tools
        remove_menu_page( 'options-general.php' );        //Ajustes
        remove_menu_page( 'edit.php?post_type=nosotros' );
        remove_menu_page( 'edit.php?post_type=servicios' );
        remove_menu_page( 'edit.php?post_type=clientes' );
        remove_menu_page( 'edit.php?post_type=proyectos' );
        remove_menu_page( 'edit.php?post_type=reconocimientos' );
    endif;
}
add_action( 'admin_menu', 'qo_remove_menu_items' );


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
function add_google_analytics() {
    echo '<script src="https://www.google-analytics.com/ga.js" type="text/javascript"></script>';
    echo '<script type="text/javascript">';
    echo 'var pageTracker = _gat._getTracker("UA-105788032-1");';
    echo 'pageTracker._trackPageview();';
    echo '</script>';
}
add_action('wp_footer', 'add_google_analytics');

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
	add_meta_box( 'sistema_meta', 'Información BRIEF', 'display_sistema_atributos', 'sistema', 'advanced', 'default');
}

function display_sistema_atributos( $sistema ){
    $estatus            = esc_html( get_post_meta( $sistema->ID, 'sistema_estatus', true ) );    

    $cliente            = esc_html( get_post_meta( $sistema->ID, 'sistema_cliente', true ) );    
    $marca            	= esc_html( get_post_meta( $sistema->ID, 'sistema_marca', true ) );    
    $proyecto           = esc_html( get_post_meta( $sistema->ID, 'sistema_proyecto', true ) );    
    $tiempoCotizado    	= esc_html( get_post_meta( $sistema->ID, 'sistema_tiempoCotizado', true ) ); 
    $fechaEntregaAlert  = esc_html( get_post_meta( $sistema->ID, 'sistema_fechaEntregaAlert', true ) );
    $fechaEntrega       = esc_html( get_post_meta( $sistema->ID, 'sistema_fechaEntrega', true ) );
    $prioridad    	= esc_html( get_post_meta( $sistema->ID, 'sistema_prioridad', true ) );
    $tiempoCreativo_di   	= esc_html( get_post_meta( $sistema->ID, 'sistema_tiempoCreativo_di', true ) );   
    $medioEntrada_di   	= esc_html( get_post_meta( $sistema->ID, 'sistema_medioEntrada_di', true ) );   
    $requerimiento_di 	= esc_html( get_post_meta( $sistema->ID, 'sistema_requerimiento_di', true ) );   
    $noPiezas_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_noPiezas_di', true ) );   
    $descripcion_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_descripcion_di', true ) );   
    $cantidad_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_cantidad_di', true ) );
    $detalles_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_detalles_di', true ) );       
    $product1_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_product1_di', true ) );   
    $peso1_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_peso1_di', true ) );   
    $cantCarga1_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_cantCarga1_di', true ) );   
    $largo1_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_largo1_di', true ) );   
    $ancho1_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_peso1_di', true ) );   
    $alto1_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_alto1_di', true ) );
    $product2_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_product2_di', true ) );   
    $peso2_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_peso2_di', true ) );   
    $cantCarga2_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_cantCarga2_di', true ) );   
    $largo2_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_largo2_di', true ) );   
    $ancho2_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_peso2_di', true ) );   
    $alto2_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_alto2_di', true ) );
    $product3_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_product3_di', true ) );   
    $peso3_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_peso3_di', true ) );   
    $cantCarga3_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_cantCarga3_di', true ) );   
    $largo3_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_largo3_di', true ) );   
    $ancho3_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_peso3_di', true ) );   
    $alto3_di    	= esc_html( get_post_meta( $sistema->ID, 'sistema_alto3_di', true ) );
    $tiempoCreativo_dv   	= esc_html( get_post_meta( $sistema->ID, 'sistema_tiempoCreativo_dv', true ) );  
    $medioEntrada_dv   	= esc_html( get_post_meta( $sistema->ID, 'sistema_medioEntrada_dv', true ) );   
    $requerimiento_dv 	= esc_html( get_post_meta( $sistema->ID, 'sistema_requerimiento_dv', true ) );   
    $noPiezas_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_noPiezas_dv', true ) );   
    $descripcion_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_descripcion_dv', true ) );   
    $cantidad_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_cantidad_dv', true ) );
    $detalles_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_detalles_dv', true ) );       
    $material1_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_material1_dv', true ) );  
    $largo1_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_largo1_dv', true ) );   
    $ancho1_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_peso1_dv', true ) );   
    $alto1_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_alto1_dv', true ) );
    $material2_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_material2_dv', true ) );  
    $largo2_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_largo2_dv', true ) );   
    $ancho2_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_peso2_dv', true ) );   
    $alto2_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_alto2_dv', true ) );
    $material3_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_material3_dv', true ) );  
    $largo3_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_largo3_dv', true ) );   
    $ancho3_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_peso3_dv', true ) );   
    $alto3_dv    	= esc_html( get_post_meta( $sistema->ID, 'sistema_alto3_dv', true ) );
    $tiempoCreativo_mkt   	= esc_html( get_post_meta( $sistema->ID, 'sistema_tiempoCreativo_mkt', true ) );
    $medioEntrada_mkt   	= esc_html( get_post_meta( $sistema->ID, 'sistema_medioEntrada_mkt', true ) );   
    $requerimiento_mkt 	= esc_html( get_post_meta( $sistema->ID, 'sistema_requerimiento_mkt', true ) );   
    $personasExternas_mkt    	= esc_html( get_post_meta( $sistema->ID, 'sistema_personasExternas_mkt', true ) );
    $caracteristicas_mkt    	= esc_html( get_post_meta( $sistema->ID, 'sistema_caracteristicas_mkt', true ) ); 
    $noPersonas_mkt    	= esc_html( get_post_meta( $sistema->ID, 'sistema_noPersonas_mkt', true ) );
    $detalles_mkt    	= esc_html( get_post_meta( $sistema->ID, 'sistema_detalles_mkt', true ) );
    $tiempoCreativo_stm   	= esc_html( get_post_meta( $sistema->ID, 'sistema_tiempoCreativo_stm', true ) );   
    $medioEntrada_stm   	= esc_html( get_post_meta( $sistema->ID, 'sistema_medioEntrada_stm', true ) );   
    $requerimiento_stm 	= esc_html( get_post_meta( $sistema->ID, 'sistema_requerimiento_stm', true ) );   
    $dominioHospedaje_stm    	= esc_html( get_post_meta( $sistema->ID, 'sistema_dominioHospedaje_stm', true ) );
    $dominio_stm    	= esc_html( get_post_meta( $sistema->ID, 'sistema_dominio_stm', true ) ); 
    $ftp_stm    	= esc_html( get_post_meta( $sistema->ID, 'sistema_ftp_stm', true ) );
    $detalles_stm    	= esc_html( get_post_meta( $sistema->ID, 'sistema_detalles_stm', true ) );
    $tiempoCreativo1_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_tiempoCreativo1_ext', true ) ); 
    $solicitud1_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_solicitud1_ext', true ) ); 
    $solic_fecha1_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_solic_fecha1_ext', true ) ); 
    $solic_hora1_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_solic_hora1_ext', true ) ); 
    $req_fecha1_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_req_fecha1_ext', true ) ); 
    $req_hora1_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_req_hora1_ext', true ) );
    $ent_fecha1_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_ent_fecha1_ext', true ) ); 
    $ent_hora1_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_ent_hora1_ext', true ) ); 
    $tiempoCreativo2_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_tiempoCreativo2_ext', true ) ); 
    $solicitud2_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_solicitud2_ext', true ) ); 
    $solic_fecha2_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_solic_fecha2_ext', true ) ); 
    $solic_hora2_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_solic_hora2_ext', true ) ); 
    $req_fecha2_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_req_fecha2_ext', true ) ); 
    $req_hora2_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_req_hora2_ext', true ) );
    $ent_fecha2_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_ent_fecha2_ext', true ) ); 
    $ent_hora2_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_ent_hora2_ext', true ) ); 
    $tiempoCreativo3_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_tiempoCreativo3_ext', true ) ); 
    $solicitud3_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_solicitud3_ext', true ) ); 
    $solic_fecha3_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_solic_fecha3_ext', true ) ); 
    $solic_hora3_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_solic_hora3_ext', true ) ); 
    $req_fecha3_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_req_fecha3_ext', true ) ); 
    $req_hora3_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_req_hora3_ext', true ) );
    $ent_fecha3_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_ent_fecha3_ext', true ) ); 
    $ent_hora3_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_ent_hora3_ext', true ) ); 
    $tiempoCreativo4_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_tiempoCreativo4_ext', true ) ); 
    $solicitud4_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_solicitud4_ext', true ) ); 
    $solic_fecha4_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_solic_fecha4_ext', true ) ); 
    $solic_hora4_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_solic_hora4_ext', true ) ); 
    $req_fecha4_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_req_fecha4_ext', true ) ); 
    $req_hora4_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_req_hora4_ext', true ) );
    $ent_fecha4_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_ent_fecha4_ext', true ) ); 
    $ent_hora4_ext   	= esc_html( get_post_meta( $sistema->ID, 'sistema_ent_hora4_ext', true ) ); 

    include (TEMPLATEPATH . '/templates-custom-metabox/fields-sistema.php');
}

add_action( 'save_post', 'sistema_save_metas', 10, 2 );
function sistema_save_metas( $idsistema, $sistema ){
	//Comprobamos que es del tipo que nos interesa
	if ( $sistema->post_type == 'sistema' ){
	//Guardamos los datos que vienen en el POST
        if ( isset( $_POST['sistema_estatus'] ) ){
            update_post_meta( $idsistema, 'sistema_estatus', $_POST['sistema_estatus'] );
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
        if ( isset( $_POST['tiempoCotizado'] ) ){
            update_post_meta( $idsistema, 'tiempoCotizado', $_POST['tiempoCotizado'] );
        }
        if ( isset( $_POST['sistema_fechaEntrega'] ) ){
            update_post_meta( $idsistema, 'sistema_fechaEntrega', $_POST['sistema_fechaEntrega'] );
        }
        if ( isset( $_POST['sistema_fechaEntregaAlert'] ) ){
            update_post_meta( $idsistema, 'sistema_fechaEntregaAlert', $_POST['sistema_fechaEntregaAlert'] );
        }
        if ( isset( $_POST['sistema_prioridad'] ) ){
            update_post_meta( $idsistema, 'sistema_prioridad', $_POST['sistema_prioridad'] );
        }
        if ( isset( $_POST['sistema_tiempoCreativo_di'] ) ){
            update_post_meta( $idsistema, 'sistema_tiempoCreativo_di', $_POST['sistema_tiempoCreativo_di'] );
        }
        if ( isset( $_POST['sistema_medioEntrada_di'] ) ){
            update_post_meta( $idsistema, 'sistema_medioEntrada_di', $_POST['sistema_medioEntrada_di'] );
        }
		if ( isset( $_POST['sistema_requerimiento_di'] ) ){
            update_post_meta( $idsistema, 'sistema_requerimiento_di', $_POST['sistema_requerimiento_di'] );
        }
		if ( isset( $_POST['sistema_noPiezas_di'] ) ){
            update_post_meta( $idsistema, 'sistema_noPiezas_di', $_POST['sistema_noPiezas_di'] );
        }
		if ( isset( $_POST['sistema_descripcion_di'] ) ){
            update_post_meta( $idsistema, 'sistema_descripcion_di', $_POST['sistema_descripcion_di'] );
        }
		if ( isset( $_POST['sistema_cantidad_di'] ) ){
            update_post_meta( $idsistema, 'sistema_cantidad_di', $_POST['sistema_cantidad_di'] );
        }
        if ( isset( $_POST['sistema_detalles_di'] ) ){
            update_post_meta( $idsistema, 'sistema_detalles_di', $_POST['sistema_detalles_di'] );
        }
        if ( isset( $_POST['sistema_product1_di'] ) ){
            update_post_meta( $idsistema, 'sistema_product1_di', $_POST['sistema_product1_di'] );
        }
        if ( isset( $_POST['sistema_peso1_di'] ) ){
            update_post_meta( $idsistema, 'sistema_peso1_di', $_POST['sistema_peso1_di'] );
        }
        if ( isset( $_POST['sistema_cantCarga1_di'] ) ){
            update_post_meta( $idsistema, 'sistema_cantCarga1_di', $_POST['sistema_cantCarga1_di'] );
        }
        if ( isset( $_POST['sistema_largo1_di'] ) ){
            update_post_meta( $idsistema, 'sistema_largo1_di', $_POST['sistema_largo1_di'] );
        }
        if ( isset( $_POST['sistema_ancho1_di'] ) ){
            update_post_meta( $idsistema, 'sistema_product1_di', $_POST['sistema_product1_di'] );
        }
        if ( isset( $_POST['sistema_alto1_di'] ) ){
            update_post_meta( $idsistema, 'sistema_alto1_di', $_POST['sistema_alto1_di'] );
        }
        if ( isset( $_POST['sistema_product2_di'] ) ){
            update_post_meta( $idsistema, 'sistema_product2_di', $_POST['sistema_product2_di'] );
        }
        if ( isset( $_POST['sistema_peso2_di'] ) ){
            update_post_meta( $idsistema, 'sistema_peso2_di', $_POST['sistema_peso2_di'] );
        }
        if ( isset( $_POST['sistema_cantCarga2_di'] ) ){
            update_post_meta( $idsistema, 'sistema_cantCarga2_di', $_POST['sistema_cantCarga2_di'] );
        }
        if ( isset( $_POST['sistema_largo2_di'] ) ){
            update_post_meta( $idsistema, 'sistema_largo2_di', $_POST['sistema_largo2_di'] );
        }
        if ( isset( $_POST['sistema_ancho2_di'] ) ){
            update_post_meta( $idsistema, 'sistema_product2_di', $_POST['sistema_product2_di'] );
        }
        if ( isset( $_POST['sistema_alto2_di'] ) ){
            update_post_meta( $idsistema, 'sistema_alto2_di', $_POST['sistema_alto2_di'] );
        }
        if ( isset( $_POST['sistema_product3_di'] ) ){
            update_post_meta( $idsistema, 'sistema_product3_di', $_POST['sistema_product3_di'] );
        }
        if ( isset( $_POST['sistema_peso3_di'] ) ){
            update_post_meta( $idsistema, 'sistema_peso3_di', $_POST['sistema_peso3_di'] );
        }
        if ( isset( $_POST['sistema_cantCarga3_di'] ) ){
            update_post_meta( $idsistema, 'sistema_cantCarga3_di', $_POST['sistema_cantCarga3_di'] );
        }
        if ( isset( $_POST['sistema_largo3_di'] ) ){
            update_post_meta( $idsistema, 'sistema_largo3_di', $_POST['sistema_largo3_di'] );
        }
        if ( isset( $_POST['sistema_ancho3_di'] ) ){
            update_post_meta( $idsistema, 'sistema_product3_di', $_POST['sistema_product3_di'] );
        }
        if ( isset( $_POST['sistema_alto3_di'] ) ){
            update_post_meta( $idsistema, 'sistema_alto3_di', $_POST['sistema_alto3_di'] );
        }
        if ( isset( $_POST['sistema_tiempoCreativo_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_tiempoCreativo_dv', $_POST['sistema_tiempoCreativo_dv'] );
        }
        if ( isset( $_POST['sistema_medioEntrada_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_medioEntrada_dv', $_POST['sistema_medioEntrada_dv'] );
        }
        if ( isset( $_POST['sistema_requerimiento_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_requerimiento_dv', $_POST['sistema_requerimiento_dv'] );
        }
        if ( isset( $_POST['sistema_noPiezas_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_noPiezas_dv', $_POST['sistema_noPiezas_dv'] );
        }
        if ( isset( $_POST['sistema_descripcion_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_descripcion_dv', $_POST['sistema_descripcion_dv'] );
        }
        if ( isset( $_POST['sistema_cantidad_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_cantidad_dv', $_POST['sistema_cantidad_dv'] );
        }
        if ( isset( $_POST['sistema_detalles_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_detalles_dv', $_POST['sistema_detalles_dv'] );
        }
        if ( isset( $_POST['sistema_material1_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_material1_dv', $_POST['sistema_material1_dv'] );
        }
        if ( isset( $_POST['sistema_largo1_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_largo1_dv', $_POST['sistema_largo1_dv'] );
        }
        if ( isset( $_POST['sistema_ancho1_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_ancho1_dv', $_POST['sistema_ancho1_dv'] );
        }
        if ( isset( $_POST['sistema_alto1_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_alto1_dv', $_POST['sistema_alto1_dv'] );
        }
        if ( isset( $_POST['sistema_material2_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_material2_dv', $_POST['sistema_material2_dv'] );
        }
        if ( isset( $_POST['sistema_largo2_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_largo2_dv', $_POST['sistema_largo2_dv'] );
        }  
        if ( isset( $_POST['sistema_ancho2_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_ancho2_dv', $_POST['sistema_ancho2_dv'] );
        }  
        if ( isset( $_POST['sistema_alto2_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_alto2_dv', $_POST['sistema_alto2_dv'] );
        }  
        if ( isset( $_POST['sistema_material3_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_material3_dv', $_POST['sistema_material3_dv'] );
        }
        if ( isset( $_POST['sistema_largo3_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_largo3_dv', $_POST['sistema_largo3_dv'] );
        }  
        if ( isset( $_POST['sistema_ancho3_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_ancho3_dv', $_POST['sistema_ancho3_dv'] );
        } 
        if ( isset( $_POST['sistema_alto3_dv'] ) ){
            update_post_meta( $idsistema, 'sistema_alto3_dv', $_POST['sistema_alto3_dv'] );
        } 
        if ( isset( $_POST['sistema_tiempoCreativo_mkt'] ) ){
            update_post_meta( $idsistema, 'sistema_tiempoCreativo_mkt', $_POST['sistema_tiempoCreativo_mkt'] );
        }
        if ( isset( $_POST['sistema_medioEntrada_mkt'] ) ){
            update_post_meta( $idsistema, 'sistema_medioEntrada_mkt', $_POST['sistema_medioEntrada_mkt'] );
        }
        if ( isset( $_POST['sistema_requerimiento_mkt'] ) ){
            update_post_meta( $idsistema, 'sistema_requerimiento_mkt', $_POST['sistema_requerimiento_mkt'] );
        }
        if ( isset( $_POST['sistema_personasExternas_mkt'] ) ){
            update_post_meta( $idsistema, 'sistema_personasExternas_mkt', $_POST['sistema_personasExternas_mkt'] );
        }
        if ( isset( $_POST['sistema_caracteristicas_mkt'] ) ){
            update_post_meta( $idsistema, 'sistema_caracteristicas_mkt', $_POST['sistema_caracteristicas_mkt'] );
        }
        if ( isset( $_POST['sistema_noPersonas_mkt'] ) ){
            update_post_meta( $idsistema, 'sistema_noPersonas_mkt', $_POST['sistema_noPersonas_mkt'] );
        }
        if ( isset( $_POST['sistema_detalles_mkt'] ) ){
            update_post_meta( $idsistema, 'sistema_detalles_mkt', $_POST['sistema_detalles_mkt'] );
        }
        if ( isset( $_POST['sistema_tiempoCreativo_stm'] ) ){
            update_post_meta( $idsistema, 'sistema_tiempoCreativo_stm', $_POST['sistema_tiempoCreativo_stm'] );
        }
        if ( isset( $_POST['sistema_medioEntrada_stm'] ) ){
            update_post_meta( $idsistema, 'sistema_medioEntrada_stm', $_POST['sistema_medioEntrada_stm'] );
        }
        if ( isset( $_POST['sistema_requerimiento_stm'] ) ){
            update_post_meta( $idsistema, 'sistema_requerimiento_stm', $_POST['sistema_requerimiento_stm'] );
        }
        if ( isset( $_POST['sistema_dominioHospedaje_stm'] ) ){
            update_post_meta( $idsistema, 'sistema_dominioHospedaje_stm', $_POST['sistema_dominioHospedaje_stm'] );
        }
        if ( isset( $_POST['sistema_dominio_stm'] ) ){
            update_post_meta( $idsistema, 'sistema_dominio_stm', $_POST['sistema_dominio_stm'] );
        }
        if ( isset( $_POST['sistema_ftp_stm'] ) ){
            update_post_meta( $idsistema, 'sistema_ftp_stm', $_POST['sistema_ftp_stm'] );
        }
        if ( isset( $_POST['sistema_detalles_stm'] ) ){
            update_post_meta( $idsistema, 'sistema_detalles_stm', $_POST['sistema_detalles_stm'] );
        }
        if ( isset( $_POST['sistema_tiempoCreativo1_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_tiempoCreativo1_ext', $_POST['sistema_tiempoCreativo1_ext'] );
        }
        if ( isset( $_POST['sistema_solicitud1_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_solicitud1_ext', $_POST['sistema_solicitud1_ext'] );
        }
        if ( isset( $_POST['sistema_solic_fecha1_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_solic_fecha1_ext', $_POST['sistema_solic_fecha1_ext'] );
        }
        if ( isset( $_POST['sistema_solic_hora1_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_solic_hora1_ext', $_POST['sistema_solic_hora1_ext'] );
        }
        if ( isset( $_POST['sistema_ent_fecha1_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_ent_fecha1_ext', $_POST['sistema_ent_fecha1_ext'] );
        }
        if ( isset( $_POST['sistema_ent_hora1_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_ent_hora1_ext', $_POST['sistema_ent_hora1_ext'] );
        }
        if ( isset( $_POST['sistema_tiempoCreativo2_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_tiempoCreativo2_ext', $_POST['sistema_tiempoCreativo2_ext'] );
        }
        if ( isset( $_POST['sistema_solicitud2_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_solicitud2_ext', $_POST['sistema_solicitud2_ext'] );
        }
        if ( isset( $_POST['sistema_solic_fecha2_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_solic_fecha2_ext', $_POST['sistema_solic_fecha2_ext'] );
        }
        if ( isset( $_POST['sistema_solic_hora2_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_solic_hora2_ext', $_POST['sistema_solic_hora2_ext'] );
        }
        if ( isset( $_POST['sistema_ent_fecha2_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_ent_fecha2_ext', $_POST['sistema_ent_fecha2_ext'] );
        }
        if ( isset( $_POST['sistema_ent_hora2_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_ent_hora2_ext', $_POST['sistema_ent_hora2_ext'] );
        }
        if ( isset( $_POST['sistema_tiempoCreativo3_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_tiempoCreativo3_ext', $_POST['sistema_tiempoCreativo3_ext'] );
        }
        if ( isset( $_POST['sistema_solicitud3_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_solicitud3_ext', $_POST['sistema_solicitud3_ext'] );
        }
        if ( isset( $_POST['sistema_solic_fecha3_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_solic_fecha3_ext', $_POST['sistema_solic_fecha3_ext'] );
        }
        if ( isset( $_POST['sistema_solic_hora3_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_solic_hora3_ext', $_POST['sistema_solic_hora3_ext'] );
        }
        if ( isset( $_POST['sistema_ent_fecha3_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_ent_fecha3_ext', $_POST['sistema_ent_fecha3_ext'] );
        }
        if ( isset( $_POST['sistema_ent_hora3_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_ent_hora3_ext', $_POST['sistema_ent_hora3_ext'] );
        }
        if ( isset( $_POST['sistema_tiempoCreativo4_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_tiempoCreativo4_ext', $_POST['sistema_tiempoCreativo4_ext'] );
        }
        if ( isset( $_POST['sistema_solicitud4_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_solicitud4_ext', $_POST['sistema_solicitud4_ext'] );
        }
        if ( isset( $_POST['sistema_solic_fecha4_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_solic_fecha4_ext', $_POST['sistema_solic_fecha4_ext'] );
        }
        if ( isset( $_POST['sistema_solic_hora4_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_solic_hora4_ext', $_POST['sistema_solic_hora4_ext'] );
        }
        if ( isset( $_POST['sistema_ent_fecha4_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_ent_fecha4_ext', $_POST['sistema_ent_fecha4_ext'] );
        }
        if ( isset( $_POST['sistema_ent_hora4_ext'] ) ){
            update_post_meta( $idsistema, 'sistema_ent_hora4_ext', $_POST['sistema_ent_hora4_ext'] );
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

    include (TEMPLATEPATH . '/templates-custom-metabox/fields-clientes.php');
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


//qo_proveedores
add_action( 'add_meta_boxes', 'qo_proveedores_custom_metabox' );

function qo_proveedores_custom_metabox(){
	add_meta_box( 'qo_proveedores_meta', 'Información Proveedor', 'display_qo_proveedores_atributos', 'qo_proveedores', 'advanced', 'default');
}

function display_qo_proveedores_atributos( $qo_proveedores ){
    $razon_social       = esc_html( get_post_meta( $qo_proveedores->ID, 'qo_proveedores_razon_social', true ) );    
    $ruc            	= esc_html( get_post_meta( $qo_proveedores->ID, 'qo_proveedores_ruc', true ) );    
    $direction          = esc_html( get_post_meta( $qo_proveedores->ID, 'qo_proveedores_direction', true ) );    
    $prod_serv 			= esc_html( get_post_meta( $qo_proveedores->ID, 'qo_proveedores_prod_serv', true ) );
    $actividad          = esc_html( get_post_meta( $qo_proveedores->ID, 'qo_proveedores_actividad', true ) ); 
    $contactComercial   = esc_html( get_post_meta( $qo_proveedores->ID, 'qo_proveedores_contactComercial', true ) ); 
    $telefono   		= esc_html( get_post_meta( $qo_proveedores->ID, 'qo_proveedores_telefono', true ) ); 
    $email   			= esc_html( get_post_meta( $qo_proveedores->ID, 'qo_proveedores_email', true ) ); 
    $fecha_ingreso   	= esc_html( get_post_meta( $qo_proveedores->ID, 'qo_proveedores_fecha_ingreso', true ) ); 

    include (TEMPLATEPATH . '/templates-custom-metabox/fields-proveedores.php');
}

add_action( 'save_post', 'qo_proveedores_save_metas', 10, 2 );
function qo_proveedores_save_metas( $idqo_proveedores, $qo_proveedores ){
	//Comprobamos que es del tipo que nos interesa
	if ( $qo_proveedores->post_type == 'qo_proveedores' ){
	//Guardamos los datos que vienen en el POST
        if ( isset( $_POST['qo_proveedores_razon_social'] ) ){
            update_post_meta( $idqo_proveedores, 'qo_proveedores_razon_social', $_POST['qo_proveedores_razon_social'] );
        }
        if ( isset( $_POST['qo_proveedores_ruc'] ) ){
            update_post_meta( $idqo_proveedores, 'qo_proveedores_ruc', $_POST['qo_proveedores_ruc'] );
        }
        if ( isset( $_POST['qo_proveedores_direction'] ) ){
            update_post_meta( $idqo_proveedores, 'qo_proveedores_direction', $_POST['qo_proveedores_direction'] );
        } 
        if ( isset( $_POST['qo_proveedores_prod_serv'] ) ){
            update_post_meta( $idqo_proveedores, 'qo_proveedores_prod_serv', $_POST['qo_proveedores_prod_serv'] );
        }
        if ( isset( $_POST['qo_proveedores_actividad'] ) ){
            update_post_meta( $idqo_proveedores, 'qo_proveedores_actividad', $_POST['qo_proveedores_actividad'] );
        }
        if ( isset( $_POST['qo_proveedores_contactComercial'] ) ){
            update_post_meta( $idqo_proveedores, 'qo_proveedores_contactComercial', $_POST['qo_proveedores_contactComercial'] );
        }
        if ( isset( $_POST['qo_proveedores_telefono'] ) ){
            update_post_meta( $idqo_proveedores, 'qo_proveedores_telefono', $_POST['qo_proveedores_telefono'] );
        }
        if ( isset( $_POST['qo_proveedores_email'] ) ){
            update_post_meta( $idqo_proveedores, 'qo_proveedores_email', $_POST['qo_proveedores_email'] );
        }
        if ( isset( $_POST['qo_proveedores_fecha_ingreso'] ) ){
            update_post_meta( $idqo_proveedores, 'qo_proveedores_fecha_ingreso', $_POST['qo_proveedores_fecha_ingreso'] );
        }
	}
}


//qo_cotizaciones
add_action( 'add_meta_boxes', 'qo_cotizaciones_custom_metabox' );

function qo_cotizaciones_custom_metabox(){
	add_meta_box( 'qo_cotizaciones_meta', 'Información Cotizacion', 'display_qo_cotizaciones_atributos', 'qo_cotizaciones', 'advanced', 'default');
}

function display_qo_cotizaciones_atributos( $qo_cotizaciones ){
    $estatus       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_estatus', true ) );
    $iva_inc      = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_iva_inc', true ) );
    $modelo       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo', true ) );
    $modelo2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo2', true ) );
    $modelo3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo3', true ) );
    $modelo4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo4', true ) );
    $modelo5       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo5', true ) );
    $modelo6       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo6', true ) );
    $modelo7       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo7', true ) );
    $modelo8       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo8', true ) );
    $modelo9       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo9', true ) );
    $modelo10       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo10', true ) );
    $modelo11       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo11', true ) );
    $modelo12       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo12', true ) );
    $modelo13       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo13', true ) );
    $modelo14       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo14', true ) );
    $modelo15       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo15', true ) );
    $modelo16       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_modelo16', true ) );
    $nota         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota', true ) );    
    $nota2         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota2', true ) );    
    $nota3         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota3', true ) );    
    $nota4         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota4', true ) );    
    $nota5         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota5', true ) );    
    $nota6         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota6', true ) );    
    $nota7         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota7', true ) );    
    $nota8         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota8', true ) );    
    $nota9         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota9', true ) );    
    $nota10         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota10', true ) );    
    $nota11         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota11', true ) );    
    $nota12         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota12', true ) );    
    $nota13         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota13', true ) );    
    $nota14         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota14', true ) );    
    $nota15         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota15', true ) );    
    $nota16         = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_nota16', true ) );    
    $piezas       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas', true ) );    
    $piezas2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas2', true ) );   
    $piezas3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas3', true ) );   
    $piezas4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas4', true ) );   
    $piezas5       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas5', true ) );   
    $piezas6       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas6', true ) );   
    $piezas7       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas7', true ) );   
    $piezas8       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas8', true ) );   
    $piezas9       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas9', true ) );   
    $piezas10       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas10', true ) );   
    $piezas11       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas11', true ) );   
    $piezas12       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas12', true ) );   
    $piezas13       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas13', true ) );   
    $piezas14       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas14', true ) );   
    $piezas15       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas15', true ) );   
    $piezas16       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_piezas16', true ) );   
    $precio       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio', true ) );
    $precio2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio2', true ) );
    $precio3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio3', true ) );
    $precio4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio4', true ) );
    $precio5       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio5', true ) );
    $precio6       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio6', true ) );
    $precio7       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio7', true ) );
    $precio8       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio8', true ) );
    $precio9       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio9', true ) );
    $precio10       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio10', true ) );
    $precio11       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio11', true ) );
    $precio12       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio12', true ) );
    $precio13       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio13', true ) );
    $precio14       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio14', true ) );
    $precio15       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio15', true ) );
    $precio16       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_precio16', true ) );
    $detalle       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle', true ) );
    $detalle2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle2', true ) );
    $detalle3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle3', true ) );
    $detalle4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle4', true ) );
    $detalle5       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle5', true ) );
    $detalle6       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle6', true ) );
    $detalle7       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle7', true ) );
    $detalle8       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle8', true ) );
    $detalle9       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle9', true ) );
    $detalle10       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle10', true ) );
    $detalle11       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle11', true ) );
    $detalle12       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle12', true ) );
    $detalle13       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle13', true ) );
    $detalle14       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle14', true ) );
    $detalle15       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle15', true ) );
    $detalle16       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_detalle16', true ) );    
    $muestra_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra_1', true ) );
    $muestra_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra_2', true ) );
    $muestra_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra_3', true ) );
    $muestra_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra_4', true ) );
    $muestra2_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra2_1', true ) );
    $muestra2_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra2_2', true ) );
    $muestra2_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra2_3', true ) );
    $muestra2_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra2_4', true ) );
    $muestra3_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra3_1', true ) );
    $muestra3_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra3_2', true ) );
    $muestra3_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra3_3', true ) );
    $muestra3_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra3_4', true ) );
    $muestra4_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra4_1', true ) );
    $muestra4_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra4_2', true ) );
    $muestra4_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra4_3', true ) );
    $muestra4_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra4_4', true ) );
    $muestra5_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra5_1', true ) );
    $muestra5_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra5_2', true ) );
    $muestra5_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra5_3', true ) );
    $muestra5_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra5_4', true ) );
    $muestra6_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra6_1', true ) );
    $muestra6_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra6_2', true ) );
    $muestra6_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra6_3', true ) );
    $muestra6_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra6_4', true ) );
    $muestra7_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra7_1', true ) );
    $muestra7_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra7_2', true ) );
    $muestra7_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra7_3', true ) );
    $muestra7_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra7_4', true ) );
    $muestra8_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra8_1', true ) );
    $muestra8_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra8_2', true ) );
    $muestra8_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra8_3', true ) );
    $muestra8_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra8_4', true ) );
    $muestra9_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra9_1', true ) );
    $muestra9_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra9_2', true ) );
    $muestra9_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra9_3', true ) );
    $muestra9_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra9_4', true ) );
    $muestra10_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra10_1', true ) );
    $muestra10_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra10_2', true ) );
    $muestra10_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra10_3', true ) );
    $muestra10_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra10_4', true ) );
    $muestra11_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra11_1', true ) );
    $muestra11_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra11_2', true ) );
    $muestra11_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra11_3', true ) );
    $muestra11_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra11_4', true ) );
    $muestra12_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra12_1', true ) );
    $muestra12_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra12_2', true ) );
    $muestra12_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra12_3', true ) );
    $muestra12_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra12_4', true ) );
    $muestra13_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra13_1', true ) );
    $muestra13_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra13_2', true ) );
    $muestra13_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra13_3', true ) );
    $muestra13_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra13_4', true ) );
    $muestra14_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra14_1', true ) );
    $muestra14_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra14_2', true ) );
    $muestra14_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra14_3', true ) );
    $muestra14_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra14_4', true ) );
    $muestra15_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra15_1', true ) );
    $muestra15_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra15_2', true ) );
    $muestra15_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra15_3', true ) );
    $muestra15_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra15_4', true ) );
    $muestra16_1       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra16_1', true ) );
    $muestra16_2       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra16_2', true ) );
    $muestra16_3       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra16_3', true ) );
    $muestra16_4       = esc_html( get_post_meta( $qo_cotizaciones->ID, 'qo_cotizaciones_muestra16_4', true ) );

    include (TEMPLATEPATH . '/templates-custom-metabox/fields-cotizacion.php');

}

add_action( 'save_post', 'qo_cotizaciones_save_metas', 10, 2 );
function qo_cotizaciones_save_metas( $idqo_cotizaciones, $qo_cotizaciones ){
	//Comprobamos que es del tipo que nos interesa
	if ( $qo_cotizaciones->post_type == 'qo_cotizaciones' ){
	//Guardamos los datos que vienen en el POST
        if ( isset( $_POST['qo_cotizaciones_estatus'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_estatus', $_POST['qo_cotizaciones_estatus'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo', $_POST['qo_cotizaciones_modelo'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo2', $_POST['qo_cotizaciones_modelo2'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo3', $_POST['qo_cotizaciones_modelo3'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo4', $_POST['qo_cotizaciones_modelo4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_modelo5'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo5', $_POST['qo_cotizaciones_modelo5'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo6'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo6', $_POST['qo_cotizaciones_modelo6'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo7'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo7', $_POST['qo_cotizaciones_modelo7'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo8'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo8', $_POST['qo_cotizaciones_modelo8'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo9'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo9', $_POST['qo_cotizaciones_modelo9'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo10'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo10', $_POST['qo_cotizaciones_modelo10'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo11'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo11', $_POST['qo_cotizaciones_modelo11'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo12'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo12', $_POST['qo_cotizaciones_modelo12'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo13'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo13', $_POST['qo_cotizaciones_modelo13'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo14'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo14', $_POST['qo_cotizaciones_modelo14'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo15'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo15', $_POST['qo_cotizaciones_modelo15'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_modelo16'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_modelo16', $_POST['qo_cotizaciones_modelo16'] );
        } 
        if ( isset( $_POST['qo_cotizaciones_nota'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota', $_POST['qo_cotizaciones_nota'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota2', $_POST['qo_cotizaciones_nota2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota3', $_POST['qo_cotizaciones_nota3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota4', $_POST['qo_cotizaciones_nota4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota5'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota5', $_POST['qo_cotizaciones_nota5'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota6'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota6', $_POST['qo_cotizaciones_nota6'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota7'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota7', $_POST['qo_cotizaciones_nota7'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota8'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota8', $_POST['qo_cotizaciones_nota8'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota9'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota9', $_POST['qo_cotizaciones_nota9'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota10'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota10', $_POST['qo_cotizaciones_nota10'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota11'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota11', $_POST['qo_cotizaciones_nota11'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota12'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota12', $_POST['qo_cotizaciones_nota12'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota13'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota13', $_POST['qo_cotizaciones_nota13'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota14'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota14', $_POST['qo_cotizaciones_nota14'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota15'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota15', $_POST['qo_cotizaciones_nota15'] );
        }
        if ( isset( $_POST['qo_cotizaciones_nota16'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_nota16', $_POST['qo_cotizaciones_nota16'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas', $_POST['qo_cotizaciones_piezas'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas2', $_POST['qo_cotizaciones_piezas2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas3', $_POST['qo_cotizaciones_piezas3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas4', $_POST['qo_cotizaciones_piezas4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas5'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas5', $_POST['qo_cotizaciones_piezas5'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas6'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas6', $_POST['qo_cotizaciones_piezas6'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas7'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas7', $_POST['qo_cotizaciones_piezas7'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas8'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas8', $_POST['qo_cotizaciones_piezas8'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas9'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas9', $_POST['qo_cotizaciones_piezas9'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas10'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas10', $_POST['qo_cotizaciones_piezas10'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas11'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas11', $_POST['qo_cotizaciones_piezas11'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas12'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas12', $_POST['qo_cotizaciones_piezas12'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas13'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas13', $_POST['qo_cotizaciones_piezas13'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas14'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas14', $_POST['qo_cotizaciones_piezas14'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas15'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas15', $_POST['qo_cotizaciones_piezas15'] );
        }
        if ( isset( $_POST['qo_cotizaciones_piezas16'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_piezas16', $_POST['qo_cotizaciones_piezas16'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio', $_POST['qo_cotizaciones_precio'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio2', $_POST['qo_cotizaciones_precio2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio3', $_POST['qo_cotizaciones_precio3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio4', $_POST['qo_cotizaciones_precio4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio5'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio5', $_POST['qo_cotizaciones_precio5'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio6'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio6', $_POST['qo_cotizaciones_precio6'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio7'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio7', $_POST['qo_cotizaciones_precio7'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio8'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio8', $_POST['qo_cotizaciones_precio8'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio9'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio9', $_POST['qo_cotizaciones_precio9'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio10'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio10', $_POST['qo_cotizaciones_precio10'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio11'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio11', $_POST['qo_cotizaciones_precio11'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio12'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio12', $_POST['qo_cotizaciones_precio12'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio13'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio13', $_POST['qo_cotizaciones_precio13'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio14'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio14', $_POST['qo_cotizaciones_precio14'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio15'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio15', $_POST['qo_cotizaciones_precio15'] );
        }
        if ( isset( $_POST['qo_cotizaciones_precio16'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_precio16', $_POST['qo_cotizaciones_precio16'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle', $_POST['qo_cotizaciones_detalle'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle2', $_POST['qo_cotizaciones_detalle2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle3', $_POST['qo_cotizaciones_detalle3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle4', $_POST['qo_cotizaciones_detalle4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle5'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle5', $_POST['qo_cotizaciones_detalle5'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle6'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle6', $_POST['qo_cotizaciones_detalle6'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle7'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle7', $_POST['qo_cotizaciones_detalle7'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle8'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle8', $_POST['qo_cotizaciones_detalle8'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle9'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle9', $_POST['qo_cotizaciones_detalle9'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle10'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle10', $_POST['qo_cotizaciones_detalle10'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle11'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle11', $_POST['qo_cotizaciones_detalle11'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle12'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle12', $_POST['qo_cotizaciones_detalle12'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle13'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle13', $_POST['qo_cotizaciones_detalle13'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle14'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle14', $_POST['qo_cotizaciones_detalle14'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle15'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle15', $_POST['qo_cotizaciones_detalle15'] );
        }
        if ( isset( $_POST['qo_cotizaciones_detalle16'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_detalle16', $_POST['qo_cotizaciones_detalle16'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra_1', $_POST['qo_cotizaciones_muestra_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra_2', $_POST['qo_cotizaciones_muestra_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra_3', $_POST['qo_cotizaciones_muestra_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra_4', $_POST['qo_cotizaciones_muestra_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra2_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra2_1', $_POST['qo_cotizaciones_muestra2_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra2_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra2_2', $_POST['qo_cotizaciones_muestra2_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra2_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra2_3', $_POST['qo_cotizaciones_muestra2_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra2_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra2_4', $_POST['qo_cotizaciones_muestra2_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra3_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra3_1', $_POST['qo_cotizaciones_muestra3_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra3_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra3_2', $_POST['qo_cotizaciones_muestra3_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra3_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra3_3', $_POST['qo_cotizaciones_muestra3_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra3_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra3_4', $_POST['qo_cotizaciones_muestra3_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra4_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra4_1', $_POST['qo_cotizaciones_muestra4_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra4_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra4_2', $_POST['qo_cotizaciones_muestra4_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra4_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra4_3', $_POST['qo_cotizaciones_muestra4_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra4_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra4_4', $_POST['qo_cotizaciones_muestra4_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra5_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra5_1', $_POST['qo_cotizaciones_muestra5_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra5_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra5_2', $_POST['qo_cotizaciones_muestra5_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra5_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra5_3', $_POST['qo_cotizaciones_muestra5_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra5_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra5_4', $_POST['qo_cotizaciones_muestra5_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra6_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra6_1', $_POST['qo_cotizaciones_muestra6_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra6_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra6_2', $_POST['qo_cotizaciones_muestra6_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra6_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra6_3', $_POST['qo_cotizaciones_muestra6_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra6_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra6_4', $_POST['qo_cotizaciones_muestra6_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra7_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra7_1', $_POST['qo_cotizaciones_muestra7_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra7_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra7_2', $_POST['qo_cotizaciones_muestra7_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra7_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra7_3', $_POST['qo_cotizaciones_muestra7_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra7_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra7_4', $_POST['qo_cotizaciones_muestra7_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra8_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra8_1', $_POST['qo_cotizaciones_muestra8_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra8_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra8_2', $_POST['qo_cotizaciones_muestra8_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra8_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra8_3', $_POST['qo_cotizaciones_muestra8_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra8_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra8_4', $_POST['qo_cotizaciones_muestra8_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra9_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra9_1', $_POST['qo_cotizaciones_muestra9_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra9_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra9_2', $_POST['qo_cotizaciones_muestra9_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra9_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra9_3', $_POST['qo_cotizaciones_muestra9_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra9_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra9_4', $_POST['qo_cotizaciones_muestra9_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra10_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra10_1', $_POST['qo_cotizaciones_muestra10_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra10_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra10_2', $_POST['qo_cotizaciones_muestra10_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra10_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra10_3', $_POST['qo_cotizaciones_muestra10_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra10_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra10_4', $_POST['qo_cotizaciones_muestra10_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra11_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra11_1', $_POST['qo_cotizaciones_muestra11_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra11_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra11_2', $_POST['qo_cotizaciones_muestra11_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra11_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra11_3', $_POST['qo_cotizaciones_muestra11_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra11_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra11_4', $_POST['qo_cotizaciones_muestra11_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra12_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra12_1', $_POST['qo_cotizaciones_muestra12_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra12_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra12_2', $_POST['qo_cotizaciones_muestra12_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra12_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra12_3', $_POST['qo_cotizaciones_muestra12_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra12_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra12_4', $_POST['qo_cotizaciones_muestra12_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra13_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra13_1', $_POST['qo_cotizaciones_muestra13_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra13_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra13_2', $_POST['qo_cotizaciones_muestra13_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra13_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra13_3', $_POST['qo_cotizaciones_muestra13_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra13_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra13_4', $_POST['qo_cotizaciones_muestra13_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra14_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra14_1', $_POST['qo_cotizaciones_muestra14_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra14_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra14_2', $_POST['qo_cotizaciones_muestra14_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra14_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra14_3', $_POST['qo_cotizaciones_muestra14_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra14_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra14_4', $_POST['qo_cotizaciones_muestra14_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra15_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra15_1', $_POST['qo_cotizaciones_muestra15_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra15_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra15_2', $_POST['qo_cotizaciones_muestra15_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra15_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra15_3', $_POST['qo_cotizaciones_muestra15_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra15_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra15_4', $_POST['qo_cotizaciones_muestra15_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra16_1'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra16_1', $_POST['qo_cotizaciones_muestra16_1'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra16_2'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra16_2', $_POST['qo_cotizaciones_muestra16_2'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra16_3'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra16_3', $_POST['qo_cotizaciones_muestra16_3'] );
        }
        if ( isset( $_POST['qo_cotizaciones_muestra16_4'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_muestra16_4', $_POST['qo_cotizaciones_muestra16_4'] );
        }
        if ( isset( $_POST['qo_cotizaciones_iva_inc'] ) ){
            update_post_meta( $idqo_cotizaciones, 'qo_cotizaciones_iva_inc', $_POST['qo_cotizaciones_iva_inc'] );
        }
	}
}

/* Proyectos */
add_action( 'add_meta_boxes', 'proyectos_custom_metabox' );
function proyectos_custom_metabox(){
    add_meta_box( 'proyectos_meta', 'Elementos del proyecto', 'display_proyectos_atributos', 'proyectos', 'advanced', 'default');
}

function display_proyectos_atributos( $proyectos ){
    $tipo           = esc_html( get_post_meta( $proyectos->ID, 'proyectos_tipo', true ) );
    $ancho          = esc_html( get_post_meta( $proyectos->ID, 'proyectos_ancho', true ) );
    $visualizacion  = esc_html( get_post_meta( $proyectos->ID, 'proyectos_visualizacion', true ) );
    /*Imagen*/
    $imagenTipo     = esc_html( get_post_meta( $proyectos->ID, 'proyectos_imagenTipo', true ) );
    $imagenElementos= esc_html( get_post_meta( $proyectos->ID, 'proyectos_imagenElementos', true ) );
    /*Video*/
    $videoElementos= esc_html( get_post_meta( $proyectos->ID, 'proyectos_videoElementos', true ) );
    /*Sitio web*/
    $urlSitioWeb    = esc_html( get_post_meta( $proyectos->ID, 'proyectos_urlSitioWeb', true ) );

    $item1      = esc_html( get_post_meta( $proyectos->ID, 'proyectos_item1', true ) );
    $item2      = esc_html( get_post_meta( $proyectos->ID, 'proyectos_item2', true ) );
    $item3      = esc_html( get_post_meta( $proyectos->ID, 'proyectos_item3', true ) );
    $item4      = esc_html( get_post_meta( $proyectos->ID, 'proyectos_item4', true ) );
    $item5      = esc_html( get_post_meta( $proyectos->ID, 'proyectos_item5', true ) );
    $item6      = esc_html( get_post_meta( $proyectos->ID, 'proyectos_item6', true ) );
    $item7      = esc_html( get_post_meta( $proyectos->ID, 'proyectos_item7', true ) );
    $item8      = esc_html( get_post_meta( $proyectos->ID, 'proyectos_item8', true ) );
    $item9      = esc_html( get_post_meta( $proyectos->ID, 'proyectos_item9', true ) );
    $item10     = esc_html( get_post_meta( $proyectos->ID, 'proyectos_item10', true ) );
    $itemType1  = esc_html( get_post_meta( $proyectos->ID, 'proyectos_itemType1', true ) );
    $itemType2  = esc_html( get_post_meta( $proyectos->ID, 'proyectos_itemType2', true ) );
    $itemType3  = esc_html( get_post_meta( $proyectos->ID, 'proyectos_itemType3', true ) );
    $itemType4  = esc_html( get_post_meta( $proyectos->ID, 'proyectos_itemType4', true ) );
    $itemType5  = esc_html( get_post_meta( $proyectos->ID, 'proyectos_itemType5', true ) );
    $itemType6  = esc_html( get_post_meta( $proyectos->ID, 'proyectos_itemType6', true ) );
    $itemType7  = esc_html( get_post_meta( $proyectos->ID, 'proyectos_itemType7', true ) );
    $itemType8  = esc_html( get_post_meta( $proyectos->ID, 'proyectos_itemType8', true ) );
    $itemType9  = esc_html( get_post_meta( $proyectos->ID, 'proyectos_itemType9', true ) );
    $itemType10 = esc_html( get_post_meta( $proyectos->ID, 'proyectos_itemType10', true ) );
?>
    <table class="qo-custom-fields">
        <tr><th colspan="2"><label>VISUALIZACIÓN INICIAL</label><br></th></tr>
        <tr>
            <th class="width-50p">
                <label for="proyectos_tipo">Tipo de proyecto</label>
                <select id="proyectos_tipo" name="proyectos_tipo" required>
                    <option value="Imagen" <?php selected($tipo, 'Imagen'); ?>>Imagen</option>
                    <option value="Video" <?php selected($tipo, 'Video'); ?>>Video</option>
                    <option value="Sitio Web" <?php selected($tipo, 'Sitio Web'); ?>>Sitio Web</option>
                </select>
            </th>
            <th class="width-50p">
                <label for="proyectos_ancho">Ancho</label>
                <select id="proyectos_ancho" name="proyectos_ancho" required>
                    <?php $count = 5;
                    while ( $count <= 100) { ?>
                        <option value="<?php echo $count; ?>" <?php selected($ancho, $count); ?>><?php echo $count; ?>%</option>
                    <?php $count= $count + 5;
                    } ?>
                </select>               
            </th>
        </tr>
        <tr>            
            <th colspan="2" class="text-left">
                <div class="input-image">                      
                    <input type="text" name="proyectos_visualizacion" id="proyectos_visualizacion" class="meta-image" placeholder="URL imagen/video principal" value="<?php echo $visualizacion; ?>" required>
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $visualizacion; ?>">
                </div>
            </th>
        </tr>
    </table>
    <table id="tipoProyecto_imagen" class="qo-custom-fields hide">
        <tr><th colspan="2"><br><label class="uppercase">Proyecto de imagen</label><br></th></tr>
        <tr>
            <th class="width-50p">
                <label for="proyectos_imagenTipo">¿Cómo se presentará?</label>
                <select id="proyectos_imagenTipo" name="proyectos_imagenTipo" >
                    <option value="Estatica" <?php selected($imagenTipo, 'Estatica'); ?>>Imagen estática</option>
                    <option value="Parallax" <?php selected($imagenTipo, 'Parallax'); ?>>Parallax</option>
                </select>               
            </th>
            <th class="width-50p">
                <label for="proyectos_imagenElementos">¿Muestra más elementos?</label>
                <select id="proyectos_imagenElementos" name="proyectos_imagenElementos">
                    <option value="No" <?php selected($imagenElementos, 'No'); ?>>No</option>
                    <option value="Si" <?php selected($imagenElementos, 'Si'); ?>>Sí</option>
                </select>               
            </th>
        </tr>
    </table>
    <table id="tipoProyecto_video" class="qo-custom-fields hide">
        <tr><th colspan="2"><br><label class="uppercase">Proyecto de video</label><br></th></tr>
        <tr>
            <th class="width-50p">
                <label for="proyectos_videoElementos">¿Muestra más elementos?</label>
                <select id="proyectos_videoElementos" name="proyectos_videoElementos">
                    <option value="No" <?php selected($videoElementos, 'No'); ?>>No</option>
                    <option value="Si" <?php selected($videoElementos, 'Si'); ?>>Sí</option>
                </select>               
            </th>
        </tr>
    </table>
    <table id="tipoProyecto_sitioWeb" class="qo-custom-fields hide">
        <tr><th colspan="2"><br><label class="uppercase">Proyecto de Sitio web</label><br></th></tr>
        <tr>
            <th>
                <label for="proyectos_urlSitioWeb">URL Externo</label>
                <input type="text" name="proyectos_urlSitioWeb" id="proyectos_urlSitioWeb" value="<?php echo $urlSitioWeb; ?>">
            </th>
        </tr>
    </table>
    <table id="elementosProyecto" class="qo-custom-fields hide">
        <tr><th colspan="2"><br><label class="uppercase">ELEMENTOS MODAL PROYECTO</label><br></th></tr>
        <?php $count = 1;
        while ( $count < 11) { 
            $item = ${'item' . $count};
            $itemType = ${'itemType' . $count}; ?>
            <tr>
                <th  class="text-left">
                    <div id="itemProject<?php echo $count; ?>" class="input-image">
                        <select name="proyectos_itemType<?php echo $count; ?>" id="proyectos_itemType<?php echo $count; ?>" class="typeItemProyect">
                            <option value="" <?php selected($itemType, ''); ?>></option>
                            <option value="Imagen" id="Imagen" <?php selected($itemType, 'Imagen'); ?>>Imagen</option>
                            <option value="Video" id="Video" <?php selected($itemType, 'Video'); ?>>Video</option>
                        </select>                        
                        <input type="text" name="proyectos_item<?php echo $count; ?>" id="proyectos_item<?php echo $count; ?>" class="meta-image" placeholder="URL Archivo" value="<?php echo $item; ?>">
                        <input type="button" class="button image-upload" value="Seleccionar">
                    </div>
                    <div class="image-preview">
                        <img src="<?php echo $item; ?>">
                    </div>
                </th>
            </tr>
        <?php $count++;
        } ?>
    </table>
<?php }

add_action( 'save_post', 'proyectos_save_metas', 10, 2 );
function proyectos_save_metas( $idproyectos, $proyectos ){
    //Comprobamos que es del tipo que nos interesa
    if ( $proyectos->post_type == 'proyectos' ){
    //Guardamos los datos que vienen en el POST
        if ( isset( $_POST['proyectos_tipo'] ) ){
            update_post_meta( $idproyectos, 'proyectos_tipo', $_POST['proyectos_tipo'] );
        }
        if ( isset( $_POST['proyectos_ancho'] ) ){
            update_post_meta( $idproyectos, 'proyectos_ancho', $_POST['proyectos_ancho'] );
        }
        if ( isset( $_POST['proyectos_visualizacion'] ) ){
            update_post_meta( $idproyectos, 'proyectos_visualizacion', $_POST['proyectos_visualizacion'] );
        }
        if ( isset( $_POST['proyectos_imagenTipo'] ) ){
            update_post_meta( $idproyectos, 'proyectos_imagenTipo', $_POST['proyectos_imagenTipo'] );
        }
        if ( isset( $_POST['proyectos_imagenElementos'] ) ){
            update_post_meta( $idproyectos, 'proyectos_imagenElementos', $_POST['proyectos_imagenElementos'] );
        }
        if ( isset( $_POST['proyectos_videoElementos'] ) ){
            update_post_meta( $idproyectos, 'proyectos_videoElementos', $_POST['proyectos_videoElementos'] );
        }
        if ( isset( $_POST['proyectos_urlSitioWeb'] ) ){
            update_post_meta( $idproyectos, 'proyectos_urlSitioWeb', $_POST['proyectos_urlSitioWeb'] );
        }
        $count = 1;
        while ( $count < 11) {
            if ( isset( $_POST['proyectos_item' . $count] ) ){
                update_post_meta( $idproyectos, 'proyectos_item' . $count, $_POST['proyectos_item' . $count] );
            } 
            if ( isset( $_POST['proyectos_itemType' . $count] ) ){
                update_post_meta( $idproyectos, 'proyectos_itemType' . $count, $_POST['proyectos_itemType' . $count] );
            }               
            $count++;
        }
    }
}

/* FORMS SISTEMA */
add_action ('template_redirect', 'custom_redirect_estatusCotizacion');
function custom_redirect_estatusCotizacion() {
    if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['edit_estatusCotizacion'] ) ) {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        wp_redirect($actual_link . '#notice-estatus-cotizacion');
    }
}

add_action ('template_redirect', 'custom_redirect_estatusBrief');
function custom_redirect_estatusBrief() {
    if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['edit_estatusBrief'] ) ) {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        wp_redirect($actual_link . '#notice-estatus-brief');
    }
}

add_action ('template_redirect', 'custom_redirect_tiempoBrief');
function custom_redirect_tiempoBrief() {
    if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['edit_tiempoBrief'] ) ) {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        wp_redirect($actual_link . '#notice-tiempo-cotizado');
    }
}
add_action ('template_redirect', 'custom_redirect_tiempoCreativoBrief');
function custom_redirect_tiempoCreativoBrief() {
    if ( ('POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['edit_tiempoBrief'] )) || ('POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['edit_tiempo_extBrief'] )) ) {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        wp_redirect($actual_link . '#notice-tiempo-creativo');
    }
}


add_action ('template_redirect', 'custom_redirect_emailBrief');
function custom_redirect_emailBrief() {
    if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['edit_emailBrief'] ) ) {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        wp_redirect($actual_link . '#notice-email-brief');
    }
}


/*
** Vacantes
*/
add_filter( 'manage_qo_clientes_posts_columns', 'set_custom_edit_qo_clientes_columns' );
function set_custom_edit_qo_clientes_columns($columns) {
    $columns['qo_email'] = __( 'Email', 'qo' );
    return $columns;
}

add_action( 'manage_qo_clientes_posts_custom_column' , 'custom_qo_clientes_column', 10, 2 );
function custom_qo_clientes_column( $column, $post_id ) {
    switch ( $column ) {
        case 'qo_email' :
            $email  = get_post_meta( $post_id, 'qo_clientes_email', true );
            if( $email != "")
                echo $email;
            else
                echo "-";
            break;
    }
}
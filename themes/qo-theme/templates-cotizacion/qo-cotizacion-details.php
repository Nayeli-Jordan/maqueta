<?php 
/*
	* Template Name: Estilo con Descripción
	* Template Post Type: qo_cotizaciones
*/
	get_header();
	global $post;
	
	while ( have_posts() ) : the_post();
?>
<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-custom-fields.php'); ?>

	<!-- 1 Item * Page ==> 16 Page -->
	
	<?php 
	if( $modelo != "" && $nota != "" && $piezas != "" && $precio != "" ) :
		$modeloA 	= $modelo;
		$notaA 		= $nota;
		$piezasA 	= $piezas;
		$precioA 	= $precio;
		$detalleA 	= $detalle;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo2 != "" && $nota2 != "" && $piezas2 != "" && $precio2 != "" ) :
		$modeloA 	= $modelo2;
		$notaA 		= $nota2;
		$piezasA 	= $piezas2;
		$precioA 	= $precio2;
		$detalleA 	= $detalle2;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo3 != "" && $nota3 != "" && $piezas3 != "" && $precio3 != "" ) :
		$modeloA 	= $modelo3;
		$notaA 		= $nota3;
		$piezasA 	= $piezas3;
		$precioA 	= $precio3;
		$detalleA 	= $detalle3;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo4 != "" && $nota4 != "" && $piezas4 != "" && $precio4 != "" ) :
		$modeloA 	= $modelo4;
		$notaA 		= $nota4;
		$piezasA 	= $piezas4;
		$precioA 	= $precio4;
		$detalleA 	= $detalle4;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo5 != "" && $nota5 != "" && $piezas5 != "" && $precio5 != "" ) :
		$modeloA 	= $modelo5;
		$notaA 		= $nota5;
		$piezasA 	= $piezas5;
		$precioA 	= $precio5;
		$detalleA 	= $detalle5;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo6 != "" && $nota6 != "" && $piezas6 != "" && $precio6 != "" ) :
		$modeloA 	= $modelo6;
		$notaA 		= $nota6;
		$piezasA 	= $piezas6;
		$precioA 	= $precio6;
		$detalleA 	= $detalle6;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo7 != "" && $nota7 != "" && $piezas7 != "" && $precio7 != "" ) :
		$modeloA 	= $modelo7;
		$notaA 		= $nota7;
		$piezasA 	= $piezas7;
		$precioA 	= $precio7;
		$detalleA 	= $detalle7;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo8 != "" && $nota8 != "" && $piezas8 != "" && $precio8 != "" ) :
		$modeloA 	= $modelo8;
		$notaA 		= $nota8;
		$piezasA 	= $piezas8;
		$precioA 	= $precio8;
		$detalleA 	= $detalle8;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo9 != "" && $nota9 != "" && $piezas9 != "" && $precio9 != "" ) :
		$modeloA 	= $modelo9;
		$notaA 		= $nota9;
		$piezasA 	= $piezas9;
		$precioA 	= $precio9;
		$detalleA 	= $detalle9;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo10 != "" && $nota10 != "" && $piezas10 != "" && $precio10 != "" ) :
		$modeloA 	= $modelo10;
		$notaA 		= $nota10;
		$piezasA 	= $piezas10;
		$precioA 	= $precio10;
		$detalleA 	= $detalle10;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo11 != "" && $nota11 != "" && $piezas11 != "" && $precio11 != "" ) :
		$modeloA 	= $modelo11;
		$notaA 		= $nota11;
		$piezasA 	= $piezas11;
		$precioA 	= $precio11;
		$detalleA 	= $detalle11;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo12 != "" && $nota12 != "" && $piezas12 != "" && $precio12 != "" ) :
		$modeloA 	= $modelo12;
		$notaA 		= $nota12;
		$piezasA 	= $piezas12;
		$precioA 	= $precio12;
		$detalleA 	= $detalle12;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo13 != "" && $nota13 != "" && $piezas13 != "" && $precio13 != "" ) :
		$modeloA 	= $modelo13;
		$notaA 		= $nota13;
		$piezasA 	= $piezas13;
		$precioA 	= $precio13;
		$detalleA 	= $detalle13;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo14 != "" && $nota14 != "" && $piezas14 != "" && $precio14 != "" ) :
		$modeloA 	= $modelo14;
		$notaA 		= $nota14;
		$piezasA 	= $piezas14;
		$precioA 	= $precio14;
		$detalleA 	= $detalle14;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo15 != "" && $nota15 != "" && $piezas15 != "" && $precio15 != "" ) :
		$modeloA 	= $modelo15;
		$notaA 		= $nota15;
		$piezasA 	= $piezas15;
		$precioA 	= $precio15;
		$detalleA 	= $detalle15;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $modelo16 != "" && $nota16 != "" && $piezas16 != "" && $precio16 != "" ) :
		$modeloA 	= $modelo16;
		$notaA 		= $nota16;
		$piezasA 	= $piezas16;
		$precioA 	= $precio16;
		$detalleA 	= $detalle16;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;	
	?>

	<?php if( $muestra != "" ) : ?>
		<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-muestra.php'); ?>
	<?php endif; ?>
<?php 
	endwhile; // end of the loop
	get_footer(); 
?>

<?php 
/*
	* Template Name: Estilo con Descripción
	* Template Post Type: qo_cotizaciones
*/
	get_header();
	global $post;
	
	while ( have_posts() ) : the_post();
?>
	<header class="container container-large archive-header">
		<?php include (TEMPLATEPATH . '/templates-qo/nav-qo.php'); ?>		
	</header>
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
	if( $muestra_1 != "" || $muestra_2 != "" || $muestra_3 != "" || $muestra_4 != "" ) :
		$muestraA 	= $muestra_1;
		$muestraB 	= $muestra_2;
		$muestraC 	= $muestra_3;
		$muestraD 	= $muestra_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo2 != "" && $nota2 != "" && $piezas2 != "" && $precio2 != "" ) :
		$modeloA 	= $modelo2;
		$notaA 		= $nota2;
		$piezasA 	= $piezas2;
		$precioA 	= $precio2;
		$detalleA 	= $detalle2;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra2_1 != "" || $muestra2_2 != "" || $muestra2_3 != "" || $muestra2_4 != "" ) :
		$muestraA 	= $muestra2_1;
		$muestraB 	= $muestra2_2;
		$muestraC 	= $muestra2_3;
		$muestraD 	= $muestra2_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo3 != "" && $nota3 != "" && $piezas3 != "" && $precio3 != "" ) :
		$modeloA 	= $modelo3;
		$notaA 		= $nota3;
		$piezasA 	= $piezas3;
		$precioA 	= $precio3;
		$detalleA 	= $detalle3;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra3_1 != "" || $muestra3_2 != "" || $muestra3_3 != "" || $muestra3_4 != "" ) :
		$muestraA 	= $muestra3_1;
		$muestraB 	= $muestra3_2;
		$muestraC 	= $muestra3_3;
		$muestraD 	= $muestra3_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo4 != "" && $nota4 != "" && $piezas4 != "" && $precio4 != "" ) :
		$modeloA 	= $modelo4;
		$notaA 		= $nota4;
		$piezasA 	= $piezas4;
		$precioA 	= $precio4;
		$detalleA 	= $detalle4;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra4_1 != "" || $muestra4_2 != "" || $muestra4_3 != "" || $muestra4_4 != "" ) :
		$muestraA 	= $muestra4_1;
		$muestraB 	= $muestra4_2;
		$muestraC 	= $muestra4_3;
		$muestraD 	= $muestra4_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo5 != "" && $nota5 != "" && $piezas5 != "" && $precio5 != "" ) :
		$modeloA 	= $modelo5;
		$notaA 		= $nota5;
		$piezasA 	= $piezas5;
		$precioA 	= $precio5;
		$detalleA 	= $detalle5;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra5_1 != "" || $muestra5_2 != "" || $muestra5_3 != "" || $muestra5_4 != "" ) :
		$muestraA 	= $muestra5_1;
		$muestraB 	= $muestra5_2;
		$muestraC 	= $muestra5_3;
		$muestraD 	= $muestra5_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo6 != "" && $nota6 != "" && $piezas6 != "" && $precio6 != "" ) :
		$modeloA 	= $modelo6;
		$notaA 		= $nota6;
		$piezasA 	= $piezas6;
		$precioA 	= $precio6;
		$detalleA 	= $detalle6;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;if( $muestra6_1 != "" || $muestra6_2 != "" || $muestra6_3 != "" || $muestra6_4 != "" ) :
		$muestraA 	= $muestra6_1;
		$muestraB 	= $muestra6_2;
		$muestraC 	= $muestra6_3;
		$muestraD 	= $muestra6_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo7 != "" && $nota7 != "" && $piezas7 != "" && $precio7 != "" ) :
		$modeloA 	= $modelo7;
		$notaA 		= $nota7;
		$piezasA 	= $piezas7;
		$precioA 	= $precio7;
		$detalleA 	= $detalle7;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra7_1 != "" || $muestra7_2 != "" || $muestra7_3 != "" || $muestra7_4 != "" ) :
		$muestraA 	= $muestra7_1;
		$muestraB 	= $muestra7_2;
		$muestraC 	= $muestra7_3;
		$muestraD 	= $muestra7_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo8 != "" && $nota8 != "" && $piezas8 != "" && $precio8 != "" ) :
		$modeloA 	= $modelo8;
		$notaA 		= $nota8;
		$piezasA 	= $piezas8;
		$precioA 	= $precio8;
		$detalleA 	= $detalle8;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra8_1 != "" || $muestra8_2 != "" || $muestra8_3 != "" || $muestra8_4 != "" ) :
		$muestraA 	= $muestra8_1;
		$muestraB 	= $muestra8_2;
		$muestraC 	= $muestra8_3;
		$muestraD 	= $muestra8_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo9 != "" && $nota9 != "" && $piezas9 != "" && $precio9 != "" ) :
		$modeloA 	= $modelo9;
		$notaA 		= $nota9;
		$piezasA 	= $piezas9;
		$precioA 	= $precio9;
		$detalleA 	= $detalle9;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra9_1 != "" || $muestra9_2 != "" || $muestra9_3 != "" || $muestra9_4 != "" ) :
		$muestraA 	= $muestra9_1;
		$muestraB 	= $muestra9_2;
		$muestraC 	= $muestra9_3;
		$muestraD 	= $muestra9_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo10 != "" && $nota10 != "" && $piezas10 != "" && $precio10 != "" ) :
		$modeloA 	= $modelo10;
		$notaA 		= $nota10;
		$piezasA 	= $piezas10;
		$precioA 	= $precio10;
		$detalleA 	= $detalle10;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra10_1 != "" || $muestra10_2 != "" || $muestra10_3 != "" || $muestra10_4 != "" ) :
		$muestraA 	= $muestra10_1;
		$muestraB 	= $muestra10_2;
		$muestraC 	= $muestra10_3;
		$muestraD 	= $muestra10_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo11 != "" && $nota11 != "" && $piezas11 != "" && $precio11 != "" ) :
		$modeloA 	= $modelo11;
		$notaA 		= $nota11;
		$piezasA 	= $piezas11;
		$precioA 	= $precio11;
		$detalleA 	= $detalle11;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra11_1 != "" || $muestra11_2 != "" || $muestra11_3 != "" || $muestra11_4 != "" ) :
		$muestraA 	= $muestra11_1;
		$muestraB 	= $muestra11_2;
		$muestraC 	= $muestra11_3;
		$muestraD 	= $muestra11_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo12 != "" && $nota12 != "" && $piezas12 != "" && $precio12 != "" ) :
		$modeloA 	= $modelo12;
		$notaA 		= $nota12;
		$piezasA 	= $piezas12;
		$precioA 	= $precio12;
		$detalleA 	= $detalle12;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra12_1 != "" || $muestra12_2 != "" || $muestra12_3 != "" || $muestra12_4 != "" ) :
		$muestraA 	= $muestra12_1;
		$muestraB 	= $muestra12_2;
		$muestraC 	= $muestra12_3;
		$muestraD 	= $muestra12_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo13 != "" && $nota13 != "" && $piezas13 != "" && $precio13 != "" ) :
		$modeloA 	= $modelo13;
		$notaA 		= $nota13;
		$piezasA 	= $piezas13;
		$precioA 	= $precio13;
		$detalleA 	= $detalle13;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra13_1 != "" || $muestra13_2 != "" || $muestra13_3 != "" || $muestra13_4 != "" ) :
		$muestraA 	= $muestra13_1;
		$muestraB 	= $muestra13_2;
		$muestraC 	= $muestra13_3;
		$muestraD 	= $muestra13_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo14 != "" && $nota14 != "" && $piezas14 != "" && $precio14 != "" ) :
		$modeloA 	= $modelo14;
		$notaA 		= $nota14;
		$piezasA 	= $piezas14;
		$precioA 	= $precio14;
		$detalleA 	= $detalle14;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra14_1 != "" || $muestra14_2 != "" || $muestra14_3 != "" || $muestra14_4 != "" ) :
		$muestraA 	= $muestra14_1;
		$muestraB 	= $muestra14_2;
		$muestraC 	= $muestra14_3;
		$muestraD 	= $muestra14_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo15 != "" && $nota15 != "" && $piezas15 != "" && $precio15 != "" ) :
		$modeloA 	= $modelo15;
		$notaA 		= $nota15;
		$piezasA 	= $piezas15;
		$precioA 	= $precio15;
		$detalleA 	= $detalle15;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra15_1 != "" || $muestra15_2 != "" || $muestra15_3 != "" || $muestra15_4 != "" ) :
		$muestraA 	= $muestra15_1;
		$muestraB 	= $muestra15_2;
		$muestraC 	= $muestra15_3;
		$muestraD 	= $muestra15_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( $modelo16 != "" && $nota16 != "" && $piezas16 != "" && $precio16 != "" ) :
		$modeloA 	= $modelo16;
		$notaA 		= $nota16;
		$piezasA 	= $piezas16;
		$precioA 	= $precio16;
		$detalleA 	= $detalle16;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-details-content.php');
	endif;
	if( $muestra16_1 != "" || $muestra16_2 != "" || $muestra16_3 != "" || $muestra16_4 != "" ) :
		$muestraA 	= $muestra16_1;
		$muestraB 	= $muestra16_2;
		$muestraC 	= $muestra16_3;
		$muestraD 	= $muestra16_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;
	?>
	<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-footer-fixed.php'); ?>
<?php 
	endwhile; // end of the loop
	get_footer(); 
?>

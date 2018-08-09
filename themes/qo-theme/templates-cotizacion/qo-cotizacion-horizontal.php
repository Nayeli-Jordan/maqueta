<?php 
/*
	* Template Name: Estilo Horizontal c/imagen
	* Template Post Type: qo_cotizaciones
*/ 
	get_header(); 
	global $post;
	
	while ( have_posts() ) : the_post();
?>
<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-custom-fields.php'); ?>

	<!-- 2 Item * Page ==> 8 Page -->
	
	<?php 
	if( ($modelo != "" && $nota != "" && $piezas != "" && $precio != "") || ($modelo2 != "" && $nota2 != "" && $piezas2 != "" && $precio2 != "")) :
		$modeloA 	= $modelo;
		$modeloB 	= $modelo2;
		$notaA 		= $nota;
		$notaB 		= $nota2;
		$piezasA 	= $piezas;
		$piezasB 	= $piezas2;
		$precioA 	= $precio;
		$precioB 	= $precio2;
		$muestraA	= $muestra2_1;
		$muestraB	= $muestra2_2;
		$muestraC	= $muestra2_3;
		$muestraD	= $muestra2_4;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-horizontal-content.php');
	endif;
	if( ($modelo3 != "" && $nota3 != "" && $piezas3 != "" && $precio3 != "") || ($modelo4 != "" && $nota4 != "" && $piezas4 != "" && $precio4 != "")) :
		$modeloA 	= $modelo3;
		$modeloB 	= $modelo4;
		$notaA 		= $nota3;
		$notaB 		= $nota4;
		$piezasA 	= $piezas3;
		$piezasB 	= $piezas4;
		$precioA 	= $precio3;
		$precioB 	= $precio4;
		$muestraA	= $muestra4_1;
		$muestraB	= $muestra4_2;
		$muestraC	= $muestra4_3;
		$muestraD	= $muestra4_4;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-horizontal-content.php');
	endif;
	if( ($modelo5 != "" && $nota5 != "" && $piezas5 != "" && $precio5 != "") || ($modelo6 != "" && $nota6 != "" && $piezas6 != "" && $precio6 != "")) :
		$modeloA 	= $modelo5;
		$modeloB 	= $modelo6;
		$notaA 		= $nota5;
		$notaB 		= $nota6;
		$piezasA 	= $piezas5;
		$piezasB 	= $piezas6;
		$precioA 	= $precio5;
		$precioB 	= $precio6;
		$muestraA	= $muestra6_1;
		$muestraB	= $muestra6_2;
		$muestraC	= $muestra6_3;
		$muestraD	= $muestra6_4;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-horizontal-content.php');
	endif;
	if( ($modelo7 != "" && $nota7 != "" && $piezas7 != "" && $precio7 != "") || ($modelo8 != "" && $nota8 != "" && $piezas8 != "" && $precio8 != "")) :
		$modeloA 	= $modelo7;
		$modeloB 	= $modelo8;
		$notaA 		= $nota7;
		$notaB 		= $nota8;
		$piezasA 	= $piezas7;
		$piezasB 	= $piezas8;
		$precioA 	= $precio7;
		$precioB 	= $precio8;
		$muestraA	= $muestra8_1;
		$muestraB	= $muestra8_2;
		$muestraC	= $muestra8_3;
		$muestraD	= $muestra8_4;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-horizontal-content.php');
	endif;
	if( ($modelo9 != "" && $nota9 != "" && $piezas9 != "" && $precio9 != "") || ($modelo10 != "" && $nota10 != "" && $piezas10 != "" && $precio10 != "")) :
		$modeloA 	= $modelo9;
		$modeloB 	= $modelo10;
		$notaA 		= $nota9;
		$notaB 		= $nota10;
		$piezasA 	= $piezas9;
		$piezasB 	= $piezas10;
		$precioA 	= $precio9;
		$precioB 	= $precio10;
		$muestraA	= $muestra10_1;
		$muestraB	= $muestra10_2;
		$muestraC	= $muestra10_3;
		$muestraD	= $muestra10_4;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-horizontal-content.php');
	endif;
	if( ($modelo11 != "" && $nota11 != "" && $piezas11 != "" && $precio11 != "") || ($modelo12 != "" && $nota12 != "" && $piezas12 != "" && $precio12 != "")) :
		$modeloA 	= $modelo11;
		$modeloB 	= $modelo12;
		$notaA 		= $nota11;
		$notaB 		= $nota12;
		$piezasA 	= $piezas11;
		$piezasB 	= $piezas12;
		$precioA 	= $precio11;
		$precioB 	= $precio12;
		$muestraA	= $muestra12_1;
		$muestraB	= $muestra12_2;
		$muestraC	= $muestra12_3;
		$muestraD	= $muestra12_4;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-horizontal-content.php');
	endif;
	if( ($modelo13 != "" && $nota13 != "" && $piezas13 != "" && $precio13 != "") || ($modelo14 != "" && $nota14 != "" && $piezas14 != "" && $precio14 != "")) :
		$modeloA 	= $modelo13;
		$modeloB 	= $modelo14;
		$notaA 		= $nota13;
		$notaB 		= $nota14;
		$piezasA 	= $piezas13;
		$piezasB 	= $piezas14;
		$precioA 	= $precio13;
		$precioB 	= $precio14;
		$muestraA	= $muestra14_1;
		$muestraB	= $muestra14_2;
		$muestraC	= $muestra14_3;
		$muestraD	= $muestra14_4;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-horizontal-content.php');
	endif;
	if( ($modelo15 != "" && $nota15 != "" && $piezas15 != "" && $precio15 != "") || ($modelo16 != "" && $nota16 != "" && $piezas16 != "" && $precio16 != "")) :
		$modeloA 	= $modelo15;
		$modeloB 	= $modelo16;
		$notaA 		= $nota15;
		$notaB 		= $nota16;
		$piezasA 	= $piezas15;
		$piezasB 	= $piezas16;
		$precioA 	= $precio15;
		$precioB 	= $precio16;
		$muestraA	= $muestra16_1;
		$muestraB	= $muestra16_2;
		$muestraC	= $muestra16_3;
		$muestraD	= $muestra16_4;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-horizontal-content.php');
	endif;
	?>
<?php 
	endwhile; // end of the loop
	get_footer(); 
?>
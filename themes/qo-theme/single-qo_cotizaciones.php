<?php 
	get_header(); 
	global $post;
	
	while ( have_posts() ) : the_post();
?>
	<header class="container container-large archive-header">
		<div class="bg-image bg-contain bg-qo-logo inline-block" style="background-image: url(<?php echo THEMEPATH; ?>images/identidad/logo.png)"></div>
		<div class="title-archive"><?php the_title(); ?></div>
		<?php include (TEMPLATEPATH . '/templates-qo/nav-qo.php'); ?>		
	</header>
	<?php include (TEMPLATEPATH . '/templates-cotizacion/qo-custom-fields.php'); ?>

	<!-- 4 Item * Page ==> 4 Page -->
	
	<?php 
	if( ( $modelo != "" && $nota != "" && $piezas != "" && $precio != "") || ($modelo2 != "" && $nota2 != "" && $piezas2 != "" && $precio2 != "") || ($modelo3 != "" && $nota3 != "" && $piezas3 != "" && $precio3 != "") || ($modelo4 != "" && $nota4 != "" && $piezas4 != "" && $precio4 != "")) :
		$modeloA 	= $modelo;
		$modeloB 	= $modelo2;
		$modeloC 	= $modelo3;
		$modeloD 	= $modelo4;
		$notaA 		= $nota;
		$notaB 		= $nota2;
		$notaC 		= $nota3;
		$notaD 		= $nota4;
		$piezasA 	= $piezas;
		$piezasB 	= $piezas2;
		$piezasC 	= $piezas3;
		$piezasD 	= $piezas4;
		$precioA 	= $precio;
		$precioB 	= $precio2;
		$precioC 	= $precio3;
		$precioD 	= $precio4;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-default-content.php');
	endif;
	if( $muestra4_1 != "" || $muestra4_2 != "" || $muestra4_3 != "" || $muestra4_4 != "" ) :
		$muestraA 	= $muestra4_1;
		$muestraB 	= $muestra4_2;
		$muestraC 	= $muestra4_3;
		$muestraD 	= $muestra4_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( ( $modelo5 != "" && $nota5 != "" && $piezas5 != "" && $precio5 != "") || ($modelo6 != "" && $nota6 != "" && $piezas6 != "" && $precio6 != "") || ($modelo7 != "" && $nota7 != "" && $piezas7 != "" && $precio7 != "") || ($modelo8 != "" && $nota8 != "" && $piezas8 != "" && $precio8 != "")) :
		$modeloA 	= $modelo5;
		$modeloB 	= $modelo6;
		$modeloC 	= $modelo7;
		$modeloD 	= $modelo8;
		$notaA 		= $nota5;
		$notaB 		= $nota6;
		$notaC 		= $nota7;
		$notaD 		= $nota8;
		$piezasA 	= $piezas5;
		$piezasB 	= $piezas6;
		$piezasC 	= $piezas7;
		$piezasD 	= $piezas8;
		$precioA 	= $precio5;
		$precioB 	= $precio6;
		$precioC 	= $precio7;
		$precioD 	= $precio8;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-default-content.php');
	endif;
	if( $muestra8_1 != "" || $muestra8_2 != "" || $muestra8_3 != "" || $muestra8_4 != "" ) :
		$muestraA 	= $muestra8_1;
		$muestraB 	= $muestra8_2;
		$muestraC 	= $muestra8_3;
		$muestraD 	= $muestra8_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( ( $modelo9 != "" && $nota9 != "" && $piezas9 != "" && $precio9 != "") || ($modelo10 != "" && $nota10 != "" && $piezas10 != "" && $precio10 != "") || ($modelo11 != "" && $nota11 != "" && $piezas11 != "" && $precio11 != "") || ($modelo12 != "" && $nota12 != "" && $piezas12 != "" && $precio12 != "")) :
		$modeloA 	= $modelo9;
		$modeloB 	= $modelo10;
		$modeloC 	= $modelo11;
		$modeloD 	= $modelo12;
		$notaA 		= $nota9;
		$notaB 		= $nota10;
		$notaC 		= $nota11;
		$notaD 		= $nota12;
		$piezasA 	= $piezas9;
		$piezasB 	= $piezas10;
		$piezasC 	= $piezas11;
		$piezasD 	= $piezas12;
		$precioA 	= $precio9;
		$precioB 	= $precio10;
		$precioC 	= $precio11;
		$precioD 	= $precio12;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-default-content.php');
	endif;
	if( $muestra12_1 != "" || $muestra12_2 != "" || $muestra12_3 != "" || $muestra12_4 != "" ) :
		$muestraA 	= $muestra12_1;
		$muestraB 	= $muestra12_2;
		$muestraC 	= $muestra12_3;
		$muestraD 	= $muestra12_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;

	if( ( $modelo13 != "" && $nota13 != "" && $piezas13 != "" && $precio13 != "") || ($modelo14 != "" && $nota14 != "" && $piezas14 != "" && $precio14 != "") || ($modelo15 != "" && $nota15 != "" && $piezas15 != "" && $precio15 != "") || ($modelo16 != "" && $nota16 != "" && $piezas16 != "" && $precio16 != "")) :		
		$modeloA 	= $modelo13;
		$modeloB 	= $modelo14;
		$modeloC 	= $modelo15;
		$modeloD 	= $modelo16;
		$notaA 		= $nota13;
		$notaB 		= $nota14;
		$notaC 		= $nota15;
		$notaD 		= $nota16;
		$piezasA 	= $piezas13;
		$piezasB 	= $piezas14;
		$piezasC 	= $piezas15;
		$piezasD 	= $piezas16;
		$precioA 	= $precio13;
		$precioB 	= $precio14;
		$precioC 	= $precio15;
		$precioD 	= $precio16;
		include (TEMPLATEPATH . '/templates-cotizacion/content-cotizacion/qo-default-content.php');
	endif;
	if( $muestra16_1 != "" || $muestra16_2 != "" || $muestra16_3 != "" || $muestra16_4 != "" ) :
		$muestraA 	= $muestra16_1;
		$muestraB 	= $muestra16_2;
		$muestraC 	= $muestra16_3;
		$muestraD 	= $muestra16_4;
		include (TEMPLATEPATH . '/templates-cotizacion/muestra-cotizacion/qo-muestra.php');
	endif;
	?>
	<a href="<?php echo SITEURL; ?>qo_cotizaciones" class="btn btn-fixed shadow">Ver todas</a>
<?php 
	endwhile; // end of the loop
	get_footer(); 
?>	



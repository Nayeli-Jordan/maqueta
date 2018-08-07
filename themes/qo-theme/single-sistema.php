<?php 
	get_header(); 
	global $post;
	
	while ( have_posts() ) : the_post();

	$custom_fields 			= get_post_custom();
	$post_id 				= get_the_ID();

    $estatus            	= get_post_meta( $post_id, 'sistema_estatus', true );     

    $cliente            	= get_post_meta( $post_id, 'sistema_cliente', true );     
    $marca            		= get_post_meta( $post_id, 'sistema_marca', true );     
    $proyecto           	= get_post_meta( $post_id, 'sistema_proyecto', true );     
    $tiempoCotizado    		= get_post_meta( $post_id, 'sistema_tiempoCotizado', true );    
 
    $fechaRequerida    		= get_post_meta( $post_id, 'sistema_fechaRequerida', true );    
    $fechaEntrega    		= get_post_meta( $post_id, 'sistema_fechaEntrega', true ); 
    $prioridad    		= get_post_meta( $post_id, 'sistema_prioridad', true ); 

    $tiempoCreativo_di  	= get_post_meta( $post_id, 'sistema_tiempoCreativo_di', true );    
    $medioEntrada_di   		= get_post_meta( $post_id, 'sistema_medioEntrada_di', true );    
    $requerimiento_di 		= get_post_meta( $post_id, 'sistema_requerimiento_di', true );    
    $noPiezas_di    		= get_post_meta( $post_id, 'sistema_noPiezas_di', true );    
    $descripcion_di    		= get_post_meta( $post_id, 'sistema_descripcion_di', true );    
    $cantidad_di    		= get_post_meta( $post_id, 'sistema_cantidad_di', true ); 
    $detalles_di    		= get_post_meta( $post_id, 'sistema_detalles_di', true );        
    $product1_di    		= get_post_meta( $post_id, 'sistema_product1_di', true );    
    $peso1_di    			= get_post_meta( $post_id, 'sistema_peso1_di', true );    
    $cantCarga1_di    		= get_post_meta( $post_id, 'sistema_cantCarga1_di', true );    
    $largo1_di    			= get_post_meta( $post_id, 'sistema_largo1_di', true );    
    $ancho1_di    			= get_post_meta( $post_id, 'sistema_peso1_di', true );    
    $alto1_di    			= get_post_meta( $post_id, 'sistema_alto1_di', true ); 
    $product2_di    		= get_post_meta( $post_id, 'sistema_product2_di', true );    
    $peso2_di    			= get_post_meta( $post_id, 'sistema_peso2_di', true );    
    $cantCarga2_di    		= get_post_meta( $post_id, 'sistema_cantCarga2_di', true );    
    $largo2_di    			= get_post_meta( $post_id, 'sistema_largo2_di', true );    
    $ancho2_di    			= get_post_meta( $post_id, 'sistema_peso2_di', true );    
    $alto2_di    			= get_post_meta( $post_id, 'sistema_alto2_di', true ); 
    $product3_di    		= get_post_meta( $post_id, 'sistema_product3_di', true );    
    $peso3_di    			= get_post_meta( $post_id, 'sistema_peso3_di', true );    
    $cantCarga3_di    		= get_post_meta( $post_id, 'sistema_cantCarga3_di', true );    
    $largo3_di    			= get_post_meta( $post_id, 'sistema_largo3_di', true );    
    $ancho3_di    			= get_post_meta( $post_id, 'sistema_peso3_di', true );    
    $alto3_di    			= get_post_meta( $post_id, 'sistema_alto3_di', true ); 

    $tiempoCreativo_dv  	= get_post_meta( $post_id, 'sistema_tiempoCreativo_dv', true );    
    $medioEntrada_dv   		= get_post_meta( $post_id, 'sistema_medioEntrada_dv', true );    
    $requerimiento_dv 		= get_post_meta( $post_id, 'sistema_requerimiento_dv', true );    
    $noPiezas_dv    		= get_post_meta( $post_id, 'sistema_noPiezas_dv', true );    
    $descripcion_dv    		= get_post_meta( $post_id, 'sistema_descripcion_dv', true );    
    $cantidad_dv    		= get_post_meta( $post_id, 'sistema_cantidad_dv', true ); 
    $detalles_dv    		= get_post_meta( $post_id, 'sistema_detalles_dv', true );        
    $material1_dv    		= get_post_meta( $post_id, 'sistema_material1_dv', true );   
    $largo1_dv    			= get_post_meta( $post_id, 'sistema_largo1_dv', true );    
    $ancho1_dv    			= get_post_meta( $post_id, 'sistema_peso1_dv', true );    
    $alto1_dv    			= get_post_meta( $post_id, 'sistema_alto1_dv', true ); 
    $material2_dv    		= get_post_meta( $post_id, 'sistema_material2_dv', true );   
    $largo2_dv    			= get_post_meta( $post_id, 'sistema_largo2_dv', true );    
    $ancho2_dv    			= get_post_meta( $post_id, 'sistema_peso2_dv', true );    
    $alto2_dv    			= get_post_meta( $post_id, 'sistema_alto2_dv', true ); 
    $material3_dv    		= get_post_meta( $post_id, 'sistema_material3_dv', true );   
    $largo3_dv    			= get_post_meta( $post_id, 'sistema_largo3_dv', true );    
    $ancho3_dv    			= get_post_meta( $post_id, 'sistema_peso3_dv', true );    
    $alto3_dv    			= get_post_meta( $post_id, 'sistema_alto3_dv', true ); 

    $tiempoCreativo_mkt   	= get_post_meta( $post_id, 'sistema_tiempoCreativo_mkt', true );    
    $medioEntrada_mkt   	= get_post_meta( $post_id, 'sistema_medioEntrada_mkt', true );    
    $requerimiento_mkt 		= get_post_meta( $post_id, 'sistema_requerimiento_mkt', true );    
    $personasExternas_mkt   = get_post_meta( $post_id, 'sistema_personasExternas_mkt', true ); 
    $caracteristicas_mkt    = get_post_meta( $post_id, 'sistema_caracteristicas_mkt', true );  
    $noPersonas_mkt    		= get_post_meta( $post_id, 'sistema_noPersonas_mkt', true ); 
    $detalles_mkt    		= get_post_meta( $post_id, 'sistema_detalles_mkt', true ); 

    $tiempoCreativo_stm   	= get_post_meta( $post_id, 'sistema_tiempoCreativo_stm', true );    
    $medioEntrada_stm   	= get_post_meta( $post_id, 'sistema_medioEntrada_stm', true );    
    $requerimiento_stm 		= get_post_meta( $post_id, 'sistema_requerimiento_stm', true );    
    $dominioHospedaje_stm   = get_post_meta( $post_id, 'sistema_dominioHospedaje_stm', true ); 
    $dominio_stm    		= get_post_meta( $post_id, 'sistema_dominio_stm', true );  
    $ftp_stm    			= get_post_meta( $post_id, 'sistema_ftp_stm', true ); 
    $detalles_stm    		= get_post_meta( $post_id, 'sistema_detalles_stm', true ); 

    $tiempoCreativo1_ext   	= get_post_meta( $post_id, 'sistema_tiempoCreativo1_ext', true );  
    $solicitud1_ext   		= get_post_meta( $post_id, 'sistema_solicitud1_ext', true );  
    $solic_fecha1_ext   	= get_post_meta( $post_id, 'sistema_solic_fecha1_ext', true );  
    $solic_hora1_ext   		= get_post_meta( $post_id, 'sistema_solic_hora1_ext', true );  
    $req_fecha1_ext   		= get_post_meta( $post_id, 'sistema_req_fecha1_ext', true );  
    $req_hora1_ext   		= get_post_meta( $post_id, 'sistema_req_hora1_ext', true ); 
    $ent_fecha1_ext   		= get_post_meta( $post_id, 'sistema_ent_fecha1_ext', true );  
    $ent_hora1_ext   		= get_post_meta( $post_id, 'sistema_ent_hora1_ext', true );
    $tiempoCreativo2_ext   	= get_post_meta( $post_id, 'sistema_tiempoCreativo2_ext', true );
    $solicitud2_ext   		= get_post_meta( $post_id, 'sistema_solicitud2_ext', true );  
    $solic_fecha2_ext   	= get_post_meta( $post_id, 'sistema_solic_fecha2_ext', true );  
    $solic_hora2_ext   		= get_post_meta( $post_id, 'sistema_solic_hora2_ext', true );  
    $req_fecha2_ext   		= get_post_meta( $post_id, 'sistema_req_fecha2_ext', true );  
    $req_hora2_ext   		= get_post_meta( $post_id, 'sistema_req_hora2_ext', true ); 
    $ent_fecha2_ext   		= get_post_meta( $post_id, 'sistema_ent_fecha2_ext', true );  
    $ent_hora2_ext   		= get_post_meta( $post_id, 'sistema_ent_hora2_ext', true );  
    $tiempoCreativo3_ext   	= get_post_meta( $post_id, 'sistema_tiempoCreativo3_ext', true );
    $solicitud3_ext   		= get_post_meta( $post_id, 'sistema_solicitud3_ext', true );  
    $solic_fecha3_ext   	= get_post_meta( $post_id, 'sistema_solic_fecha3_ext', true );  
    $solic_hora3_ext   		= get_post_meta( $post_id, 'sistema_solic_hora3_ext', true );  
    $req_fecha3_ext   		= get_post_meta( $post_id, 'sistema_req_fecha3_ext', true );  
    $req_hora3_ext   		= get_post_meta( $post_id, 'sistema_req_hora3_ext', true ); 
    $ent_fecha3_ext   		= get_post_meta( $post_id, 'sistema_ent_fecha3_ext', true );  
    $ent_hora3_ext   		= get_post_meta( $post_id, 'sistema_ent_hora3_ext', true );
    $tiempoCreativo4_ext   	= get_post_meta( $post_id, 'sistema_tiempoCreativo4_ext', true );
    $solicitud4_ext   		= get_post_meta( $post_id, 'sistema_solicitud4_ext', true );  
    $solic_fecha4_ext   	= get_post_meta( $post_id, 'sistema_solic_fecha4_ext', true );  
    $solic_hora4_ext   		= get_post_meta( $post_id, 'sistema_solic_hora4_ext', true );  
    $req_fecha4_ext   		= get_post_meta( $post_id, 'sistema_req_fecha4_ext', true );  
    $req_hora4_ext   		= get_post_meta( $post_id, 'sistema_req_hora4_ext', true ); 
    $ent_fecha4_ext   		= get_post_meta( $post_id, 'sistema_ent_fecha4_ext', true );  
    $ent_hora4_ext   		= get_post_meta( $post_id, 'sistema_ent_hora4_ext', true ); 	
?>

	<div id="container-brief" class="container container-large">
		<div id="header-brief" class="relative margin-bottom-large">
			<div class="row">
				<div class="col s12 sm6 m4 l2 bg-purple-xlight"><p>Solicitante</p></div>
				<div class="col s12 sm6 m4 l2">
				<?php 
					$terms = get_the_terms($post->ID, 'solicitante');
					foreach($terms as $term){
						echo $term->name . "</br>";
					}
				?>
				</div>
				<div class="col s12 sm6 m4 l2 clear bg-purple-xlight"><p>Cliente</p></div>
				<div class="col s12 sm6 m4 l2"><?php echo $cliente; ?></div>
				<div class="col s12 sm6 m4 l2 clear bg-purple-xlight"><p>Marca</p></div>
				<div class="col s12 sm6 m4 l2"><?php echo $marca ?></p></div>
				<div class="col s12 sm6 m4 l2 clear bg-purple-xlight"><p>Proyecto</p></div>
				<div class="col s12 sm6 m4 l2"><?php echo $proyecto; ?></div>
				<div class="col s12 sm6 m4 l2 hide-on-sm-and-down bg-purple-light"><p class="color-light text-center">Tiempo Cotizado</p></div>
				<div class="col s12 sm6 m4 l2 clear bg-purple-xlight"><p>Requerimiento</p></div>
				<div class="col s12 sm6 m4 l2">
				<?php 
					$terms = get_the_terms($post->ID, 'requerimiento');
					foreach($terms as $term){
						echo "<span class='block'>" . $term->name . "<span class='etiqueta-requerimiento bg-" . $term->slug . "'></span></span>";
					}
				?>
				</div>
				<div class="col s12 sm6 m4 l2 hide-on-med-and-up bg-purple-light"><p class="color-light text-center">Tiempo Cotizado</p></div>
				<div class="col s12 sm6 m4 l2 border-purple-light"><?php echo $tiempoCotizado; ?></div>
			</div>
			<div class="brief-general-info">
				<div class="row">
					<div class="col s12 sm6 m4 l6 bg-purple-xlight"><p>No. de Brief</p></div>
					<div class="col s12 sm6 m4 l6"><?php echo get_the_ID(); ?></div>
					<div class="col s12 sm6 m4 l6 clear bg-purple-xlight"><p>Fecha Requerida</p></div>
					<div class="col s12 sm6 m4 l6"><?php echo $fechaRequerida; ?></div>
					<div class="col s12 sm6 m4 l6 clear bg-purple-xlight"><p>Fecha de Entrega</p></div>
					<div class="col s12 sm6 m4 l6"><?php echo $fechaEntrega; ?></div>
					<div class="col s12 sm6 m4 l6 clear bg-purple-xlight"><p>Responsable</p></div>
					<div class="col s12 sm6 m4 l6">
					<?php 
						$terms = get_the_terms($post->ID, 'responsable');
						foreach($terms as $term){
							echo $term->name . "</br>";
						}
					?>
					</div>
					<div class="col s12 sm6 m4 l6 clear bg-purple-xlight"><p>Prioridad</p></div>
					<div class="col s12 sm6 m4 l6"><?php echo $prioridad; ?><span class="etiqueta-prioridad bg-<?php echo $prioridad; ?>"></span></div>
				</div>
			</div>			
		</div>

		<?php if (has_term('area-creativa', 'requerimiento')) : ?>
		<div id="brief-dv" class="body-brief">
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>DISEÑO VISUAL / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Medio de entrada</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $medioEntrada_dv; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Requerimiento</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $requerimiento_dv; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>No. de piezas</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $noPiezas_dv; ?></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up bg-purple-xlight"><p>Cantidad a producir</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up"><?php echo $cantidad_dv; ?></div>
					<div class="col s12 sm6 l4 clear bg-purple-xlight"><p>Descripción general del proyecto:</p></div>
					<div class="col s12 sm6 l4"><?php echo $descripcion_dv; ?></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down bg-purple-xlight"><p>Cantidad a producir</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down"><?php echo $cantidad_dv; ?></div>
					<div class="col s12 clear"><?php echo $detalles_dv; ?></div>
					<div class="col s12 clear bg-purple-clare"><p class="color-light">Llenar en caso de tener medida de material creativo:</p></div>
					<div class="col s12 m3 l2 clear bg-purple-xlight"><p>MATERIAL 1</p></div>
					<div class="col s12 m9 l10"><?php echo $material1_dv; ?></div>
					<div class="col s12 sm6 l2 clear bg-purple-xlight"><p>Largo (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $largo1_dv; ?></div>
					<div class="col s12 sm6 l2 bg-purple-xlight"><p>Ancho (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $ancho1_dv; ?></div>
					<div class="col s12 sm6 l2 bg-purple-xlight"><p>Alto (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $alto1_dv; ?></div>
					<div class="col s12 m3 l2 clear bg-purple-xlight"><p>MATERIAL 2</p></div>
					<div class="col s12 m9 l10"><?php echo $material2_dv; ?></div>
					<div class="col s12 sm6 l2 clear bg-purple-xlight"><p>Largo (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $largo2_dv; ?></div>
					<div class="col s12 sm6 l2 bg-purple-xlight"><p>Ancho (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $ancho2_dv; ?></div>
					<div class="col s12 sm6 l2 bg-purple-xlight"><p>Alto (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $ancho3_dv; ?></div>
					<div class="col s12 m3 l2 clear bg-purple-xlight"><p>MATERIAL 3</p></div>
					<div class="col s12 m9 l10"><?php echo $material3_dv; ?></div>
					<div class="col s12 sm6 l2 clear bg-purple-xlight"><p>Largo (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $largo3_dv; ?></div>
					<div class="col s12 sm6 l2 bg-purple-xlight"><p>Ancho (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $ancho3_dv; ?></div>
					<div class="col s12 sm6 l2 bg-purple-xlight"><p>Alto (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $alto3_dv; ?></div>
					<div class="col s12 sm6 m6 l2 offset-l8 clear bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
					<div class="col s12 sm6 m6 l2 border-purple-light"><?php echo $tiempoCreativo_dv; ?></div>
				</div>
			</div>
		</div>		
		<?php endif; ?>

		<?php if (has_term('area-industrial', 'requerimiento')) : ?>
		<div id="brief-di" class="body-brief">
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>DISEÑO INDUSTRIAL / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Medio de entrada</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $medioEntrada_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Requerimiento</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $requerimiento_di; ?></div>
					<div class="col s12 sm6 m3 l2 clear-on-med-and-down bg-purple-xlight"><p>No. de piezas</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $noPiezas_di; ?></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up bg-purple-xlight"><p>Cantidad a producir</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up"><?php echo $cantidad_di; ?></div>
					<div class="col s12 m6 l4 clear-on-large-and-up bg-purple-xlight"><p>Descripción general del proyecto:</p></div>
					<div class="col s12 m6 l4"><?php echo $descripcion_di; ?></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down bg-purple-xlight"><p>Cantidad a producir</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down"><?php echo $cantidad_di; ?></div>
					<div class="col s12 clear"><?php echo $detalles_di; ?></div>
					<div class="col s12 clear bg-purple-clare"><p class="color-light">Llenar en caso de tener medida de producto o material creativo:</p></div>
					<div class="col s12 sm6 m3 l2 clear bg-purple-xlight"><p>PRODUCTO 1</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $product1_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Peso (kg)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $peso1_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Cantidad de Carga</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $cantCarga1_di; ?></div>
					<div class="col s12 sm6 m3 l2 clear bg-purple-xlight"><p>Largo (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $largo1_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Ancho (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $ancho1_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Alto (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $alto1_di; ?></div>
					<div class="col s12 sm6 m3 l2 clear bg-purple-xlight"><p>PRODUCTO 2</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $product2_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Peso (kg)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $peso2_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Cantidad de Carga</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $cantCarga2_di; ?></div>
					<div class="col s12 sm6 m3 l2 clear bg-purple-xlight"><p>Largo (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $largo2_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Ancho (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $ancho2_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Alto (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $alto2_di; ?></div>
					<div class="col s12 sm6 m3 l2 clear bg-purple-xlight"><p>PRODUCTO 3</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $product3_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Peso (kg)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $peso3_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Cantidad de Carga</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $cantCarga3_di; ?></div>
					<div class="col s12 sm6 m3 l2 clear bg-purple-xlight"><p>Largo (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $largo3_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Ancho (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $ancho3_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Alto (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $alto3_di; ?></div>
					<div class="col s12 sm6 m6 l2 offset-l8 clear bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
					<div class="col s12 sm6 m6 l2 border-purple-light"><?php echo $tiempoCreativo_di; ?></div>
				</div>
			</div>
		</div>	
		<?php endif; ?>

		<?php if (has_term('area-social-media', 'requerimiento')) : ?>
		<div id="brief-mkt" class="body-brief">
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>MARKETING / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Medio de entrada</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $medioEntrada_mkt; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Requerimiento</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $requerimiento_mkt; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Personas externas</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up"><?php echo $personasExternas_mkt; ?></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up bg-purple-xlight"><p>Caracteristicas</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $caracteristicas_mkt; ?></div>
					<div class="col s12 m6 l4 clear hide-on-sm-and-down bg-purple-xlight"><p>Descripción general del proyecto:</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down bg-purple-xlight"><p>Caracteristicas</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down"><?php echo $caracteristicas_mkt; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>No. de personas</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $noPersonas_mkt; ?></div>
					<div class="col s12 m6 l4 clear hide-on-med-and-up bg-purple-xlight"><p>Descripción general del proyecto:</p></div>
					<div class="col s12 clear"><?php echo $detalles_mkt; ?></div>
					<div class="col s12 sm6 m6 l2 offset-l8 clear bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
					<div class="col s12 sm6 m6 l2 border-purple-light"><?php echo $tiempoCreativo_mkt; ?></div>
				</div>
			</div>
		</div>		
		<?php endif; ?>

		<?php if (has_term('area-ui-ux', 'requerimiento')) : ?>
		<div id="brief-stm" class="body-brief">
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>SISTEMAS / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Medio de entrada</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $medioEntrada_stm; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Requerimiento</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $requerimiento_stm; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Dominio y hospedaje</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $dominioHospedaje_stm; ?></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up bg-purple-xlight"><p>Dominio</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up"><?php echo $dominio_stm; ?></div>
					<div class="col s12 m6 l4  clear hide-on-sm-and-down bg-purple-xlight"><p>Descripción general del proyecto:</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down bg-purple-xlight"><p>Dominio</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down"><?php echo $dominio_stm; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>FTP</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $ftp_stm; ?></div>
					<div class="col s12 m6 l4  clear hide-on-med-and-up bg-purple-xlight"><p>Descripción general del proyecto:</p></div>
					<div class="col s12 clear"><?php echo $detalles_stm; ?></div>
					<div class="col s12 sm6 m6 l2 offset-l8 clear bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
					<div class="col s12 sm6 m6 l2 border-purple-light"><?php echo $tiempoCreativo_stm; ?></div>
				</div>
			</div>
		</div>		
		<?php endif; ?>

		<div id="brief-extra" class="body-brief">
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>LLENAR EN CASO QUE EXISTAN CAMBIOS POSTERIORES A LA PRIMER SOLICITUD</h2>
				</div>
				<div class="row">
					<div class="col s12 m5 l6 uppercase bg-purple-clare"><p class="color-light">Actualización #1</p></div>
					<div class="col s12 sm6 m4 l3 uppercase bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
					<div class="col s12 sm6 m3 l3 border-purple-light"><?php echo $tiempoCreativo1_ext; ?></div>
					<div class="col s12 m5 l2 bg-purple-xlight"><p>Solicitud</p></div>
					<div class="col s12 m7 l4"><?php echo $solicitud1_ext; ?></div>
					<div class="col s12 m5 l3 hide-on-med-and-down bg-purple-xlight"><p>Fecha y Hora Solicitado<br>Fecha Requerida<br>Fecha de ENTREGA</p></div>
					<div class="col s12 m7 l3 hide-on-med-and-down"><?php echo $solic_fecha1_ext . ' ' . $solic_hora1_ext; ?><br><?php echo $req_fecha1_ext . ' ' . $req_hora1_ext; ?><br><?php echo $ent_fecha1_ext . ' ' . $ent_hora1_ext; ?></div>
					<div class="col s12 m5 hide-on-large-and-up clear bg-purple-xlight"><p>Fecha y Hora Solicitado</p></div>
					<div class="col s12 m7 hide-on-large-and-up"><?php echo $solic_fecha1_ext . ' ' . $solic_hora1_ext; ?></div>
					<div class="col s12 m5 hide-on-large-and-up bg-purple-xlight"><p>Fecha Requerida</p></div>
					<div class="col s12 m7 hide-on-large-and-up"><?php echo $req_fecha1_ext . ' ' . $req_hora1_ext; ?></div>
					<div class="col s12 m5 hide-on-large-and-up bg-purple-xlight"><p>Fecha de ENTREGA</p></div>
					<div class="col s12 m7 hide-on-large-and-up"><?php echo $ent_fecha1_ext . ' ' . $ent_hora1_ext; ?></div>
				</div>
				<div class="row">
					<div class="col s12 m5 l6 uppercase bg-purple-clare"><p class="color-light">Actualización #2</p></div>
					<div class="col s12 sm6 m4 l3 uppercase bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
					<div class="col s12 sm6 m3 l3 border-purple-light"><?php echo $tiempoCreativo2_ext; ?></div>
					<div class="col s12 m5 l2 bg-purple-xlight"><p>Solicitud</p></div>
					<div class="col s12 m7 l4"><?php echo $solicitud2_ext; ?></div>
					<div class="col s12 m5 l3 hide-on-med-and-down bg-purple-xlight"><p>Fecha y Hora Solicitado<br>Fecha Requerida<br>Fecha de ENTREGA</p></div>
					<div class="col s12 m7 l3 hide-on-med-and-down"><?php echo $solic_fecha2_ext . ' ' . $solic_hora2_ext; ?><br><?php echo $req_fecha2_ext . ' ' . $req_hora2_ext; ?><br><?php echo $ent_fecha2_ext . ' ' . $ent_hora2_ext; ?></div>
					<div class="col s12 m5 hide-on-large-and-up clear bg-purple-xlight"><p>Fecha y Hora Solicitado</p></div>
					<div class="col s12 m7 hide-on-large-and-up"><?php echo $solic_fecha2_ext . ' ' . $solic_hora2_ext; ?></div>
					<div class="col s12 m5 hide-on-large-and-up bg-purple-xlight"><p>Fecha Requerida</p></div>
					<div class="col s12 m7 hide-on-large-and-up"><?php echo $req_fecha2_ext . ' ' . $req_hora2_ext; ?></div>
					<div class="col s12 m5 hide-on-large-and-up bg-purple-xlight"><p>Fecha de ENTREGA</p></div>
					<div class="col s12 m7 hide-on-large-and-up"><?php echo $ent_fecha2_ext . ' ' . $ent_hora2_ext; ?></div>
				</div>
				<div class="row">
					<div class="col s12 m5 l6 uppercase bg-purple-clare"><p class="color-light">Actualización #3</p></div>
					<div class="col s12 sm6 m4 l3 uppercase bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
					<div class="col s12 sm6 m3 l3 border-purple-light"><?php echo $tiempoCreativo3_ext; ?></div>
					<div class="col s12 m5 l2 bg-purple-xlight"><p>Solicitud</p></div>
					<div class="col s12 m7 l4"><?php echo $solicitud3_ext; ?></div>
					<div class="col s12 m5 l3 hide-on-med-and-down bg-purple-xlight"><p>Fecha y Hora Solicitado<br>Fecha Requerida<br>Fecha de ENTREGA</p></div>
					<div class="col s12 m7 l3 hide-on-med-and-down"><?php echo $solic_fecha3_ext . ' ' . $solic_hora3_ext; ?><br><?php echo $req_fecha3_ext . ' ' . $req_hora3_ext; ?><br><?php echo $ent_fecha3_ext . ' ' . $ent_hora3_ext; ?></div>
					<div class="col s12 m5 hide-on-large-and-up clear bg-purple-xlight"><p>Fecha y Hora Solicitado</p></div>
					<div class="col s12 m7 hide-on-large-and-up"><?php echo $solic_fecha3_ext . ' ' . $solic_hora3_ext; ?></div>
					<div class="col s12 m5 hide-on-large-and-up bg-purple-xlight"><p>Fecha Requerida</p></div>
					<div class="col s12 m7 hide-on-large-and-up"><?php echo $req_fecha3_ext . ' ' . $req_hora3_ext; ?></div>
					<div class="col s12 m5 hide-on-large-and-up bg-purple-xlight"><p>Fecha de ENTREGA</p></div>
					<div class="col s12 m7 hide-on-large-and-up"><?php echo $ent_fecha3_ext . ' ' . $ent_hora3_ext; ?></div>
				</div>
				<div class="row">
					<div class="col s12 m5 l6 uppercase bg-purple-clare"><p class="color-light">Actualización #4</p></div>
					<div class="col s12 sm6 m4 l3 uppercase bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
					<div class="col s12 sm6 m3 l3 border-purple-light"><?php echo $tiempoCreativo4_ext; ?></div>
					<div class="col s12 m5 l2 bg-purple-xlight"><p>Solicitud</p></div>
					<div class="col s12 m7 l4"><?php echo $solicitud4_ext; ?></div>
					<div class="col s12 m5 l3 hide-on-med-and-down bg-purple-xlight"><p>Fecha y Hora Solicitado<br>Fecha Requerida<br>Fecha de ENTREGA</p></div>
					<div class="col s12 m7 l3 hide-on-med-and-down"><?php echo $solic_fecha4_ext . ' ' . $solic_hora4_ext; ?><br><?php echo $req_fecha4_ext . ' ' . $req_hora4_ext; ?><br><?php echo $ent_fecha4_ext . ' ' . $ent_hora4_ext; ?></div>
					<div class="col s12 m5 hide-on-large-and-up clear bg-purple-xlight"><p>Fecha y Hora Solicitado</p></div>
					<div class="col s12 m7 hide-on-large-and-up"><?php echo $solic_fecha4_ext . ' ' . $solic_hora4_ext; ?></div>
					<div class="col s12 m5 hide-on-large-and-up bg-purple-xlight"><p>Fecha Requerida</p></div>
					<div class="col s12 m7 hide-on-large-and-up"><?php echo $req_fecha4_ext . ' ' . $req_hora4_ext; ?></div>
					<div class="col s12 m5 hide-on-large-and-up bg-purple-xlight"><p>Fecha de ENTREGA</p></div>
					<div class="col s12 m7 hide-on-large-and-up"><?php echo $ent_fecha4_ext . ' ' . $ent_hora4_ext; ?></div>
				</div>
			</div>
		</div>

	</div>

<?php 
	endwhile; // end of the loop
	get_footer(); 
?>
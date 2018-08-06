<?php 
	get_header(); 
	global $post;
	
	while ( have_posts() ) : the_post();

	$custom_fields 			= get_post_custom();
	$post_id 				= get_the_ID();

    $cliente            	= get_post_meta( $post_id, 'sistema_cliente', true );     
    $marca            		= get_post_meta( $post_id, 'sistema_marca', true );     
    $proyecto           	= get_post_meta( $post_id, 'sistema_proyecto', true );     
    $tiempoCotizado    		= get_post_meta( $post_id, 'sistema_tiempoCotizado', true );    
 
    $fechaRequerida    		= get_post_meta( $post_id, 'sistema_fechaRequerida', true );    
    $fechaEntrega    		= get_post_meta( $post_id, 'sistema_fechaEntrega', true ); 

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

    $tiempoCreativo_ext   	= get_post_meta( $post_id, 'sistema_tiempoCreativo_ext', true );  
    $solicitud1_ext   		= get_post_meta( $post_id, 'sistema_solicitud1_ext', true );  
    $solic_fecha1_ext   	= get_post_meta( $post_id, 'sistema_solic_fecha1_ext', true );  
    $solic_hora1_ext   		= get_post_meta( $post_id, 'sistema_solic_hora1_ext', true );  
    $req_fecha1_ext   		= get_post_meta( $post_id, 'sistema_req_fecha1_ext', true );  
    $req_hora1_ext   		= get_post_meta( $post_id, 'sistema_req_hora1_ext', true ); 
    $ent_fecha1_ext   		= get_post_meta( $post_id, 'sistema_ent_fecha1_ext', true );  
    $ent_hora1_ext   		= get_post_meta( $post_id, 'sistema_ent_hora1_ext', true );  
    $solicitud2_ext   		= get_post_meta( $post_id, 'sistema_solicitud2_ext', true );  
    $solic_fecha2_ext   	= get_post_meta( $post_id, 'sistema_solic_fecha2_ext', true );  
    $solic_hora2_ext   		= get_post_meta( $post_id, 'sistema_solic_hora2_ext', true );  
    $req_fecha2_ext   		= get_post_meta( $post_id, 'sistema_req_fecha2_ext', true );  
    $req_hora2_ext   		= get_post_meta( $post_id, 'sistema_req_hora2_ext', true ); 
    $ent_fecha2_ext   		= get_post_meta( $post_id, 'sistema_ent_fecha2_ext', true );  
    $ent_hora2_ext   		= get_post_meta( $post_id, 'sistema_ent_hora2_ext', true );  
    $solicitud3_ext   		= get_post_meta( $post_id, 'sistema_solicitud3_ext', true );  
    $solic_fecha3_ext   	= get_post_meta( $post_id, 'sistema_solic_fecha3_ext', true );  
    $solic_hora3_ext   		= get_post_meta( $post_id, 'sistema_solic_hora3_ext', true );  
    $req_fecha3_ext   		= get_post_meta( $post_id, 'sistema_req_fecha3_ext', true );  
    $req_hora3_ext   		= get_post_meta( $post_id, 'sistema_req_hora3_ext', true ); 
    $ent_fecha3_ext   		= get_post_meta( $post_id, 'sistema_ent_fecha3_ext', true );  
    $ent_hora3_ext   		= get_post_meta( $post_id, 'sistema_ent_hora3_ext', true );  
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
				<div class="col s2"><p>Solicitante</p></div>
				<div class="col s2"><p></p></div>
				<div class="col s2 clear"><p>Cliente</p></div>
				<div class="col s2"><p><?php echo $cliente; ?></p></div>
				<div class="col s2 clear"><p>Marca</p></div>
				<div class="col s2"><p><?php echo $marca ?></p></div>
				<div class="col s2 clear"><p>Proyecto</p></div>
				<div class="col s2"><p><?php echo $proyecto; ?></p></div>
				<div class="col s2"><p>Tiempo Cotizado</p></div>
				<div class="col s2 clear"><p>Requerimiento</p></div>
				<div class="col s2"><p></p></div>
				<div class="col s2"><p><?php echo $tiempoCotizado; ?></p></div>
			</div>
			<div class="brief-general-info">
				<div class="row">
					<div class="col s6"><p>No. de Brief</p></div>
					<div class="col s6"><p><?php echo get_the_ID(); ?> 000</p></div>
					<div class="col s6 clear"><p>Fecha Requerida</p></div>
					<div class="col s6"><p><?php echo $fechaRequerida; ?></p></div>
					<div class="col s6 clear"><p>Fecha de Entrega</p></div>
					<div class="col s6"><p><?php echo $fechaEntrega; ?></p></div>
					<div class="col s6 clear"><p>Responsable</p></div>
					<div class="col s6"><p></p></div>
					<div class="col s6 clear"><p>Prioridad</p></div>
					<div class="col s6"><p></p></div>
				</div>
			</div>			
		</div>

		<div id="brief" class="body-brief"><!-- Fanta agregar requerimiento al ID -->
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>DISEÑO INDUSTRIAL / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s2"><p>Medio de entrada</p></div>
					<div class="col s2"><p><?php echo $medioEntrada_di; ?></p></div>
					<div class="col s2"><p>Requerimiento</p></div>
					<div class="col s2"><p><?php echo $requerimiento_di; ?></p></div>
					<div class="col s2"><p>No. de piezas</p></div>
					<div class="col s2"><p><?php echo $noPiezas_di; ?></p></div>
					<div class="col s4 clear"><p>Descripción general del proyecto:</p></div>
					<div class="col s4"><p><?php echo $descripcion_di; ?></p></div>
					<div class="col s2"><p>Cantidad a producir</p></div>
					<div class="col s2"><p><?php echo $cantidad_di; ?></p></div>
					<div class="col s12 clear"><p><?php echo $detalles_di; ?></p></div>
					<div class="col s12 clear"><p>Llenar en caso de tener medida de producto o material creativo:</p></div>
					<div class="col s2 clear"><p>PRODUCTO 1</p></div>
					<div class="col s2"><p><?php echo $product1_di; ?></p></div>
					<div class="col s2"><p>Peso (kg)</p></div>
					<div class="col s2"><p><?php echo $peso1_di; ?></p></div>
					<div class="col s2"><p>Cantidad de Carga</p></div>
					<div class="col s2"><p><?php echo $cantCarga1_di; ?></p></div>
					<div class="col s2 clear"><p>Largo (cm)</p></div>
					<div class="col s2"><p><?php echo $largo1_di; ?></p></div>
					<div class="col s2"><p>Ancho (cm)</p></div>
					<div class="col s2"><p><?php echo $ancho1_di; ?></p></div>
					<div class="col s2"><p>Alto (cm)</p></div>
					<div class="col s2"><p><?php echo $alto1_di; ?></p></div>
					<div class="col s2 clear"><p>PRODUCTO 2</p></div>
					<div class="col s2"><p><?php echo $product2_di; ?></p></div>
					<div class="col s2"><p>Peso (kg)</p></div>
					<div class="col s2"><p><?php echo $peso2_di; ?></p></div>
					<div class="col s2"><p>Cantidad de Carga</p></div>
					<div class="col s2"><p><?php echo $cantCarga2_di; ?></p></div>
					<div class="col s2 clear"><p>Largo (cm)</p></div>
					<div class="col s2"><p><?php echo $largo2_di; ?></p></div>
					<div class="col s2"><p>Ancho (cm)</p></div>
					<div class="col s2"><p><?php echo $ancho2_di; ?></p></div>
					<div class="col s2"><p>Alto (cm)</p></div>
					<div class="col s2"><p><?php echo $alto2_di; ?></p></div>
					<div class="col s2 clear"><p>PRODUCTO 3</p></div>
					<div class="col s2"><p><?php echo $product3_di; ?></p></div>
					<div class="col s2"><p>Peso (kg)</p></div>
					<div class="col s2"><p><?php echo $peso3_di; ?></p></div>
					<div class="col s2"><p>Cantidad de Carga</p></div>
					<div class="col s2"><p><?php echo $cantCarga3_di; ?></p></div>
					<div class="col s2 clear"><p>Largo (cm)</p></div>
					<div class="col s2"><p><?php echo $largo3_di; ?></p></div>
					<div class="col s2"><p>Ancho (cm)</p></div>
					<div class="col s2"><p><?php echo $ancho3_di; ?></p></div>
					<div class="col s2"><p>Alto (cm)</p></div>
					<div class="col s2"><p><?php echo $alto3_di; ?></p></div>
				</div>
			</div>
		</div>

		<div id="brief" class="body-brief"><!-- Fanta agregar requerimiento al ID -->
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>DISEÑO VISUAL / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s2"><p>Medio de entrada</p></div>
					<div class="col s2"><p><?php echo $medioEntrada_dv; ?></p></div>
					<div class="col s2"><p>Requerimiento</p></div>
					<div class="col s2"><p><?php echo $requerimiento_dv; ?></p></div>
					<div class="col s2"><p>No. de piezas</p></div>
					<div class="col s2"><p><?php echo $noPiezas_dv; ?></p></div>
					<div class="col s4 clear"><p>Descripción general del proyecto:</p></div>
					<div class="col s4"><p>descripcion_dv</p></div>
					<div class="col s2"><p>Cantidad a producir</p></div>
					<div class="col s2"><p><?php echo $cantidad_dv; ?></p></div>
					<div class="col s12 clear"><p><?php echo $detalles_dv; ?></p></div>
					<div class="col s12 clear"><p>Llenar en caso de tener medida de material creativo:</p></div>
					<div class="col s2 clear"><p>MATERIAL 1</p></div>
					<div class="col s10"><p><?php echo $material1_dv; ?></p></div>
					<div class="col s2 clear"><p>Largo (cm)</p></div>
					<div class="col s2"><p><?php echo $largo1_dv; ?></p></div>
					<div class="col s2"><p>Ancho (cm)</p></div>
					<div class="col s2"><p><?php echo $ancho1_dv; ?></p></div>
					<div class="col s2"><p>Alto (cm)</p></div>
					<div class="col s2"><p><?php echo $alto1_dv; ?></p></div>
					<div class="col s2 clear"><p>MATERIAL 2</p></div>
					<div class="col s10"><p><?php echo $material2_dv; ?></p></div>
					<div class="col s2 clear"><p>Largo (cm)</p></div>
					<div class="col s2"><p><?php echo $largo2_dv; ?></p></div>
					<div class="col s2"><p>Ancho (cm)</p></div>
					<div class="col s2"><p><?php echo $ancho2_dv; ?></p></div>
					<div class="col s2"><p>Alto (cm)</p></div>
					<div class="col s2"><p><?php echo $ancho3_dv; ?></p></div>
					<div class="col s2 clear"><p>MATERIAL 3</p></div>
					<div class="col s10"><p><?php echo $material3_dv; ?></p></div>
					<div class="col s2 clear"><p>Largo (cm)</p></div>
					<div class="col s2"><p><?php echo $largo3_dv; ?></p></div>
					<div class="col s2"><p>Ancho (cm)</p></div>
					<div class="col s2"><p><?php echo $ancho3_dv; ?></p></div>
					<div class="col s2"><p>Alto (cm)</p></div>
					<div class="col s2"><p><?php echo $alto3_dv; ?></p></div>
				</div>
			</div>
		</div>

		<div id="brief" class="body-brief"><!-- Fanta agregar requerimiento al ID -->
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>MARKETING / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s2"><p>Medio de entrada</p></div>
					<div class="col s2"><p><?php echo $medioEntrada_mkt; ?></p></div>
					<div class="col s2"><p>Requerimiento</p></div>
					<div class="col s2"><p><?php echo $requerimiento_mkt; ?></p></div>
					<div class="col s2"><p>Personas externas</p></div>
					<div class="col s2"><p><?php echo $personasExternas_mkt; ?></p></div>
					<div class="col s4 clear"><p>Descripción general del proyecto:</p></div>
					<div class="col s2"><p>Caracteristicas</p></div>
					<div class="col s2"><p><?php echo $caracteristicas_mkt; ?></p></div>
					<div class="col s2"><p>No. de personas</p></div>
					<div class="col s2"><p><?php echo $noPersonas_mkt; ?></p></div>
					<div class="col s12 clear"><p><?php echo $detalles_mkt; ?></p></div>
				</div>
			</div>
		</div>

		<div id="brief" class="body-brief"><!-- Falta agregar requerimiento al ID -->
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>SISTEMAS / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s2"><p>Medio de entrada</p></div>
					<div class="col s2"><p><?php echo $medioEntrada_stm; ?></p></div>
					<div class="col s2"><p>Requerimiento</p></div>
					<div class="col s2"><p><?php echo $requerimiento_stm; ?></p></div>
					<div class="col s2"><p>Dominio y hospedaje</p></div>
					<div class="col s2"><p><?php echo $dominioHospedaje_stm; ?></p></div>
					<div class="col s4 clear"><p>Descripción general del proyecto:</p></div>
					<div class="col s2"><p>Dominio</p></div>
					<div class="col s2"><p><?php echo $dominio_stm; ?></p></div>
					<div class="col s2"><p>FTP</p></div>
					<div class="col s2"><p><?php echo $ftp_stm; ?></p></div>
					<div class="col s12 clear"><p><?php echo $detalles_stm; ?></p></div>
				</div>
			</div>
		</div>

		<div id="brief" class="body-brief"><!-- Fanta agregar requerimiento al ID -->
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>LLENAR EN CASO QUE EXISTAN CAMBIOS POSTERIORES A LA PRIMER SOLICITUD</h2>
				</div>
				<div class="row">
					<div class="col s2"><p>Actualización</p></div>
					<div class="col s2"><p></p></div>
				</div>
			</div>
		</div>

	</div>

<?php 
	endwhile; // end of the loop
	get_footer(); 
?>
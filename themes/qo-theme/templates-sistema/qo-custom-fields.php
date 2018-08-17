<?php 
	$custom_fields 			= get_post_custom();
	$post_id 				= get_the_ID();

    $estatus            	= get_post_meta( $post_id, 'sistema_estatus', true );     

    $cliente            	= get_post_meta( $post_id, 'sistema_cliente', true );     
    $marca            		= get_post_meta( $post_id, 'sistema_marca', true );     
    $proyecto           	= get_post_meta( $post_id, 'sistema_proyecto', true );     
    $tiempoCotizado    		= get_post_meta( $post_id, 'sistema_tiempoCotizado', true );    
    
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
    $ent_fecha1_ext   		= get_post_meta( $post_id, 'sistema_ent_fecha1_ext', true );  
    $ent_hora1_ext   		= get_post_meta( $post_id, 'sistema_ent_hora1_ext', true );
    $tiempoCreativo2_ext   	= get_post_meta( $post_id, 'sistema_tiempoCreativo2_ext', true );
    $solicitud2_ext   		= get_post_meta( $post_id, 'sistema_solicitud2_ext', true );  
    $solic_fecha2_ext   	= get_post_meta( $post_id, 'sistema_solic_fecha2_ext', true );  
    $solic_hora2_ext   		= get_post_meta( $post_id, 'sistema_solic_hora2_ext', true );  
    $ent_fecha2_ext   		= get_post_meta( $post_id, 'sistema_ent_fecha2_ext', true );  
    $ent_hora2_ext   		= get_post_meta( $post_id, 'sistema_ent_hora2_ext', true );  
    $tiempoCreativo3_ext   	= get_post_meta( $post_id, 'sistema_tiempoCreativo3_ext', true );
    $solicitud3_ext   		= get_post_meta( $post_id, 'sistema_solicitud3_ext', true );  
    $solic_fecha3_ext   	= get_post_meta( $post_id, 'sistema_solic_fecha3_ext', true );  
    $solic_hora3_ext   		= get_post_meta( $post_id, 'sistema_solic_hora3_ext', true );  
    $ent_fecha3_ext   		= get_post_meta( $post_id, 'sistema_ent_fecha3_ext', true );  
    $ent_hora3_ext   		= get_post_meta( $post_id, 'sistema_ent_hora3_ext', true );
    $tiempoCreativo4_ext   	= get_post_meta( $post_id, 'sistema_tiempoCreativo4_ext', true );
    $solicitud4_ext   		= get_post_meta( $post_id, 'sistema_solicitud4_ext', true );  
    $solic_fecha4_ext   	= get_post_meta( $post_id, 'sistema_solic_fecha4_ext', true );  
    $solic_hora4_ext   		= get_post_meta( $post_id, 'sistema_solic_hora4_ext', true );  
    $ent_fecha4_ext   		= get_post_meta( $post_id, 'sistema_ent_fecha4_ext', true );  
    $ent_hora4_ext   		= get_post_meta( $post_id, 'sistema_ent_hora4_ext', true ); 
?>
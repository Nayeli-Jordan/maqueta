<?php 
    $custom_fields  = get_post_custom();
    $post_id        = get_the_ID();

    $estatus      = get_post_meta( $post_id, 'qo_cotizaciones_estatus', true );
    $iva_inc      = get_post_meta( $post_id, 'qo_cotizaciones_iva_inc', true );
    
    $modelo       = get_post_meta( $post_id, 'qo_cotizaciones_modelo', true );
    $modelo2       = get_post_meta( $post_id, 'qo_cotizaciones_modelo2', true );
    $modelo3       = get_post_meta( $post_id, 'qo_cotizaciones_modelo3', true );
    $modelo4       = get_post_meta( $post_id, 'qo_cotizaciones_modelo4', true );
    $modelo5       = get_post_meta( $post_id, 'qo_cotizaciones_modelo5', true );
    $modelo6       = get_post_meta( $post_id, 'qo_cotizaciones_modelo6', true );
    $modelo7       = get_post_meta( $post_id, 'qo_cotizaciones_modelo7', true );
    $modelo8       = get_post_meta( $post_id, 'qo_cotizaciones_modelo8', true );
    $modelo9       = get_post_meta( $post_id, 'qo_cotizaciones_modelo9', true );
    $modelo10       = get_post_meta( $post_id, 'qo_cotizaciones_modelo10', true );
    $modelo11       = get_post_meta( $post_id, 'qo_cotizaciones_modelo11', true );
    $modelo12       = get_post_meta( $post_id, 'qo_cotizaciones_modelo12', true );
    $modelo13       = get_post_meta( $post_id, 'qo_cotizaciones_modelo13', true );
    $modelo14       = get_post_meta( $post_id, 'qo_cotizaciones_modelo14', true );
    $modelo15       = get_post_meta( $post_id, 'qo_cotizaciones_modelo15', true );
    $modelo16       = get_post_meta( $post_id, 'qo_cotizaciones_modelo16', true );
    $nota         = get_post_meta( $post_id, 'qo_cotizaciones_nota', true );    
    $nota2         = get_post_meta( $post_id, 'qo_cotizaciones_nota2', true );    
    $nota3         = get_post_meta( $post_id, 'qo_cotizaciones_nota3', true );    
    $nota4         = get_post_meta( $post_id, 'qo_cotizaciones_nota4', true );    
    $nota5         = get_post_meta( $post_id, 'qo_cotizaciones_nota5', true );    
    $nota6         = get_post_meta( $post_id, 'qo_cotizaciones_nota6', true );    
    $nota7         = get_post_meta( $post_id, 'qo_cotizaciones_nota7', true );    
    $nota8         = get_post_meta( $post_id, 'qo_cotizaciones_nota8', true );    
    $nota9         = get_post_meta( $post_id, 'qo_cotizaciones_nota9', true );    
    $nota10         = get_post_meta( $post_id, 'qo_cotizaciones_nota10', true );    
    $nota11         = get_post_meta( $post_id, 'qo_cotizaciones_nota11', true );    
    $nota12         = get_post_meta( $post_id, 'qo_cotizaciones_nota12', true );    
    $nota13         = get_post_meta( $post_id, 'qo_cotizaciones_nota13', true );    
    $nota14         = get_post_meta( $post_id, 'qo_cotizaciones_nota14', true );    
    $nota15         = get_post_meta( $post_id, 'qo_cotizaciones_nota15', true );    
    $nota16         = get_post_meta( $post_id, 'qo_cotizaciones_nota16', true );    
    $piezas       = get_post_meta( $post_id, 'qo_cotizaciones_piezas', true );    
    $piezas2       = get_post_meta( $post_id, 'qo_cotizaciones_piezas2', true );   
    $piezas3       = get_post_meta( $post_id, 'qo_cotizaciones_piezas3', true );   
    $piezas4       = get_post_meta( $post_id, 'qo_cotizaciones_piezas4', true );   
    $piezas5       = get_post_meta( $post_id, 'qo_cotizaciones_piezas5', true );   
    $piezas6       = get_post_meta( $post_id, 'qo_cotizaciones_piezas6', true );   
    $piezas7       = get_post_meta( $post_id, 'qo_cotizaciones_piezas7', true );   
    $piezas8       = get_post_meta( $post_id, 'qo_cotizaciones_piezas8', true );   
    $piezas9       = get_post_meta( $post_id, 'qo_cotizaciones_piezas9', true );   
    $piezas10       = get_post_meta( $post_id, 'qo_cotizaciones_piezas10', true );   
    $piezas11       = get_post_meta( $post_id, 'qo_cotizaciones_piezas11', true );   
    $piezas12       = get_post_meta( $post_id, 'qo_cotizaciones_piezas12', true );   
    $piezas13       = get_post_meta( $post_id, 'qo_cotizaciones_piezas13', true );   
    $piezas14       = get_post_meta( $post_id, 'qo_cotizaciones_piezas14', true );   
    $piezas15       = get_post_meta( $post_id, 'qo_cotizaciones_piezas15', true );   
    $piezas16       = get_post_meta( $post_id, 'qo_cotizaciones_piezas16', true );   
    $precio       = get_post_meta( $post_id, 'qo_cotizaciones_precio', true );
    $precio2       = get_post_meta( $post_id, 'qo_cotizaciones_precio2', true );
    $precio3       = get_post_meta( $post_id, 'qo_cotizaciones_precio3', true );
    $precio4       = get_post_meta( $post_id, 'qo_cotizaciones_precio4', true );
    $precio5       = get_post_meta( $post_id, 'qo_cotizaciones_precio5', true );
    $precio6       = get_post_meta( $post_id, 'qo_cotizaciones_precio6', true );
    $precio7       = get_post_meta( $post_id, 'qo_cotizaciones_precio7', true );
    $precio8       = get_post_meta( $post_id, 'qo_cotizaciones_precio8', true );
    $precio9       = get_post_meta( $post_id, 'qo_cotizaciones_precio9', true );
    $precio10       = get_post_meta( $post_id, 'qo_cotizaciones_precio10', true );
    $precio11       = get_post_meta( $post_id, 'qo_cotizaciones_precio11', true );
    $precio12       = get_post_meta( $post_id, 'qo_cotizaciones_precio12', true );
    $precio13       = get_post_meta( $post_id, 'qo_cotizaciones_precio13', true );
    $precio14       = get_post_meta( $post_id, 'qo_cotizaciones_precio14', true );
    $precio15       = get_post_meta( $post_id, 'qo_cotizaciones_precio15', true );
    $precio16       = get_post_meta( $post_id, 'qo_cotizaciones_precio16', true );
    $detalle       = get_post_meta( $post_id, 'qo_cotizaciones_detalle', true );
    $detalle2       = get_post_meta( $post_id, 'qo_cotizaciones_detalle2', true );
    $detalle3       = get_post_meta( $post_id, 'qo_cotizaciones_detalle3', true );
    $detalle4       = get_post_meta( $post_id, 'qo_cotizaciones_detalle4', true );
    $detalle5       = get_post_meta( $post_id, 'qo_cotizaciones_detalle5', true );
    $detalle6       = get_post_meta( $post_id, 'qo_cotizaciones_detalle6', true );
    $detalle7       = get_post_meta( $post_id, 'qo_cotizaciones_detalle7', true );
    $detalle8       = get_post_meta( $post_id, 'qo_cotizaciones_detalle8', true );
    $detalle9       = get_post_meta( $post_id, 'qo_cotizaciones_detalle9', true );
    $detalle10       = get_post_meta( $post_id, 'qo_cotizaciones_detalle10', true );
    $detalle11       = get_post_meta( $post_id, 'qo_cotizaciones_detalle11', true );
    $detalle12       = get_post_meta( $post_id, 'qo_cotizaciones_detalle12', true );
    $detalle13       = get_post_meta( $post_id, 'qo_cotizaciones_detalle13', true );
    $detalle14       = get_post_meta( $post_id, 'qo_cotizaciones_detalle14', true );
    $detalle15       = get_post_meta( $post_id, 'qo_cotizaciones_detalle15', true );
    $detalle16       = get_post_meta( $post_id, 'qo_cotizaciones_detalle16', true );
    $muestra_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra_1', true );
    $muestra_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra_2', true );
    $muestra_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra_3', true );
    $muestra_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra_4', true );
    $muestra2_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra2_1', true );
    $muestra2_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra2_2', true );
    $muestra2_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra2_3', true );
    $muestra2_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra2_4', true );
    $muestra3_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra3_1', true );
    $muestra3_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra3_2', true );
    $muestra3_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra3_3', true );
    $muestra3_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra3_4', true );
    $muestra4_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra4_1', true );
    $muestra4_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra4_2', true );
    $muestra4_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra4_3', true );
    $muestra4_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra4_4', true );
    $muestra5_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra5_1', true );
    $muestra5_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra5_2', true );
    $muestra5_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra5_3', true );
    $muestra5_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra5_4', true );
    $muestra6_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra6_1', true );
    $muestra6_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra6_2', true );
    $muestra6_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra6_3', true );
    $muestra6_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra6_4', true );
    $muestra7_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra7_1', true );
    $muestra7_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra7_2', true );
    $muestra7_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra7_3', true );
    $muestra7_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra7_4', true );
    $muestra8_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra8_1', true );
    $muestra8_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra8_2', true );
    $muestra8_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra8_3', true );
    $muestra8_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra8_4', true );
    $muestra9_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra9_1', true );
    $muestra9_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra9_2', true );
    $muestra9_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra9_3', true );
    $muestra9_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra9_4', true );
    $muestra10_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra10_1', true );
    $muestra10_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra10_2', true );
    $muestra10_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra10_3', true );
    $muestra10_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra10_4', true );
    $muestra11_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra11_1', true );
    $muestra11_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra11_2', true );
    $muestra11_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra11_3', true );
    $muestra11_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra11_4', true );
    $muestra12_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra12_1', true );
    $muestra12_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra12_2', true );
    $muestra12_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra12_3', true );
    $muestra12_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra12_4', true );
    $muestra13_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra13_1', true );
    $muestra13_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra13_2', true );
    $muestra13_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra13_3', true );
    $muestra13_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra13_4', true );
    $muestra14_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra14_1', true );
    $muestra14_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra14_2', true );
    $muestra14_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra14_3', true );
    $muestra14_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra14_4', true );
    $muestra15_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra15_1', true );
    $muestra15_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra15_2', true );
    $muestra15_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra15_3', true );
    $muestra15_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra15_4', true );
    $muestra16_1       = get_post_meta( $post_id, 'qo_cotizaciones_muestra16_1', true );
    $muestra16_2       = get_post_meta( $post_id, 'qo_cotizaciones_muestra16_2', true );
    $muestra16_3       = get_post_meta( $post_id, 'qo_cotizaciones_muestra16_3', true );
    $muestra16_4       = get_post_meta( $post_id, 'qo_cotizaciones_muestra16_4', true );
?>
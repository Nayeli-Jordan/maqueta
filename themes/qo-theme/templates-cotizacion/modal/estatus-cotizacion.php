<?php 
	$custom_fields  = get_post_custom();
    $post_id        = get_the_ID();
    $estatus      = get_post_meta( $post_id, 'qo_cotizaciones_estatus', true ); ?>
<div id="modal-estatus-cotizacion" class="modal">
	<div class="fondo-modal"></div>
	<div class="modal-content">
		<div class="close-modal"><i class="icon-cancel"></i></div>
		<div class="modal-body">
			<div class="fz-medium margin-bottom-xsmall color-purple text-center">Estatus Cotización</div>
			<form id="update_cotizacion_estatus" name="update_cotizacion_estatus" action="" method="post" class="validation row"  enctype="multipart/form-data" data-parsley-qo_cotizacion data-parsley-validate="">
		        <label>¿Cuál es el estatus?*</label>
		        <select id="qo_cotizaciones_estatus" name="qo_cotizaciones_estatus" required data-parsley-required-message="El campo es obligatorio.">
		            <option value="VoBo" <?php selected($estatus, 'VoBo'); ?>>VoBo</option>
		            <option value="Facturada" <?php selected($estatus, 'Facturada'); ?>>Facturada</option>
		        </select>
				<input type="submit" id="qo_cotizacion_submit" name="qo_cotizacion_submit" class="width-100p" value="Actualizar"/>
				<input type="hidden" name="edit_estatusCotizacion" value="post" />
				<?php wp_nonce_field( 'update_cotizacion_estatus' ); ?>
			</form>
			<? if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['edit_estatusCotizacion'] )) : 
			    $nuevoEstatus 		= $_POST['qo_cotizaciones_estatus'];
			    $permalink 			= get_permalink();
			    $titleCotizacion	= $post->post_title;

				$post = array(
					'ID'           => $post_id,
				);
				$my_post_id = wp_update_post($post);
				update_post_meta($my_post_id,'qo_cotizaciones_estatus',$nuevoEstatus);

				/* Send email */
				$to 				= "pruebas@altoempleo.com.mx";		    
			    $subject 			= "Estatus Cotización Actualizado | QO";

				$message 			= '<html style="font-family: Arial, sans-serif; font-size: 14px;"><body>';
				$message 		   .= '<div style="text-align: center; margin-bottom: 20px;"><a style="color: #000; text-align: center; display: block;" href="' . SITEURL . '"><img style="display: inline-block; margin: auto;" src="https://queonda.com.mx/sites/queonda/wp-content/themes/qo-theme/images/identidad/qo-logo-mail.png"></a></div>'; /* to do cambiar por sitio final */
				$message 		   .= '<h1 style="display: block; margin-bottom: 20px; text-align: center;  font-size: 20px; font-weight: 700; color: #7b2183; text-transform: uppercase;">Estatus cotización QO</h1>';
				$message 			.= '<p>Se ha modificado el estatus de una cotización.</p>';
				$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #7b2183;">Cotización: </span>' . $titleCotizacion . '</p>';
				$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #7b2183;">Estatus: </span>' . $nuevoEstatus . '</span></p>';
				$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #7b2183;">URL: </span>' . $permalink . '</p>';
				$message 			.= '<div style="text-align: center; margin-bottom: 10px; margin-top: 20px;"><p><small>Este email fue enviado desde el sitio de ¿Qué Onda?</small></p></div>';
				$message 	        .= '</body></html>';
				
				/* Evitar enviar mail si se guardo el mismo estatus */
				if ($estatus != $nuevoEstatus) { 
					wp_mail($to, $subject, $message);
				}
			endif; ?>
		</div>
	</div>
</div>
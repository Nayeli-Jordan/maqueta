<?php 
	$custom_fields  	= get_post_custom();
    $post_id        	= get_the_ID();
    $tiempoCreativo_stm	= get_post_meta( $post_id, 'sistema_tiempoCreativo_stm', true ); 
    $responsable 		= '';
	$terms = get_the_terms($post->ID, 'responsable');
	if ( is_array( $terms ) ) {
		foreach($terms as $term){
			$responsable .= $term->name . ". ";
		}
	} ?>
<div id="modal-tiempo-creativo_stm" class="modal">
	<div class="fondo-modal"></div>
	<div class="modal-content">
		<div class="close-modal"><i class="icon-cancel"></i></div>
		<div class="modal-body">
			<div class="fz-medium margin-bottom-xsmall color-purple text-center">Tiempo creativo para Brief</div>
			<form id="update_brief_tiempo_stm" name="update_brief_tiempo_stm" action="" method="post" class="validation row"  enctype="multipart/form-data" data-parsley-qo_briefTiempo_stm data-parsley-validate="">
		        <label>Tiempo*</label>
		        <input type="text" name="sistema_tiempoCreativo_stm" id="sistema_tiempoCreativo_stm" value="<?php echo $tiempoCreativo_stm; ?>" placeholder="1 hr." required data-parsley-required-message="El campo es obligatorio.">
				<input type="submit" id="qo_briefTiempo_stm_submit" name="qo_briefTiempo_stm_submit" class="width-100p" value="Actualizar"/>
				<input type="hidden" name="edit_tiempo_stmBrief" value="post" />
				<?php wp_nonce_field( 'update_brief_tiempo_stm' ); ?>
			</form>
			<? if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['edit_tiempo_stmBrief'] )) : 
			    $nuevoTiempoCreativo_stm 	= $_POST['sistema_tiempoCreativo_stm'];
			    $permalink 				= get_permalink();
			    $titleBrief				= $post->post_title;

				$post = array(
					'ID'           => $post_id,
				);
				$my_post_id = wp_update_post($post);
				update_post_meta($my_post_id,'sistema_tiempoCreativo_stm',$nuevoTiempoCreativo_stm);

				/* Send email */
				$to 				= "pruebas@altoempleo.com.mx";		    
			    $subject 			= "Tiempo Creativo de Brief Actualizado | QO";

				$message 			= '<html style="font-family: Arial, sans-serif; font-size: 14px;"><body>';
				$message 		   .= '<div style="text-align: center; margin-bottom: 20px;"><a style="color: #000; text-align: center; display: block;" href="' . SITEURL . '"><img style="display: inline-block; margin: auto;" src="https://queonda.com.mx/sites/queonda/wp-content/themes/qo-theme/images/identidad/qo-logo-mail.png"></a></div>'; /* to do cambiar por sitio final */
				$message 		   .= '<h1 style="display: block; margin-bottom: 20px; text-align: center;  font-size: 20px; font-weight: 700; color: #7b2183; text-transform: uppercase;">Tiempo Creativo para Brief QO</h1>';
				$message 			.= '<p>Se ha modificado el tiempo creativo para la realización de un brief.</p>';
				$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #7b2183;">Brief: </span>' . $titleBrief . '</p>';
				$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #7b2183;">Tiempo Creativo Diseño Visual: </span>' . $nuevoTiempoCreativo_stm . '</span></p>';
				$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #7b2183;">Responsable(s): </span>' . $responsable . '</span></p>';
				$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #7b2183;">URL: </span>' . $permalink . '</p>';
				$message 			.= '<div style="text-align: center; margin-bottom: 10px; margin-top: 20px;"><p><small>Este email fue enviado desde el sitio de ¿Qué Onda?</small></p></div>';
				$message 	        .= '</body></html>';
				
				/* Evitar enviar mail si se guardo el mismo tiempo */
				if ($tiempoCreativo_stm != $nuevoTiempoCreativo_stm) { 
					wp_mail($to, $subject, $message);
				}
			endif; ?>
		</div>
	</div>
</div>
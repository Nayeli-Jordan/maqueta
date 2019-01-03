<?php 
	$permalink 		= get_permalink();
	$titleBrief		= $post->post_title;
	if( $ent_fecha4_ext != "" ) : 
		$limitFechaEntrega = $ent_fecha4_ext;
	elseif( $ent_fecha3_ext != "" ) : 
		$limitFechaEntrega = $ent_fecha3_ext;
	elseif( $ent_fecha2_ext != "" ) : 
		$limitFechaEntrega = $ent_fecha2_ext;
	elseif( $ent_fecha1_ext != "" ) : 
		$limitFechaEntrega = $ent_fecha1_ext;
	elseif( $fechaEntrega != "" ) : 
		$limitFechaEntrega = $fechaEntrega;
	endif;
	setlocale(LC_ALL,"es_ES");
	$limitFechaEntrega = strftime("%d de %B del %Y", strtotime($limitFechaEntrega));
?>
<div id="modal-email-brief" class="modal">
	<div class="fondo-modal"></div>
	<div class="modal-content modal-content-medium">
		<div class="close-modal"><i class="icon-cancel"></i></div>
		<div class="modal-body">
			<div class="fz-medium margin-bottom-xsmall color-purple text-center">Notificación de Brief</div>
			<p>Se enviará la siguiente información del Brief al responsable o los responsables de esta tarea.</p>
			<p><strong class="color-purple">Brief:</strong> <?php echo $titleBrief; ?></p>
			<p><strong class="color-purple">URL:</strong> <?php echo $permalink; ?></p>
			<p><strong class="color-purple">Proyecto:</strong> <?php echo $proyecto; ?></p>
			<p><strong class="color-purple">Prioridad:</strong> <?php echo $prioridad; ?></p>
			<p><strong class="color-purple">Fecha de entrega:</strong> <?php echo $limitFechaEntrega; ?></p>
			<p><strong class="color-purple">Al correo:</strong> <?php echo $responsableMail; ?></p>
			<form id="update_brief_email" name="update_brief_email" action="" method="post" class="validation row margin-top"  enctype="multipart/form-data" data-parsley-qo_briefEmail data-parsley-validate="">
		        <label>Tipo de correo*</label>
	            <select name="sistema_emailTipo" required data-parsley-required-message="El campo es obligatorio.">
	                <option value=""></option>
	                <option value="Brief Nuevo">Brief Nuevo</option>
	                <option value="Brief Actualizado">Brief Actualizado</option>
	            </select>
	            <label>Notas extra*</label>
		        <textarea name="sistema_emailNotas" id="sistema_emailNotas" placeholder="Información extra"></textarea>
				<input type="submit" id="qo_briefEmail_submit" name="qo_briefEmail_submit" class="width-100p" value="Enviar correo"/>
				<input type="hidden" name="edit_emailBrief" value="post" />
				<?php wp_nonce_field( 'update_brief_email' ); ?>
			</form>
			<? if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['edit_emailBrief'] )) : 
			    $emailNotas 	= $_POST['sistema_emailNotas'];

				/* Send email */
				$to 		 = $responsableMail . "pruebas@altoempleo.com.mx";
				if ($sistema_emailTipo === 'Brief Nuevo') {
			    	$subject 	= "BRIEF: " . $titleBrief . " | Nuevo";
			    	$titleEmail = "Nuevo Brief QO";
			    	$noteEmail  = "Se ha creado un nuevo Brief";
				} else {
			    	$subject 	= "BRIEF: " . $titleBrief . " | Actualizado";
			    	$titleEmail = "Brief QO Actualizado";				
			    	$noteEmail  = "Se ha actualizado un Brief";				
				}

				$message 			= '<html style="font-family: Arial, sans-serif; font-size: 14px;"><body>';
				$message 		   .= '<div style="text-align: center; margin-bottom: 20px;"><a style="color: #000; text-align: center; display: block;" href="' . SITEURL . '"><img style="display: inline-block; margin: auto;" src="https://queonda.com.mx/sites/queonda/wp-content/themes/qo-theme/images/identidad/qo-logo-mail.png"></a></div>'; /* to do cambiar por sitio final */
				$message 		   .= '<h1 style="display: block; margin-bottom: 20px; text-align: center;  font-size: 20px; font-weight: 700; color: #7b2183; text-transform: uppercase;">' . $titleEmail  . '</h1>';
				$message 			.= '<p>' . $noteEmail . ' "' . $titleBrief . '"</p>';
				$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #7b2183;">Revisalo en: </span>' . $permalink . '</p>';
				$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #7b2183;">Proyecto: </span>' . $proyecto . '</p>';
				$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #7b2183;">Prioridad: </span>' . $prioridad . '</p>';
				$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #7b2183;">Fecha de entrega: </span>' . $limitFechaEntrega . '</p>';
				if ($emailNotas != '') {
					$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #7b2183;">Notas: </span>' . $emailNotas . '</p>';					
				}
				$message 			.= '<div style="text-align: center; margin-bottom: 10px; margin-top: 20px;"><p><small>Este email fue enviado desde el sitio de ¿Qué Onda?</small></p></div>';
				$message 	        .= '</body></html>';
				
				wp_mail($to, $subject, $message);
			endif; ?>
		</div>
	</div>
</div>
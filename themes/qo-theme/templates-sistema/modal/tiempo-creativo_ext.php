<?php 
	$custom_fields  		= get_post_custom();
    $post_id        		= get_the_ID();
    $tiempoCreativo1_ext	= get_post_meta( $post_id, 'sistema_tiempoCreativo1_ext', true ); 
    $tiempoCreativo2_ext	= get_post_meta( $post_id, 'sistema_tiempoCreativo2_ext', true ); 
    $tiempoCreativo3_ext	= get_post_meta( $post_id, 'sistema_tiempoCreativo3_ext', true ); 
    $tiempoCreativo4_ext	= get_post_meta( $post_id, 'sistema_tiempoCreativo4_ext', true ); 
    $responsable 			= '';
	$terms = get_the_terms($post->ID, 'responsable');
	if ( is_array( $terms ) ) {
		foreach($terms as $term){
			$responsable .= $term->name . ". ";
		}
	} ?>
<div id="modal-tiempo-creativo_ext" class="modal">
	<div class="fondo-modal"></div>
	<div class="modal-content">
		<div class="close-modal"><i class="icon-cancel"></i></div>
		<div class="modal-body">
			<div class="fz-medium margin-bottom-xsmall color-purple text-center">Tiempo creativo actualización</div>
			<form id="update_brief_tiempo_ext" name="update_brief_tiempo_ext" action="" method="post" class="validation row"  enctype="multipart/form-data" data-parsley-qo_briefTiempo_ext data-parsley-validate="">
				<?php if( $solicitud1_ext != "" ) : ?>
			        <label>Actualización #1*</label>
			        <input type="text" name="sistema_tiempoCreativo1_ext" id="sistema_tiempoCreativo1_ext" value="<?php echo $tiempoCreativo1_ext; ?>" placeholder="1 hr." required data-parsley-required-message="El campo es obligatorio.">
			    <?php endif;
			    if( $solicitud2_ext != "" ) : ?>
					<label>Actualización #2*</label>
		        	<input type="text" name="sistema_tiempoCreativo2_ext" id="sistema_tiempoCreativo2_ext" value="<?php echo $tiempoCreativo2_ext; ?>" placeholder="1 hr." required data-parsley-required-message="El campo es obligatorio.">
			    <?php endif;
			    if( $solicitud3_ext != "" ) : ?>
					<label>Actualización #3*</label>
			        <input type="text" name="sistema_tiempoCreativo3_ext" id="sistema_tiempoCreativo3_ext" value="<?php echo $tiempoCreativo3_ext; ?>" placeholder="1 hr." required data-parsley-required-message="El campo es obligatorio.">
			    <?php endif;
			    if( $solicitud4_ext != "" ) : ?>
					<label>Actualización #4*</label>
			        <input type="text" name="sistema_tiempoCreativo4_ext" id="sistema_tiempoCreativo4_ext" value="<?php echo $tiempoCreativo4_ext; ?>" placeholder="1 hr." required data-parsley-required-message="El campo es obligatorio.">
				<?php endif; ?>
				<input type="submit" id="qo_briefTiempo_ext_submit" name="qo_briefTiempo_ext_submit" class="width-100p" value="Actualizar"/>
				<input type="hidden" name="edit_tiempo_extBrief" value="post" />
				<?php wp_nonce_field( 'update_brief_tiempo_ext' ); ?>
			</form>
			<? if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['edit_tiempo_extBrief'] )) : 
			    $nuevotiempoCreativo1_ext 	= $_POST['sistema_tiempoCreativo1_ext'];
			    $nuevotiempoCreativo2_ext 	= $_POST['sistema_tiempoCreativo2_ext'];
			    $nuevotiempoCreativo3_ext 	= $_POST['sistema_tiempoCreativo3_ext'];
			    $nuevotiempoCreativo4_ext 	= $_POST['sistema_tiempoCreativo4_ext'];
			    $permalink 					= get_permalink();
			    $titleBrief					= $post->post_title;

				$post = array(
					'ID'           => $post_id,
				);
				$my_post_id = wp_update_post($post);
				update_post_meta($my_post_id,'sistema_tiempoCreativo1_ext',$nuevotiempoCreativo1_ext);
				update_post_meta($my_post_id,'sistema_tiempoCreativo2_ext',$nuevotiempoCreativo2_ext);
				update_post_meta($my_post_id,'sistema_tiempoCreativo3_ext',$nuevotiempoCreativo3_ext);
				update_post_meta($my_post_id,'sistema_tiempoCreativo4_ext',$nuevotiempoCreativo4_ext);
			endif; ?>
		</div>
	</div>
</div>
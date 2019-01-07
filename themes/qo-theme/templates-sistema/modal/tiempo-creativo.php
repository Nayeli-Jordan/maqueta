<?php 
	$custom_fields  	= get_post_custom();
    $post_id        	= get_the_ID();
    $tiempoCreativo_dv	= get_post_meta( $post_id, 'sistema_tiempoCreativo_dv', true ); 
    $tiempoCreativo_di	= get_post_meta( $post_id, 'sistema_tiempoCreativo_di', true ); 
    $tiempoCreativo_mkt	= get_post_meta( $post_id, 'sistema_tiempoCreativo_mkt', true ); 
    $tiempoCreativo_stm	= get_post_meta( $post_id, 'sistema_tiempoCreativo_stm', true ); 
    $responsable 		= '';
	$terms = get_the_terms($post->ID, 'responsable');
	if ( is_array( $terms ) ) {
		foreach($terms as $term){
			$responsable .= $term->name . ". ";
		}
	} ?>
<div id="modal-tiempo-creativo" class="modal">
	<div class="fondo-modal"></div>
	<div class="modal-content">
		<div class="close-modal"><i class="icon-cancel"></i></div>
		<div class="modal-body">
			<div class="fz-medium margin-bottom-xsmall color-purple text-center">Tiempo creativo para Brief</div>
			<form id="update_brief_tiempo" name="update_brief_tiempo" action="" method="post" class="validation row"  enctype="multipart/form-data" data-parsley-qo_briefTiempo data-parsley-validate="">
				<?php if (has_term('area-creativa', 'requerimiento')) : ?>
			        <label>Tiempo Diseño Visual*</label>
			        <input type="text" name="sistema_tiempoCreativo_dv" id="sistema_tiempoCreativo_dv" value="<?php echo $tiempoCreativo_dv; ?>" placeholder="1 hr." required data-parsley-required-message="El campo es obligatorio.">
			    <?php endif;
			    if (has_term('area-industrial', 'requerimiento')): ?>
			        <label>Tiempo Diseño Industrial*</label>
			        <input type="text" name="sistema_tiempoCreativo_di" id="sistema_tiempoCreativo_di" value="<?php echo $tiempoCreativo_di; ?>" placeholder="1 hr." required data-parsley-required-message="El campo es obligatorio.">
			    <?php endif;
			    if (has_term('area-social-media', 'requerimiento')): ?>
			    	<label>Tiempo Marketing*</label>
		        	<input type="text" name="sistema_tiempoCreativo_mkt" id="sistema_tiempoCreativo_mkt" value="<?php echo $tiempoCreativo_mkt; ?>" placeholder="1 hr." required data-parsley-required-message="El campo es obligatorio.">
			    <?php endif;
			    if (has_term('area-ui-ux', 'requerimiento')): ?>
					<label>Tiempo Sitemas*</label>
		       		<input type="text" name="sistema_tiempoCreativo_stm" id="sistema_tiempoCreativo_stm" value="<?php echo $tiempoCreativo_stm; ?>" placeholder="1 hr." required data-parsley-required-message="El campo es obligatorio.">
			    <?php endif; ?>
				<input type="submit" id="qo_briefTiempo_submit" name="qo_briefTiempo_submit" class="width-100p" value="Actualizar"/>
				<input type="hidden" name="edit_tiempoBrief" value="post" />
				<?php wp_nonce_field( 'update_brief_tiempo' ); ?>
			</form>
			<? if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['edit_tiempoBrief'] )) : 
			    $nuevotiempoCreativo_dv 	= $_POST['sistema_tiempoCreativo_dv'];
			    $nuevotiempoCreativo_di 	= $_POST['sistema_tiempoCreativo_di'];
			    $nuevotiempoCreativo_mkt 	= $_POST['sistema_tiempoCreativo_mkt'];
			    $nuevotiempoCreativo_stm 	= $_POST['sistema_tiempoCreativo_stm'];
			    $permalink 					= get_permalink();
			    $titleBrief					= $post->post_title;

				$post = array(
					'ID'           => $post_id,
				);
				$my_post_id = wp_update_post($post);
				update_post_meta($my_post_id,'sistema_tiempoCreativo_dv',$nuevotiempoCreativo_dv);
				update_post_meta($my_post_id,'sistema_tiempoCreativo_di',$nuevotiempoCreativo_di);
				update_post_meta($my_post_id,'sistema_tiempoCreativo_mkt',$nuevotiempoCreativo_mkt);
				update_post_meta($my_post_id,'sistema_tiempoCreativo_stm',$nuevotiempoCreativo_stm);
			endif; ?>
		</div>
	</div>
</div>
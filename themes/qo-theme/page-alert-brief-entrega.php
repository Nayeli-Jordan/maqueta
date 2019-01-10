<?php get_header(); 

	/* Send email */	    
    $subject 			= "Alerta de Brief | Entrega cercana | QO";

	$msgHeader 			= '<html style="font-family: Arial, sans-serif; font-size: 14px;"><body>';
	$msgHeader 		   .= '<div style="text-align: center; margin-bottom: 20px;"><a style="color: #000; text-align: center; display: block;" href="' . SITEURL . '"><img style="display: inline-block; margin: auto;" src="https://queonda.com.mx/sites/queonda/wp-content/themes/qo-theme/images/identidad/qo-logo-mail.png"></a></div>'; /* to do cambiar por sitio final */
	$msgHeader 		   .= '<h1 style="display: block; margin-bottom: 20px; text-align: center;  font-size: 20px; font-weight: 700; color: #7b2183; text-transform: uppercase;">Alerta Brief QO</h1>';

	$msgFooter 			 = '<div style="text-align: center; margin-bottom: 10px; margin-top: 20px;"><p><small>Este email fue enviado desde el sitio de ¿Qué Onda?</small></p></div>';
	$msgFooter 	        .= '</body></html>';
?>
	<header class="container container-large archive-header">
		<a href="<?php echo SITEURL; ?>"><div class="bg-image bg-contain bg-qo-logo inline-block" style="background-image: url(<?php echo THEMEPATH; ?>images/identidad/logo.png)"></div></a>
		<div class="title-archive">Alerta entrega Brief´s</div>
		<?php include (TEMPLATEPATH . '/templates-qo/nav-qo.php'); ?>		
	</header>
	<section class="[ container container-large ] margin-bottom-60">
		<div class="row margin-top">
			<?php
		        $args = array(
		            'post_type' 		=> 'sistema',
		            'posts_per_page' 	=> -1,
		            'orderby' 			=> 'date',
		            'order' 			=> 'ASC',
					'tax_query' 		=> array(
						array(
							'taxonomy' 	=> 'estatus-brief',
							'field'	   	=> 'slug',
							'terms'	 	=> 'archivada',
							'operator'	=> 'NOT IN',
						)
					)
		        );
		        $loop = new WP_Query( $args );
		        if ( $loop->have_posts() ) {
		            while ( $loop->have_posts() ) : $loop->the_post(); 

						$custom_fields 			= get_post_custom();
						$post_id 				= get_the_ID();

					    $title 	            	= $post->post_title;	    
					    $estatus            	= get_post_meta( $post_id, 'sistema_estatus', true );	    
					    $cliente            	= get_post_meta( $post_id, 'sistema_cliente', true );  
					    $proyecto           	= get_post_meta( $post_id, 'sistema_proyecto', true );     
					    $tiempoCotizado    		= get_post_meta( $post_id, 'sistema_tiempoCotizado', true ); 
					    $fechaEntrega    		= get_post_meta( $post_id, 'sistema_fechaEntrega', true ); 
					    $fechaEntregaAlert    	= get_post_meta( $post_id, 'sistema_fechaEntregaAlert', true ); 
		    			$prioridad    			= get_post_meta( $post_id, 'sistema_prioridad', true );
		    			$ent_fecha1_ext    		= get_post_meta( $post_id, 'sistema_ent_fecha1_ext', true );
		    			$ent_fecha2_ext    		= get_post_meta( $post_id, 'sistema_ent_fecha2_ext', true );
		    			$ent_fecha3_ext    		= get_post_meta( $post_id, 'sistema_ent_fecha3_ext', true );
		    			$ent_fecha4_ext    		= get_post_meta( $post_id, 'sistema_ent_fecha4_ext', true );

			    		$permalink 				= get_permalink();

	    				$todayDate 	= date('Y-m-d');
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

						/* Activar alerta antes de la fecha límite*/
						$daysAlertBefore = 0;
						if ($fechaEntregaAlert === '1 día antes') {
							$daysAlertBefore = 1;
						} elseif ($fechaEntregaAlert === '2 días antes') {
							$daysAlertBefore = 2;
						} elseif ($fechaEntregaAlert === '3 días antes') {
							$daysAlertBefore = 3;
						} if ($fechaEntregaAlert === '1 semana antes') {
							$daysAlertBefore = 7;
						}
						 
						$activeAlertDate = date('Y-m-d', strtotime($limitFechaEntrega . '-' . $daysAlertBefore . ' days'));
						/* Activar alerta si pasaron 3 días de la entrega */
						$activeAlertLate = date('Y-m-d', strtotime($limitFechaEntrega . '+ 3 days'));
						if (($todayDate >= $activeAlertDate && $estatus != 'Cerrado' && $fechaEntregaAlert != 'Desactivar alerta') || ($activeAlertLate <= $todayDate && $estatus != 'Cerrado')){ 
							setlocale(LC_ALL,"es_ES");
							$limitFechaEntrega = strftime("%d de %B del %Y", strtotime($limitFechaEntrega));
							$responsableName 	= '';
							$responsableMail 	= '';
							$terms = get_the_terms($post->ID, 'responsable');
							if ( is_array( $terms ) ) {
								foreach($terms as $term){
									$responsableName .= $term->name . " (" . $term->description . ") ";
									$responsableMail .= $term->description . ", ";
								}
							}

		        			$body = '';
							$body .= '<div style="margin-bottom: 20px;">';
							$body .= '<p><strong style="color: #7b2183;">Brief: </strong>' . $title . ' - ' . $permalink . '</p>';
							$body .= '<p><strong style="color: #7b2183;">Responsable: </strong>' . $responsableName . '</p>';
							$body .= '<p><strong style="color: #7b2183;">Cliente: </strong>' . $cliente . ' | <strong style="color: #7b2183;">Proyecto: </strong>' . $proyecto . '</p>';
							$body .= '<p><strong style="color: #7b2183;">Estatus: </strong>' . $estatus . ' | <strong style="color: #7b2183;">Prioridad: </strong>' . $prioridad . '</p>';
							$body .= '<p><strong style="color: #7b2183;">Entrega: </strong>' . $limitFechaEntrega . '</p>';
							$body .= '</div>';

							if ($estatus === 'Hecho') { /* Envia alerta sólo a admin para que la cierre */
								$msgHeaderAdmin			= '<p style="margin-bottom: 20px;">La tarea ya ha sido marcado como <strong style="color: #7b2183;">HECHA</strong>, asegurate de que esté terminada y marcala con estatus "Cerrado" para dejar de recibir esta alerta.</p>';
								$to 	 = "jeaninne@queonda.com.mx";
								$message = $msgHeader . $msgHeaderAdmin . $body . $msgFooter;
								echo $msgHeaderAdmin . $body;								
								wp_mail($to, $subject, $message);
							} else { /* Envia alerta responsable para hacerla */
								$msgHeaderResponsable	= '<p style="margin-bottom: 20px;">Mantente al tanto de la fecha de entrega, si finalizaste con esta tarea no olvides marcarla con el estatus "Hecho" para que el administrador pueda cerrarla.</p>';
								$to 	 = $responsableMail;
								$message = $msgHeader . $msgHeaderResponsable . $body . $msgFooter;
								echo $msgHeaderResponsable . $body;								
								wp_mail($to, $subject, $message);
							}
						}

	    			endwhile;
		        } 
		        wp_reset_postdata();
		    ?>
		</div>
	</section>
	<div class="content-fixed-buttons">
		<a href="<?php echo SITEURL; ?>sistema" class="btn btn-purple shadow margin-left-right-xxsmall">Ver todos</a>
	</div>
<?php get_footer(); ?>
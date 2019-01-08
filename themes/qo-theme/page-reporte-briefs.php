<?php get_header(); 

	/* Send email */	    
    $subject 			= "Alerta de Brief | Entrega cercana | QO";

	$msgHeader 			= '<html style="font-family: Arial, sans-serif; font-size: 14px;"><body>';
	$msgHeader 		   .= '<div style="text-align: center; margin-bottom: 20px;"><a style="color: #000; text-align: center; display: block;" href="' . SITEURL . '"><img style="display: inline-block; margin: auto;" src="https://queonda.com.mx/sites/queonda/wp-content/themes/qo-theme/images/identidad/qo-logo-mail.png"></a></div>'; /* to do cambiar por sitio final */
	$msgHeader 		   .= '<h1 style="display: block; margin-bottom: 20px; text-align: center;  font-size: 20px; font-weight: 700; color: #7b2183; text-transform: uppercase;">Brief´s Activos QO</h1>';
	$msgHeader 			.= '<p style="margin-bottom: 20px;">Este es un aviso semanal con el listado de los brief´s de Que Onda que se encuentran activos.</p>';

	$msgFooter 			 = '<div style="text-align: center; margin-bottom: 10px; margin-top: 20px;"><p><small>Este email fue enviado desde el sitio de ¿Qué Onda?</small></p></div>';
	$msgFooter 	        .= '</body></html>';
?>
	<header class="container container-large archive-header">
		<a href="<?php echo SITEURL; ?>"><div class="bg-image bg-contain bg-qo-logo inline-block" style="background-image: url(<?php echo THEMEPATH; ?>images/identidad/logo.png)"></div></a>
		<div class="title-archive">Brief´s Activos</div>
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
					),
					'meta_query'		=> array(
						array(
							'key'		=> 'sistema_estatus',
							'value'		=> 'Cerrado',
							'compare'	=> '!='
						)
					)
		        );
		        $loop = new WP_Query( $args );
		        if ( $loop->have_posts() ) {
		        	$body = '';
		            while ( $loop->have_posts() ) : $loop->the_post(); 

						$custom_fields 			= get_post_custom();
						$post_id 				= get_the_ID();
			    		$permalink 				= get_permalink();
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
						setlocale(LC_ALL,"es_ES");
						$limitFechaEntrega = strftime("%d de %B del %Y", strtotime($limitFechaEntrega));

						$responsableName 	= '';
						$terms = get_the_terms($post->ID, 'responsable');
						if ( is_array( $terms ) ) {
							foreach($terms as $term){
								$responsableName .= $term->name . " (" . $term->description . ") ";
							}
						}

						$body .= '<div style="margin-bottom: 40px;">';
						$body .= '<p><strong style="color: #7b2183;">Brief: </strong>' . $title . ' - ' . $permalink . '</p>';
						$body .= '<p><strong style="color: #7b2183;">Cliente: </strong>' . $cliente . ' | <strong style="color: #7b2183;">Proyecto: </strong>' . $proyecto . '</p>';
						$body .= '<p><strong style="color: #7b2183;">Estatus: </strong>' . $estatus . ' | <strong style="color: #7b2183;">Prioridad: </strong>' . $prioridad . ' | <strong style="color: #7b2183;">Entrega: </strong>' . $limitFechaEntrega . '</p>';
						$body .= '<p><strong style="color: #7b2183;">Responsable: </strong>' . $responsableName . '</p>';
						$body .= '</div>';

	    			endwhile;
		        } 
		        wp_reset_postdata();

			$to 	 = "jeaninne@queonda.com.mx, verojacobo@altoempleo.com.mx, nayeli@queonda.com.mx";
			$message = $msgHeader . $body . $msgFooter;
			echo $message;								
			wp_mail($to, $subject, $message); ?>
		</div>
	</section>
	<div class="content-fixed-buttons">
		<a href="<?php echo SITEURL; ?>sistema" class="btn btn-purple shadow margin-left-right-xxsmall">Ver todos</a>
	</div>
<?php get_footer(); ?>
<?php 
	get_header(); 
	global $post;
	
	while ( have_posts() ) : the_post();	
?>
	<header class="container container-large archive-header">
		<div class="bg-image bg-contain bg-qo-logo inline-block" style="background-image: url(<?php echo THEMEPATH; ?>images/identidad/logo.png)"></div>
		<div class="title-archive"><?php the_title(); ?></div>
		<?php include (TEMPLATEPATH . '/templates-qo/nav-qo.php'); ?>		
	</header>
	<?php include (TEMPLATEPATH . '/templates-sistema/qo-custom-fields.php'); ?>

	<div id="container-brief" class="container container-large margin-bottom-xlarge">
		<div id="header-brief" class="relative margin-bottom-large">
			<div class="row">
				<div class="col s12 sm6 m4 l2 bg-purple-xlight"><p>Solicitante</p></div>
				<div class="col s12 sm6 m4 l2">
				<?php 
					$terms = get_the_terms($post->ID, 'solicitante');
					foreach($terms as $term){
						echo $term->name . "</br>";
					}
				?>
				</div>
				<div class="col s12 sm6 m4 l2 clear bg-purple-xlight"><p>Cliente</p></div>
				<div class="col s12 sm6 m4 l2"><?php echo $cliente; ?></div>
				<div class="col s12 sm6 m4 l2 clear bg-purple-xlight"><p>Marca</p></div>
				<div class="col s12 sm6 m4 l2"><?php echo $marca ?></p></div>
				<div class="col s12 sm6 m4 l2 clear bg-purple-xlight"><p>Proyecto</p></div>
				<div class="col s12 sm6 m4 l2"><?php echo $proyecto; ?></div>				
				<div class="col s12 sm6 m4 l2 clear bg-purple-xlight"><p>Cotización</p></div>
				<div class="col s12 sm6 m4 l2">
				<?php 
					$terms = get_the_terms($post->ID, 'cotizacion-stm');
					if (is_array($terms) || is_object($terms)){
						foreach ($terms as $term){
							echo "<a class='inline-block margin-right-xsmall hover-purple' href='" . SITEURL . "qo_cotizaciones/" . $term->slug . "' target='_blank'><span class='block'>" . $term->name . "</span></a>";
						}
					}
				?>
				</div>
				<div class="col s12 sm6 m4 l2 hide-on-sm-and-down bg-purple-light"><p class="color-light text-center">Tiempo Cotizado</p></div>
				<div class="col s12 sm6 m4 l2 clear bg-purple-xlight"><p>Requerimiento</p></div>
				<div class="col s12 sm6 m4 l2">
				<?php 
					$terms = get_the_terms($post->ID, 'requerimiento');
					foreach($terms as $term){
						echo "<span class='block'>" . $term->name . "<span class='etiqueta-requerimiento bg-" . $term->slug . "'></span></span>";
					}
				?>
				</div>
				<div class="col s12 sm6 m4 l2 hide-on-med-and-up bg-purple-light"><p class="color-light text-center">Tiempo Cotizado</p></div>
				<div class="col s12 sm6 m4 l2 border-purple-light"><?php echo $tiempoCotizado; ?></div>				
			</div>
			<div class="brief-general-info">
				<div class="row">
					<div class="col s12 sm6 m4 l6 bg-purple-xlight"><p>No. de Brief</p></div>
					<div class="col s12 sm6 m4 l6"><?php echo get_the_ID(); ?></div>
					<div class="col s12 sm6 m4 l6 clear bg-purple-xlight"><p>Fecha de Entrega</p></div>
					<div class="col s12 sm6 m4 l6"><?php echo $fechaEntrega; ?></div>
					<div class="col s12 sm6 m4 l6 clear bg-purple-xlight"><p>Responsable</p></div>
					<div class="col s12 sm6 m4 l6">
					<?php 
						$terms = get_the_terms($post->ID, 'responsable');
						foreach($terms as $term){
							echo $term->name . "</br>";
						}
					?>
					</div>
					<div class="col s12 sm6 m4 l6 clear bg-purple-xlight"><p>Prioridad</p></div>
					<div class="col s12 sm6 m4 l6"><?php echo $prioridad; ?><span class="etiqueta-prioridad bg-<?php echo $prioridad; ?>"></span></div>
				</div>
			</div>			
		</div>

		<?php if (has_term('area-creativa', 'requerimiento')) : ?>
		<div id="brief-dv" class="body-brief">
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>DISEÑO VISUAL / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Medio de entrada</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $medioEntrada_dv; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Requerimiento</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $requerimiento_dv; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>No. de piezas</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $noPiezas_dv; ?></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up bg-purple-xlight"><p>Cantidad a producir</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up"><?php echo $cantidad_dv; ?></div>
					<div class="col s12 sm6 l4 clear bg-purple-xlight"><p>Descripción general del proyecto:</p></div>
					<div class="col s12 sm6 l4"><?php echo $descripcion_dv; ?></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down bg-purple-xlight"><p>Cantidad a producir</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down"><?php echo $cantidad_dv; ?></div>
					<div class="col s12 clear"><?php echo $detalles_dv; ?></div>
					<div class="col s12 clear bg-purple-clare"><p class="color-light">Llenar en caso de tener medida de material creativo:</p></div>
					<div class="col s12 m3 l2 clear bg-purple-xlight"><p>MATERIAL 1</p></div>
					<div class="col s12 m9 l10"><?php echo $material1_dv; ?></div>
					<div class="col s12 sm6 l2 clear bg-purple-xlight"><p>Largo (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $largo1_dv; ?></div>
					<div class="col s12 sm6 l2 bg-purple-xlight"><p>Ancho (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $ancho1_dv; ?></div>
					<div class="col s12 sm6 l2 bg-purple-xlight"><p>Alto (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $alto1_dv; ?></div>
					<div class="col s12 m3 l2 clear bg-purple-xlight"><p>MATERIAL 2</p></div>
					<div class="col s12 m9 l10"><?php echo $material2_dv; ?></div>
					<div class="col s12 sm6 l2 clear bg-purple-xlight"><p>Largo (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $largo2_dv; ?></div>
					<div class="col s12 sm6 l2 bg-purple-xlight"><p>Ancho (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $ancho2_dv; ?></div>
					<div class="col s12 sm6 l2 bg-purple-xlight"><p>Alto (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $ancho3_dv; ?></div>
					<div class="col s12 m3 l2 clear bg-purple-xlight"><p>MATERIAL 3</p></div>
					<div class="col s12 m9 l10"><?php echo $material3_dv; ?></div>
					<div class="col s12 sm6 l2 clear bg-purple-xlight"><p>Largo (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $largo3_dv; ?></div>
					<div class="col s12 sm6 l2 bg-purple-xlight"><p>Ancho (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $ancho3_dv; ?></div>
					<div class="col s12 sm6 l2 bg-purple-xlight"><p>Alto (cm)</p></div>
					<div class="col s12 sm6 l2"><?php echo $alto3_dv; ?></div>
					<div class="col s12 sm6 m6 l2 offset-l8 clear bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
					<div class="col s12 sm6 m6 l2 border-purple-light"><?php echo $tiempoCreativo_dv; ?></div>
				</div>
			</div>
		</div>		
		<?php endif; ?>

		<?php if (has_term('area-industrial', 'requerimiento')) : ?>
		<div id="brief-di" class="body-brief">
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>DISEÑO INDUSTRIAL / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Medio de entrada</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $medioEntrada_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Requerimiento</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $requerimiento_di; ?></div>
					<div class="col s12 sm6 m3 l2 clear-on-med-and-down bg-purple-xlight"><p>No. de piezas</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $noPiezas_di; ?></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up bg-purple-xlight"><p>Cantidad a producir</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up"><?php echo $cantidad_di; ?></div>
					<div class="col s12 m6 l4 clear-on-large-and-up bg-purple-xlight"><p>Descripción general del proyecto:</p></div>
					<div class="col s12 m6 l4"><?php echo $descripcion_di; ?></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down bg-purple-xlight"><p>Cantidad a producir</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down"><?php echo $cantidad_di; ?></div>
					<div class="col s12 clear"><?php echo $detalles_di; ?></div>
					<div class="col s12 clear bg-purple-clare"><p class="color-light">Llenar en caso de tener medida de producto o material creativo:</p></div>
					<div class="col s12 sm6 m3 l2 clear bg-purple-xlight"><p>PRODUCTO 1</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $product1_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Peso (kg)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $peso1_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Cantidad de Carga</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $cantCarga1_di; ?></div>
					<div class="col s12 sm6 m3 l2 clear bg-purple-xlight"><p>Largo (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $largo1_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Ancho (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $ancho1_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Alto (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $alto1_di; ?></div>
					<div class="col s12 sm6 m3 l2 clear bg-purple-xlight"><p>PRODUCTO 2</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $product2_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Peso (kg)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $peso2_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Cantidad de Carga</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $cantCarga2_di; ?></div>
					<div class="col s12 sm6 m3 l2 clear bg-purple-xlight"><p>Largo (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $largo2_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Ancho (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $ancho2_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Alto (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $alto2_di; ?></div>
					<div class="col s12 sm6 m3 l2 clear bg-purple-xlight"><p>PRODUCTO 3</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $product3_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Peso (kg)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $peso3_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Cantidad de Carga</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $cantCarga3_di; ?></div>
					<div class="col s12 sm6 m3 l2 clear bg-purple-xlight"><p>Largo (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $largo3_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Ancho (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $ancho3_di; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Alto (cm)</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $alto3_di; ?></div>
					<div class="col s12 sm6 m6 l2 offset-l8 clear bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
					<div class="col s12 sm6 m6 l2 border-purple-light"><?php echo $tiempoCreativo_di; ?></div>
				</div>
			</div>
		</div>	
		<?php endif; ?>

		<?php if (has_term('area-social-media', 'requerimiento')) : ?>
		<div id="brief-mkt" class="body-brief">
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>MARKETING / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Medio de entrada</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $medioEntrada_mkt; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Requerimiento</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $requerimiento_mkt; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Personas externas</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up"><?php echo $personasExternas_mkt; ?></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up bg-purple-xlight"><p>Caracteristicas</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $caracteristicas_mkt; ?></div>
					<div class="col s12 m6 l4 clear hide-on-sm-and-down bg-purple-xlight"><p>Descripción general del proyecto:</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down bg-purple-xlight"><p>Caracteristicas</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down"><?php echo $caracteristicas_mkt; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>No. de personas</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $noPersonas_mkt; ?></div>
					<div class="col s12 m6 l4 clear hide-on-med-and-up bg-purple-xlight"><p>Descripción general del proyecto:</p></div>
					<div class="col s12 clear"><?php echo $detalles_mkt; ?></div>
					<div class="col s12 sm6 m6 l2 offset-l8 clear bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
					<div class="col s12 sm6 m6 l2 border-purple-light"><?php echo $tiempoCreativo_mkt; ?></div>
				</div>
			</div>
		</div>		
		<?php endif; ?>

		<?php if (has_term('area-ui-ux', 'requerimiento')) : ?>
		<div id="brief-stm" class="body-brief">
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>SISTEMAS / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Medio de entrada</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $medioEntrada_stm; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Requerimiento</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $requerimiento_stm; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>Dominio y hospedaje</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $dominioHospedaje_stm; ?></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up bg-purple-xlight"><p>Dominio</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-large-and-up"><?php echo $dominio_stm; ?></div>
					<div class="col s12 m6 l4  clear hide-on-sm-and-down bg-purple-xlight"><p>Descripción general del proyecto:</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down bg-purple-xlight"><p>Dominio</p></div>
					<div class="col s12 sm6 m3 l2 hide-on-med-and-down"><?php echo $dominio_stm; ?></div>
					<div class="col s12 sm6 m3 l2 bg-purple-xlight"><p>FTP</p></div>
					<div class="col s12 sm6 m3 l2"><?php echo $ftp_stm; ?></div>
					<div class="col s12 m6 l4  clear hide-on-med-and-up bg-purple-xlight"><p>Descripción general del proyecto:</p></div>
					<div class="col s12 clear"><?php echo $detalles_stm; ?></div>
					<div class="col s12 sm6 m6 l2 offset-l8 clear bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
					<div class="col s12 sm6 m6 l2 border-purple-light"><?php echo $tiempoCreativo_stm; ?></div>
				</div>
			</div>
		</div>		
		<?php endif; ?>

		<?php if( $solicitud1_ext != "" || $solicitud2_ext != "" || $solicitud3_ext != "" || $solicitud4_ext != "" ) : ?>

			<div id="brief-extra" class="body-brief">
				<div class="row">				
					<div class="col s12 header-area-brief">
						<h2>ACTUALIZACIONES POSTERIORES</h2>
					</div>
					<?php if( $solicitud1_ext != "" ) : ?>
						<div class="row">
							<div class="col s12 m5 l6 uppercase bg-purple-clare"><p class="color-light">Actualización #1</p></div>
							<div class="col s12 sm6 m4 l3 uppercase bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
							<div class="col s12 sm6 m3 l3 border-purple-light"><?php echo $tiempoCreativo1_ext; ?></div>
							<div class="col s12 m5 l2 bg-purple-xlight"><p>Solicitud</p></div>
							<div class="col s12 m7 l4"><?php echo $solicitud1_ext; ?></div>
							<div class="col s12 m5 l3 hide-on-med-and-down bg-purple-xlight"><p>Fecha y Hora Solicitado<br>Fecha de ENTREGA</p></div>
							<div class="col s12 m7 l3 hide-on-med-and-down"><?php echo $solic_fecha1_ext . ' ' . $solic_hora1_ext; ?><br><?php echo $ent_fecha1_ext . ' ' . $ent_hora1_ext; ?></div>
							<div class="col s12 m5 hide-on-large-and-up clear bg-purple-xlight"><p>Fecha y Hora Solicitado</p></div>
							<div class="col s12 m7 hide-on-large-and-up"><?php echo $solic_fecha1_ext . ' ' . $solic_hora1_ext; ?></div>
							<div class="col s12 m5 hide-on-large-and-up bg-purple-xlight"><p>Fecha de ENTREGA</p></div>
							<div class="col s12 m7 hide-on-large-and-up"><?php echo $ent_fecha1_ext . ' ' . $ent_hora1_ext; ?></div>
						</div>
					<?php endif; ?>
					<?php if( $solicitud2_ext != "" ) : ?>
						<div class="row">
							<div class="col s12 m5 l6 uppercase bg-purple-clare"><p class="color-light">Actualización #2</p></div>
							<div class="col s12 sm6 m4 l3 uppercase bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
							<div class="col s12 sm6 m3 l3 border-purple-light"><?php echo $tiempoCreativo2_ext; ?></div>
							<div class="col s12 m5 l2 bg-purple-xlight"><p>Solicitud</p></div>
							<div class="col s12 m7 l4"><?php echo $solicitud2_ext; ?></div>
							<div class="col s12 m5 l3 hide-on-med-and-down bg-purple-xlight"><p>Fecha y Hora Solicitado<br>Fecha de ENTREGA</p></div>
							<div class="col s12 m7 l3 hide-on-med-and-down"><?php echo $solic_fecha2_ext . ' ' . $solic_hora2_ext; ?><br><?php echo $ent_fecha2_ext . ' ' . $ent_hora2_ext; ?></div>
							<div class="col s12 m5 hide-on-large-and-up clear bg-purple-xlight"><p>Fecha y Hora Solicitado</p></div>
							<div class="col s12 m7 hide-on-large-and-up"><?php echo $solic_fecha2_ext . ' ' . $solic_hora2_ext; ?></div>
							<div class="col s12 m5 hide-on-large-and-up bg-purple-xlight"><p>Fecha de ENTREGA</p></div>
							<div class="col s12 m7 hide-on-large-and-up"><?php echo $ent_fecha2_ext . ' ' . $ent_hora2_ext; ?></div>
						</div>
					<?php endif; ?>
					<?php if( $solicitud3_ext != "" ) : ?>
						<div class="row">
							<div class="col s12 m5 l6 uppercase bg-purple-clare"><p class="color-light">Actualización #3</p></div>
							<div class="col s12 sm6 m4 l3 uppercase bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
							<div class="col s12 sm6 m3 l3 border-purple-light"><?php echo $tiempoCreativo3_ext; ?></div>
							<div class="col s12 m5 l2 bg-purple-xlight"><p>Solicitud</p></div>
							<div class="col s12 m7 l4"><?php echo $solicitud3_ext; ?></div>
							<div class="col s12 m5 l3 hide-on-med-and-down bg-purple-xlight"><p>Fecha y Hora Solicitado<br>Fecha de ENTREGA</p></div>
							<div class="col s12 m7 l3 hide-on-med-and-down"><?php echo $solic_fecha3_ext . ' ' . $solic_hora3_ext; ?><br><?php echo $ent_fecha3_ext . ' ' . $ent_hora3_ext; ?></div>
							<div class="col s12 m5 hide-on-large-and-up clear bg-purple-xlight"><p>Fecha y Hora Solicitado</p></div>
							<div class="col s12 m7 hide-on-large-and-up"><?php echo $solic_fecha3_ext . ' ' . $solic_hora3_ext; ?></div>
							<div class="col s12 m5 hide-on-large-and-up bg-purple-xlight"><p>Fecha de ENTREGA</p></div>
							<div class="col s12 m7 hide-on-large-and-up"><?php echo $ent_fecha3_ext . ' ' . $ent_hora3_ext; ?></div>
						</div>
					<?php endif; ?>
					<?php if( $solicitud4_ext != "" ) : ?>
						<div class="row">
							<div class="col s12 m5 l6 uppercase bg-purple-clare"><p class="color-light">Actualización #4</p></div>
							<div class="col s12 sm6 m4 l3 uppercase bg-purple-light"><p class="color-light">Tiempo Creativo</p></div>
							<div class="col s12 sm6 m3 l3 border-purple-light"><?php echo $tiempoCreativo4_ext; ?></div>
							<div class="col s12 m5 l2 bg-purple-xlight"><p>Solicitud</p></div>
							<div class="col s12 m7 l4"><?php echo $solicitud4_ext; ?></div>
							<div class="col s12 m5 l3 hide-on-med-and-down bg-purple-xlight"><p>Fecha y Hora Solicitado<br>Fecha de ENTREGA</p></div>
							<div class="col s12 m7 l3 hide-on-med-and-down"><?php echo $solic_fecha4_ext . ' ' . $solic_hora4_ext; ?><br><?php echo $ent_fecha4_ext . ' ' . $ent_hora4_ext; ?></div>
							<div class="col s12 m5 hide-on-large-and-up clear bg-purple-xlight"><p>Fecha y Hora Solicitado</p></div>
							<div class="col s12 m7 hide-on-large-and-up"><?php echo $solic_fecha4_ext . ' ' . $solic_hora4_ext; ?></div>
							<div class="col s12 m5 hide-on-large-and-up bg-purple-xlight"><p>Fecha de ENTREGA</p></div>
							<div class="col s12 m7 hide-on-large-and-up"><?php echo $ent_fecha4_ext . ' ' . $ent_hora4_ext; ?></div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>	
	<div class="content-fixed-buttons">
		<a href="<?php echo SITEURL; ?>sistema" class="btn btn-purple shadow margin-left-right-xxsmall">Ver Brief´s</a>
		<a href="<?php echo SITEURL; ?>my-calendar" class="btn btn-purple shadow margin-left-right-xxsmall">Ver calendario</a>
		<a href='mailto:
		<?php 
			$terms = get_the_terms($post->ID, 'responsable');
			foreach($terms as $term){
				echo $term->description . "; ";
			}
		?>
		?subject=BRIEF: <?php the_title(); ?> | Nuevo!&body=Se ha creado un nuevo Brief "<?php the_title(); ?>". %0D%0ARevísalo en <?php the_permalink(); ?>. %0D%0A%0D%0AProyecto: <?php echo $proyecto; ?>. %0D%0AFecha de entrega: <?php echo $fechaEntrega; ?>. %0D%0APrioridad: <?php echo $prioridad; ?>' class="btn btn-purple shadow"><i class="icon-mail-alt"></i> Nuevo</a>
		<a href='mailto:
		<?php 
			$terms = get_the_terms($post->ID, 'responsable');
			foreach($terms as $term){
				echo $term->description . "; ";
			}
		?>
		?subject=BRIEF: <?php the_title(); ?> | Actualización&body=Hay cambios en el Brief "<?php the_title(); ?>". %0D%0ARevísalos en <?php the_permalink(); ?>. %0D%0A%0D%0AProyecto: <?php echo $proyecto; ?>.' class="btn btn-purple shadow"><i class="icon-mail-alt"></i> Actualización</a>	
	</div>
<?php 
	endwhile; // end of the loop
	get_footer(); 
?>
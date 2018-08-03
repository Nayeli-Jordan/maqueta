<?php 
	get_header(); 
	global $post;
	
	while ( have_posts() ) : the_post();

	$custom_fields 	= get_post_custom();
	$post_id 		= get_the_ID();


?>

	<div id="container-brief" class="container container-large">
		<div id="header-brief" class="relative margin-bottom-large">
			<div class="row">
				<div class="col s2"><p>Solicitante</p></div>
				<div class="col s2"><p></p></div>
				<div class="col s2 clear"><p>Cliente</p></div>
				<div class="col s2"><p></p></div>
				<div class="col s2 clear"><p>Marca</p></div>
				<div class="col s2"><p></p></div>
				<div class="col s2 clear"><p>Proyecto</p></div>
				<div class="col s2"><p></p></div>
				<div class="col s2"><p>Tiempo Cotizado</p></div>
				<div class="col s2 clear"><p>Requerimiento</p></div>
				<div class="col s2"><p></p></div>
				<div class="col s2"><p></p></div>
			</div>
			<div class="brief-general-info">
				<div class="row">
					<div class="col s6"><p>No. de Brief</p></div>
					<div class="col s6"><p></p></div>
					<div class="col s6 clear"><p>Fecha Requerida</p></div>
					<div class="col s6"><p></p></div>
					<div class="col s6 clear"><p>Fecha de Entrega</p></div>
					<div class="col s6"><p></p></div>
					<div class="col s6 clear"><p>Responsable</p></div>
					<div class="col s6"><p></p></div>
					<div class="col s6 clear"><p>Prioridad</p></div>
					<div class="col s6"><p></p></div>
				</div>
			</div>			
		</div>

		<div id="brief" class="body-brief"><!-- Fanta agregar requerimiento al ID -->
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>DISEÑO INDUSTRIAL / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s2"><p>Medio de entrega</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Requerimiento</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>No. de piezas</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s4 clear"><p>Descripción general del proyecto:</p></div>
					<div class="col s4"><p></p></div>
					<div class="col s2"><p>Cantidad a producir</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s12 clear"><p></p></div>
					<div class="col s12 clear"><p>Llenar en caso de tener medida de producto o material creativo:</p></div>
					<div class="col s2 clear"><p>PRODUCTO 1</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Peso (kg)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Cantidad de Carga</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2 clear"><p>Largo (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Ancho (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Alto (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2 clear"><p>PRODUCTO 2</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Peso (kg)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Cantidad de Carga</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2 clear"><p>Largo (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Ancho (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Alto (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2 clear"><p>PRODUCTO 3</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Peso (kg)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Cantidad de Carga</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2 clear"><p>Largo (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Ancho (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Alto (cm)</p></div>
					<div class="col s2"><p></p></div>
				</div>
			</div>
		</div>

		<div id="brief" class="body-brief"><!-- Fanta agregar requerimiento al ID -->
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>DISEÑO VISUAL / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s2"><p>Medio de entrega</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Requerimiento</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>No. de piezas</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s4 clear"><p>Descripción general del proyecto:</p></div>
					<div class="col s4"><p></p></div>
					<div class="col s2"><p>Cantidad a producir</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s12 clear"><p></p></div>
					<div class="col s12 clear"><p>Llenar en caso de tener medida de material creativo:</p></div>
					<div class="col s2 clear"><p>MATERIAL 1</p></div>
					<div class="col s10"><p></p></div>
					<div class="col s2 clear"><p>Largo (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Ancho (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Alto (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2 clear"><p>MATERIAL 2</p></div>
					<div class="col s10"><p></p></div>
					<div class="col s2 clear"><p>Largo (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Ancho (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Alto (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2 clear"><p>MATERIAL 3</p></div>
					<div class="col s10"><p></p></div>
					<div class="col s2 clear"><p>Largo (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Ancho (cm)</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Alto (cm)</p></div>
					<div class="col s2"><p></p></div>
				</div>
			</div>
		</div>

		<div id="brief" class="body-brief"><!-- Fanta agregar requerimiento al ID -->
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>MARKETING / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s2"><p>Medio de entrega</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Requerimiento</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Personas externas</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s4 clear"><p>Descripción general del proyecto:</p></div>
					<div class="col s2"><p>Caracteristicas</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>No. de personas</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s12 clear"><p></p></div>
				</div>
			</div>
		</div>

		<div id="brief" class="body-brief"><!-- Fanta agregar requerimiento al ID -->
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>SISTEMAS / DATOS Y APOYO</h2>
				</div>
				<div class="row">
					<div class="col s2"><p>Medio de entrega</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Requerimiento</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>Dominio y hospedaje</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s4 clear"><p>Descripción general del proyecto:</p></div>
					<div class="col s2"><p>Dominio</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s2"><p>FTP</p></div>
					<div class="col s2"><p></p></div>
					<div class="col s12 clear"><p></p></div>
				</div>
			</div>
		</div>

		<div id="brief" class="body-brief"><!-- Fanta agregar requerimiento al ID -->
			<div class="row">
				<div class="col s12 header-area-brief">
					<h2>LLENAR EN CASO QUE EXISTAN CAMBIOS POSTERIORES A LA PRIMER SOLICITUD</h2>
				</div>
				<div class="row">
					<div class="col s2"><p>Actualización</p></div>
					<div class="col s2"><p></p></div>
				</div>
			</div>
		</div>

	</div>

<?php 
	endwhile; // end of the loop
	get_footer(); 
?>
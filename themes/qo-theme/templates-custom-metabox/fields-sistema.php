<table class="table-sistema">
    <tr>
        <th colspan="2" class="bg-destacade"><label>Estatus</label></th>
        <th colspan="4">
            <select name="sistema_estatus">
                <option value="Abierto">Abierto</option>
                <option value="Enterado" <?php selected($estatus, 'Enterado'); ?>>Enterado</option>
                <option value="Trabajando" <?php selected($estatus, 'Trabajando'); ?>>Trabajando</option>
                <option value="Hecho" <?php selected($estatus, 'Hecho'); ?>>Hecho</option>
                <option value="Cerrado" <?php selected($estatus, 'Cerrado'); ?>>Cerrado</option>
                <option value="Reabierto" <?php selected($estatus, 'Reabierto'); ?>>Reabierto</option>
            </select>
        </th>
    </tr>
	<tr><th colspan="6"><p class="note">*No olvides seleccionar el o los requerimientos necesarios para visualizar correctamente los campos. Aunque los campos estén completos no se visualizarán si no se selecciona (Columna derecha) el requerimiento correspondiente (Área Industrial, Visual, UX/UI, Social Media, etc.)</p></th></tr>
	<tr>
		<th><label>Solicitante</label></th>
		<th><p class="disabled">Columna derecha</p></th>
		<th colspan="2" class="color-light">.</th>
		<th><label>No. de Brief</label></th>
		<th colspan="1"><p class="disabled">Designado</p></th>
	</tr>
	<tr>
		<th><label>Cliente</label></th>
		<th><input type="text" name="sistema_cliente" value="<?php echo $cliente; ?>"></th>
		<th colspan="2" class="color-light">.</th>
		<th><label>Fecha Requerida</label></th>
		<th><input type="date" name="sistema_fechaRequerida" value="<?php echo $fechaRequerida; ?>"></th>
	</tr>
	<tr>
		<th><label>Marca</label></th>
		<th><input type="text" name="sistema_marca" value="<?php echo $marca; ?>"></th>
		<th colspan="2" class="color-light">.</th>
		<th><label>Fecha de Entrega</label></th>
		<th><input type="date" name="sistema_fechaEntrega" value="<?php echo $fechaEntrega; ?>"></th>
	</tr>
	<tr>
		<th><label>Proyecto</label></th>
		<th><input type="text" name="sistema_proyecto" value="<?php echo $proyecto; ?>"></th>
		<th><label class="text-center">Tiempo cotizado</label></th>
		<th colspan="1"></th>
		<th><label>Responsable</label></th>
		<th><p class="disabled">Columna derecha</p></th>
	</tr>
	<tr class="margin-bottom-large">
		<th><label>Requerimiento</label></th>
		<th><p class="disabled">Columna derecha</p></th>
		<th><input type="text" name="sistema_tiempoCotizado" value="<?php echo $tiempoCotizado; ?>"></th>
		<th colspan="1" class="color-light">.</th>
		<th><label>Prioridad</label></th>
		<th>
            <select name="sistema_prioridad">
                <option value="">---</option>
                <option value="Baja" <?php selected($prioridad, 'Baja'); ?>>Baja</option>
                <option value="Media" <?php selected($prioridad, 'Media'); ?>>Media</option>
                <option value="Alta" <?php selected($prioridad, 'Alta'); ?>>Alta</option>
                <option value="Urgente" <?php selected($prioridad, 'Urgente'); ?>>Urgente</option>
            </select>
        </th>
	</tr>	
</table>
<table class="table-sistema">
	<thead>
		<tr>
			<th colspan="6"><h2>DISEÑO INDUSTRIAL / DATOS Y APOYO</h2></th>			
		</tr>
		<tr>
			<th colspan="2" class="bg-destacade"><label>Tiempo Creativo</label></th>
			<th colspan="4"><input type="text" name="sistema_tiempoCreativo_di" value="<?php echo $tiempoCreativo_di; ?>" placeholder="00:00:00"></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th><label>Medio de entrada</label></th>
			<th>
				<select name="sistema_medioEntrada_di">
					<option value="">---</option>
					<option value="CD" <?php selected($medioEntrada_di, 'CD'); ?>>CD</option>
					<option value="Mail" <?php selected($medioEntrada_di, 'Mail'); ?>>Mail</option>
					<option value="Planos" <?php selected($medioEntrada_di, 'Planos'); ?>>Planos</option>
					<option value="USB" <?php selected($medioEntrada_di, 'USB'); ?>>USB</option>
					<option value="Drive" <?php selected($medioEntrada_di, 'Drive'); ?>>Drive</option>
					<option value="Dropbox" <?php selected($medioEntrada_di, 'Dropbox'); ?>>Dropbox</option>
					<option value="WeTransfer" <?php selected($medioEntrada_di, 'WeTransfer'); ?>>WeTransfer</option>
					<option value="Otros" <?php selected($medioEntrada_di, 'Otros'); ?>>Otros (especificar)</option>
				</select>
			</th>
			<th><label>Requerimiento</label></th>
			<th>
				<select name="sistema_requerimiento_di">
					<option value="">---</option>
					<option value="Dummy" <?php selected($requerimiento_di, 'Dummy'); ?>>Dummy</option>
					<option value="Empaque" <?php selected($requerimiento_di, 'Empaque'); ?>>Empaque</option>
					<option value="Planos" <?php selected($requerimiento_di, 'Planos'); ?>>Planos</option>
					<option value="Prototipo" <?php selected($requerimiento_di, 'Prototipo'); ?>>Prototipo</option>
					<option value="Render" <?php selected($requerimiento_di, 'Render'); ?>>Render</option>
					<option value="Suaje" <?php selected($requerimiento_di, 'Suaje'); ?>>Suaje</option>
					<option value="Stand" <?php selected($requerimiento_di, 'Stand'); ?>>Stand</option>
				</select>
			</th>
			<th><label>No. de piezas</label></th>
			<th><input type="text" name="sistema_noPiezas_di" value="<?php echo $noPiezas_di; ?>"></th>
		</tr>
		<tr>
			<th colspan="2"><label>Descripción general del proyecto</label></th>
			<th colspan="2"><input type="text" name="sistema_descripcion_di" value="<?php echo $descripcion_di; ?>"></th>
			<th><label>Cantidad a producir</label></th>
			<th><input type="text" name="sistema_cantidad_di" value="<?php echo $cantidad_di; ?>"></th>
		</tr>
		<tr>
			<th colspan="6"><textarea name="sistema_detalles_di"><?php echo $detalles_di; ?></textarea></th>
		</tr>
		<tr>
			<th colspan="6"><label>Llenar en caso de tener medida de producto o material creativo:</label></th>
		</tr>
		<tr>
			<th><label>Producto 1</label></th>
			<th><input type="text" name="sistema_product1_di" value="<?php echo $product1_di; ?>"></th>
			<th><label>Peso(kg)</label></th>
			<th><input type="text" name="sistema_peso1_di" value="<?php echo $peso1_di; ?>"></th>
			<th><label>Cantidad de Carga</label></th>
			<th><input type="text" name="sistema_cantCarga1_di" value="<?php echo $cantCarga1_di; ?>"></th>
		</tr>
		<tr>
			<th><label>Largo (cm)</label></th>
			<th><input type="text" name="sistema_largo1_di" value="<?php echo $largo1_di; ?>"></th>
			<th><label>Ancho (cm)</label></th>
			<th><input type="text" name="sistema_ancho1_di" value="<?php echo $ancho1_di; ?>"></th>
			<th><label>Alto (cm)</label></th>
			<th><input type="text" name="sistema_alto1_di" value="<?php echo $alto1_di; ?>"></th>
		</tr>
		<tr>
			<th><label>Producto 2</label></th>
			<th><input type="text" name="sistema_product2_di" value="<?php echo $product2_di; ?>"></th>
			<th><label>Peso(kg)</label></th>
			<th><input type="text" name="sistema_peso2_di" value="<?php echo $peso2_di; ?>"></th>
			<th><label>Cantidad de Carga</label></th>
			<th><input type="text" name="sistema_cantCarga2_di" value="<?php echo $cantCarga2_di; ?>"></th>
		</tr>
		<tr>
			<th><label>Largo (cm)</label></th>
			<th><input type="text" name="sistema_largo2_di" value="<?php echo $largo2_di; ?>"></th>
			<th><label>Ancho (cm)</label></th>
			<th><input type="text" name="sistema_ancho2_di" value="<?php echo $ancho2_di; ?>"></th>
			<th><label>Alto (cm)</label></th>
			<th><input type="text" name="sistema_alto2_di" value="<?php echo $alto2_di; ?>"></th>
		</tr>
		<tr>
			<th><label>Producto 3</label></th>
			<th><input type="text" name="sistema_product3_di" value="<?php echo $product3_di; ?>"></th>
			<th><label>Peso(kg)</label></th>
			<th><input type="text" name="sistema_peso3_di" value="<?php echo $peso3_di; ?>"></th>
			<th><label>Cantidad de Carga</label></th>
			<th><input type="text" name="sistema_cantCarga3_di" value="<?php echo $cantCarga3_di; ?>"></th>
		</tr>
		<tr>
			<th><label>Largo (cm)</label></th>
			<th><input type="text" name="sistema_largo3_di" value="<?php echo $largo3_di; ?>"></th>
			<th><label>Ancho (cm)</label></th>
			<th><input type="text" name="sistema_ancho3_di" value="<?php echo $ancho3_di; ?>"></th>
			<th><label>Alto (cm)</label></th>
			<th><input type="text" name="sistema_alto3_di" value="<?php echo $alto3_di; ?>"></th>
		</tr>
	</tbody>
</table>
<table class="table-sistema">
	<thead>
		<tr>
			<th colspan="6"><h2>DISEÑO VISUAL / DATOS Y APOYO</h2></th>			
		</tr>
		<tr>
			<th colspan="2" class="bg-destacade"><label>Tiempo Creativo</label></th>
			<th colspan="4"><input type="text" name="sistema_tiempoCreativo_dv" value="<?php echo $tiempoCreativo_dv; ?>" placeholder="00:00:00"></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th><label>Medio de entrada</label></th>
			<th>
				<select name="sistema_medioEntrada_dv">
					<option value="">---</option>
					<option value="CD" <?php selected($medioEntrada_dv, 'CD'); ?>>CD</option>
					<option value="Mail" <?php selected($medioEntrada_dv, 'Mail'); ?>>Mail</option>
					<option value="Planos" <?php selected($medioEntrada_dv, 'Planos'); ?>>Planos</option>
					<option value="USB" <?php selected($medioEntrada_dv, 'USB'); ?>>USB</option>
					<option value="Drive" <?php selected($medioEntrada_dv, 'Drive'); ?>>Drive</option>
					<option value="Dropbox" <?php selected($medioEntrada_dv, 'Dropbox'); ?>>Dropbox</option>
					<option value="WeTransfer" <?php selected($medioEntrada_dv, 'WeTransfer'); ?>>WeTransfer</option>
					<option value="Otros" <?php selected($medioEntrada_dv, 'Otros'); ?>>Otros (especificar)</option>
				</select>
			</th>
			<th><label>Requerimiento</label></th>
			<th>
				<select name="sistema_requerimiento_dv">
					<option value="">---</option>
					<option value="Diseño p/adaptar" <?php selected($requerimiento_dv, 'Diseño p/adaptar'); ?>>Diseño p/adaptar</option>
					<option value="Diseño p/impresión" <?php selected($requerimiento_dv, 'Diseño p/impresión'); ?>>Diseño p/impresión</option>
					<option value="Diseño nuevo" <?php selected($requerimiento_dv, 'Diseño nuevo'); ?>>Diseño nuevo</option>
					<option value="Montaje" <?php selected($requerimiento_dv, 'Montaje'); ?>>Montaje</option>
					<option value="Logo" <?php selected($requerimiento_dv, 'Logo'); ?>>Logo</option>
					<option value="Página Web" <?php selected($requerimiento_dv, 'Página Web'); ?>>Página Web</option>
					<option value="Render" <?php selected($requerimiento_dv, 'Render'); ?>>Render</option>
					<option value="Otros" <?php selected($requerimiento_dv, 'Otros'); ?>>Otros</option>
				</select>
			</th>
			<th><label>No. de piezas</label></th>
			<th><input type="text" name="sistema_noPiezas_dv" value="<?php echo $noPiezas_dv; ?>"></th>
		</tr>
		<tr>
			<th colspan="2"><label>Descripción general del proyecto</label></th>
			<th colspan="2"><input type="text" name="sistema_descripcion_dv" value="<?php echo $descripcion_dv; ?>"></th>
			<th><label>Cantidad a producir</label></th>
			<th><input type="text" name="sistema_cantidad_dv" value="<?php echo $cantidad_dv; ?>"></th>
		</tr>
		<tr>
			<th colspan="6"><textarea name="sistema_detalles_dv"><?php echo $detalles_dv; ?></textarea></th>
		</tr>
		<tr>
			<th colspan="6"><label>Llenar en caso de tener medida del material creativo:</label></th>
		</tr>
		<tr>
			<th><label>Material 1</label></th>
			<th colspan="6"><input type="text" name="sistema_material1_dv" value="<?php echo $material1_dv; ?>"></th>
		</tr>
		<tr>
			<th><label>Largo (cm)</label></th>
			<th><input type="text" name="sistema_largo1_dv" value="<?php echo $largo1_dv; ?>"></th>
			<th><label>Ancho (cm)</label></th>
			<th><input type="text" name="sistema_ancho1_dv" value="<?php echo $ancho1_dv; ?>"></th>
			<th><label>Alto (cm)</label></th>
			<th><input type="text" name="sistema_alto1_dv" value="<?php echo $alto1_dv; ?>"></th>
		</tr>
		<tr>
			<th><label>Material 2</label></th>
			<th colspan="6"><input type="text" name="sistema_material2_dv" value="<?php echo $material2_dv; ?>"></th>
		</tr>
		<tr>
			<th><label>Largo (cm)</label></th>
			<th><input type="text" name="sistema_largo2_dv" value="<?php echo $largo2_dv; ?>"></th>
			<th><label>Ancho (cm)</label></th>
			<th><input type="text" name="sistema_ancho2_dv" value="<?php echo $ancho2_dv; ?>"></th>
			<th><label>Alto (cm)</label></th>
			<th><input type="text" name="sistema_alto2_dv" value="<?php echo $alto2_dv; ?>"></th>
		</tr>
		<tr>
			<th><label>Material 3</label></th>
			<th colspan="6"><input type="text" name="sistema_material3_dv" value="<?php echo $material3_dv; ?>"></th>
		</tr>
		<tr>
			<th><label>Largo (cm)</label></th>
			<th><input type="text" name="sistema_largo3_dv" value="<?php echo $largo3_dv; ?>"></th>
			<th><label>Ancho (cm)</label></th>
			<th><input type="text" name="sistema_ancho3_dv" value="<?php echo $ancho3_dv; ?>"></th>
			<th><label>Alto (cm)</label></th>
			<th><input type="text" name="sistema_alto3_dv" value="<?php echo $alto3_dv; ?>"></th>
		</tr>
	</tbody>
</table>
<table class="table-sistema">
	<thead>
		<tr>
			<th colspan="6"><h2>MARKETING / DATOS Y APOYO</h2></th>			
		</tr>
		<tr>
			<th colspan="2" class="bg-destacade"><label>Tiempo Creativo</label></th>
			<th colspan="4"><input type="text" name="sistema_tiempoCreativo_mkt" value="<?php echo $tiempoCreativo_mkt; ?>" placeholder="00:00:00"></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th><label>Medio de entrada</label></th>
			<th>
				<select name="sistema_medioEntrada_mkt">
					<option value="">---</option>
					<option value="CD" <?php selected($medioEntrada_mkt, 'CD'); ?>>CD</option>
					<option value="Mail" <?php selected($medioEntrada_mkt, 'Mail'); ?>>Mail</option>
					<option value="Planos" <?php selected($medioEntrada_mkt, 'Planos'); ?>>Planos</option>
					<option value="USB" <?php selected($medioEntrada_mkt, 'USB'); ?>>USB</option>
					<option value="Drive" <?php selected($medioEntrada_mkt, 'Drive'); ?>>Drive</option>
					<option value="Dropbox" <?php selected($medioEntrada_mkt, 'Dropbox'); ?>>Dropbox</option>
					<option value="WeTransfer" <?php selected($medioEntrada_mkt, 'WeTransfer'); ?>>WeTransfer</option>
					<option value="Otros" <?php selected($medioEntrada_mkt, 'Otros'); ?>>Otros (especificar)</option>
				</select>
			</th>
			<th><label>Requerimiento</label></th>
			<th>
				<select name="sistema_requerimiento_mkt">
					<option value="">---</option>
					<option value="Asesoría Técnica" <?php selected($requerimiento_mkt, 'Asesoría Técnica'); ?>>Asesoría Técnica</option>
					<option value="Activación BTL" <?php selected($requerimiento_mkt, 'Activación BTL'); ?>>Activación BTL</option>
					<option value="Asesoría de mercado" <?php selected($requerimiento_mkt, 'Asesoría de mercado'); ?>>Asesoría de mercado</option>
					<option value="Estudio de mercado" <?php selected($requerimiento_mkt, 'Estudio de mercado'); ?>>Estudio de mercado</option>
					<option value="Medios de comunicación" <?php selected($requerimiento_mkt, 'Medios de comunicación'); ?>>Medios de comunicación</option>
					<option value="Estrategía de comunicación" <?php selected($requerimiento_mkt, 'Estrategía de comunicación'); ?>>Estrategía de comunicación</option>
					<option value="Pauta" <?php selected($requerimiento_mkt, 'Pauta'); ?>>Pauta</option>
					<option value="Estadisticas" <?php selected($requerimiento_mkt, 'Estadisticas'); ?>>Estadisticas</option>
					<option value="Creación de red" <?php selected($requerimiento_mkt, 'Creación de red'); ?>>Creación de red</option>
				</select>
			</th>
			<th><label>Personas externas</label></th>
			<th><input type="text" name="sistema_personasExternas_mkt" value="<?php echo $personasExternas_mkt; ?>"></th>
		</tr>
		<tr>
			<th colspan="2"><label>Descripción general del proyecto</label></th>
			<th><label>Características</label></th>
			<th><input type="text" name="sistema_caracteristicas_mkt" value="<?php echo $caracteristicas_mkt; ?>"></th>
			<th><label>No. de Personas</label></th>
			<th><input type="text" name="sistema_noPersonas_mkt" value="<?php echo $noPersonas_mkt; ?>"></th>
		</tr>
		<tr>
			<th colspan="6"><textarea name="sistema_detalles_mkt"><?php echo $detalles_mkt; ?></textarea></th>
		</tr>
	</tbody>
</table>
<table class="table-sistema">
	<thead>
		<tr>
			<th colspan="6"><h2>SISTEMAS / DATOS Y APOYO</h2></th>			
		</tr>
		<tr>
			<th colspan="2" class="bg-destacade"><label>Tiempo Creativo</label></th>
			<th colspan="4"><input type="text" name="sistema_tiempoCreativo_stm" value="<?php echo $tiempoCreativo_stm; ?>" placeholder="00:00:00"></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th><label>Medio de entrada</label></th>
			<th>
				<select name="sistema_medioEntrada_stm">
					<option value="">---</option>
					<option value="CD" <?php selected($medioEntrada_stm, 'CD'); ?>>CD</option>
					<option value="FTP" <?php selected($medioEntrada_stm, 'FTP'); ?>>FTP</option>
					<option value="Mail" <?php selected($medioEntrada_stm, 'Mail'); ?>>Mail</option>
					<option value="Planos" <?php selected($medioEntrada_stm, 'Planos'); ?>>Planos</option>
					<option value="USB" <?php selected($medioEntrada_stm, 'USB'); ?>>USB</option>
					<option value="Drive" <?php selected($medioEntrada_stm, 'Drive'); ?>>Drive</option>
					<option value="Dropbox" <?php selected($medioEntrada_stm, 'Dropbox'); ?>>Dropbox</option>
					<option value="WeTransfer" <?php selected($medioEntrada_stm, 'WeTransfer'); ?>>WeTransfer</option>
					<option value="Otros" <?php selected($medioEntrada_stm, 'Otros'); ?>>Otros (especificar)</option>
				</select>
			</th>
			<th><label>Requerimiento</label></th>
			<th>
				<select name="sistema_requerimiento_stm">
					<option value="">---</option>
					<option value="Asesoría Técnica" <?php selected($requerimiento_stm, 'Asesoría Técnica'); ?>>Asesoría Técnica</option>
					<option value="Desarrollo de sistemas" <?php selected($requerimiento_stm, 'Desarrollo de sistemas'); ?>>Desarrollo de sistemas</option>
					<option value="Programación Web" <?php selected($requerimiento_stm, 'Programación Web'); ?>>Programación Web</option>
					<option value="SSL" <?php selected($requerimiento_stm, 'SSL'); ?>>SSL</option>
					<option value="Posicionamiento" <?php selected($requerimiento_stm, 'Posicionamiento'); ?>>Posicionamiento</option>
					<option value="Mantenimiento Web" <?php selected($requerimiento_stm, 'Mantenimiento Web'); ?>>Mantenimiento Web</option>
				</select>
			</th>
			<th><label>Dominio y Hospedaje</label></th>
			<th>
				<select name="sistema_dominioHospedaje_stm">
					<option value="">---</option>
					<option value="Sí" <?php selected($dominioHospedaje_stm, 'Sí'); ?>>Sí</option>
					<option value="No" <?php selected($dominioHospedaje_stm, 'No'); ?>>No</option>
				</select>
			</th>
		</tr>
		<tr>
			<th colspan="2"><label>Descripción general del proyecto</label></th>
			<th><label>Dominio</label></th>
			<th><input type="text" name="sistema_dominio_stm" value="<?php echo $dominio_stm; ?>"></th>
			<th><label>FTP</label></th>
			<th><input type="text" name="sistema_ftp_stm" value="<?php echo $ftp_stm; ?>"></th>
		</tr>
		<tr>
			<th colspan="6"><textarea name="sistema_detalles_stm"><?php echo $detalles_stm; ?></textarea></th>
		</tr>
	</tbody>
</table>
<table class="table-sistema">
	<thead>
		<tr>
			<th colspan="6"><h2>LLENAR EN CASO QUE EXISTAN CAMBIOS POSTERIORES A LA PRIMERA SOLICITUD</h2></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th colspan="2" class="bg-destacade"><label>Tiempo Creativo</label></th>
			<th colspan="4"><input type="text" name="sistema_tiempoCreativo1_ext" value="<?php echo $tiempoCreativo1_ext; ?>" placeholder="00:00:00"></th>
		</tr>
		<tr>
			<th class="bg-destacade"><label>Actualización #1</label></th>
			<th colspan="2" rowspan="3"><textarea class="textarea_row3" name="sistema_solicitud1_ext"><?php echo $solicitud1_ext; ?></textarea></th>
			<th><label>Fecha y Hora Solicitado</label></th>
			<th><input type="date" name="sistema_solic_fecha1_ext" value="<?php echo $solic_fecha1_ext; ?>"></th>
			<th><input type="text" name="sistema_solic_hora1_ext" value="<?php echo $solic_hora1_ext; ?>" placeholder="00:00"></th>
		</tr>
		<tr>
			<th rowspan="2"><label>Solicitud</label></th>
			<th><label>Fecha Requerida</label></th>
			<th><input type="date" name="sistema_req_fecha1_ext" value="<?php echo $req_fecha1_ext; ?>"></th>
			<th><input type="text" name="sistema_req_hora1_ext" value="<?php echo $req_hora1_ext; ?>" placeholder="00:00">
		</tr>
		<tr>
			<th><label>Fecha de ENTREGA</label></th>
			<th><input type="date" name="sistema_ent_fecha1_ext" value="<?php echo $ent_fecha1_ext; ?>"></th>
			<th><input type="text" name="sistema_ent_hora1_ext" value="<?php echo $ent_hora1_ext; ?>" placeholder="00:00">
		</tr>
		<tr>
			<th colspan="2" class="bg-destacade"><label>Tiempo Creativo</label></th>
			<th colspan="4"><input type="text" name="sistema_tiempoCreativo2_ext" value="<?php echo $tiempoCreativo2_ext; ?>" placeholder="00:00:00"></th>
		</tr>
		<tr>
			<th class="bg-destacade"><label>Actualización #2</label></th>
			<th colspan="2" rowspan="3"><textarea class="textarea_row3" name="sistema_solicitud2_ext"><?php echo $solicitud2_ext; ?></textarea></th>
			<th><label>Fecha y Hora Solicitado</label></th>
			<th><input type="date" name="sistema_solic_fecha2_ext" value="<?php echo $solic_fecha2_ext; ?>"></th>
			<th><input type="text" name="sistema_solic_hora2_ext" value="<?php echo $solic_hora2_ext; ?>" placeholder="00:00"></th>
		</tr>
		<tr>
			<th rowspan="2"><label>Solicitud</label></th>
			<th><label>Fecha Requerida</label></th>
			<th><input type="date" name="sistema_req_fecha2_ext" value="<?php echo $req_fecha2_ext; ?>"></th>
			<th><input type="text" name="sistema_req_hora2_ext" value="<?php echo $req_hora2_ext; ?>" placeholder="00:00">
		</tr>
		<tr>
			<th><label>Fecha de ENTREGA</label></th>
			<th><input type="date" name="sistema_ent_fecha2_ext" value="<?php echo $ent_fecha2_ext; ?>"></th>
			<th><input type="text" name="sistema_ent_hora2_ext" value="<?php echo $ent_hora2_ext; ?>" placeholder="00:00">
		</tr>
		<tr>
			<th colspan="2" class="bg-destacade"><label>Tiempo Creativo</label></th>
			<th colspan="4"><input type="text" name="sistema_tiempoCreativo3_ext" value="<?php echo $tiempoCreativo3_ext; ?>" placeholder="00:00:00"></th>
		</tr>
		<tr>
			<th class="bg-destacade"><label>Actualización #3</label></th>
			<th colspan="2" rowspan="3"><textarea class="textarea_row3" name="sistema_solicitud3_ext"><?php echo $solicitud3_ext; ?></textarea></th>
			<th><label>Fecha y Hora Solicitado</label></th>
			<th><input type="date" name="sistema_solic_fecha3_ext" value="<?php echo $solic_fecha3_ext; ?>"></th>
			<th><input type="text" name="sistema_solic_hora3_ext" value="<?php echo $solic_hora3_ext; ?>" placeholder="00:00"></th>
		</tr>
		<tr>
			<th rowspan="2"><label>Solicitud</label></th>
			<th><label>Fecha Requerida</label></th>
			<th><input type="date" name="sistema_req_fecha3_ext" value="<?php echo $req_fecha3_ext; ?>"></th>
			<th><input type="text" name="sistema_req_hora3_ext" value="<?php echo $req_hora3_ext; ?>" placeholder="00:00"></th>
		</tr>
		<tr>
			<th><label>Fecha de ENTREGA</label></th>
			<th><input type="date" name="sistema_ent_fecha3_ext" value="<?php echo $ent_fecha3_ext; ?>"></th>
			<th><input type="text" name="sistema_ent_hora3_ext" value="<?php echo $ent_hora3_ext; ?>" placeholder="00:00"></th>
		</tr>
		<tr>
			<th colspan="2" class="bg-destacade"><label>Tiempo Creativo</label></th>
			<th colspan="4"><input type="text" name="sistema_tiempoCreativo4_ext" value="<?php echo $tiempoCreativo4_ext; ?>" placeholder="00:00:00"></th>
		</tr>
		<tr>
			<th class="bg-destacade"><label>Actualización #4</label></th>
			<th colspan="2" rowspan="3"><textarea class="textarea_row3" name="sistema_solicitud4_ext"><?php echo $solicitud4_ext; ?></textarea></th>
			<th><label>Fecha y Hora Solicitado</label></th>
			<th><input type="date" name="sistema_solic_fecha4_ext" value="<?php echo $solic_fecha4_ext; ?>"></th>
			<th><input type="text" name="sistema_solic_hora4_ext" value="<?php echo $solic_hora4_ext; ?>" placeholder="00:00"></th>
		</tr>
		<tr>
			<th rowspan="2"><label>Solicitud</label></th>
			<th><label>Fecha Requerida</label></th>
			<th><input type="date" name="sistema_req_fecha4_ext" value="<?php echo $req_fecha4_ext; ?>"></th>
			<th><input type="text" name="sistema_req_hora4_ext" value="<?php echo $req_hora4_ext; ?>" placeholder="00:00"></th>
		</tr>
		<tr>
			<th><label>Fecha de ENTREGA</label></th>
			<th><input type="date" name="sistema_ent_fecha4_ext" value="<?php echo $ent_fecha4_ext; ?>"></th>
			<th><input type="text" name="sistema_ent_hora4_ext" value="<?php echo $ent_hora4_ext; ?>" placeholder="00:00"></th>
		</tr>
	</tbody>
</table>
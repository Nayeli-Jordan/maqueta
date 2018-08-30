<div class="qo-custom-fields">
	<div class="row">
		<label>Razón social</label>
		<input type="text" name="qo_proveedores_razon_social" value="<?php echo $razon_social; ?>">
	</div>
	<div class="row">
		<label>RUC</label>
		<input type="text" name="qo_proveedores_ruc" value="<?php echo $ruc; ?>">
	</div>
	<div class="row">
		<label>Dirección</label>
		<input type="text" name="qo_proveedores_direction" value="<?php echo $direction; ?>">
	</div>
	<div class="row">
		<label>Producto/Servicio</label>
		<select name="qo_proveedores_prod_serv">
			<option value="">Seleccionar</option>
			<option value="Producto" <?php selected($prod_serv, 'Producto'); ?>>Producto</option>
			<option value="Servicio" <?php selected($prod_serv, 'Servicio'); ?>>Servicio</option>
		</select>
	</div>
	<div class="row">
		<label>Actividad</label>
		<input type="text" name="qo_proveedores_actividad" value="<?php echo $actividad; ?>">
	</div>
	<div class="row">
		<label>Contacto Comercial</label>
		<input type="text" name="qo_proveedores_contactComercial" value="<?php echo $contactComercial; ?>">
	</div>
	<div class="row">
		<label>Teléfono</label>
		<input type="text" name="qo_proveedores_telefono" value="<?php echo $telefono; ?>">
	</div>
	<div class="row">
		<label>Email</label>
		<input type="text" name="qo_proveedores_email" value="<?php echo $email; ?>">
	</div>
	<div class="row">
		<label>Fecha de Ingreso</label>
		<input type="text" name="qo_proveedores_fecha_ingreso" value="<?php echo $fecha_ingreso; ?>">
	</div>
</div>
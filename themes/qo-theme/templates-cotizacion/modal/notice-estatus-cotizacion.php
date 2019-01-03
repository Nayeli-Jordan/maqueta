<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<div id="modal-notice-estatus-cotizacion" class="modal">
	<div class="fondo-modal"></div>
	<div class="modal-content">
		<a href="<?php echo $actual_link ?>"><div class="close-notice"><i class="icon-cancel"></i></div></a>
		<div class="modal-body text-center">
			<div class="fz-medium margin-bottom-xsmall color-purple">¡Listo!</div>
			<p>El estatus de la cotización ha sido actualizado.</p>
			<a href="<?php echo SITEURL; ?>qo_cotizaciones" class="btn btn-purple margin-left-right-xxsmall margin-top-xsmall">Ver todas</a>
			<a href="<?php echo $actual_link ?>" class="btn btn-purple margin-left-right-xxsmall margin-top-xsmall">Cerrar</a>
		</div>
	</div>
</div>
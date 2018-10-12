<?php 
	get_header();
	$currentMonth = date("m"); 
?>
	<?php if (is_user_logged_in()) : ?>
		<header class="container container-large archive-header">
			<a href="<?php echo SITEURL; ?>"><div class="bg-image bg-contain bg-qo-logo inline-block" style="background-image: url(<?php echo THEMEPATH; ?>images/identidad/logo.png)"></div></a>
			<div class="title-archive">Cotizaciones</div>
			<?php include (TEMPLATEPATH . '/templates-qo/nav-qo.php'); ?>		
		</header>
		<section class="[ container container-large ]">
			<div class="filter option-set button-group row margin-bottom-xsmall text-center btns-group-estatus" data-filter-group="estatus">
				<button data-filter-value=".VoBo">VoBo</button>
				<button data-filter-value=".Facturada">Facturada</button>
				<button data-filter-value="" class="selected">x</button>
			</div>
			<div class="filter option-set button-group row margin-bottom-xsmall text-center btns-group-ano" data-filter-group="ano">
				<!-- BTN Año -->
				<?php
				$inicialYear = 2018; 
				$currentYear = date("Y");
				while ( $inicialYear <= $currentYear) { ?>
					<button id="<?php echo $inicialYear; ?>" data-filter-value=".<?php echo $inicialYear; ?>"><?php echo $inicialYear; ?></button>
					<?php $inicialYear++;
				} ?>
				<button data-filter-value="" class="selected">x</button>
			</div>

			<?php
			$inicialYear = 2018; 
			$currentYear = date("Y"); 
			while ( $inicialYear <= $currentYear) { ?>

				<div class="filter option-set button-group row margin-bottom-xsmall text-center btns-group-mes btns-group-mes-<?php echo $inicialYear; ?> hide" data-filter-group="mes-<?php echo $inicialYear; ?>">
					<!-- BTN Mes -->					
					<?php 
						$month = 1;
						/* Si el año es el actual sólo se mostrarán los meses que van del año, sino los 12*/
						if ($inicialYear == $currentYear) {
							$monthShow = $currentMonth;
						} else {
							$monthShow = 12;
						}						
						
						while ( $month <= $monthShow) {	
							if ($month === 1) {
								$monthEsp = 'Ene';
							} elseif ($month === 2) {
								$monthEsp = 'Feb';
							} elseif ($month === 3) {
								$monthEsp = 'Mar';
							} elseif ($month === 4) {
								$monthEsp = 'Abr';
							} elseif ($month === 5) {
								$monthEsp = 'May';
							} elseif ($month === 6) {
								$monthEsp = 'Jun';
							} elseif ($month === 7) {
								$monthEsp = 'Jul';
							} elseif ($month === 8) {
								$monthEsp = 'Ago';
							} elseif ($month === 9) {
								$monthEsp = 'Sep';
							} elseif ($month === 10) {
								$monthEsp = 'Oct';
							} elseif ($month === 11) {
								$monthEsp = 'Nov';
							} elseif ($month === 12) {
								$monthEsp = 'Dic';
							} ?>											
							<button class="btn-primaryQO" data-filter-value=".<?php echo $inicialYear . '-' . $month; ?>"><?php echo $monthEsp; ?></button>
							<?php $month++;
						} 
					?>
					<button data-filter-value="" class="selected empty-value">x</button>
				</div>

				<?php $inicialYear++;
			} ?>

			
			<div class="row margin-top-large">
				<div class="grid">
				<?php
			        $args = array(
			            'post_type' 		=> 'qo_cotizaciones',
			            'posts_per_page' 	=> -1,
			            'orderby' 			=> 'date',
			            'order' 			=> 'ASC',
						'tax_query' 		=> array(
								array(
									'taxonomy' 	=> 'estatus-cotizacion',
									'field'	   	=> 'slug',
									'terms'	 	=> 'template',
									'operator'	=> 'NOT IN',
								)
							)
			            );
			        $loop = new WP_Query( $args );
			        $cotizacionNumber = 1;
			        if ( $loop->have_posts() ) {
			            while ( $loop->have_posts() ) : $loop->the_post(); 

							$custom_fields 	= get_post_custom();
							$post_id 		= get_the_ID();

							$estatus      	= get_post_meta( $post_id, 'qo_cotizaciones_estatus', true );

							include (TEMPLATEPATH . '/templates-cotizacion/qo-card-cotizaciones.php'); 

						$cotizacionNumber ++;  endwhile;
			        } 
			        wp_reset_postdata();
			    ?>				
				</div>
			</div>
		</section>	
	<?php else: ?>
		<?php include (TEMPLATEPATH . '/templates-qo/template-404.php'); ?>	
	<?php endif; ?>
<?php get_footer(); ?>
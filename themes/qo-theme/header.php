<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="<?php if (is_singular('qo_cotizaciones')) :?> single-cotizacion <?php elseif (is_page('qo-clientes')) :?> page-clientes <?php elseif (is_page('qo-proveedores')) :?> page-proveedores <?php endif; ?>">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- SEO -->
		<meta name="keywords" content="paginas web, marketing digital, comercio electronico, agencia de publicidad, identidad corporativa, diseño de paginas web, diseño de logo, Marketing Online, agencia digital, UX">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<!-- Meta robots -->
		<?php if (is_home() || is_404()): ?>
			<meta name="robots" content="index, follow" />
			<meta name="googlebot" content="index, follow" />		
		<?php else: ?>
			<!-- Evitar que se indexe el sistema QO -->
			<meta name="robots" content="noindex" />
			<meta name="googlebot" content="noindex">
		<?php endif ?>

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-16x16.png" sizes="16x16" />

		<!-- Facebook, Twitter metas -->
		<meta property="og:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo site_url(); ?>" />
		<meta property="og:image" content="<?php echo THEMEPATH; ?>images/share.png">
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
		<meta name="twitter:image" content="<?php echo THEMEPATH; ?>images/share.png" />
		<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:image:width" content="210" />
		<meta property="og:image:height" content="110" />
		<meta property="fb:app_id" content="" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@" />
		<!-- Google+ -->
		<link rel="publisher" href="https://plus.google.com/+">
		<!-- Compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">
		<!-- Google font(s) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Sans:700i" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="<?php echo THEMEPATH; ?>stylesheets/styles.css" media="screen,projection, print" />
		<!-- Canonical URL -->
		<link rel="canonical" href="<?php echo site_url(); ?>" />
		<!-- Sitemap Google Verify -->
		<meta name="google-site-verification" content="It5oQOBZoAwIBDAboPgUlYvsPEfL5Q9nDWi5XF6SaVs" />
		<!-- Noscript -->
		<noscript>Tu navegador no soporta JavaScript!</noscript>
		<?php wp_head(); ?>
		<script src="<?php echo THEMEPATH; ?>js/modernizr.custom.js"></script>
		
		<!-- Facebook Pixel Code -->
		<script>
		  !function(f,b,e,v,n,t,s)
		  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		  n.queue=[];t=b.createElement(e);t.async=!0;
		  t.src=v;s=b.getElementsByTagName(e)[0];
		  s.parentNode.insertBefore(t,s)}(window, document,'script',
		  'https://connect.facebook.net/en_US/fbevents.js');
		  fbq('init', '2404641336266856');
		  fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		  src="https://www.facebook.com/tr?id=2404641336266856&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->

		<?php flush(); ?>
	</head>
	<body class="<?php if (is_home() || is_front_page() || is_page('aviso-de-privacidad')) :?>page-home<?php endif; ?>">
		<?php if (is_user_logged_in()) :
			if (is_singular('qo_cotizaciones')) {
				/* Modal Estatus cotizacion */
				include (TEMPLATEPATH . '/templates-cotizacion/modal/estatus-cotizacion.php');
				include (TEMPLATEPATH . '/templates-cotizacion/modal/notice-estatus-cotizacion.php');
			}
			if (is_singular('sistema')) {
				/* Modal Estatus brief´s */
				include (TEMPLATEPATH . '/templates-sistema/modal/estatus-brief.php');
				include (TEMPLATEPATH . '/templates-sistema/modal/notice-estatus-brief.php');
				if (current_user_can( 'administrator' )) {
					/* Modal Tiempo cotizado brief´s */
					include (TEMPLATEPATH . '/templates-sistema/modal/tiempo-cotizado.php');
					include (TEMPLATEPATH . '/templates-sistema/modal/notice-tiempo-cotizado.php');
				}
				/* Modal Tiempo creativo brief´s */
				include (TEMPLATEPATH . '/templates-sistema/modal/notice-tiempo-creativo.php');
			}
		endif; ?>
		<?php if (is_home() || is_front_page() || is_page('aviso-de-privacidad')) : ?>			
			<header class="js-header">
				<h1 class="hide"><?php bloginfo('name'); ?></h1>	
				<nav>
					<i class="icon-cancel btn-header-close"></i>
					<ul class="qo-nav" itemscope>
						<?php
							$menu_name = 'top_menu';

							if (( $locations = get_nav_menu_locations()) && isset( $locations[ $menu_name ])) {
								$menu = wp_get_nav_menu_object( $locations[ $menu_name ]);
								$menu_items = wp_get_nav_menu_items( $menu->term_id );
								$menu_list = '';
								foreach ( (array) $menu_items as $key => $menu_item) {

									$url 				= $menu_item->url;
									$title 				= $menu_item->title;
									$attr_title 		= $menu_item->attr_title;
									$class 				= esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $menu_item->classes ), $menu_item) ) );

									$menu_list .='<li itemprop="actionOption" class="' . $class .'"><a id="' . $attr_title . '" class="item-scroll"><div></div><span>' . $title . '</span></a></li>';
								}
							}
							echo $menu_list;
							if ( current_user_can( 'administrator' ) || current_user_can( 'editor' ) ) :
								echo '<li itemprop="actionOption" ><a href="' . SITEURL . 'sistema" class="item-scroll"><div></div><span>Sistema</span></a></li>';
							endif;
						?>						
					</ul>
				</nav>
			</header>
			<div class="[ main-body ]">
		<?php endif; ?>
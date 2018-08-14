<?php get_header(); ?>
	<header class="container container-large archive-header">
		<div class="bg-image bg-contain bg-qo-logo inline-block" style="background-image: url(<?php echo THEMEPATH; ?>images/identidad/logo.png)"></div>
		<div class="title-archive">Calendario</div>
		<?php include (TEMPLATEPATH . '/templates-qo/nav-qo.php'); ?>		
	</header>
	<section id="qoCalendar" class="[ container ] margin-bottom-large">
		<?php echo do_shortcode("[my_calendar id='my-calendar']"); ?>
	</section>
<?php get_footer(); ?>
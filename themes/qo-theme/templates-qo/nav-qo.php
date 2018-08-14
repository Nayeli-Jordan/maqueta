<div class="btn-nav"><i class="icon-menu"></i></div>
<nav class="shadow">
	<i class="icon-cancel"></i>
	<ul>
	<?php
	$menu_name = 'qo_menu';

	if (( $locations = get_nav_menu_locations()) && isset( $locations[ $menu_name ])) {
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ]);
		$menu_items = wp_get_nav_menu_items( $menu->term_id );
		$menu_list = '';
		foreach ( (array) $menu_items as $key => $menu_item) {

			$url 				= $menu_item->url;
			$title 				= $menu_item->title;
			$class 				= esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $menu_item->classes ), $menu_item) ) );

			$menu_list .='<li itemprop="actionOption" class="' . $class .'"><a href="' . $url . '">' . $title . '</a></li>';
		}
	}
	echo $menu_list;
	?>										
	</ul>			
</nav>
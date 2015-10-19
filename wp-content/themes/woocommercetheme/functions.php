<?php 

function add_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action ('wp_enqueue_scripts', 'add_resources');



// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu')

	));


 ?>
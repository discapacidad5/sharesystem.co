<?php
//block direct access
defined('ABSPATH') or die("No script kiddies please!");

//setup theme menu
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
	register_nav_menu( 'main-menu', __( 'Main Menu' ) );
}

// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');
 
//setup thumbnail settings (adds the set featured image option to post edit page)
add_theme_support('post-thumbnails');
add_image_size('jumbo', 1920, 740);//thumbnail name, width, height, crop option
add_image_size('featured', 400, 250, true); 
add_image_size('post-thumb', 200, 125, true); 


//change default excerpt length 
function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//change excerpt readmore text
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//create custom post type
function create_post_type() {
	register_post_type('netsoft_producto', 
			array('labels' => array(
				'name' => __('Productos'),
				'singular_name' => __('Producto'),
			),
			'public' => true,
			'menu_position' => 5,
			'rewrite' => array('slug' => 'productos'),
		)
	);
}
add_action('init', 'create_post_type');


?>

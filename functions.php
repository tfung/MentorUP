<?php 

require_once('wp_bootstrap_navwalker.php');
require_once('helper functions/theme_customizer.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'wpbootstrap' ),
) );

function enqueue_javascript()
{
	wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ), '3.3.6', true );
	wp_register_script( 'base_js', get_template_directory_uri() . '/assets/js/base.js', array( 'jquery' ), '1.0.0', true );
	wp_register_script( 'parallax_js', get_template_directory_uri() . '/assets/third-party/parallax.js-1.3.1/parallax.min.js', '1.3.1', true );

	wp_enqueue_script( 'bootstrap_js' );
	wp_enqueue_script( 'base_js' );
	wp_enqueue_script( 'parallax_js');
}
add_action( 'wp_enqueue_scripts', 'enqueue_javascript' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));



?>
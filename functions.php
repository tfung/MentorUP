<?php 

// plugins
require_once( __DIR__ . '/plugins/cmb2/init.php');

// helper functions
require_once( __DIR__ . '/helper functions/wp_bootstrap_navwalker.php');
require_once( __DIR__ . '/helper functions/theme_customizer.php');
require_once( __DIR__ . '/helper functions/cmb_customizations.php');
require_once( __DIR__ . '/helper functions/post_helper.php');
require_once( __DIR__ . '/helper functions/wordpress_customizations.php');

register_nav_menus( 
  array(
    'primary' => __( 'Primary Menu', 'wpbootstrap' ),
  )
);

if (function_exists('register_sidebar'))
{
  register_sidebar(array(
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));
}

function enqueue_javascript()
{
  wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/assets/third-party/bootstrap-3.3.6/js/bootstrap.js', array( 'jquery' ), '3.3.6', true );
  wp_register_script( 'base_js', get_template_directory_uri() . '/assets/js/base.js', array( 'jquery' ), '1.0.0', true );

  wp_enqueue_script( 'bootstrap_js' );
  wp_enqueue_script( 'base_js' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_javascript' );

function enqueue_stylesheets()
{
  wp_enqueue_style( 'mentorup-beta', get_stylesheet_directory_uri() . "/assets/css/mentorup-beta.css" );
}
add_action('wp_enqueue_scripts','enqueue_stylesheets');

?>

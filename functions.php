<?php 

// plugins
require_once( __DIR__ . '/plugins/cmb2/init.php');
//require_once( __DIR__ . '/plugins/mentorup/init.php'); // future mentorup control panel

// shortcodes
require_once( __DIR__ . '/short codes/contact form/contact_form.php');

// helper functions
require_once( __DIR__ . '/helper functions/wp_bootstrap_navwalker.php');
require_once( __DIR__ . '/helper functions/theme_customizer.php');
require_once( __DIR__ . '/helper functions/cmb_customizations.php');
require_once( __DIR__ . '/helper functions/queries.php');
require_once( __DIR__ . '/helper functions/post_helper.php');
require_once( __DIR__ . '/helper functions/wordpress_customizations.php');

register_nav_menus( 
  array(
    'primary' => __('Primary Menu', 'mentorup'),
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
  wp_register_script('bootstrap_js', get_template_directory_uri() . '/assets/third-party/bootstrap-3.3.6/js/bootstrap.min.js', array('jquery'), '3.3.6', true);
  wp_register_script('base_js', get_template_directory_uri() . '/assets/js/base.js', array('jquery'), '1.0.1', true);

  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap_js');
  wp_enqueue_script('base_js');
}
add_action( 'wp_enqueue_scripts', 'enqueue_javascript' );

function enqueue_stylesheets()
{
  wp_enqueue_style('bootstrap-navbar-theme-transparent_css', get_stylesheet_directory_uri() . "/assets/css/bootstrap-navbar-theme-transparent.css", array(), '1.0.0');
  wp_enqueue_style('mentorup_css', get_stylesheet_directory_uri() . "/assets/css/mentorup.css", array('bootstrap-navbar-theme-transparent_css'), '2.0.2');
}
add_action('wp_enqueue_scripts','enqueue_stylesheets');

add_action('wp_head', 'facebook_meta_tags');
add_action('wp_head', 'twitter_meta_tags');

?>

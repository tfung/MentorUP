<?php 

require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'wpbootstrap' ),
) );

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

function theme_customizer($wp_customize) {
	$wp_customize->add_section( 'Site Logo', array(
		'title' => 'Logo',
		'description' => 'Site logo',
	));

	$wp_customize->add_setting( 'Site Logo', array(
		'default' => 'Default Value',
		'type' => 'theme_mod',
		'capability' => 'manage_options',
		'transport' => 'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( 
		$wp_customize, 'upload_images', array(
			'label' => __('Upload Site Logo', 'MentorUP'),
			'section' => 'Site Logo',
			'settings' => 'Site Logo',
		)));
}
add_action( 'customize_register', 'theme_customizer' );

?>
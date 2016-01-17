<?php 

require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'wpbootstrap' ),
) );

function enqueue_javascript()
{
	wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ), '3.3.6', true );
	wp_register_script( 'base_js', get_template_directory_uri() . '/assets/js/base.js', array( 'jquery' ), '3.3.6', true );

	wp_enqueue_script( 'bootstrap_js' );
	wp_enqueue_script( 'base_js' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_javascript' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

function theme_customizer($wp_customize) {

/*
	Site Logo
*/

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

/*
	Front Page Icons
*/

/*
	$wp_customize->add_section( 'Front Page Icons', array(
		'title' => 'Front Page Icons',
		'description' => 'Icons for front page',
	));

	$wp_customize->add_setting( 'Front Page Icons', array(
		'default' => 'Default Value',
		'type' => 'theme_mod',
		'capability' => 'manage_options',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'Icon 2', array(
		'default' => 'Default Value',
		'type' => 'theme_mod',
		'capability' => 'manage_options',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'Icon 3', array(
		'default' => 'Default Value',
		'type' => 'theme_mod',
		'capability' => 'manage_options',
		'transport' => 'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( 
		$wp_customize, 'upload_images', array(
			'label' => __('Front Page Icons', 'Icon 1'),
			'section' => 'Front Page Icons',
			'settings' => 'Front Page Icons',
		)));
	
	$wp_customize->add_control( new WP_Customize_Image_Control( 
		$wp_customize, 'upload_images', array(
			'label' => __('Front Page Icons2', 'Icon 2'),
			'section' => 'Front Page Icons',
			'settings' => 'Icon 2',
		)));
	$wp_customize->add_control( new WP_Customize_Image_Control( 
		$wp_customize, 'upload_images', array(
			'label' => __('Front Page Icons3', 'Icon 3'),
			'section' => 'Front Page Icons',
			'settings' => 'Icon 3',
		)));*/
}
add_action( 'customize_register', 'theme_customizer' );

?>
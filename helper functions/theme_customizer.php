<?php

function logo_customizer($wp_customize) {
	$wp_customize->add_section( 'site_logos', array(
		'title' => 'Logos',
		'description' => 'Site Logos',
	));

	$wp_customize->add_setting( 'site_logo', array(
		'default' => null,
		'type' => 'theme_mod',
		'capability' => 'manage_options',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'navbar_logo', array(
		'default' => null,
		'type' => 'theme_mod',
		'capability' => 'manage_options',
		'transport' => 'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( 
		$wp_customize, 'site_logo', array(
			'label' => 'Frontpage Logo',
			'section' => 'site_logos',
			'settings' => 'site_logo',
		)));

	$wp_customize->add_control( new WP_Customize_Image_Control( 
		$wp_customize, 'navbar_logo', array(
			'label' => 'Navbar Logo',
			'section' => 'site_logos',
			'settings' => 'navbar_logo',
		)));
}

function image_customizer($wp_customize) {
	$wp_customize->add_section( 'site_images', array(
		'title' => 'Images',
		'description' => 'Site Images',
	));

	$wp_customize->add_setting( 'main_image_1', array(
		'default' => null,
		'type' => 'theme_mod',
		'capability' => 'manage_options',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'main_image_2', array(
		'default' => null,
		'type' => 'theme_mod',
		'capability' => 'manage_options',
		'transport' => 'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( 
		$wp_customize, 'main_image_1', array(
			'label' => 'Main Image 1',
			'section' => 'site_images',
			'settings' => 'main_image_1',
		)));

	$wp_customize->add_control( new WP_Customize_Image_Control( 
		$wp_customize, 'main_image_2', array(
			'label' => 'Main Image 2',
			'section' => 'site_images',
			'settings' => 'main_image_2',
		)));
}

function sponsor_urls_customizer($wp_customize) {
	$wp_customize->add_section( 'sponsor_logos_section', array(
		'title' => 'Sponsor Logos',
	));

	$wp_customize->add_setting( 'sponsor_logo_list', array(
		'default' => '',
	));

	$wp_customize->add_control( 'text_setting', array(
		'label' => 'Comma Delimited URLs',
		'section' => 'sponsor_logos_section',
		'settings' => 'sponsor_logo_list',
		'type' => 'text',
	));
}

add_action( 'customize_register', 'logo_customizer' );
add_action( 'customize_register', 'image_customizer' );
add_action( 'customize_register', 'sponsor_urls_customizer' );
?>
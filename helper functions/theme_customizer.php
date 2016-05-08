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

	$wp_customize->add_setting( 'front_secondary_caption', array(
		'default' => null,
	));

	$wp_customize->add_setting( 'default_page_header_image', array(
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

	$wp_customize->add_control( new WP_Customize_Image_Control( 
		$wp_customize, 'default_page_header_image', array(
			'label' => 'Default Page Header Image',
			'section' => 'site_images',
			'settings' => 'default_page_header_image',
		)));

	$wp_customize->add_control( 'front_secondary_caption_control', array(
		'label' => 'Image Caption',
		'section' => 'site_images',
		'settings' => 'front_secondary_caption',
		'type' => 'text',
	));
}

function contacts_customizer($wp_customize) {
	$wp_customize->add_section( 'contacts_section', array(
		'title' => 'Contacts',
	));

	$wp_customize->add_setting( 'email_address', array(
		'default' => null,
	));

	$wp_customize->add_setting( 'facebook_url', array(
		'default' => null,
	));

	$wp_customize->add_setting( 'twitter_url', array(
		'default' => null,
	));

	$wp_customize->add_setting( 'linkedin_url', array(
		'default' => null,
	));

	$wp_customize->add_control( 'email_control', array(
		'label' => 'Email Address',
		'section' => 'contacts_section',
		'settings' => 'email_address',
		'type' => 'text',
	));

	$wp_customize->add_control( 'facebook_control', array(
		'label' => 'Facebook URL',
		'section' => 'contacts_section',
		'settings' => 'facebook_url',
		'type' => 'text',
	));

	$wp_customize->add_control( 'twitter_control', array(
		'label' => 'Twitter URL',
		'section' => 'contacts_section',
		'settings' => 'twitter_url',
		'type' => 'text',
	));

	$wp_customize->add_control( 'linkedin_control', array(
		'label' => 'Linkedin URL',
		'section' => 'contacts_section',
		'settings' => 'linkedin_url',
		'type' => 'text',
	));
}

function content_customizer($wp_customize) {
	$wp_customize->add_section( 'content_section', array(
		'title' => 'Content',
	));

	$wp_customize->add_setting( 'about_title', array(
		'default' => null,
	));

	$wp_customize->add_setting( 'about_content', array(
		'default' => null,
	));

	$wp_customize->add_setting( 'sponsors_title', array(
		'default' => null,
	));

	$wp_customize->add_setting( 'sponsors_content', array(
		'default' => null,
	));

	$wp_customize->add_setting( 'sponsors_title_color', array(
		'default' => '',
	));

	$wp_customize->add_setting( 'sponsors_background_color', array(
		'default' => '',
	));

	$wp_customize->add_setting( 'partners_title', array(
		'default' => null,
	));

	$wp_customize->add_setting( 'partners_content', array(
		'default' => null,
	));

	$wp_customize->add_setting( 'partners_title_color', array(
		'default' => '',
	));

	$wp_customize->add_setting( 'partners_background_color', array(
		'default' => '',
	));

	$wp_customize->add_control( 'about_title_control', array(
		'label' => 'About Header',
		'section' => 'content_section',
		'settings' => 'about_title',
		'type' => 'text',
	));

	$wp_customize->add_control( 'about_content_control', array(
		'label' => 'About Section',
		'section' => 'content_section',
		'settings' => 'about_content',
		'type' => 'textarea',
		'description' => 'Each new line will create a new paragraph',
	));

	$wp_customize->add_control( 'sponsors_title_control', array(
		'label' => 'Sponsors Header',
		'section' => 'content_section',
		'settings' => 'sponsors_title',
		'type' => 'text',
	));

	$wp_customize->add_control( 'sponsors_content_control', array(
		'label' => 'Sponsors Image URLs',
		'section' => 'content_section',
		'settings' => 'sponsors_content',
		'type' => 'text',
		'description' => 'Comma Separated URLs',
	));

	$wp_customize->add_control( 
		new WP_Customize_Color_Control(
			$wp_customize,
			'sponsors_title_color',
			array(
				'label' => 'Sponsors Title Color',
				'section' => 'content_section',
				'settings' => 'sponsors_title_color'
			)
		)
	);

	$wp_customize->add_control( 
		new WP_Customize_Color_Control(
			$wp_customize,
			'sponsors_background_color',
			array(
				'label' => 'Sponsors Background Color',
				'section' => 'content_section',
				'settings' => 'sponsors_background_color'
			)
		)
	);

	$wp_customize->add_control( 'partners_title_control', array(
		'label' => 'Partners Header',
		'section' => 'content_section',
		'settings' => 'partners_title',
		'type' => 'text',
	));

	$wp_customize->add_control( 'partners_content_control', array(
		'label' => 'Partners Image URLs',
		'section' => 'content_section',
		'settings' => 'partners_content',
		'type' => 'text',
		'description' => 'Comma Separated URLs',
	));

	$wp_customize->add_control( 
		new WP_Customize_Color_Control(
			$wp_customize,
			'partners_title_color',
			array(
				'label' => 'Partners Title Color',
				'section' => 'content_section',
				'settings' => 'partners_title_color'
			)
		)
	);

	$wp_customize->add_control( 
		new WP_Customize_Color_Control(
			$wp_customize,
			'partners_background_color',
			array(
				'label' => 'Partners Background Color',
				'section' => 'content_section',
				'settings' => 'partners_background_color'
			)
		)
	);

}

add_action( 'customize_register', 'logo_customizer' );
add_action( 'customize_register', 'image_customizer' );
add_action( 'customize_register', 'contacts_customizer');
add_action( 'customize_register', 'content_customizer');
?>
<?php

function logo_customizer($wp_customize) {
  $wp_customize->add_section( 'site_logos', array(
    'title'       => 'Logos',
    'description' => 'Site Logos',
  ));

  $wp_customize->add_setting( 'navbar_logo', array(
    'default'     => null,
    'type'        => 'theme_mod',
    'capability'  => 'manage_options',
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control( new WP_Customize_Image_Control( 
    $wp_customize, 'navbar_logo', array(
      'label'     => 'Navbar Logo',
      'section'   => 'site_logos',
      'settings'  => 'navbar_logo',
    )));
}

function image_customizer($wp_customize) {
  $wp_customize->add_section( 'site_images', array(
    'title'       => 'Images',
    'description' => 'Site Images',
  ));

  $wp_customize->add_setting( 'front_page_landing_image', array(
    'default'     => null,
    'type'        => 'theme_mod',
    'capability'  => 'manage_options',
    'transport'   => 'refresh',
  ));

  $wp_customize->add_setting( 'front_page_secondary_image', array(
    'default'     => null,
    'type'        => 'theme_mod',
    'capability'  => 'manage_options',
    'transport'   => 'refresh',
  ));

  $wp_customize->add_setting( 'front_secondary_caption', array(
    'default'     => null,
  ));

  $wp_customize->add_setting( 'default_page_header_image', array(
    'default'     => null,
    'type'        => 'theme_mod',
    'capability'  => 'manage_options',
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control( new WP_Customize_Image_Control( 
    $wp_customize, 'front_page_landing_image', array(
      'label'     => 'Front Page Landing Image',
      'section'   => 'site_images',
      'settings'  => 'front_page_landing_image',
    )));

  $wp_customize->add_control( new WP_Customize_Image_Control( 
    $wp_customize, 'front_page_secondary_image', array(
      'label'     => 'Front Secondary Image',
      'section'   => 'site_images',
      'settings'  => 'front_page_secondary_image',
    )));

  $wp_customize->add_control( new WP_Customize_Image_Control( 
    $wp_customize, 'default_page_header_image', array(
      'label'     => 'Default Page Header Image',
      'section'   => 'site_images',
      'settings'  => 'default_page_header_image',
    )));

  $wp_customize->add_control( 'front_secondary_caption_control', array(
    'label'       => 'Image Caption',
    'section'     => 'site_images',
    'settings'    => 'front_secondary_caption',
    'type'        => 'text',
  ));
}

function contacts_customizer($wp_customize) {
  $wp_customize->add_section( 'contacts_section', array(
    'title'       => 'Contacts',
  ));

  $wp_customize->add_setting( 'email_address', array(
    'default'     => null,
  ));

  $wp_customize->add_setting( 'facebook_url', array(
    'default'     => null,
  ));

  $wp_customize->add_setting( 'twitter_url', array(
    'default'     => null,
  ));

  $wp_customize->add_setting( 'linkedin_url', array(
    'default'     => null,
  ));

  $wp_customize->add_control( 'email_control', array(
    'label'       => 'Email Address',
    'section'     => 'contacts_section',
    'settings'    => 'email_address',
    'type'        => 'text',
  ));

  $wp_customize->add_control( 'facebook_control', array(
    'label'       => 'Facebook URL',
    'section'     => 'contacts_section',
    'settings'    => 'facebook_url',
    'type'        => 'text',
  ));

  $wp_customize->add_control( 'twitter_control', array(
    'label'       => 'Twitter URL',
    'section'     => 'contacts_section',
    'settings'    => 'twitter_url',
    'type'        => 'text',
  ));

  $wp_customize->add_control( 'linkedin_control', array(
    'label'       => 'Linkedin URL',
    'section'     => 'contacts_section',
    'settings'    => 'linkedin_url',
    'type'        => 'text',
  ));
}

function content_customizer($wp_customize) {
  $wp_customize->add_section( 'content_section', array(
    'title'       => 'Content',
  ));

  $wp_customize->add_setting( 'about_title', array(
    'default'     => null,
  ));

  $wp_customize->add_setting( 'about_content', array(
    'default'     => null,
  ));

  $wp_customize->add_setting( 'sponsors_content', array(
    'default'     => null,
  ));

  $wp_customize->add_setting( 'partners_content', array(
    'default'     => null,
  ));

  $wp_customize->add_setting( 'display_newsletter_signup', array(
    'default'     => false,
    'type'        => 'option',
  ));

  $wp_customize->add_control( 'about_title_control', array(
    'label'       => 'About Header',
    'section'     => 'content_section',
    'settings'    => 'about_title',
    'type'        => 'text',
  ));

  $wp_customize->add_control( 'about_content_control', array(
    'label'       => 'About Section',
    'section'     => 'content_section',
    'settings'    => 'about_content',
    'type'        => 'textarea',
    'description' => 'Each new line will create a new paragraph',
  ));

  $wp_customize->add_control( 'sponsors_content_control', array(
    'label'       => 'Sponsors Image URLs',
    'section'     => 'content_section',
    'settings'    => 'sponsors_content',
    'type'        => 'text',
    'description' => 'Comma Separated URLs',
  ));

  $wp_customize->add_control( 'partners_content_control', array(
    'label'       => 'Partners Image URLs',
    'section'     => 'content_section',
    'settings'    => 'partners_content',
    'type'        => 'text',
    'description' => 'Comma Separated URLs',
  ));

  $wp_customize->add_control('display_newsletter_signup_control', array(
    'label'       => 'Display Newsletter Signup',
    'section'     => 'content_section',
    'settings'    => 'display_newsletter_signup',
    'type'        => 'checkbox',
  ));
}

add_action( 'customize_register', 'logo_customizer' );
add_action( 'customize_register', 'image_customizer' );
add_action( 'customize_register', 'contacts_customizer');
add_action( 'customize_register', 'content_customizer');
?>
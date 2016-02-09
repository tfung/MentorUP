<?php

/*
 * Data
 */

  //$logo_url = get_theme_mod('Main Image 1');
$site_logo = get_theme_mod('site_logo');
$navbar_logo = get_theme_mod('navbar_logo');

$main_image_1 = get_theme_mod('main_image_1');
$main_image_2 = get_theme_mod('main_image_2');

if (is_front_page()) {
  wp_register_script( 'frontpage_js', get_template_directory_uri() . '/assets/js/frontpage.js', array( 'jquery' ), '1.0', true );
}

wp_enqueue_script( 'frontpage_js' );
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MentorUP Alberta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

      <?php wp_enqueue_script("jquery"); ?>
      <?php wp_head(); ?>
    </head>
    <body>

      <?php if (!is_front_page()) { include('navbar.php'); } ?>

      <?php if (is_front_page()) : ?>
        <div class="container-full">
      <?php else: ?>
        <div class="container">
      <?php endif; ?> 

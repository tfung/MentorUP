<?php

/*
 * Data
 */

  $logo_url = get_theme_mod('Main Image 1');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MentorUP Alberta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

  <?php if (!is_front_page()) { include('navbar.php'); }  ?>

  <?php
    if (is_front_page()) {
      echo "<div class=\"container-full\">";
    } else {
      echo "<div class=\"container\">";
    }
  ?>


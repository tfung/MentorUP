<?php

/*
 * Data
 */

  $logo_url = get_theme_mod('Site Logo');
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>MentorUP Alberta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!--link href="./custom.css" rel="stylesheet"-->


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>

  <div class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo site_url(); ?>">
          <?php
            if (!empty($logo_url)) {
              echo "<img id=\"header_logo\" src=\"$logo_url\" >";
            } else {
              echo bloginfo('name');;
            }
          ?>
        </a>

        <div class="nav-collapse collapse">
           <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                //'container'         => 'div',
                //'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
          ?>
          </div>

      </div>
    </div>
  </div>

  <?php
    if (is_front_page()) {
      echo "<div class=\"container-full\">";
    } else {
      echo "<div class=\"container\">";
    }
  ?>

  <!--div class="container"-->
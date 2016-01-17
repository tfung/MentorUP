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

    <nav id="navbar" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" target="#navbar-list" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>">
              <?php
                if (!empty($logo_url)) {
                  echo "<img id=\"header_logo\" src=\"$logo_url\" >";
                } else {
                  echo bloginfo('name');;
                }
              ?>
          </a>
        </div>

        <div id="navbar-list" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
            ?>
          </ul>
        </div>

    </div>
  </nav>

  <?php
    if (is_front_page()) {
      echo "<div class=\"container-full\">";
    } else {
      echo "<div class=\"container\">";
    }
  ?>

  <!--div class="container"-->
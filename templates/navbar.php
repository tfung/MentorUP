<?php
  $site_logo = get_theme_mod('site_logo');
  $navbar_logo = get_theme_mod('navbar_logo');
?>

<nav id="navbar" class="navbar navbar-transparent navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-list" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>">
        <?php if (!empty($navbar_logo)) : ?>
          <img class="navbar-brand-img" src="<?php echo $navbar_logo; ?>" alt="<?php echo bloginfo('name'); ?>">
        <?php 
          else: 
            echo bloginfo('name');
          endif; 
        ?>
      </a>
    </div>

    <?php
    wp_nav_menu( array(
      'menu'              => 'primary',
      'theme_location'    => 'primary',
      'depth'             => 2,
      'container'         => 'div',
      'container_class'   => 'collapse navbar-collapse',
      'container_id'      => 'navbar-list',
      'menu_class'        => 'nav navbar-nav navbar-right',
      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
      'walker'            => new wp_bootstrap_navwalker())
    );
    ?>

  </div>
</nav>


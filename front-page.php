<?php

$site_logo = get_theme_mod('site_logo');
$navbar_logo = get_theme_mod('navbar_logo');

$main_image_1 = get_theme_mod('main_image_1');
$main_image_2 = get_theme_mod('main_image_2');

$about_title = get_theme_mod('about_title');
$about_content = get_theme_mod('about_content');

$sponsors_title = get_theme_mod('sponsors_title');
$sponsors_content = get_theme_mod('sponsors_content');
$sponsors_title_color = get_theme_mod('sponsors_title_color');
$sponsors_background_color = get_theme_mod('sponsors_background_color');

$partners_title = get_theme_mod('partners_title');
$partners_content = get_theme_mod('partners_content');
$partners_title_color = get_theme_mod('partners_title_color');
$partners_background_color = get_theme_mod('partners_background_color');

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MentorUP Alberta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

      <?php wp_enqueue_script("jquery"); ?>
      <?php wp_head(); ?>
    </head>
    <body>

    <div class="container-full">
<!-- end head -->
<!-- body start -->

<?php
  $site_logo = get_theme_mod('site_logo');
  $navbar_logo = get_theme_mod('navbar_logo');
?>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-list" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url(); ?>">
          <?php echo bloginfo('name'); ?>
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

<div id="landing-screen" class="full-page-background" style="background-image: url(&quot;<?php echo $main_image_1; ?>&quot;);">
  <nav class="navbar navbar-transparent">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-list" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url(); ?>">
          <?php if (!empty($navbar_logo)) : ?>
            <img src="<?php echo $navbar_logo; ?>" alt="<?php echo bloginfo('name'); ?>">
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
  <h1><!-- maybe add container -->
    <span class="full-page-header"><?php bloginfo('description'); ?></span>
  </h1>
</div>


<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php if (!empty($about_title)) : ?>
          <h2 class="text-center"><?php echo $about_title; ?></h2><br>
        <?php endif; ?>
        <?php 
        $about_paragraphs = explode("\n", $about_content);

        foreach ($about_paragraphs as $paragraph) : 
        ?>
          <p><span class="section-font"><?php echo $paragraph; ?></span></p>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</section>

<hr class="hr-divider dark-blue-background">

<?php 
  $query_events = array(
    'meta_query' => array(
      array(
        'key' => 'event_date',
        'value' => time(),
        'compare' => '<',
      )));

  $event_query = new WP_Query($query_events);
?>

<section id="upcoming-events">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h3 class="h3-header">Upcoming Events</h3>
      </div>

      <div class="col-md-6">
        <div class="column-image" style="background-image: url('http://loblawdigital.co/wp-content/uploads/2016/03/mid.jpg');">
          <div class="image-side-tag">
            <span>Past Event Heading</span>  
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <ul class="events-list">
          <?php
            if ($event_query->have_posts()):
              while ($event_query->have_posts()):
                $event_query->the_post();
          ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <div class="event">
                  <div class="event-date" >
                    <span><?php echo date('M d', get_post_meta(get_the_id(), 'event_date', true)); ?></span>
                    <span><?php echo get_post_meta(get_the_id(), 'event_start_time', true); ?></span>
                  </div>
                  <div class="event-description">
                    <span><?php the_title(); ?></span>
                    <span><?php echo get_post_meta(get_the_id(), 'event_city', true); ?></span>
                  </div>
                </div>
              </a>
              <hr>
            </li>

          <?php
              endwhile;
            endif;
          ?>
        </ul>

      </div>
    </div>
  </div>
</section>

<!--
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">



        <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>


          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="http://loblawdigital.co/wp-content/uploads/2016/03/mid.jpg" alt="Chania">
            </div>

            <div class="item">
              <img src="http://loblawdigital.co/wp-content/uploads/2016/03/mid.jpg" alt="Chania">
            </div>

            <div class="item">
              <img src="http://loblawdigital.co/wp-content/uploads/2016/03/mid.jpg" alt="Flower">
            </div>

            <div class="item">
              <img src="http://loblawdigital.co/wp-content/uploads/2016/03/mid.jpg" alt="Flower">
            </div>
          </div>


          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <p>Some caption</p>

      </div>
    </div>
  </div>

</section>
-->

<?php if (!empty($sponsors_content) && !empty($partners_content)) : // TODO: Make flexible ?>
<section id="sponsors-partners" class="light-blue-background" >
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-6 image-list-container right-vertical-line">
        <h3 class="h3-header">Our Amazing Sponsors</h3>
        <ul class="image-list">

        <?php
          $sponsor_url_array = explode(',', $sponsors_content);

          while(!empty($sponsor_url_array)) : 
            $sponsor_url = array_shift($sponsor_url_array);
            // TODO: Query Image Name, Get URL
          ?>

          <li>
            <a>
              <div class="image-container">
                <img src="<?php echo $sponsor_url; ?>" alt="Sponsor Image">
              </div>
            </a>
          </li>

          <?php endwhile; ?>
        </ul>
      </div>
      <div class="col-md-6 image-list-container">
        <h3 class="h3-header">Our Awesome Partners</h3>
        <ul class="image-list">
          <?php
          $partner_url_array = explode(',', $partners_content);

          while(!empty($partner_url_array)) : 
            $partner_url = array_shift($partner_url_array);
            // TODO: Query Image Name, Get URL
          ?>
          <li>
            <a>
              <div class="image-container">
                <img src="<?php echo $partner_url; ?>" alt="Partner Image">
              </div>
            </a>
          </li>

          <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- body end -->
<?php get_footer(); ?>
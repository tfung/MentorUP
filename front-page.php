<?php 

$site_logo = get_theme_mod('site_logo');
$navbar_logo = get_theme_mod('navbar_logo');

$main_image_1 = get_theme_mod('main_image_1');
$main_image_2 = get_theme_mod('main_image_2');

get_header(); ?>

<!-- Input content -->
<div id="frontCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div style="background-image: url(&quot;https://mentorupalberta.files.wordpress.com/2015/05/dsc_0098.jpg&quot;);
                height: calc(100vh - 150px);
                background-size: cover;
                opacity: 0.5;">
    </div>
    <div class="container">
      <div class="carousel-caption">
        <?php 
          if (!empty($site_logo)) {
            echo "<img style=\"\" src=\"$site_logo\" >";
          }
          else {
            echo "<h1 style=\"font-size: 100px;\">MentorUP</h1><br/>";
          }

        ?>
        <h2>Premier Society of Leading Technical Professionals</h2>
      </div>
    </div>
  </div>
</div>

<?php include('navbar.php'); ?>

<div class="container-full" style="padding: 50px 0; 
                                    background-image: url(&quot;http://localhost:8888/wordpress/wp-content/uploads/2016/01/wide-2-e1453186594242.jpg&quot;);
                                    height: calc(100vh - 400px);
                                    background-size: cover;">
  <div class="row">
    <div class="col-md-4">
      <p></p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
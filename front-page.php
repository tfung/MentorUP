<?php 

$site_logo = get_theme_mod('site_logo');
$navbar_logo = get_theme_mod('navbar_logo');

$main_image_1 = get_theme_mod('main_image_1');
$main_image_2 = get_theme_mod('main_image_2');

get_header(); ?>

<!-- Input content -->
<div id="frontCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div style="background-image: url(&quot;<?php echo $main_image_1; ?>&quot;);
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

<div id="about" class="container-full">
  <div style="padding: 50px 50px; 
              text-align: justify-all;
              background-color: #383838;
              background-image: url(&quot;<?php echo $main_image_2; ?>&quot;);
              background-size: cover;
              background-position: bottom;
              overflow: hidden;
              letter-spacing: 2px;
              line-height: 2;">

    <div class="row">
      <div class="col-md-12">
        <h2 style="text-align: center;">About MentorUP</h2><br>
        <p>
        Our mission is to build a community of: professionals at all stages of their careers, 
        potential employers, professional associations, volunteers and under-represented groups.
        </p>
        <br>
        <p>
        We provide networking, professional development, and informal mentoring opportunities to 
        individuals including, but not limited to, Engineering, Technology and Science. Our members 
        are people in the early stages of their career and students trying to find their niche, 
        while marketing themselves to a potential employer.
        </p>
      </div>
    </div>
  </div>
</div>

<section id="upcoming" style="background: #FDF3E7;">
    <div class="row">
      <div class="col-md-12">
        <h1>Upcoming Events in Edmonton:</h1>
        <p></p>
      </div>
    </div>
</section>

<?php get_footer(); ?>
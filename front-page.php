<?php 

$site_logo = get_theme_mod('site_logo');
$navbar_logo = get_theme_mod('navbar_logo');

$main_image_1 = get_theme_mod('main_image_1');
$main_image_2 = get_theme_mod('main_image_2');

get_header(); ?>

<!-- Input content -->
<section id="frontCarousel" class="carousel slide" style="padding: 0 0;">
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
            echo "<h1 style=\"font-size: 70px;\">MentorUP</h1><br/>";
          }
        ?>
        <h2>Premier Society of Leading Technical Professionals</h2>
      </div>
    </div>
  </div>
</section>

<?php include('navbar.php'); ?>

<section id="about" class="container-full" 
        style="text-align: justify-all;
              background-color: #383838;
              background-image: url(&quot;<?php echo $main_image_2; ?>&quot;);
              background-size: cover;
              background-position: bottom;
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
</section>

<section id="upcoming" style="background: #FDF3E7;">
    <div class="row">
      <div class="col-md-12">
      <h2 class="post-header">Latest Events</h2>
      <?php query_posts('showposts=3');

      while (have_posts()) : the_post(); ?>

        <h3><a class="post-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        <p><?php the_excerpt(__('(more…)')); ?></p>
      <?php endwhile; ?>
      
      <br>
      <h4 class="text-center"><a class="post-link" href="./category/events">See More</a></h4>
      </div>
    </div>
</section>

<?php get_footer(); ?>
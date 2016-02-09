<?php 

$site_logo = get_theme_mod('site_logo');
$navbar_logo = get_theme_mod('navbar_logo');

$main_image_1 = get_theme_mod('main_image_1');
$main_image_2 = get_theme_mod('main_image_2');

$about_title = get_theme_mod('about_title');
$about_content = get_theme_mod('about_content');

$sponsors_title = get_theme_mod('sponsors_title');
$sponsors_content = get_theme_mod('sponsors_content');

get_header(); 

?>

<section id="frontCarousel" class="carousel slide" style="padding: 0 0;">
  <div class="carousel-inner">
    <div style="background-image: url(&quot;<?php echo $main_image_1; ?>&quot;);
      height: calc(100vh - 150px);
      background-size: cover;
      opacity: 0.5;">
    </div>
    <div class="container">
      <div class="carousel-caption">
        <?php if (!empty($site_logo)) : ?>
          <img src="<?php echo $site_logo; ?>" alt="MentorUP">
        <?php else: ?>
          <h1 style="font-size: 70px;">MentorUP</h1><br/>
        <?php endif; ?>
        <h2>Premier Society of Leading Technical Professionals</h2>
      </div>
    </div>
  </div>
</section>

<?php include('navbar.php'); ?>

<?php if (!empty($about_title) || !empty($about_content)) : ?>
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

      <?php if (!empty($about_title)) : ?>
        <h2 style="text-align: center;"><?php echo $about_title; ?></h2><br>
      <?php endif; ?>
      <?php 
      $about_paragraphs = explode("\n", $about_content);

      foreach ($about_paragraphs as $paragraph) : 
      ?>
        <p><?php echo $paragraph; ?></p>
      <?php endforeach; ?>

    </div>
  </div>
</section>
<?php endif; ?>


<?php if (!empty($sponsors_title) || !empty($sponsors_content)) : ?>
  <section id="sponsors" class="container-full">
    <?php if (!empty($sponsors_title)) : ?>
      <h2 style="text-align: center;"><?php echo $sponsors_title; ?></h2><br>
    <?php endif; ?>
    <?php
    $sponsor_url_array = explode(',', $sponsors_content);

    while(!empty($sponsor_url_array)) : ?>
    <div class="row">
      <div class="col-md-12">

        <?php 
        for ($i = 0; $i < 3 && !empty($sponsor_url_array); $i++) : 
          $sponsor_url = array_shift($sponsor_url_array) ?>

        <div class="col-md-4">
          <img class="sponsor-logos" src="<?php echo $sponsor_url; ?>">
        </div>
      <?php endfor; ?>

    </div>
  </div>

  <?php endwhile; ?>
</section>
<?php endif; ?>


<section id="upcoming" style="background: #FDF3E7;">
  <div class="row">
    <div class="col-md-6">
      <h2 class="post-header">Edmonton Events</h2>
      <?php query_posts('showposts=3&category_name=Edmonton Events');

      while (have_posts()) : the_post(); ?>

      <h3><a class="post-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
      <p><?php the_excerpt(__('(more…)')); ?></p>
    <?php endwhile; ?>

    <br>
    <h4 class="text-center"><a class="post-link" href="./category/events/edmonton-events">See More</a></h4>
  </div>
  <div class="col-md-6">
    <h2 class="post-header">Calgary Events</h2>
    <?php query_posts('showposts=3&category_name=Calgary Events');

    while (have_posts()) : the_post(); ?>

      <h3><a class="post-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
      <p><?php the_excerpt(__('(more…)')); ?></p>
    <?php endwhile; ?>

  <br>
  <h4 class="text-center"><a class="post-link" href="./category/events/calgary-events">See More</a></h4>
</div>
</div>
</section>

<div class="loader"></div>

<?php get_footer(); ?>
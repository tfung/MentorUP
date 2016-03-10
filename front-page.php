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

// format colors into css format
$sponsors_title_color = (!empty($sponsors_title_color) ? "color: $sponsors_title_color;" : "");
$partners_title_color = (!empty($partners_title_color) ? "color: $partners_title_color;" : "");
$sponsors_background_color = (!empty($sponsors_background_color) ? "background-color: $sponsors_background_color;" : "");
$partners_background_color = (!empty($partners_background_color) ? "background-color: $partners_background_color;" : "");

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
          <img src="<?php echo $site_logo; ?>" alt="MentorUP Alberta">
        <?php else: ?>
          <h1 style="font-size: 70px;"><?php bloginfo( 'name' ); ?></h1><br/>
        <?php endif; ?>
        <h2><?php bloginfo('description'); ?></h2>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('templates/navbar'); ?>

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
  <section id="sponsors" class="container-full" style="<?php echo $sponsors_background_color; ?>">
    <?php if (!empty($sponsors_title)) : ?>
      <h2 style="text-align: center; <?php echo $sponsors_title_color; ?>"><?php echo $sponsors_title; ?></h2><br>
    <?php endif; ?>
    <?php
    $sponsor_url_array = explode(',', $sponsors_content);

    while(!empty($sponsor_url_array)) : ?>
    <div class="row">

        <?php 
        for ($i = 0; $i < 3 && !empty($sponsor_url_array); $i++) : 
          $sponsor_url = array_shift($sponsor_url_array) ?>

        <div class="col-md-4">
          <div class="img-container sponsor-container">
            <img class="img-item sponsor-item" src="<?php echo $sponsor_url; ?>">
          </div>
        </div>
      <?php endfor; ?>

  </div>

  <?php endwhile; ?>
</section>
<?php endif; ?>


<?php if (!empty($partners_title) || !empty($partners_content)) : ?>
  <section id="partners" class="container-full" style="<?php echo $partners_background_color; ?>">
    <?php if (!empty($partners_title)) : ?>
      <h2 style="text-align: center; <?php echo $partners_title_color; ?>"><?php echo $partners_title; ?></h2><br>
    <?php endif; ?>
    <?php
    $partner_url_array = explode(',', $partners_content);

    while(!empty($partner_url_array)) : ?>
    <div class="row">

        <?php 
        for ($i = 0; $i < 3 && !empty($partner_url_array); $i++) : 
          $partner_url = array_shift($partner_url_array) ?>

        <div class="col-md-4">
          <div class="img-container sponsor-container">
            <img class="img-item sponsor-item" src="<?php echo $partner_url; ?>">
          </div>
        </div>
      <?php endfor; ?>

  </div>

  <?php endwhile; ?>
</section>
<?php endif; ?>

<?php 
  $query_category = 'Upcoming Events';
  $category_slug = 'upcoming-events';
  $post_limit = 3;

  $query = new WP_Query(array(
    'category_name' => $query_category
  ));

if ($query->post_count > 0) : 
?>
<section id="upcoming" style="background: #FDF3E7;">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
      <h2 class="post-header"><?php echo $query_category; ?></h2>
      <?php 
        for($i=0; $i<$post_limit and $i<$query->post_count; $i++) {
          $query->the_post();
          get_template_part('templates/post templates/content', 'upcoming');
        }

        if ($query->post_count > $post_limit) : ?>
          <br>
          <h4 class="text-center"><a class="post-link" href="<?php echo sprintf('./category/events/%s', $category_slug); ?>">See more events</a></h4>
      <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>

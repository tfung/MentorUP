<?php

$front_page_landing_image = get_theme_mod('front_page_landing_image');
$front_page_secondary_image = get_theme_mod('front_page_secondary_image');
$front_secondary_caption = get_theme_mod('front_secondary_caption');

$about_title = get_theme_mod('about_title');
$about_content = get_theme_mod('about_content');

$sponsors_content = get_theme_mod('sponsors_content');
$partners_content = get_theme_mod('partners_content');

?>

<?php get_header(); ?>

<div id="landing-screen" class="full-page-background" style="background-image: url('<?php echo $front_page_landing_image; ?>');">
  <!-- TODO: add container -->
  <h1 style="margin: 0">
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
  // TODO: refactor out, limit current events

  $event_query = get_upcoming_events();
  $has_upcoming_events = $event_query->post_count > 0;

  // if there are no current events, get past events instead
  if (!$has_upcoming_events)
    $event_query = get_past_events(3);

?>

<section id="upcoming-events">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h3 class="h3-header"><?php echo ($has_upcoming_events ? 'Upcoming Events' : 'Recent Past Events');?></h3>
      </div>

      <div class="col-md-6">
        <div class="column-image" style="background-image: url('<?php echo $front_page_secondary_image; ?>');">
          <?php if (!empty($front_secondary_caption)) : ?>
          <div class="image-side-tag">
            <span><?php echo $front_secondary_caption; ?></span>  
          </div>
          <?php endif; ?>
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
                  <div class="event-date">
                    <span><?php echo date('M d', get_post_meta(get_the_id(), 'event_date', true)); ?></span>
                    <span><?php echo date('g:i A', strtotime(get_post_meta(get_the_id(), 'event_start_time', true))); ?></span>
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
<?php 
$date_array = date_parse(get_field('event_date'));
$date_str = date('l, F d, o', mktime(0, 0, 0, $date_array['month'], $date_array['day'], $date_array['year']));
$google_location = get_field('google_location');
$event_image = get_field('event_image');

the_post(); 
?>

<div class="row" style="margin: 40px 0;">
  <div class="col-md-offset-2 col-md-8">
    <h2 class="post-header"><a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h3 class="post-header"><?php echo $date_str; ?> | <?php the_field('event_time'); ?></h3>
    <h4 class="post-header"><?php the_field('event_address'); ?></h4>

    <?php if ($event_image) :?>
        <img class="post-image" src="<?php echo $event_image['url']; ?>" alt="<?php the_title() ?>">
    <?php endif; ?>
    
    <br/><br/>
    <?php the_content(); ?>
  </div>
</div>


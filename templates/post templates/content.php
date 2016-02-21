<?php 
$date_array = date_parse(get_field('event_date'));
$date_str = ($date_array['error_count'] == 0 
                ? date('l, F d, o', mktime(0, 0, 0, $date_array['month'], $date_array['day'], $date_array['year']))
                : null);
$google_location = get_field('google_location');
$event_image = get_field('event_image');
$event_time = get_field('event_time');

the_post(); 
?>

<div class="row" style="margin: 40px 0;">
  <div class="col-md-offset-2 col-md-8">
    <h2 class="post-header"><a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if ($date_str && $event_time): ?>
        <h3 class="post-header"><?php echo $date_str; ?> | <?php echo $event_time; ?></h3>
    <?php elseif ($date_str): ?>
        <h3 class="post-header"><?php echo $date_str; ?></h3>
    <?php elseif ($event_time): ?>
        <h3 class="post-header"><?php echo $event_time; ?></h3>
    <?php endif; ?>
    
    <?php if ($event_image) :?>
        <img class="post-image" src="<?php echo $event_image['url']; ?>" alt="<?php the_title() ?>">
    <?php endif; ?>
    
    <br/><br/>
    <?php the_content(); ?>
  </div>
</div>

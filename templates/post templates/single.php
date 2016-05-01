<?php 

$meta_date = get_post_meta(get_the_id(), 'event_date', true);
$meta_start_time = get_post_meta(get_the_id(), 'event_start_time', true);
$meta_end_time = get_post_meta(get_the_id(), 'event_end_time', true);

$event_city = get_post_meta(get_the_id(), 'event_city', true) . ', Alberta';
$event_location = get_post_meta(get_the_id(), 'event_location', true);
$event_image = get_post_meta(get_the_id(), 'event_image', true);
$event_ticket_url = get_post_meta(get_the_id(), 'event_ticket_url', true);
$event_ticket_cost = get_post_meta(get_the_id(), 'event_ticket_cost', true);

// set date & time to null if empty string
$event_date = $meta_date 
                ? date('l, F d, Y', $meta_date) : null;
$event_start_time = $meta_start_time 
                ? date('g:iA', strtotime(get_post_meta(get_the_id(), 'event_start_time', true))) : null;
$event_end_time = $meta_end_time 
                ? date('g:iA', strtotime(get_post_meta(get_the_id(), 'event_end_time', true))) : null;

// format start & end times
$event_time = $event_start_time && $event_end_time 
                ? $event_start_time . " - " . $event_end_time : null;

$event_date_header = null;

if ($event_date && $event_time) {
    $event_date_header = $event_date . " | " . $event_time;
} 
else if ($event_date || $event_time) {
    $event_date_header = ($event_date ? $event_date : $event_time);
}

?>

<?php get_template_part('templates/partial-header'); ?>

<div class="post">
  <div class="container">

    <?php 
    // Checks if the posts contain meta data
    if ($event_city || $event_date || $event_time || $event_location || $event_ticket_cost || $event_ticket_url): ?>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div>
          <?php if ($event_image) :?>
            <img src="<?php echo $event_image; ?>" alt="<?php the_title() ?>">
          <?php endif; ?>
          <?php the_content(); ?>
        </div>
      </div>
    </div>

    <?php 
    // section used to maintain legacy posts
    else: ?>
    
    <div class="row-fluid" style="margin-top: 50px;">
      <div class="col-md-12">
        <h1 style="font-weight: bold; text-align: center;"><?php the_title(); ?></h1>
        <br>
        <br>
      </div>
    </div>

    <div class="row-fluid">
      <div class="col-md-offset-2 col-md-8">
        <?php if ($event_image) :?>
            <img src="<?php echo $event_image; ?>" alt="<?php the_title() ?>">
        <?php endif; ?>

        <?php the_content(); ?>
      </div>
    </div>

    <?php endif; ?>
    </div>
</div>

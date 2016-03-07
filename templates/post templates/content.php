<?php 

the_post(); 

$meta_date = get_post_meta(get_the_id(), 'event_date', true);
$meta_start_time = get_post_meta(get_the_id(), 'event_start_time', true);
$meta_end_time = get_post_meta(get_the_id(), 'event_end_time', true);

$event_location = get_post_meta(get_the_id(), 'event_location', true);
$event_image = get_post_meta(get_the_id(), 'event_image', true);
$event_ticket_url = get_post_meta(get_the_id(), 'event_ticket_url', true);
$event_ticket_cost = get_post_meta(get_the_id(), 'event_ticket_cost', true);

// set date & time to null if empty string
$event_date = $meta_date 
                ? date('F d, Y', $meta_date) : null;
$event_start_time = $meta_start_time 
                ? date('g:iA', strtotime(get_post_meta(get_the_id(), 'event_start_time', true))) : null;
$event_end_time = $meta_end_time 
                ? date('g:iA', strtotime(get_post_meta(get_the_id(), 'event_end_time', true))) : null;

// format start & end times
$event_time = $event_start_time && $event_end_time 
                ? $event_start_time . " - " . $event_end_time : null;

$event_metadata_arr = array(
  $event_date,
  $event_time,
  $event_ticket_cost
);

$event_subheading = implode(" | ", 
  array_filter(array(
      $event_date,
      $event_time,
      $event_ticket_cost
  ))
);

?>

<div class="post">
  <div class="container">
    <div class="row-fluid">
      <div class="col-md-offset-2 col-md-8">

        <h2 style="font-weight: bold;"><a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if ($event_subheading): ?>
          <p style="margin: 0; font-style: italic;"><?php echo $event_subheading; ?></p>
        <?php endif; ?>
        <p><?php the_excerpt(__('(more…)')); ?></p>

      </div>
    </div>
  </div>
</div>

<!--hr class="post-divider"/-->
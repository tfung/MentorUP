<?php 

$meta_date = get_post_meta(get_the_id(), 'event_date', true);
$meta_start_time = get_post_meta(get_the_id(), 'event_start_time', true);
$meta_end_time = get_post_meta(get_the_id(), 'event_end_time', true);

$event_location = get_post_meta(get_the_id(), 'event_location', true);
$event_image = get_post_meta(get_the_id(), 'event_image', true);
$event_ticket_url = get_post_meta(get_the_id(), 'event_ticket_url', true);

// set date & time to null if empty string
$event_date = $meta_date 
                ? date('F d', $meta_date) : null;
$event_start_time = $meta_start_time 
                ? date('g:iA', strtotime(get_post_meta(get_the_id(), 'event_start_time', true))) : null;
$event_end_time = $meta_end_time 
                ? date('g:iA', strtotime(get_post_meta(get_the_id(), 'event_end_time', true))) : null;

// format start & end times
$event_time = $event_start_time && $event_end_time 
                ? $event_start_time . " - " . $event_end_time : null;

the_post(); 
?>

<div class="post">
  <div class="container">
    <div class="row-fluid">
      <div class="col-md-offset-2 col-md-8">
        <h2 class="post-header"><a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if ($event_date && $event_time): ?>
            <h4 class="post-header"><?php echo $event_date; ?> | <?php echo $event_time; ?></h4>
        <?php elseif ($event_date): ?>
            <h3 class="post-header"><?php echo $event_date; ?></h3>
        <?php elseif ($event_time): ?>
            <h3 class="post-header"><?php echo $event_time; ?></h3>
        <?php endif; ?>

        <?php if ($event_location): ?>
            <h4 class="post-header"><?php echo $event_location; ?></h4>
        <?php endif; ?>

        <?php if ($event_image) :?>
            <img class="post-image" src="<?php echo $event_image; ?>" alt="<?php the_title() ?>">
        <?php endif; ?>
        
        <br/><br/>
        <?php the_content(); ?>

        <?php if ($event_ticket_url) :?>
            <br/><br/>
            <div style="display: block; text-align: center;">
                <a style="display: inline-block;" target="_blank" href="<?php echo $event_ticket_url;?>" class="btn btn-success btn-md">Purchase Tickets</a>
            </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<hr class="post-divider"/>
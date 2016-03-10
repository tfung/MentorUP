<?php 

$meta_date = get_post_meta(get_the_id(), 'event_date', true);
$meta_start_time = get_post_meta(get_the_id(), 'event_start_time', true);
$meta_end_time = get_post_meta(get_the_id(), 'event_end_time', true);

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

<div class="post" style="margin-bottom: 50px;">
  <div class="container">

    <?php 
    // Checks if the posts contain meta data
    if ($event_date || $event_time || $event_location || $event_ticket_cost || $event_ticket_url):?>

    <div class="row-fluid" style="margin-top: 50px;">
      <div class="col-md-12">
        <h1 style="font-weight: bold;"><?php the_title(); ?></h1>
        <br>
        <br>
      </div>
    </div>

    <div class="row-fluid">
      <div class="col-md-4 post-left-col">
        <?php if ($event_date): ?>
            <h3 style="font-weight: bold;">Date:</h3>
            <p><?php echo $event_date; ?></p>
        <?php endif; ?>
        <?php if ($event_time): ?>
            <h3 style="font-weight: bold;">Time: </h3>
            <p><?php echo $event_time; ?></p>
        <?php endif; ?>

        <?php if ($event_location): ?>
          <h3 style="font-weight: bold;">Location: </h3>
          <p><?php echo $event_location; ?></p>
        <?php endif; ?>

        <?php if ($event_ticket_cost): ?>
          <h3 style="font-weight: bold;">Cost: </h3>
          <p><?php echo nl2br($event_ticket_cost); ?></p>
        <?php endif; ?>

        <?php if ($event_ticket_url) :?>
            <br><br>
            <a style="display: inline-block;" target="_blank" href="<?php echo $event_ticket_url;?>" class="btn btn-success btn-md">Purchase Tickets</a>
        <?php endif; ?>

      </div>
      <div class="col-md-8 post-right-col">
        <?php if ($event_image) :?>
            <img src="<?php echo $event_image; ?>" alt="<?php the_title() ?>">
        <?php endif; ?>

        <?php the_content(); ?>
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

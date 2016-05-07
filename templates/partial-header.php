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
                ? date('F d, Y', $meta_date) : null;
$event_start_time = $meta_start_time 
                ? date('g:iA', strtotime(get_post_meta(get_the_id(), 'event_start_time', true))) : null;
$event_end_time = $meta_end_time 
                ? date('g:iA', strtotime(get_post_meta(get_the_id(), 'event_end_time', true))) : null;

// format start & end times
$event_time = $event_start_time && $event_end_time 
                ? $event_start_time . " - " . $event_end_time : null;

$event_city = get_post_meta(get_the_id(), 'event_city', true);
$event_city = ($event_city ? $event_city . ', Alberta' : "");

?>
<div class="jumbotron partial-page-background" style="background-image: url(&quot;http://placehold.it/1000x200&quot;);">
  <div class="container" style="padding-top: 100px;">
    <?php if (is_single()): ?>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 partial-page-upper">
        <h2><?php echo $event_city; ?></h2>
      </div>
    </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 partial-page-header">
        <h1><?php get_page_title();?></h1>
      </div>
    </div>
    <?php if (is_single()): ?>
    <div class="row" style="padding-top: 20px;">
      <div class="col-md-5 col-md-offset-2 partial-page-lower tablet-column-pull-bottom">
        <h3 style="font-weight: bold; font-size: 18px;"><?php echo $event_date; ?></h3>
        <h4><i class="fa fa-clock-o icon-padding" aria-hidden="true"></i> <?php echo $event_time; ?></h4>
        <h4><i class="fa fa-map-marker icon-padding" style="padding-left: 2px;"></i> <?php echo $event_location; ?></h4>
      </div>
      <div class="col-md-3 tablet-column-pull-bottom mobile-center">
        <br>
        <a href="<?php echo $event_ticket_url; ?>" target="_blank" class="btn-lg btn-custom-ghost-green tablet-float-right mobile-link-full-width">Purchase Tickets</a>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>

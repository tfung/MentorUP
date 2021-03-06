<?php

$default_page_header_image = get_theme_mod('default_page_header_image');

$meta_date = get_post_meta(get_the_id(), 'event_date', true);
$meta_start_time = get_post_meta(get_the_id(), 'event_start_time', true);
$meta_end_time = get_post_meta(get_the_id(), 'event_end_time', true);

$event_location = get_post_meta(get_the_id(), 'event_location', true);
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

$future_event = (strtotime($event_date) >= strtotime(date('Y-m-d e', time())));

$page_title = (is_single() || is_page() ? get_the_title() : single_cat_title("", false));

?>
<div class="jumbotron partial-page-background" style="background-image: url('<?php echo $default_page_header_image; ?>');">
  <div class="container partial-header-container">
    <?php if (is_single() && $event_city): ?>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 partial-page-upper-text">
        <h2><?php echo $event_city; ?></h2>
      </div>
    </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 partial-page-header-text">
        <h1><?php echo $page_title;?></h1>
      </div>
    </div>
    <?php if (is_single() && ($event_date || $event_time || $event_location || $event_ticket_url)): ?>
    <div class="row partial-header-row-padding">
      <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12 partial-page-lower-text">
        <?php if ($event_date) : ?>
        <h3 class="partial-page-text-heavy"><?php echo $event_date; ?></h3>
        <?php endif; ?>
        <?php if ($event_time) : ?>
        <h4><span class="icon-table-img"><i class="fa fa-clock-o icon-padding"></i></span><span class="icon-table-desc"><?php echo $event_time; ?></span></h4>
        <?php endif; ?>
        <?php if ($event_location) : ?>
        <h4><span class="icon-table-img" style="padding-left: 2px"><i class="fa fa-map-marker icon-padding"></i></span><span class="icon-table-desc"><?php echo $event_location; ?></span></h4>
        <?php endif; ?>
        <?php if ($event_ticket_cost) : ?>
        <h4><span class="icon-table-img"><i class="fa fa-shopping-cart icon-padding"></i></span><span class="icon-table-desc"><?php echo $event_ticket_cost; ?></span></h4>
        <?php endif; ?>
      </div>
      <?php if ($event_ticket_url) : ?>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <br>
        <a href="<?php echo $event_ticket_url; ?>" target="_blank" class="btn-lg <?php echo ($future_event ? 'btn-custom-ghost-green' : 'btn-custom-ghost-blue'); ?> tablet-float-right mobile-link-full-width mobile-center"><?php echo ($future_event ? 'Purchase Tickets' : 'Event has Ended'); ?> </a>
      </div>
      <?php endif; ?>
    </div>
    <?php endif; ?>
  </div>
</div>

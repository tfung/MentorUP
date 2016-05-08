<?php 

$event_image = get_post_meta(get_the_id(), 'event_image', true);

?>

<?php get_template_part('templates/partial-header'); ?>

<div class="post">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php if ($event_image) :?>
          <img src="<?php echo $event_image; ?>" alt="<?php the_title() ?>">
        <?php endif; ?>
        
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>

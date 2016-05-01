<?php get_header(); ?>

<?php get_template_part('templates/partial-header'); ?>

<div class="container">
    <div class="row-fluid">
      <div class="col-md-offset-2 col-md-8">
      <?php 
        if (have_posts()) :
          the_post();
          the_content();
        else:
      ?>
        <p><?php _e('Sorry, this page does not exist.'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
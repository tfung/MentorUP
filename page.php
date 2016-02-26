<?php get_header(); ?>

<div class="container">
    <div class="row-fluid">
      <div class="col-md-offset-2 col-md-8">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>

        <?php endwhile; else: ?>
        <p><?php _e('Sorry, this page does not exist.'); ?></p>
      <?php endif; ?>

    </div>
    <!-- <div class="span4">
        <h2>Sidebar</h2>    
      </div> -->
    </div>
</div>

<?php get_footer(); ?>
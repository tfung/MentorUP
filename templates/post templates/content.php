<?php the_post(); ?>

<div class="row">
  <div class="col-md-offset-1 col-md-10">
    <div class="post">
      <h3 class="post-header"><a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <br>
      <p><?php the_content(); ?></p>


      <span class="post-meta"><?php the_time('m/j/y g:i A'); ?></span>

      <hr class="post-divider" />
    </div>
  </div>
</div>
<div class="container">
  <div class="row-fluid">
    <div class="col-md-12 pagination-outer" >
      <?php
        the_posts_pagination(array(
          'mid_size'  => 2,
          'prev_text' => 'Previous',
          'next_text' => 'Next',
          'screen_reader_text' => ' ',
        ));
      ?>
    </div>
  </div>
</div>

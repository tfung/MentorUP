<?php 

get_header(); 

if (have_posts()) : 
  the_post();
  get_template_part('templates/post templates/single');
else: 
  //get_template_part('templates/error');
  show_no_posts('This event does not exist.');
endif;

get_footer(); 

?>
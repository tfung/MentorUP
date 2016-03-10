<?php 

get_header(); 

if (have_posts()) : 
  while (have_posts()) :  
    the_post();
    get_template_part('templates/post templates/content');
  endwhile; 
  get_template_part('templates/pagination');
else: 
  show_no_posts('There are no events available in this category.');
endif;

get_footer(); 

?>
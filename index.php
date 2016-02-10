<?php 

get_header(); 

if (have_posts()) : 
  while (have_posts()) :  
    get_template_part('templates/post templates/content');
  endwhile; 
else: 
  get_template_part('templates/error');
endif;

get_footer(); 

?>
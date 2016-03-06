<?php 

get_header(); 

if (have_posts()) : 
  get_template_part('templates/post templates/single');
else: 
  get_template_part('templates/error');
endif;

get_footer(); 

?>
<?php 

// Event Address is a mandatory field, thus if not empty custom fields are active
//$customFieldsActive = get_field('event_address');

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
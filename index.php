<?php 

// Event Address is a mandatory field, thus if not empty custom fields are active
$customFieldsActive = get_field('event_address');

get_header(); 

if (have_posts()) : 
  while (have_posts()) :  
    if ($customFieldsActive) :
      get_template_part('templates/post templates/content', 'custom-fields');
    else:
      get_template_part('templates/post templates/content');
    endif;
  endwhile; 
else: 
  get_template_part('templates/error');
endif;

get_footer(); 

?>
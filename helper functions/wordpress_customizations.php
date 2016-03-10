<?php

// overrides default excerpt ending
function excerpt_more_override($more) 
{
  return '...';
}
add_filter('excerpt_more', 'excerpt_more_override');

// add post expiry
function post_expiry()
{
  add_meta_box(
    'post_expiry',
    'Post Expiry',
    'post_expiry_callback',
    'side',
    'high'
  );
}

function post_expiry_callback()
{
  // To Do
}

//add_action('post_expiry', 'post_expiry');


?>

<?php

// overrides default excerpt ending
function excerpt_more_override($more) 
{
  return '...';
}
add_filter('excerpt_more', 'excerpt_more_override');

?>

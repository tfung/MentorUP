<?php

function get_upcoming_events($limit=null) {
  $query_events = array(
    'meta_query' => array(
      'events' => array(
        'key' => 'event_date',
        'value' => strtotime(date('Y-m-d e', time())),
        'compare' => '>=',
      )
    ),
    'orderby' => array(
      'events' => 'ASC',
    ),
    //'posts_per_page' => 3,
  );

  if (!is_null($limit) && is_int($limit)) 
    $query_events['posts_per_page'] = $limit;

  return new WP_Query($query_events);
}

function get_past_events($limit=null) {
  $query_events = array(
    'meta_query' => array(
      'events' => array(
        'key' => 'event_date',
        'value' => strtotime(date('Y-m-d e', time())),
        'compare' => '<',
      )
    ),
    'orderby' => array(
      'events' => 'DESC',
    ),
    //'posts_per_page' => 3,
  );

  if (!is_null($limit) && is_int($limit)) 
    $query_events['posts_per_page'] = $limit;

  return new WP_Query($query_events);
}

?>
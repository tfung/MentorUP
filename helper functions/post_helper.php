<?php

function show_no_posts($message) {
  $result = 
    "<div class=\"post\" style=\"margin-bottom: 50px;\">" .
      "<div class=\"container\">" .
        "<div class=\"row-fluid\" style=\"margin-top: 50px;\">" .
          "<div class=\"col-md-12\">" .
            "<p style=\"text-align: center;\">".$message."</h1>" .
          "</div>" .
        "</div>" .
      "</div>" .
    "</div>";

  echo $result;
}

function shorten_meta_post_content($content) {
  if (strlen($content) > 300) {
    $content = substr($content, 0, 297) . '...';
  }

  return $content;
}

function facebook_meta_tags() {
  if (is_single()) {
    global $post;

    $event_image = get_post_meta(get_the_id(), 'event_image', true);

    echo "<meta property=\"og:url\"             content=\"". get_permalink() ."\" />";
    echo "<meta property=\"og:type\"            content=\"article\" />";
    echo "<meta property=\"og:title\"           content=\"".get_the_title()."\" />";
    //echo "<meta property=\"og:description\"     content=\"".shorten_meta_post_content($post->post_content).".\" />";

    if ($event_image)
      echo "<meta property=\"og:image\"     content=\"$event_image\" />";
  }
}

function twitter_meta_tags() {
  if (is_single()) {
    echo "<meta name=\"twitter:site\" content=\"@MentorUpAlberta\">";
    // everything else is done by facebook open graph
  }
}

function get_share_url($social_media, $page_url) {
  $url = '';

  switch ($social_media) {
    case 'facebook':
      $url = "http://www.facebook.com/sharer/sharer.php?u=$page_url";
      break;
    case 'twitter':
      $url = "https://twitter.com/share?url=$page_url";
      break;
    case 'googleplus':
      $url = "https://plus.google.com/share?url=$page_url";
      break;
    case 'linkedin':
      $url = "http://www.linkedin.com/shareArticle?mini=true&url=$page_url";
      break;
    default:
      break;
  }

  return $url;
}

?>
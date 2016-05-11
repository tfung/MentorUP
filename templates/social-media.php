<?php
  $url = get_the_permalink();

  $facebook_url = get_share_url('facebook', $url);
  $twitter_url = get_share_url('twitter', $url);
  $googleplus_url = get_share_url('googleplus', $url);
  $linkedin_url = get_share_url('linkedin', $url);

  $facebook_href = "javascript:shareWindow('$facebook_url')";
  $twitter_href = "javascript:shareWindow('$twitter_url')";
  $googleplus_href = "javascript:shareWindow('$googleplus_url')";
  $linkedin_href = "javascript:shareWindow('$linkedin_url')";

  // register css & js files for this module
  wp_enqueue_style('social_media_css', get_stylesheet_directory_uri() . "/assets/css/social-media.css", array(), '1.0.0');
  wp_register_script('social_media_js', get_template_directory_uri() . '/assets/js/social-media.js', array(), '1.0.0', true);
  wp_enqueue_script('social_media_js');
?>


<div class="share-social-media">
  <?php 
    echo "<a href=\"$facebook_href\" class=\"share-button share-facebook\"><i class=\"fa fa-facebook icon-padding\"></i> Share</a>";
    echo "<a href=\"$twitter_href\" class=\"share-button share-twitter\"><i class=\"fa fa-twitter icon-padding\"></i> Tweet</a>";
    echo "<a href=\"$googleplus_href\" class=\"share-button share-googleplus\"><i class=\"fa fa-google-plus icon-padding\"></i> Share</a>";
    echo "<a href=\"$linkedin_href\" class=\"share-button share-linkedin\"><i class=\"fa fa-linkedin icon-padding\"></i> Share</a>";
  ?>
</div>

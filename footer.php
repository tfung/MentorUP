
<?php

$email_address = get_theme_mod('email_address');
$facebook_url = get_theme_mod('facebook_url');
$twitter_url = get_theme_mod('twitter_url');
$linkedin_url = get_theme_mod('linkedin_url');
$isDisplayNewsletterSignup = get_option('display_newsletter_signup');

?>
<!-- end body -->
</div>

<div id="footer-padding"></div>

<footer>

  <?php if ($isDisplayNewsletterSignup) : ?>
  <div class="medium-blue-background">
    <div class="container-full footer-container">
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12 mobile-column-padding mobile-center">
          <span>Sign up for the newsletter to stay on top of what's happening!</span>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 mobile-column-padding mobile-center desktop-button-container-float-right">
          <?php echo do_shortcode('[newsletter_registration_modal_form]'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <div class="dark-blue-background">
    <div class="container-full footer-container">
      <div class="row">
        <div class="col-md-4 col-md-push-8 col-sm-12 col-xs-12 mobile-column-padding">
          <div class="mobile-center desktop-float-right">
            <?php if (!empty($facebook_url)) : ?>
            <a href="<?php echo $facebook_url; ?>" class="fa fa-facebook circle-background" target="_blank"></a>
            <?php endif; ?>

            <?php if (!empty($twitter_url)) : ?>
            <a href="<?php echo $twitter_url; ?>" class="fa fa-twitter circle-background" target="_blank"></a>
            <?php endif; ?>

            <?php if (!empty($linkedin_url)) : ?>
            <a href="<?php echo $linkedin_url; ?>" class="fa fa-linkedin circle-background" target="_blank"></a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-8 col-md-pull-4 col-sm-12 col-xs-12 mobile-column-padding">
          <div class="mobile-column-padding mobile-center">
            <span>© <?php echo date("Y"); ?> MentorUP Alberta | All Rights Reserved</span>
          </div>
        </div>

      </div>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>

</div> <!-- /container -->
</body>
</html>


<?php

$email_address = get_theme_mod('email_address');
$facebook_url = get_theme_mod('facebook_url');
$twitter_url = get_theme_mod('twitter_url');
$linkedin_url = get_theme_mod('linkedin_url');

?>

<footer>
  <div class="container-full footer-area">
    <div class="row">
      <div class="col-md-12">
        <h3>Connect with us</h3>

        <?php if (!empty($facebook_url)) : ?>
          <a class="fa fa-facebook-square fa-3x" href="<?php echo $facebook_url; ?>" target="_blank"></a>
        <?php endif; ?>

        <?php if (!empty($twitter_url)) : ?>
          <a class="fa fa-twitter fa-3x" href="<?php echo $twitter_url; ?>" target="_blank"></a>
        <?php endif; ?>

        <?php if (!empty($linkedin_url)) : ?>
          <a class="fa fa-linkedin fa-3x" href="<?php echo $linkedin_url; ?>" target="_blank"></a>
        <?php endif; ?>

        <?php if (!empty($email_address)) : ?>
          <a class="fa fa-envelope-o fa-3x" href="mailto:<?php echo $email_address; ?>"></a>
        <?php endif; ?>

        <p>© <?php echo date("Y"); ?> MentorUP Alberta | All Rights Reserved</p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</div> <!-- /container -->
</body>
</html>

<?php

$email_address = get_theme_mod('email_address');
$facebook_url = get_theme_mod('facebook_url');
$twitter_url = get_theme_mod('twitter_url');
$linkedin_url = get_theme_mod('linkedin_url');

?>
<!-- end body -->
</div>

<div id="footer-padding"></div>

<footer>

  <div class="medium-blue-background">
    <div class="container-full footer-container">
      <div class="row">
        <div class="col-md-8 col-sm-6 mobile-column-padding mobile-center">
          <span>Sign up for the newsletter to stay on top of what's happening!</span>
        </div>
        <div class="col-md-4 col-sm-6 mobile-column-padding mobile-center">
          <button class="btn btn-custom-blue tablet-float-right" data-toggle="modal" data-target="#myModal">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

  <div class="dark-blue-background">
    <div class="container-full footer-container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 col-sm-6 mobile-column-padding">
          <div class="mobile-center tablet-float-right">
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
        <div class="col-md-6 col-md-pull-6 col-sm-6 mobile-column-padding">
          <div class="mobile-column-padding mobile-center">
            <span>© <?php echo date("Y"); ?> MentorUP Alberta | All Rights Reserved</span>
          </div>
        </div>

      </div>
    </div>
  </div>

<!-- modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-vertical-adjustment" role="document">
    <div class="modal-content">
      <form class="form-horizontal">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="inputFirstName" class="col-sm-4 control-label">First Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputFirstName">
            </div>
          </div>

          <div class="form-group">
            <label for="inputLastName" class="col-sm-4 control-label">Last Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputLastName">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail" class="col-sm-4 control-label">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="inputEmail">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-custom-blue">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

</footer>

<?php wp_footer(); ?>

</div> <!-- /container -->
</body>
</html>

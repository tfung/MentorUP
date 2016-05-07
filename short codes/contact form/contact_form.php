<?php
/*
Newsletter Sign UP Module

Usage: 
  Add shortcut [newsletter_registration_modal_form] to php webpage
*/

function newsletter_modal_html() {
  $html = 
      '<button class="btn btn-custom-blue tablet-float-right" data-toggle="modal" data-target="#newsletterModal">Sign Up</button>

      <div id="newsletterModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-vertical-adjustment" role="document">
          <div class="modal-content">
            <form id="newsletterForm" class="form-horizontal" method="post" action="'.admin_url('admin-ajax.php').'">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Newsletter Sign Up</h4>
              </div>
              <div class="modal-body">

                <div class="form-group">
                  <label for="inputFirstName" class="col-sm-4 control-label">First Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputFirstName" name="inputFirstName">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputLastName" class="col-sm-4 control-label">Last Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputLastName" name="inputLastName">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail" class="col-sm-4 control-label">Email</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-custom-blue" name="submit">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>';

  echo $html;
}

function set_html_content_type() {
    return 'text/html';
}

function contact_form_callback() {
  $data = array();
  $jsonObj = parse_str($_POST['data'], $data);

  $firstname  = sanitize_text_field($data["inputFirstName"]);
  $lastname   = sanitize_text_field($data["inputLastName"]);
  $fullname   = $firstname . ' ' . $lastname;
  $email      = sanitize_email($data["inputEmail"]);

  $subject    = "[Newsletter Sign Up] - $fullname";
  $message    = "<h1><span style=\"font-weight: bold; font-size: 18px;\">Information:</span></h1>
                  <p>
                  First Name: $firstname<br>
                  Last Name: $lastname<br>
                  Email: $email</p>";

  // get the blog administrator's email address
  $to         = get_option('admin_email');

  add_filter('wp_mail_content_type', 'set_html_content_type');
  
  if (wp_mail($to, $subject, $message)) {
    wp_send_json_success();
  } else {
    // This doesn't get triggered for some reason
    wp_send_json_error();
  }

  remove_filter('wp_mail_content_type', 'set_html_content_type');

  wp_die();
}

function init_newsletter_registration_modal() {
  ob_start();
  newsletter_modal_html();

  wp_register_script('contact_form_js', get_template_directory_uri() . '/short codes/contact form/contact_form.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('contact_form_js');

  return ob_get_clean();
}

// add callback for both admin & non-admin pages
add_action('wp_ajax_contact_form', 'contact_form_callback');
add_action('wp_ajax_nopriv_contact_form', 'contact_form_callback');

add_shortcode('newsletter_registration_modal_form', 'init_newsletter_registration_modal');

?>

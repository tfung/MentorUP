;(function($) {
  
  var contactForm = $('#newsletterForm');

  contactForm.submit(function (event) {
    event.preventDefault();

    $.ajax({
      type: contactForm.attr('method'),
      url: contactForm.attr('action'),
      data: {
        action: 'contact_form',
        data: contactForm.serialize()
      },
      success: function (response) {
        alert('You have successfully signed up the for the newsletter');
        //contactForm.modal('toggle'); // To Do: Fix toggle
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert('An error has occured when signing up for the newsletter.');
      }
    })
  });

})(jQuery);
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="pest control, ants, rats, mice, exterminator, bugs, pests, roaches, cockroaches, fire ants, mosquitoes, termite, fly misting, rodent, rodents, bugs, exterminators, extermination, palm city, stuart, port st lucie, hobe sound, tequesta, and jupiter, fl ">
  <meta name="description" content="Angus Pest Control provides pest control service to homes and businesses in Palm City, Stuart, Port St Lucie, Hobe Sound, Tequesta, and Jupiter, FL.">
  <title>Angus Termite and Pest Control</title>
  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- HTML5 Shiv for older browsers -->
  <!--[if lt IE 9]>
    <script src="js/vendor/html5shiv.js"></script>
  <![endif]-->
</head>
  <body>
    <!-- Contact Us -->
    <section class="contact-us">
      <div class="container">
        <h2 class="section-h2">Contact Us</h2>
        <div class="row">
          <div class="col-lg-7">
            <!-- Form -->
            <form id="contact-form" class="contact-form" method="post" action="contact.php">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" class="form-control" name="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" class="form-control" name="message"></textarea>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <button class="btn btn-blue-outlay btn-full-width hvr-rectangle-in" type="submit" name="submit">Send</button>
                </div>
                <div class="col-lg-8 response">

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Javascript scripts and libs -->
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script>
      $(function() {
        $('#contact-form').validate(
          {
            rules: {
              name: {
                required: true,
              },
              email: {
                required: true,
                email: true
              },
              phone: {
                required: true
              },
              message: {
                required: true
              }
            },
            submitHandler: function (form) {
              $('.response').html('<img src="images/ajax-loader.gif" alt="loader" />');
              $.ajax({
                type: "POST",
                url: "contact.php",
                data: {name: $("#name").val(), email: $("#email").val(), message: $("#message").val()},
                success: function (response) {
                  $('#name').val("");
                  $('#email').val("");
                  $('#phone').val("");
                  $('#message').val("");
                  $('.response').html(response);
                }
              });
              return false;
            }
          }
        );
      });
    </script>
  </body>
</html>

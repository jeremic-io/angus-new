<?php
  if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $msg = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nMessage: \n" . $message;

    if(mail("draganjeremic01.com", "Contact Us", $msg)) {
      echo 'The message has been send!';
    } else {
      echo 'We failed to send the message... Please try again later.'
    }
  } else {
    echo 'Please enter all data!';
  }
?>

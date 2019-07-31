<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("./sendgrid-php.php");
// If not using Composer, uncomment the above line
if(isset($_POST['submit'])){
  $email = new \SendGrid\Mail\Mail();
  $email->setFrom("mailer@efforia.io", "Mailer");
  $email->setSubject("Contato de " . $_POST['first_name'] . " (". $_POST['e_mail'] . ")");
  $email->addTo("ola@efforia.io", "Efforia");
  $email->addContent("text/plain", $_POST['message']);
  $email->addContent("text/html", $_POST['message']);
  $sendgrid = new \SendGrid('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');
  try {
      $response = $sendgrid->send($email);
      /* print $response->statusCode() . "\n";
      print_r($response->headers());
      print $response->body() . "\n";*/
  } catch (Exception $e) {
      // echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
if(isset($_POST['submit'])){
  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  $mail->isSMTP();
  // $mail->SMTPDebug = 2;
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAuth = true;
  $mail->Username = "ola@efforia.io";
  $mail->Password = "mk28to#$";
  $mail->setFrom($_POST['e_mail'], $_POST['first_name'] . ' ' . $_POST['last_name']);
  $mail->addAddress('ola@efforia.io', 'Efforia');
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Contato pelo site da Efforia';
  $mail->Body    = $_POST['message'];
  $mail->AltBody = $_POST['message'];
  $mail->send();
  /* if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
      echo "Message sent!";
  } */
}
?>

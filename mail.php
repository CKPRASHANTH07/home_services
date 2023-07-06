<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include_once "include/header.php";

include_once 'PHPMailer/src/Exception.php';
include_once 'PHPMailer/src/PHPMailer.php';
include_once 'PHPMailer/src/SMTP.php';

if(isset($_POST["send"])){
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
  
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ckprashanthc@gmail.com'; // Replace with your Gmail email address
    $mail->Password = 'vsmuxjjzrdkxuxuy'; // Replace with your Gmail password
    $mail->SMTPSecure = 'tls'; // or 'ssl' if you prefer
    $mail->Port = 587; // or 465 for SSL
  
    // Email content
    $mail->setFrom($_POST["email"], 'HOME SERVICES'); // Replace with your name
    $mail->addAddress($_POST["email"], 'CLIENT'); // Use the value entered in the "To" field as the recipient's email address
    $mail->isHTML(true);
  
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];
  
    try {
        // Send the email
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
  }
  
?>
<div style="display:flex ; justify-content: center; margin-top:150px; background: grey; margin-left:500px;margin-right: 500px; padding:40px">
<form method="post">
  <div>
    <label style="color:black ; font-weight:bolder;" for="email">To:</label>
    <input class="form-control" type="email" name="email" id="email" required>
  </div>
  <div>
    <label style="color:black ; font-weight:bolder;"  for="subject">Subject:</label>
    <input class="form-control" type="text" name="subject" id="subject" required>
  </div>
  <div>
    <label style="color:black ; font-weight:bolder;"  for="message">Message:</label>
    <textarea class="form-control" name="message" id="message" required></textarea>
  </div>
  <br>
  <br>
  <button class="btn btn-block btn-primary" type="submit" name="send">Send</button>
</form>
</div>

<?php


$email = "recipient@example.com";
$name = "Test email";
$mobile = "Test email";
$message = "Hello, this is a test email!";
$headers = "From: savindudilanka16@gmail.com\r\n";
$headers .= "Reply-To: savindudilanka16@gmail.com\r\n";
$headers .= "Content-type: text/html\r\n";

if (mail($email, $name, $message, $headers,$mobile)) {
  echo "Email sent successfully!";
} else {
  echo "Email sending failed.";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $mobile = $_POST["Mobile"];
    $message = $_POST["Message"];

    $to = "savindudilanka16@gmail.com";  // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    $email_body = "Name: $name\nEmail: $email\nMobile: $mobile\nMessage:\n$message";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
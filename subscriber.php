<?php

var_dump($_POST);
exit;
if ($_POST["email"] && $_POST["message"]) {
     if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
          $to = "ugbegodwin7963@gmail.com";
          $from = $_POST['email'];
          $name = $_POST['name'];
          $subject = $_POST['My Portfolio Contact Form'];
          $message = $_POST['message'];
          $header = $_POST['From:' . $from];
          if (mail($to, $subject, $message, $header)) {
               echo "Message sent. Thank you " . $name;
          } else {
               echo "Unable to send your message. Please try again";
          }
     }
}

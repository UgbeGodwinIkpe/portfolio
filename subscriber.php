<?php


if($_POST["submit"]) {

$to = "ugbegodwin7963@gmail.com";
$from = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['Message from my Portfolio'];
$message = $_POST['message'];
$header = $_POST['From:' . $from];
mail($to, $subject,$message, $header );
echo "Message sent. Thank you " . $name

}


?>
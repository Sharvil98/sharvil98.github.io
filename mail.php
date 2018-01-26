<?php
extract($_POST);

$to = "sharvilpatel2015@gmail.com";
$subject = "Website Inquiry - $subject";
$txt = "Hi i'm $name, $message , my email id is$email";
$headers = "From: admin@silverwingtechnologies.com";



mail($to,$subject,$txt,$headers);
header("location:index.html");
?>

<?php
  //$name = $_POST['name'];
  //$number = $_POST['number'];
  //$visitor_email = $_POST['email'];
  //$message = $_POST['message'];

  $name = "bob";
  $number = "123";
  $visitor_email = "123@gmail.com";
  $message = "1234";


	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name $number $visitor_email $message".

  $to = "johncedricktee@gmail.com";

  $headers = "From: $visitor_email \r\n";


  mail($to,$email_subject,$email_body,$headers);

 ?>

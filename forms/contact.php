<?php

  $subject = $_POST['subject'];

  $message = $_POST['message'];
  $message = "From: ".$_POST['name']. ", <".$_POST['email'].">"."\r\n" .  wordwrap($message, 70, "\r\n");

  $headers = 'From: '. $_POST['email'] . "\r\n" .
    'Reply-To: ' . $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  mail('radca.fei@speai.sk', $subject, $message, $headers);

?>

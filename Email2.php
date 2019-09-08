<?php
   $to = '18CS2A4205@kristujayanti.com';
   $subject = 'Sent from Student';
   //$body = 'Hello Satyam i am learning php now!!!';
   //$header = 'From: satyampathaknewid@gmail.com';
    $name = $_POST['name'];
    $message = $_POST['message']; // required
    $email = $_POST['email']; // required
   if(mail($to,$subject,$message,$email))
	   echo 'Mail sent successfully to ',$to;
   else
	   echo 'Mail not sent';
?>
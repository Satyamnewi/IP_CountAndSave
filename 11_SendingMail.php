<?php
   $to = '18CS2A4205@kristujayanti.com';
   $subject = 'This is a test email';
   $body = 'Hello Satyam i am learning php now!!!';
   $header = 'From: satyampathaknewid@gmail.com';
   if(mail($to,$subject,$body,$header))
	   echo 'Mail sent successfully to ',$to;
   else
	   echo 'Mail not sent';
?>
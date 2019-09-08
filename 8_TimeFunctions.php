<?php
   //ob_start();
   $present_time = time();
   $actual_time = date('H:i:s d m Y',$present_time);
   echo 'Time at present in milliseconds from 1st January, 1970 '.$present_time.'<br>';
   echo 'Date at Present '.$actual_time.'<br>';
   
   //Adding few days ahead to present time
   $addTime = strtotime('+1 week');
   echo 'Time one week ahead of now : '.$addTime.'<br>';
   /*
   header("Location : https://www.timeanddate.com/worldclock/india");
   ob_end_flush();
   */
?>
<?php
   $filename = 'names.txt';
   $handle = fopen($filename,'r');
   $datain = fread($handle,filesize($filename));
   $names_array = explode(' ',$datain);
   foreach($names_array as $name)
     echo $name.'<br>';
   $filename2 = 'C:\Wallpaper\A.txt';
   unlink($filename2); //This function deltes the file
?>
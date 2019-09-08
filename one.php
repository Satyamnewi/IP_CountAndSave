<?php
   error_reporting('E_All');
   $name="Satyam";
   $age=20;
   if(strtolower($name)=='satyam')
	   echo '<strong>U r the right one</strong>';
   else
	   print 'U r fake one';
   echo '<input type="text" name="name">';
   echo $age;
   
   //We are embedding php into html using this line
?>
<input type="text" value="<?php echo $name; ?>">         
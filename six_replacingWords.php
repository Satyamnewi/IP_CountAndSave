<?php
   $find = array('Satyam','Sumit');
   $replace = array('S****m','S***t');
   if(isset($_POST['user_input'])&&!empty($_POST['user_input']))
   {
	   $user_input = $_POST['user_input'];
	   $user_input_new = str_ireplace($find,$replace,$user_input);
	   echo $user_input_new;
   }
?>
<hr>
<form action="six_replacingWords.php" method ="POST">
    <input type = "text" name= "user_input"><?php echo $user_input; ?><br><br>
    <input type = "submit" value = "Submit">
</form> 
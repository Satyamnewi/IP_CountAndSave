<?php
   if(isset($_POST['RollDice']))
   {
	   $random = rand(1,6);
	   echo 'You got a '.$random.'<br><br>';
   }
?>
<form action = "7_diceGame.php" method = "POST">
   <input type = "submit" name = "RollDice" value = "Click to roll the Dice">
</form>
<?php
  if(isset($_GET['day'])&&isset($_GET['date']))
  {
	  $day = ($_GET['day']);
	  $date = $_GET['date'];
	  if(!empty($day)&&!empty($date))
		  echo 'It is '.$day.','.$date;
	  else
		  echo 'Enter all the fields';
  }
?>
<form action = "9_FormDatePOST.php" method ="GET">
  Day: <br><input type= "text" name="day"><br>
  Date: <br><input type="text" name="date"><br><br>
  <input type="submit" name="Submit">
</form>
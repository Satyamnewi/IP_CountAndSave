<?php
      $twoD = array(1=>array(1,2,3,10,11),2=>array(4,5,6,12,13),3=>array(7,8,9,14,15),4=>array(16,17,18,19,20),5=>array(21,22,23,24,25));
	  for($i=0;$i<5;$i++)
	  {
		  for($j=0;$j<$i;$j++)
			echo $twoD[$i][$j].' ';
		  echo '<br>';
	  }
?>
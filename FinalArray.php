<?php
      $aDD = array(0=>array('Physics','Chemistry','Maths','English','Biology','Geography'),
					1=>array('Chemistry','Geography','Maths','History','Computer','Physics'),
					2=>array('Physics','Maths','English','History','Computer','Chemistry'),
					3=>array('Geography','Biology','Computer','Chemistry','English','History'),
					4=>array('History','Biology','Physics','Maths','Computer','English'));
       $temp = array();
	function RoutineDisplay()
    {	
	    global $aDD;
	    for($i=0;$i<5;$i++)
	    {
		     for($j=0;$j<6;$j++)
			   echo $aDD[$i][$j].' ';
		     echo '<br>';
        }
	}
	function SingleDimChange()
	{
		$k=0;
		global $temp;
		global $aDD;
        for($i=0;$i<5;$i++)
         {
            for($j=0;$j<6;$j++)
            {
                $temp[$k++]=$aDD[$i][$j];
            }
        }
	}
	function Shifting()
   {
	   global $temp;
        $t=$temp[0];
        for($i=0;$i<sizeof($temp)-1;$i++)
        {
            $temp[$i]=$temp[$i+1];
        }
        $temp[sizeof($temp)-1]=$t;
   }
   function IntoTwoDim()
   {
	   $k=0;
	   global $aDD;
	   global $temp;
       for($i=0;$i<5;$i++)
        {
            for($j=0;$j<6;$j++)
            {
                $aDD[$i][$j]=$temp[$k++];
            }
        }
   }
   function DayName()
   {
	   echo 'MONDAY    TUESDAY \t WEDNESDAY \t THURSDAY \t FRIDAY \t SATURDAY \t SUNDAY<br>';
   }
   for($i=1;$i<29;$i++)
        {
            echo '<br><br>Class '.$i.' Routine  <br>';
            echo '--------------------------------------------<br>';
			DayName();
            SingleDimChange();
            Shifting();
            IntoTwoDim();
            RoutineDisplay();
        }
?>
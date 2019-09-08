<form action="Checkbox_Data.php" method="POST">
    A<input type="checkbox" name="color[]" id="A" value="A">
    B<input type="checkbox" name="color[]" id="B" value="B">
    C<input type="checkbox" name="color[]" id="C" value="C">
    D<input type="checkbox" name="color[]" id="D" value="D">
    <input type="submit" value="submit">
</form>
<?php
require 'connect.php';
    $name = $_POST['color'];
    if (isset($_POST['color'])&&!empty($name)) 
	{
          foreach ($name as $color)
	      {
			  mysql_query("UPDATE update2 SET Present='N' WHERE name='$color'");
          }
	}
?>
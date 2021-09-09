<?php
error_reporting(E_ALL ^ E_NOTICE)
?>

<?php require('config.php');?>

<?php

//now I know it is working 
if(isset($_POST['save']))
{
	$sql="INSERT INTO tblcourse(name, semester, maxSize)
	VALUES('$_POST[name]','$_POST[semester]','$_POST[maxSize]')";
	if(mysqli_query($con, $sql))
	{
		echo "New record created successfully!";
	}
	else
	{
		echo "Error: " .$sql."
		" .mysql_error($con);
	}	
	echo '<table border = "1" cellspacing="2" cellpadding = "2">
			<tr>
				<td><font face = "Arial">Course Name: </font> </td>
				<td><font face = "Arial">Semester:  </font> </td>
				<td><font face = "Arial">Maximum Class Size: </font> </td>
				</tr>';
	
	if($result = $con->query($query))
	{
		while($row = $result->fetch_assoc())
		{
			$name = $row["name"];
			$semester = $row["semester"];
			$maxSize = $row["maxSize"];
		
			
			echo '<tr>
				<td>'.$name.'</td>
				<td>'.$semester.'</td>
				<td>'.$maxSize.'</td>
				</tr>';
		}
		
		$result -> free();
	}
}
	mysqli_close($con)
	
?>
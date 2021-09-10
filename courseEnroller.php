<?php
error_reporting(E_ALL ^ E_NOTICE)
?>

<?php require('config.php');?>

<?php

if(isset($_POST['save']))
{
	$sql="INSERT INTO tblregistration (uname, cname) VALUES('$_POST[email]','$_POST[cname]')";
	
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
				<td><font face = "Arial">Username:  </font> </td>
				<td><font face = "Arial">Course Name:  </font> </td>
				</tr>';
	if($result = $con->query($query))
	{
		while($row = $result->fetch_assoc())
		{
			$id = $row["email"];
			$firstName = $row["cname"];
			
			echo '<tr>
				<td>'.$email.'</td>
				<td>'.$cname.'</td>
				</tr>';
		}
		$result -> free();
	}
}
	mysqli_close($con)
	
?>

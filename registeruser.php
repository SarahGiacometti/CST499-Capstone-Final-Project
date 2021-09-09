<?php
error_reporting(E_ALL ^ E_NOTICE)
?>

<?php require('config.php');?>

<?php

if(isset($_POST['save']))
{
	$sql="INSERT INTO tbluser (firstName, lastName, email, password, phone)
	VALUES('$_POST[firstName]','$_POST[lastName]','$_POST[email]','$_POST[password]','$_POST[phone]')";

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
				<td><font face = "Arial">ID: </font> </td>
				<td><font face = "Arial">First Name: </font> </td>
				<td><font face = "Arial">Last Name: </font> </td>
				<td><font face = "Arial">Email: </font> </td>
				<td><font face = "Arial">Password: </font> </td>
				<td><font face = "Arial">Phone: </font> </td>
				</tr>';
	
	if($result = $con->query($query))
	{
		while($row = $result->fetch_assoc())
		{
			$id = $row["id"];
			$firstName = $row["firstName"];
			$lastName = $row["lastName"];
			$email = $row["email"];
			$password = $row["password"];
			$phone = $row["phone"];
		
			
			echo '<tr>
				<td>'.$id.'</td>
				<td>'.$firstName.'</td>
				<td>'.$lastName.'</td>
				<td>'.$email.'</td>
				<td>'.$password.'</td>
				<td>'.$phone.'</td>
				</tr>';
		}
		
		$result -> free();
	}
}
	mysqli_close($con)
	
?>
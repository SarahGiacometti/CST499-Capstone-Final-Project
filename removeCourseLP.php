<?php
error_reporting(E_ALL ^ E_NOTICE)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Course Enrollment</title>
	<meta charset="utf_8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.jx"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstap.min.js"></script>
</head>
<body>
<?php include 'master.php';?>


	<div class="container text-center" style="color:darkgreen">
	<h3>Remove Course from Student Schedule </h3>
	<h3>Scheduled Courses</h3>
	</div>

	<div class="container text-center" style="color:darkgreen">
	<form align="center"  method = "POST" action="removeCourseLP.php">
	<fieldset>
		<legend>Choose course to remove</legend>
		<p>
			<label>Student Name:   </label>
			<input type="text" name="uname"/>
		</p>
		<p>
			<label>Course Name:   </label>
			<input type="text" name="cname"/>
		</p>
		</br>
		</br>
	<input type="submit" name="save" value="submit"/>	
	</fieldset>
	</form>
	</div>
	<br>
	<br>
</body>
</html>
	
<?php require('config.php');?>
	
	
<?php	
	if(isset($_POST['save']))
{
	/*$sql = "SELECT * FROM tblregistration WHERE cname = '$_POST[cname]' and uname = '$_POST[email]'";*/
	$sql="DELETE * FROM tblregistration WHERE  cname='$_POST[cname]'and uname='$_POST[uname]'";
	
	$result=$con->query($sql);

		if($result === FALSE)
		{
			die(mysqli_error($con));
		}

		if($result->num_rows > 0)
		{
			while($row=$result->fetch_assoc())
			{
			
			$id = $row["id"];
			$cname = $row["cname"];
			$uname = $row["uname"];

			echo '<tr>
				
				<td>'.$id.'</td>
				<td>'.$cname.'</td>
				<td>'.$uname.'</td>
				</tr>';
		}
	}
	else
	{
		echo "0 results";
	}
	
	/*
	$sql="DELETE FROM tblregistration WHERE  cname='$_POST[cname]'and uname='$_POST[uname]'";

	
	if(mysqli_query($con, $sql))
	{
		echo "Record successfully removed!";
	}
	else
	{
		echo "Error: " .$sql."
		" .mysql_error($con);
	}
	/*
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
	}*/
}
	mysqli_close($con)
	
?>






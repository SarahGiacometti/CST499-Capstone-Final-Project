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
	<h1>Welcome to the Course Enrollment Page</h1>
	<h2> Select Your Classes</h2>
	</div>
	
	
	<div class="container text-center" style="color:darkgreen">
	<h3>Add Course to Student Schedule </h3>
	<h3>Available Courses</h3>
	</div>
	
	<?php require('config.php');?>

	<?php
	session_start();

	echo '<table align = "center" border = "1" cellspacing="2" cellpadding = "2">
		<tr>
			<td><font face = "Arial">Course Name:  </font> </td>
			<td><font face = "Arial">Semester </font> </td>

			</tr>';
			
	$sql = "SELECT * FROM tblcourse";
	$result=$con->query($sql);
	if($result === FALSE)
	{
		die(mysqli_error($con));
	}

	if($result->num_rows > 0)
	{		
		while($row=$result->fetch_assoc())
		{
			
			$name = $row["name"];
			$semester = $row["semester"];
						
			echo '<tr>
				
				<td>'.$name.'</td>
				<td>'.$semester.'</td>
				</tr>';
		}
	}
	else
	{
		echo "0 results";
	}
?>

	<div class="container text-center" style="color:darkgreen">
	<form align="center"  method = "POST" action="courseEnroll.php">
	<fieldset>
		<legend>Details</legend>
		<p>
			<label>Student Username (email):  </label>
			<input type="email"  name="email"/>
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
	<?php include ("courseEnroller.php"); ?>
	<br>
	<br>
</body>
</html>



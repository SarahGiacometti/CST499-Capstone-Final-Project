<?php
error_reporting(E_ALL ^ E_NOTICE)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> New Course Registation Page </title>
	<meta charset="utf_8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.jx"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstap.min.js"></script>
</head>
<body>
<?php include 'master.php';?>

	<div class="container text-center" style="color:darkorange">
	<h1>New Course Registration</h1>
	</div>

<?php require('config.php');?>


<form align="center"  method = "POST" action="insertCourse.php">
	<fieldset>
		<legend>New Course Registration</legend>
		<p>
			<label>Course Name:  </label>
			<input type="text"  name="name"/>
		</p>
		<p>
			<label>Semester: </label>
			<input type="text" name="semester"/>
		</p>
		<p>
			<label>Maximum Class Size:  </label>
			<input type="text" name="maxSize"/>
		</p>
		</br>
		</br>
	<input type="submit" name="save" value="submit"/>

	
	</fieldset>
</form>



</br>
</br>
</br>



	
<?php include 'footer.php';?>
</body>
</html>
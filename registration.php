<?php
error_reporting(E_ALL ^ E_NOTICE)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Student Registation Page </title>
	<meta charset="utf_8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.jx"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstap.min.js"></script>
</head>
<body>
<?php include 'master.php';?>

	<div class="container text-center" style="color:darkorange">
	<h1>Welcome to the Registration Page</h1>
	</div>

<?php require('config.php');?>


<form align="center"  method = "POST" action="registeruser.php">
	<fieldset>
		<legend>Details</legend>
		<p>
			<label>First Name:  </label>
			<input type="text"  name="firstName"/>
		</p>
		<p>
			<label>Last Name:  </label>
			<input type="text" name="lastName"/>
		</p>
		<p>
			<label>Email:  </label>
			<input type="email" name="email"/>
		</p>
		<p>
			<label>Password:  </label>
			<input type"password" name="password"/>
		</p>
		<p>
			<label>Phone:  </label>
			<input type"tel" name="phone"/>
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
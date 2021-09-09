<?php
error_reporting(E_ALL ^ E_NOTICE)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login Page </title>
	<meta charset="utf_8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.jx"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstap.min.js"></script>

</head>
<body>
<?php require 'master.php'
?>

	<div class="container text-center" style="color:darkred">
		<h1>Welcome to the Login Page</h1>
	</div>
	

		
	<form align="center"  method = "POST" action="config.php">
	<fieldset>
		<legend>Please Enter Your Login Credentials</legend>
		<p>
			<label>Email:  </label>
			<input type="email" name="email"/>
		</p>
		<p>
			<label>Password:  </label>
			<input type"password" name="password"/>
		</p>
		</br>
		</br>
	<input type="submit" name="save" value="submit"/>	
	</fieldset>
</form>
		

<?php require_once 'footer.php';?>
</body>
</html>
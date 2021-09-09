<?php
error_reporting(E_ALL ^ E_NOTICE)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Logout Page </title>
	<meta charset="utf_8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.jx"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstap.min.js"></script>
</head>
<body>
<?php include 'master.php';?>

	<div class="container text-center" style="color:darkgreen">
	<h1>Welcome to the Logout Page</h1>
	</div>

<?php

session_start();
session_destroy();
header('Location: index.php');

?>

<?php include 'footer.php';?>
</body>
</html>
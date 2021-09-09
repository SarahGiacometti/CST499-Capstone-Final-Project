<?php
error_reporting(E_ALL ^ E_NOTICE)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Profile Page </title>
	<meta charset="utf_8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.jx"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstap.min.js"></script>
</head>
<body>
<?php include 'master.php';?>

	<div class="container text-center" style="color:darkgreen">
	<h1>Welcome to the Profile Page</h1>
	<h2> You are now Logged in</h2>
	</div>

<?php require('config.php');?>


<?php
session_start();

echo '<table align = "center" border = "1" cellspacing="2" cellpadding = "2">
		<tr>
			<td><font face = "Arial">First Name: </font> </td>
			<td><font face = "Arial">Last Name: </font> </td>
			<td><font face = "Arial">Email: </font> </td>
			<td><font face = "Arial">Password: </font> </td>
			<td><font face = "Arial">Phone: </font> </td>

			</tr>';
			
$sql = "SELECT * FROM tbluser WHERE email = '".$_SESSION['login_user']."'";
$result=$con->query($sql);

if($result === FALSE)
{
		die(mysqli_error($con));
}

if($result->num_rows > 0)
{
		while($row=$result->fetch_assoc())
		{
			
			$firstName = $row["firstName"];
			$lastName = $row["lastName"];
			$email = $row["email"];
			$password = $row["password"];
			$phone = $row["phone"];
						
			echo '<tr>
				
				<td>'.$firstName.'</td>
				<td>'.$lastName.'</td>
				<td>'.$email.'</td>
				<td>'.$password.'</td>
				<td>'.$phone.'</td>
				</tr>';
		}
}
	else
	{
		echo "0 results";
	}

?>
	

<?php include 'footer.php';?>
</body>
</html>
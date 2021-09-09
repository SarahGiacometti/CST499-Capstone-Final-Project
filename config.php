<?php
$host = "localhost";
$database = "dbemployee";
$user = "root";
$pass = "";
$query = "SELECT * FROM tbluser";

$con=mysqli_connect($host, $user, $pass, $database);

//check connection
if($con->connect_error)
{
	die("Connection failed:  ". $con->connect_error);
}
/*echo "Connected Successfully";*/


	session_start();	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//username and password sent from form
		
		$myusername = mysqli_real_escape_string($con, $_POST['email']);
		$mypassword = mysqli_real_escape_string($con, $_POST['password']);
		
		echo "This is the username or email:" .$myusername."";
		echo "This is the password:" .$mypassword."";
		
		$sql = "SELECT * FROM tbluser WHERE email = '$myusername' and password = '$mypassword'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		
		$count = mysqli_num_rows($result);
		echo "This is the count:" .$count."";
		//if result matched $ myusername and $ mypassword, table row must be 1
		if($count == 1) 
		{
			$SESSION["myusername"];
			$_SESSION['login_user'] = $_POST['email'];
			$_SESSION['logged_in'] = true;			

		
			header("location: loginSuccess.php");
			
			
			
		}
		else
		{
				
			header("location: login.php");
			
		}
	}
	
	
?>







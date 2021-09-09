<?php
	error_reporting(E_ALL ^ E_NOTICE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery/min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js.boostrap.min.js"></script>
</head>
<body>
<div class="jumbotron" style="background-color:DarkBlue">
	<div class="container text-center" style="color:Yellow">
		<h1> Student Registration Portal </h1>
	</div>
</div>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" style="color:green"></span> Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-exclamation-sign" style="color:red"></span>
				<li class="active"><a href="contactus.php"><span class="glyphicon glyphicon-earphone" style="color:Pink"></span>ContactUs</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
		<?php
			ini_set('session.use_only_cookies','1');
			session_start();
			
			if(!isset($_SESSION['logged_in']) || (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != true))
			{
				echo '<li><a href="login.php"><span class="glyphicon glyphicon-user" style="color:Yellow"></span> Login</a></li>';
				echo '<li><a href="registration.php"><span class="glyphicon glyphicon-pencil" style="color:Orange"></span> Registration</a></li>';
			}
			else
			{
				echo '<li><a href="profile.php"><span class="glyphicon glyphicon-briefcase" style="color:lightblue"></span> Profile</a></li>';
				echo '<li><a href="addCourse.php"><span class="glyphicon glyphicon-plus" style="color:yellow"></span> Add a New Course</a></li>';
				echo '<li><a href="courseEnroll.php"><span class="glyphicon glyphicon-book" style="color:blue"></span> Course Enrollment</a></li>';
				echo '<li><a href="removeCourseLP.php"><span class="glyphicon glyphicon-book" style="color:purple"></span> Remove Course</a></li>';
				echo '<li><a href="logout.php"><span class="glyphicon glyphicon=off" style="color:cyan"></span> Logout</a></li>';
			}
			
				
		?>
			</ul>
		</div>
	</div>
</nav>
</body>
</html>
		

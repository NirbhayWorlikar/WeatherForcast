<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='styles/style.css') }}">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" class="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-type">
							<h1 class="site-title">Weather Forecast</h1>
							<small class="site-description">Your Interior Weatherman</small>
						</div>
					</a>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="loginpage.php">Login</a></li>
							<li class="menu-item"><a href="contact.html">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<main class="main-content">
				<div class="fullwidth-block">


<?php
$servername = "myweather.ckhacba57ppj.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "admin1234";
$dbname = "myweatherdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$country = $_POST['country'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$subtype = $_POST['subtype'];


$sql1 = "INSERT INTO user_details (fname,lname,country,email,username,subtype) VALUES ('$fname','$lname','$country','$email','$username','$subtype')"; 
if ($conn->query($sql1) === TRUE) {
    echo "You can Login now with the username provided!!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "INSERT INTO login (username,password) VALUES ('$username','$password')";
if ($conn->query($sql) === TRUE) {
    echo "Sign up Successfull.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

</main> <!-- .main-content -->

		</div>


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
	</body>

</html>



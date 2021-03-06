<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: loginaction.php");  //page to load after login
}
?>

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
							<li class="menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item current-menu-item"><a href="loginpage.php">Login</a></li>
							<li class="menu-item"><a href="contact.html">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->
			
			<main class="main-content">
				
				<div class="fullwidth-block">
				<body>
						<div class="login" align = "center">
							<h1>Login</h1>
							<div class="links">
							<table>
							<tr>
								<td><a href="loginpage.php" class="active"><h4>Login</h4></a></td>
								<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
								<td><a href="user-registration.html"><h4>Register</h4></a></td>
							
							</tr>
							</table>
							
							</div>
							<!-- > <form action="{{ url_for('login') }}" method="post"> <-->
                            <form id="registerform"  action="login.php" method="post" name="log1" onsubmit="return verification()">
							    <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
							    <tr>
								    <td align='center'><label for="username"><b>Enter Username</b></label></td>
								    <td><input type="text" placeholder="Enter Username" name="username" id="username"></td>
							    </tr>
							    <tr> <td>&nbsp;</td> </tr>
							    <!--
                                <tr>
								    <td align='center'><label for="email"><b>Enter Email</b></label></td>
								    <td><input type="text" placeholder="Enter Email" name="email" id="email"></td>
							    </tr>
                                -->
							    <tr> <td>&nbsp;</td> </tr>
							    <tr>
								    <td align='center'><label for="password"><b>Enter Password</b></label></td>
								    <td><input type="password" placeholder="Enter Password" name="password" id="password"></td>
							    </tr>
							    <tr> <td>&nbsp;</td> </tr>
							
							    <table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
							<tr>
								<td align='center'> <button type="submit" name="submit" id="submitformbtn" class="loginbtn" onclick="return formvalid()" ><strong>Login</strong></button> </td>
							</tr>
							<tr> <td>&nbsp;</td> </tr>
							</table>
							</form>
							
						</div>
				</div>
				</body>
			</main> <!-- .main-content -->
	
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<form action="#" class="subscribe-form">
								<input type="text" placeholder="Enter your email to subscribe...">
								<input type="submit" value="Subscribe">
							</form>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<div class="social-links">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>

				</div>
			</footer> <!-- .site-footer -->
		</div>


        <script type="text/javascript">        
            function formvalid(){
            	if(document.log1.username.value=="" || document.log1.password.value=="")
                {
                    alert("Enter all Information");
                    return false;
                } 
                return true;
	    }


 function verification() {
                document.forms['log1'].action="verify.php";
		document.forms['log1'].submit();

		return true;
}

        </script>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>
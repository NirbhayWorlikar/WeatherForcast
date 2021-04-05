<?php
if($_SERVER["REQUEST_METHOD"]== "POST")
{
	// Define $username and $password
	$username=$_POST['username'];
	$password=$_POST['password'];

	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysqli_connect("myweather.ckhacba57ppj.us-east-1.rds.amazonaws.com", "admin", "admin1234");
	// To protect MySQL injection for Security purpose
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	//Selecting Database
	$db = mysql_select_db($connection,"myweatherdb");
	// SQL query to fetch information of registerd users and finds user match.
	$query = mysql_query("select * from login where password='$password' AND username='$username' ", $connection);
	$rows = mysql_num_rows($query);
	if ($rows == 1) {
		//echo "1";
	}
	else {
		//echo "-1";
	}
	mysql_close($connection); // Closing Connection
}
else{
//	echo "-1";
}
?>

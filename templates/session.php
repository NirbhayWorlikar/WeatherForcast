<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("myweather.ckhacba57ppj.us-east-1.rds.amazonaws.com", "admin", "admin1234"); //server ,hostname , password
// Selecting Database
$db = mysqli_select_db("myweatherdb", $connection); //database_name
session_start(); // Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query("select username from login where username='$user_check'", $connection);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];

if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: loginpage.php'); // Redirecting To Home Page
}
?>

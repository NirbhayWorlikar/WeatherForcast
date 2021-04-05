<?php
$servername = "myweather.ckhacba57ppj.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "admin1234";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

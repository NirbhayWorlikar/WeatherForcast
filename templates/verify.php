
<?php
$host="myweather.ckhacba57ppj.us-east-1.rds.amazonaws.com";
    $username="admin";
     $password="admin1234";
     $dbname = "myweatherdb";
     $conn=mysqli_connect($host,$username,$password,"$dbname");
     if(!$conn)
     {
         die('Could not Connect MySql Server:' .mysql_error());
     }

?>

<html>
<body>

<?php 
$username = $_REQUEST['name']
$userAccess = "SELECT subtype FROM user_details where username=$username"

 

if($conn->query($userAccess) === 1)
{
	if($userAccess === 1){
    mysqli_close($dbname); // Close_connection
    header("homePro.php"); // redirects to all records page
    exit; 
	}else{
	
    mysqli_close($dbname); // Close_connection
    header("home.php"); // redirects to all records page
    exit;

	}
}
else
{
    mysqli_close($dbname); // Close_connection
    header("loginpage.php"); // redirects to all records page
     exit;
}    
?>
</body>
</html>

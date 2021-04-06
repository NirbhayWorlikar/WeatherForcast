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


<?php

$id=$_REQUEST['id'];
$query = "SELECT * from user_details where username=$id "; 

$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']))
{
$username=$_REQUEST['id'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$country=$_REQUEST['country'];
$subtype=$_REQUEST['subtype'];

//echo $username ;
//$update = "UPDATE user_details SET fname=$fname, lname=$lname, country=$country, email=$email, subtype=$subtype WHERE username=$username" ;

$update = "UPDATE user_details SET fname=$fname WHERE email=$email" ;

if($conn->query($update) === TRUE)
{
    mysqli_close($dbname); // Close_connection
    
    header("admin.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Updated record Successfully"; // display error message if not update
}


}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="username" type="hidden" value="<?php $user=$_REQUEST['id']; ?>" />

<p><input type="text" name="fname" placeholder="Enter First Name" required value="<?php echo $row['fname'];?>" /></p>
<p><input type="text" name="lname" placeholder="Enter Last Name" required value="<?php echo $row['lname'];?>" /></p>
<p><input type="text" name="country" placeholder="Enter Country" required value="<?php echo $row['country'];?>" /></p>
<p><input type="hidden" name="email" placeholder="Enter Email" required value="<?php echo $row['email'];?>" /></p>

<p><input type="text" name="subtype" placeholder="Enter Subscription type" required value="<?php echo $row['subtype'];?>" /></p>
<p><input name="new" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
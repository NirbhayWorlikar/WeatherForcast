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

//$conn1 = new mysqli($servername, $username, $password, $dbname);

$id = $_REQUEST['id']; // get id through query string


//$del = mysqli_query($dbname,"DELETE FROM user_details WHERE username = $id "); // delete query

$sql = "DELETE FROM user_details WHERE username=$id";

if($conn->query($sql) === TRUE)
{
    mysqli_close($dbname); // Close connection
    header("admin.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
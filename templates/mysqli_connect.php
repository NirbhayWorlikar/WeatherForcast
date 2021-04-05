<?php
DEFINE ('DB_USER', 'dbtest');
DEFINE ('DB_PASSWORD', 'dbtest');
DEFINE ('DB_HOST', 'dbtest');
DEFINE ('DB_NAME', 'dbtest');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .mysqli_connect_error());
?>
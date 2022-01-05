<?php
echo "php";

$hostname = "localhost:3307";
$username = "root";
$dbname = "test";
$password = "";
$usertable = "booking";

//Connecting to your database
$con = mysql_connect($hostname, $username, $password) OR DIE ("Unable to 
connect to database! Please try again later.");
mysql_select_db($dbname, $con);

//Fetching from your database table.
$query = "SELECT * FROM $usertable";
$result = mysql_query($query, $con);
echo $result;

?>
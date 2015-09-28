<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$database = "interntest";

//connection to the database
$conn = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

//select a database to work with
$select = mysql_select_db($database,$conn) 
  or die("Could not select examples");

//echo "database connected";

//close the connection
//mysql_close($conn);
?>
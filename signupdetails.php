<?php

include("config.php");

$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Gender = $_POST['gender'];
$DOB = $_POST['dateofbirth'];
$Country = $_POST['country'];
$Postal = $_POST['zip'];
$Email = $_POST['mail'];
$Pass = $_POST['password'];
$Cpass = $_POST['cpassword'];


echo $Pass;
if (isset($_POST['signup_btn'])) 
{
	if($Pass === $Cpass){	
		
		$insert = "INSERT INTO user (fname,lname,gender,dob,country,zipcode,email,password) VALUES ('$Firstname','$Lastname','$Gender','$DOB','$Country','$Postal','$Email','$Pass')";

		$data = mysql_query ($insert)or die(mysql_error());
		if($data) { 
			echo "YOUR REGISTRATION IS COMPLETED..."; 
		}
		header('Location: login.php');
	}
	else
	{
		header('Location: responsive.php?page=signup');

	}
	/*

	if (mysql_query($insert)) {
           echo "New record created successfully";
    } else {
           echo "Error: " . $insert . "<br>" . mysql_error();
    }*/
 

}

?>
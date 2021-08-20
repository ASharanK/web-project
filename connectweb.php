<?php
$DB_HOST="localhost";
$DB_USER="root";
$DB_PASSWORD="";
$DB_DATABASE="sharan";
$con=mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD,$DB_DATABASE);


$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$username = $_POST['uname'];
$email = $_POST['emailid'];
$phone = $_POST['phone'];

$password = $_POST['pword'];


$query = "INSERT INTO `registration` (`First Name`,`Last Name`,`Username`,`Email`,`Phone`,`Password`) 
		VALUES ('$firstname','$lastname','$username','$email','$phone','$password')"; 
  	
   	mysqli_query($con,$query);
	
mysqli_close($con);
header('Location: login.html');
?>
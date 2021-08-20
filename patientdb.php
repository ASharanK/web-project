<?php
$DB_HOST="localhost";
$DB_USER="root";
$DB_PASSWORD="";
$DB_DATABASE="sharan";
$con=mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD,$DB_DATABASE);


$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$birthday = $_POST['birthday'];
$email = $_POST['emailid'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$address = $_POST['address'];
$postal = $_POST['postalcode'];
$province = $_POST['province'];
$currentmed = $_POST['curr_med'];
$allergies = $_POST['allergies'];
$refdoc = $_POST['refdoc'];
$gender = $_POST['gender'];
$postal = $_POST['postalcode'];

$query = "INSERT INTO `patient` (`FirstName`,`LastName`,`Gender`,`DOB`,`Address`,`City`,`Province`,`PostalCode`,`Phone`,`Email`,`CurrentMedication`,`Allergies`,`RefDoctor`) 
		VALUES ('$firstname','$lastname','$gender','$birthday','$address','$city','$province','$postal','$phone','$email','$currentmed','$allergies','$refdoc')"; 
  	
   	mysqli_query($con,$query);
	
mysqli_close($con);
header('Location: Main.html');
?>
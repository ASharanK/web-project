<?php
session_start();
$DB_HOST="localhost";
$DB_USER="root";
$DB_PASSWORD="";
$DB_DATABASE="sharan";
$con=mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD,$DB_DATABASE);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if ( !isset($_POST['username'], $_POST['password']) ) {
	exit('Enter the details properly!');
}
if ($stmt = $con->prepare('SELECT id, Password FROM registration WHERE Username = ?')) {

	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Storing the details 
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	
	
if ($_POST['password'] === $password) {
	
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		header('Location: Main.html');
	} else {
		// Responds this message if password or username is incorrect
		echo 'Incorrect username and/or password!';
		header('Location: login.html');
	}
} else {
	
	echo 'Incorrect username and/or password!';
}

	$stmt->close();
}

?>


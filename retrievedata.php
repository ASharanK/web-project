<?php
$DB_HOST="localhost";
$DB_USER="root";
$DB_PASSWORD="";
$DB_DATABASE="sharan";
$con=mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD,$DB_DATABASE);
	 $result = mysqli_query($con,"SELECT * FROM patient");
													echo '<p><b>Patients Record</b></p>'; 
	  echo "<table border='1'>
        <tr>
		<th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>DOB</th>
		<th>Address</th>
        <th>City</th>
        <th>Province</th>
        <th>Postal Code</th>
		<th>Phone</th>
        <th>Email</th>
        <th>Current Medication</th>
        <th>Patient Allergies</th>
		<th>Refered Doctor</th>
        <th>Created DateTime</th>
        </tr>";

       while($row = mysqli_fetch_array($result))
        {

                echo "<tr>";
				 echo "<td>" . $row['PatientID'] . "</td>";
                echo "<td>" . $row['FirstName'] . "</td>";
                echo "<td>" . $row['LastName'] . "</td>";
                echo "<td>" . $row['Gender'] . "</td>";
                echo "<td>" . $row['DOB'] . "</td>";
				 echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['City'] . "</td>";
                echo "<td>" . $row['Province'] . "</td>";
                echo "<td>" . $row['PostalCode'] . "</td>";
				echo "<td>" . $row['Phone'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['CurrentMedication'] . "</td>";
				echo "<td>" . $row['Allergies'] . "</td>";
                echo "<td>" . $row['RefDoctor'] . "</td>";
				echo "<td>" . $row['DateTime'] . "</td>";
                echo "</tr>";

        }
        echo "</table>";
		echo("<button onclick=\"location.href='Main.html'\">Back to Home</button>");
mysqli_close($con);
?>
	 <html>
 <head>
  <title>Patients Record</title>
 </head>
 <body>
 
 </body>
</html>
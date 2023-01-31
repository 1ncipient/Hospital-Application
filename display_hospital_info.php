<?php
	$hospital = $_POST["pickHospital"]; //get selected hospital value from the dropdown form
	$query = "SELECT * FROM doctor INNER JOIN hospital ON hospital.headdoc = doctor.licensenum AND hospital.hoscode = '" . $hospital . "';";
	$query2 = "SELECT * FROM doctor WHERE hosworksat = '" . $hospital . "';";
	$result = mysqli_query($connection, $query);
	$result2 = mysqli_query($connection, $query2);
	if (!$result) {
      die("databases query on hospital failed. ");
    }
	if (!$result2) {
      die("databases query on doctor failed. ");
    }
	
	if(mysqli_num_rows($result) > 0){
			echo "<table>";
		    	echo "<tr>";
		        	echo "<th>Hospital Name</th>";
		        	echo "<th>City</th>";
		        	echo "<th>Province</th>";
		        	echo "<th># of Beds</th>";
					echo "<th>Head Doctor</th>";
		        echo "</tr>";
		    while($row = mysqli_fetch_array($result)){
		        echo "<tr>";
		            echo "<td>" . $row['hosname'] . "</td>";
		            echo "<td>" . $row['city'] . "</td>";
		            echo "<td>" . $row['prov'] . "</td>";
		            echo "<td>" . $row['numofbed'] . "</td>";
					echo "<td>" . $row['firstname'] . " " . $row['lastname'] . "</td>";

		        echo "</tr>";
		        }
		        echo "</table>";
		}
		
	echo "<hr>";

	if(mysqli_num_rows($result2) > 0){
			echo "<h3>Active Doctors</h3>";
			echo "<table>";
		    	echo "<tr>";
		        	echo "<th>First Name</th>";
		        	echo "<th>Last Name</th>";
		        echo "</tr>";
		    while($row = mysqli_fetch_array($result2)){
		        echo "<tr>";
		            echo "<td>" . $row['firstname'] . "</td>";
		            echo "<td>" . $row['lastname'] . "</td>";

		        echo "</tr>";
		        }
		        echo "</table>";
		}
		
	echo "<hr>";
	
	mysqli_free_result($result);
	mysqli_free_result($result2);


?>
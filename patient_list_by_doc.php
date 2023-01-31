<?php
	$licenseNum = $_POST["pickDoctor"]; //get selected specialty value from the dropdown form
	$query = "SELECT patient.ohipnum, patient.firstname, patient.lastname FROM ((patient INNER JOIN looksafter ON patient.ohipnum = looksafter.ohipnum) INNER JOIN doctor ON looksafter.licensenum = doctor.licensenum AND doctor.licensenum = '" . $licenseNum . "');";
	$result = mysqli_query($connection, $query);
	
	if (!$result) {
      die("databases query failed. ");
    }
	
	if(mysqli_num_rows($result) > 0){
			echo "<table>";
		    	echo "<tr>";
		        	echo "<th>ohipnum</th>";
		        	echo "<th>firstname</th>";
		        	echo "<th>lastname</th>";
		        echo "</tr>";
		    while($row = mysqli_fetch_array($result)){
		        echo "<tr>";
		            echo "<td>" . $row['ohipnum'] . "</td>";
		            echo "<td>" . $row['firstname'] . "</td>";
		            echo "<td>" . $row['lastname'] . "</td>";
		        echo "</tr>";
		        }
		        echo "</table>";
		}
		
	echo "<hr>";
	
	mysqli_free_result($result);


?>
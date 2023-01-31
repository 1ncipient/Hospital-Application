<?php
	$orderBy = $_POST["orderBy"]; 
	$order = $_POST["order"];
	$query = "SELECT * FROM doctor ORDER BY " . $orderBy . " " . $order . "; "; //fill in with correct query

	$result = mysqli_query($connection, $query);

		if(mysqli_num_rows($result) > 0){
			echo "<table>";
		    	echo "<tr>";
		        	echo "<th>licensenum</th>";
		        	echo "<th>firstname</th>";
		        	echo "<th>lastname</th>";
		        	echo "<th>licensedate</th>";
					echo "<th>birthdate</th>";
					echo "<th>hosworksat</th>";
					echo "<th>specialty</th>";
		        echo "</tr>";
		    while($row = mysqli_fetch_array($result)){
		        echo "<tr>";
		            echo "<td>" . $row['licensenum'] . "</td>";
		            echo "<td>" . $row['firstname'] . "</td>";
		            echo "<td>" . $row['lastname'] . "</td>";
		            echo "<td>" . $row['licensedate'] . "</td>";
					echo "<td>" . $row['birthdate'] . "</td>";
					echo "<td>" . $row['hosworksat'] . "</td>";
					echo "<td>" . $row['speciality'] . "</td>";
		        echo "</tr>";
		        }
		        echo "</table>";
		}
	
	echo "<hr>";
	
	mysqli_free_result($result);

?>
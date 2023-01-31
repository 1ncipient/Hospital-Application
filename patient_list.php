<?php
	$query = "SELECT ohipnum FROM patient;"; //fill in with correct query

	$result = mysqli_query($connection, $query);
	if (!$result) {
 	  die("databases query failed.");
 	}
	
	
	while ($row = mysqli_fetch_assoc($result)){
		echo "<option value = " . $row["ohipnum"] . ">" . $row["ohipnum"] . "</option>";
		
	}
	
	mysqli_free_result($result);

?>
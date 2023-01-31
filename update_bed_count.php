<?php
//Name :35
//2022-11-28
//Assign3
	$hospital = $_POST["pickHospital"]; 
	$beds = $_POST["numBeds"]; 
	
	$validUpdate = True;
	
	$query = "UPDATE hospital SET numofbed = '" . $beds . "' WHERE hoscode = '" . $hospital . "';";

	
	$result = mysqli_query($connection, $query);

	
	if (!$result) {
      die("update query failed. ");
	  $validUpdate = False;
    } 
	
	if($validUpdate){
	  echo '<script type="text/javascript">alert("Number of beds updated!");</script>';
	}
	
		
	echo "<hr>";
	
	mysqli_free_result($result);

?>
<?php
	$doctor = $_POST["pickDoctor"]; 
	$patient = $_POST["pickPatient"]; 
	
	$validRelation = True;
	
	$query = "SELECT * FROM looksafter WHERE licensenum = '" . $doctor . "' AND ohipnum = '" . $patient . "';";
	$insert = "INSERT INTO looksafter VALUES ('" . $doctor . "','" . $patient . "');";
	
	$result = mysqli_query($connection, $query);
	
	if (!$result) {
      die("databases query on looksafter failed. ");
    }

	
	if(mysqli_num_rows($result) > 0){
	  echo "<br>";
	  $validRelation = False;
	  echo '<script type="text/javascript">alert("Doctor is already looking after this patient.");</script>';
	  echo "<br>";
	}
	
	if ($validRelation){
	  $insertion = mysqli_query($connection, $insert);
	  if ($insertion) {
	  	echo "<br>";
        echo '<script type="text/javascript">alert("Doctor patient relationship inserted successfully into database.");</script>';
     }else{
	  	die("databases query on looksafter failed. ");
	  }
	}
		
	echo "<hr>";
	
	mysqli_free_result($result);
	if ($validRelation){
	  mysqli_free_result($insertion);
	}


?>
<?php
	$licenseNum = $_POST["licenseNum"]; 
	$fname = $_POST["fname"]; 
	$lname = $_POST["lname"]; 
	$licenseDate = $_POST["licenseDate"]; 
	$birthDate = $_POST["birthDate"]; 
	$hospital = $_POST["hospital"]; 
	$specialty = $_POST["specialty"]; 
	
	$validInsert = True;
	
	$query = "SELECT * FROM doctor WHERE licensenum = '" . $licenseNum . "';";
	$query2 = "SELECT * FROM hospital WHERE hoscode = '" . $hospital . "';";
	$insert = "INSERT INTO doctor VALUES ('" . $licenseNum . "','" . $fname . "','" . $lname . "','" . $licenseDate . "','" . $birthDate . "','" . $hospital . "','" . $specialty . "');";
	
	$result = mysqli_query($connection, $query);
	$result2 = mysqli_query($connection, $query2);
	
	if (!$result) {
      die("databases query on licensenum failed. ");
    }
	if (!$result2) {
      die("databases query on hoscode failed. ");
    }
	
	if(mysqli_num_rows($result) > 0){
	  echo "<br>";
	  $validInsert = False;
	  echo '<script type="text/javascript">alert("License number already exists. Insertion failed.");</script>';
	  echo "<br>";
	}
	
	if(mysqli_num_rows($result2) == 0){
	  echo "<br>";
	  $validInsert = False;
	  echo '<script type="text/javascript">alert("Hospital code does not exist. Insertion failed.");</script>';
	  echo "<br>";
	}
	
	if ($validInsert){
	  $insertion = mysqli_query($connection, $insert);
	  if ($insertion) {
	  	echo "<br>";
        echo '<script type="text/javascript">alert("Doctor inserted succcessfully.");</script>';
     }else{
	  	die("databases query on hoscode failed. ");
	  }
	}
		
	echo "<hr>";
	
	mysqli_free_result($result);
	mysqli_free_result($result2);
	if ($validInsert){
	  mysqli_free_result($insertion);
	}


?>
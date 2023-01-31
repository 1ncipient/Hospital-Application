<?php

if (isset($_POST['submit'])){
	$licenseNum = $_POST["delDoctor"]; 
	
	
	$validDelete = True;
	
	$query = "SELECT * FROM doctor WHERE licensenum = '" . $licenseNum . "';"; // check if user's given licenseNum belongs to a doctor.
	$query2 = "SELECT * FROM looksafter WHERE licensenum = '" . $licenseNum . "';"; //check if the deleted doctor is taking care of patients.
	$query3 = "SELECT * FROM hospital WHERE headdoc = '" . $licenseNum . "';"; //check if doctor is head doctor.
	$delQuery = "DELETE FROM doctor WHERE licensenum = '" . $licenseNum . "';"; //delete doctor.
	
	$result = mysqli_query($connection, $query);
	$result2 = mysqli_query($connection, $query2);
	$result3 = mysqli_query($connection, $query3);
	
	if (!$result) {
      die("databases query1 failed. ");
    }
	
	if (!$result2) {
      die("databases query2 failed. ");
    }
	
	if (!$result3) {
      die("databases query3 failed. ");
    }
	
	//doctor does not exist
	if(mysqli_num_rows($result) == 0){
	  echo "<br>";
	  $validDelete = False;
	  echo '<script type="text/javascript">alert("Given license number does not exist in the database. Deletion failed.");</script>';
	  echo "<br>";
	}
	//doctor is taking care of patients
	if(mysqli_num_rows($result2) > 0){
	  echo "<br>";
	  $validDelete = False;
	  echo '<script type="text/javascript">alert("Cannot delete this doctor! The doctor currently has patients.");</script>';
	  echo "<br>";
	}
	
	//doctor is head doctor of a hospital
	if(mysqli_num_rows($result3) > 0){
	  echo "<br>";
	  $validDelete = False;
	  echo '<script type="text/javascript">alert("Cannot delete this doctor! This doctor is a head doctor.");</script>';
	  echo "<br>";
	}
	
	if ($validDelete){
	  $deletion = mysqli_query($connection, $delQuery);
	  if ($deletion) {
	  	echo "<br>";
        echo '<script type="text/javascript">alert("Doctor deleted succcessfully.");</script>';
     }else{
	  	die("deletion query failed. ");
	  }
	}
		
	echo "<hr>";
	
	mysqli_free_result($result);
	mysqli_free_result($result2);
	mysqli_free_result($result3);
	if ($validInsert){
	  mysqli_free_result($deletion);
	}
}

?>
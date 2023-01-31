<!DOCTYPE html>
<html>
<head>
        <title>Update Beds by Hospital</title>
        <link rel="stylesheet" type="text/css" href="hospital.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="update_bed.js"></script>

<h2>Update Beds by Hospital</h2>
<hr>

<?php
  include "connect_to_db.php";  
?>

<form action="" method="post" id="hospitalBed">
Hospital: 
  <select name="pickHospital" id="pickHospital">
  	<option value="0">Select Here</option>
  	<?php
  		include "hospital_list.php";
  	?>
  </select>
  <br>
  Number of beds: <input type="number" id = "numBeds" name="numBeds" min="0"><br>
  <input type="submit" name="submit" value="Update"><br>

</form>
<br>

<?php
if (isset($_POST['submit'])){
    include "update_bed_count.php";
}
?>

</body>
</html>

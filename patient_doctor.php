<!DOCTYPE html>
<html>
<head>
        <title>Assigning a Patient to a Doctor</title>
        <link rel="stylesheet" type="text/css" href="hospital.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="patient_doctor.js"></script>

<h2>Assigning a Patient to a Doctor</h2>
<hr>

<?php
  include "connect_to_db.php";  
?>

<form action="" method="post" id="doctorPatient">
Doctor: 
  <select name="pickDoctor" id="pickDoctor">
  	<option value="0">Select Here</option>
  	<?php
  		include "doctor_list.php";
  	?>
  </select>
<br>
Patient:
  <select name="pickPatient" id="pickPatient">
  	<option value="0">Select Here</option>
  	<?php
  		include "patient_list.php";
  	?>
  </select>
<br>
  <input type="submit" name="submit"><br>

</form>

<?php
if (isset($_POST['submit'])){
    include "patient_assign.php";
}
?>

</body>
</html>

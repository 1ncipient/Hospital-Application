<!DOCTYPE html>
<html>
<head>
        <title>Patient List by Doctor</title>
        <link rel="stylesheet" type="text/css" href="hospital.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="all_patient_doc.js"></script>

<h2>Patient List by Doctor</h2>
<hr>

<?php
  include "connect_to_db.php";  
?>

<form action="" method="post" id="doctorPatient">
  <select name="pickDoctor" id="pickDoctor">
  	<option value="0">Select Here</option>
  	<?php
  		include "doctor_list.php";
  	?>
  </select>
  
  <input type="submit" name="submit"><br>

</form>
<br>

<?php
if (isset($_POST['submit'])){
    include "patient_list_by_doc.php";
}
?>

</body>
</html>

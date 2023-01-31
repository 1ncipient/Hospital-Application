<!DOCTYPE html>
<html>
<head>
        <title>Hospital Information</title>
        <link rel="stylesheet" type="text/css" href="hospital.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="hospital_info.js"></script>

<h2>Hospital Information</h2>
<hr>

<?php
  include "connect_to_db.php";  
?>

<form action="" method="post" id="hospital">
Hospital: 
  <select name="pickHospital" id="pickHospital">
  	<option value="0">Select Here</option>
  	<?php
  		include "hospital_list.php";
  	?>
  </select>
  <br>


</form>
<br>

<?php
if (isset($_POST['pickHospital'])){
    include "display_hospital_info.php";
}
?>

</body>
</html>

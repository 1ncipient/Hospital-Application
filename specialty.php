<!DOCTYPE html>
<html>
<head>
        <title>Specialty</title>
        <link rel="stylesheet" type="text/css" href="hospital.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>

<body>
<script src="specialty.js"></script>

<h2>Specialties</h2>
<hr>
<p>Select a specialty</p>

<?php
  include "connect_to_db.php";  
?>

<form action="" method="post" id="pickaspecialty">
  <select name="specialtyPick" id="specialtyPick">
  	<option value="0">Select Here</option>
  	<?php
  		include "get_specialty.php";
  	?>
</select>
</form>
<hr>
<?php
	if (isset($_POST['specialtyPick'])){
		
		include "doc_by_specialty.php";
	}
?>

</body>
</html>
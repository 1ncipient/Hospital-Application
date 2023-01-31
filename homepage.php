<!DOCTYPE html>
<html>
<head>
        <title>The Hospital Database</title>
        <link rel="stylesheet" type="text/css" href="hospital.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>

<h1>The Hospital Database </h1>
<hr>
<hr>
<script>
	function reDirect() {
		var select = document.querySelector("#targetPage");
		var webpage = select.value;
		window.location.href = webpage;
	}
</script>
Action

<br>

<button onclick="window.location.href='doctor_order.php'">List All Doctors</button><br>
<button onclick="window.location.href='specialty.php'">List Doctor by Specialty</button><br>
<button onclick="window.location.href='insertDoc.php'">Insert a Doctor</button><br>
<button onclick="window.location.href='del_doc.php'">Delete a Doctor</button><br>
<button onclick="window.location.href='patient_doctor.php'">Assign Patient to Doctor</button><br>
<button onclick="window.location.href='all_patient_doc.php'">View Patients Supervised by Doctor</button><br>
<button onclick="window.location.href='hospital_info.php'">Hospital Information</button><br>
<button onclick="window.location.href='update_bed.php'">Update Beds</button><br>


<br>

</form>

<hr>


</body>
</html>

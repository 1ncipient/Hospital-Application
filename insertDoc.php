<!DOCTYPE html>
<html>
<head>
        <title>Inserting a New Doctor</title>
        <link rel="stylesheet" type="text/css" href="hospital.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="insertDoc.js"></script>

<h2>Insert a New Doctor</h2>
<hr>

<form action="" method="post" id="insert">
License Num: <input type="text" id = "licenseNum" name="licenseNum" maxlength="4"><br>
First Name: <input type="text" id = "fname" name="fname" maxlength="20"><br>
Last Name: <input type="text" id = "lname" name="lname" maxlength="20"><br>
License Date: <input type="date" id = "licenseDate" name="licenseDate"><br>
Birth Date: <input type="date" id = "birthDate" name="birthDate"><br>
Hospital Code: <input type="text" id = "hospital" name="hospital" maxlength="3"><br>
Specialty: <input type="text" id = "specialty" name="specialty" maxlength="30"><br>
<input type="submit" name="submit"><br>
</form>


<?php
if (isset($_POST['submit'])){
    include "connect_to_db.php";
    include "insert_doc_db.php";
}
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
        <title>The Hospital Database</title>
        <link rel="stylesheet" type="text/css" href="hospital.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="doctor_order.js"></script>

<h2>List Doctor Information</h2>
<hr>

<form action="" id="order" method="post">
  <p>Select your preferred order of doctor information</p>
  <input type="radio" id="orderByLName" name="orderBy" value="lastname">
  <label for="orderByLName">Order By Last Name</label><br>
  <input type="radio" id="orderByBirth" name="orderBy" value="birthdate">
  <label for="orderByBirth">Order By Birthdate</label><br>
  
  <p>Select your preferred order.</p>
  <input type="radio" id="ascending" name="order" value="ASC">
  <label for="ascending">Ascending</label><br>
  <input type="radio" id="descending" name="order" value="DESC">
  <label for="descending">Descending</label><br>
  <input type="submit" value="Order By" name="submit"> <br>
</form>

<?php
if (isset($_POST['submit'])){
    include "connect_to_db.php";
    include "get_doctor.php";
}
?>



</body>
</html>

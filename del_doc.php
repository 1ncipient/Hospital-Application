<!DOCTYPE html>
<html>
<head>
        <title>Deleting a Doctor</title>
        <link rel="stylesheet" type="text/css" href="hospital.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="del_doc.js"></script>

<h2>Delete a Doctor</h2>
<hr>

<form action="" method="post" id="delete">
License Num: <input type="text" id = "delDoctor" name="delDoctor" maxlength="4"><br> <br>
<input type="submit" value="Delete" name="submit"><br>
</form>


<?php
if (isset($_POST['submit'])){
    include "connect_to_db.php";
    include "del_doc_db.php";
}
?>

</body>
</html>

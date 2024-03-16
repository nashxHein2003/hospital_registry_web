<?php
include("database.php");
$name = $_POST['name'];
$email = $_POST['email'];
$dname = $_POST['dname'];
$message = $_POST['message'];


$sql = "INSERT INTO feedback (name,email,dname,message) VALUES ('$name','$email','$dname','$message')";
mysql_query($sql);

?>
<script >
alert("Added Successfully");
window.location = "../doctor.php"
</script>
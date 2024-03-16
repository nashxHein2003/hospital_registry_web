<?php
include("database.php");
$rename = $_POST['rename'];
$reemail = $_POST['reemail'];
$remessage = $_POST['remessage'];

$sql = "INSERT INTO suggestion (rename,reemail,remessage) VALUES ('$rename','$reemail','$remessage')";
mysql_query($sql);

?>
<script >
alert("Added Successfully");
window.location = "../contactus.html"
</script>
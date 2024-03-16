<?php
include("database.php");
$dname = $_POST['dname'];
$ddegree = $_POST['ddegree'];
$ddescription = $_POST['ddescription'];
$dprice = $_POST['dprice'];
$starttime = $_POST['starttime'];
$endtime = $_POST['endtime'];
$dphoto = $_POST['dphoto'];

$sql = "INSERT INTO doctor (dname,ddegree,ddescription,dprice,starttime,endtime,dphoto) VALUES ('$dname','$ddegree','$ddescription','$dprice','$starttime','$endtime','$dphoto')";
mysql_query($sql);

?>
<script >
alert("Added Successfully");
window.location = "viewdoctor.php"
</script>
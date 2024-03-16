
<?php
include("database.php");
echo $did=$_POST['did'];
echo $dname = $_POST['dname'];
echo $ddegree = $_POST['ddegree'];
echo $ddescription = $_POST['ddescription'];
echo $dprice = $_POST['dprice'];
echo $starttime= $_POST['starttime'];
echo $endtime = $_POST['endtime'];
echo $dphoto = $_POST['dphoto'];

$sql = "UPDATE doctor SET dname='$dname', ddegree='$ddegree', ddescription='$ddescription', dprice='$dprice', starttime='$starttime',endtime='$endtime', dphoto='$dphoto' WHERE did =$did";
mysql_query($sql);
header("location: viewdoctor.php");
?>
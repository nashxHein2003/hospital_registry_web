<?php
include("database.php");
$pname = $_POST['pname'];
$pcode = $_POST['pcode'];
$pprice = $_POST['pprice'];
$manu_date = $_POST['manu_date'];
$expired_date = $_POST['expired_date'];
$pphoto = $_POST['pphoto'];

$sql = "INSERT INTO pharmacy (pname,pprice,manu_date,expired_date,pphoto) VALUES ('$pname','$pprice','$manu_date','$expired_date','$pphoto')";
mysql_query($sql);

?>
<script >
alert("Added Successfully");
window.location = "viewmedicine.php"
</script>
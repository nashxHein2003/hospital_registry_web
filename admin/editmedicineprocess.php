
<?php
include("database.php");
echo $pid=$_POST['pid'];
echo $pname = $_POST['pname'];
echo $pcode = $_POST['pcode'];
echo $pprice = $_POST['pprice'];
echo $manu_date = $_POST['manu_date'];
echo $expired_date = $_POST['expired_date'];
echo $pphoto = $_POST['pphoto'];

$sql = "UPDATE pharmacy SET pname='$pname', pcode='$pcode', pprice='$pprice', manu_date='$manu_date',expired_date='$expired_date', pphoto='$pphoto' WHERE pid =$pid";
mysql_query($sql);
header("location: viewmedicine.php");
?>
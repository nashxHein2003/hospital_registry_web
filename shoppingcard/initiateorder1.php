<?php

include('connect.php');
	$pname=$_POST['pname'];
	$qty=$_POST['quantity'];
	$pcode=$_POST['pcode'];
	$pprice=$_POST['pprice'];
	$transnum=$_POST['transnum'];

	echo $pcode; 
	echo $pname;
	echo $qty;
	echo $pprice;
	echo $total=$qty*$pprice;
	echo $transnum;
	
mysql_query("INSERT INTO orders (name,code,price,qty,total,transnum) VALUES('$pname','$pcode','$pprice','$qty','$total','$transnum')") or die ("Failed to query database".mysql_error());
header("location:pharmacy1.php?pcode=$pcode");


?>


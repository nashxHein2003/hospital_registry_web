<?php

include('connect.php');
	$transnum=$_POST['transnum'];
	$customername=$_POST['customername'];
	$customeraddress=$_POST['customeraddress'];
	$customerphone=$_POST['customerphone'];
	$deliverymethod=$_POST['selmethod'];
	$grandtotal=$_POST['total'];
	echo $selldate=date("Y-m-d");


//echo $deliverymethod;
	
mysql_query("INSERT INTO sell (transnum, customername, customeraddress, customerphone, deliverymethod,grandtotal,selldate) VALUES('$transnum','$customername','$customeraddress','$customerphone','$deliverymethod','$grandtotal','$selldate')") or die ("Failed to query database".mysql_error());

//To regenerate the transaction number
require_once('generatetrans.php');
session_regenerate_id();
$_SESSION['SESS_MEMBER_ID'] = $confirmation;
session_write_close();
header("location: pharmacy2.php");

?>
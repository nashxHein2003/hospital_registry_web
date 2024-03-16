<?php
$serverName="localhost";
$dbusername="root";
$dbpassword="";
$dbname="hospitaldb";

mysql_connect($serverName,$dbusername,$dbpassword) or die('Fail to connect database');
mysql_select_db($dbname) or die(mysql_error());
?>

<?php
include("database.php");

$host = "localhost"; 
$user = "root";
$password = "";
$database = "hospitaldb";

$conn = mysqli_connect ($host, $user, $password) or die('Not connected : Ah sh*t ' . mysqli_error());

$rname = $_POST['rname'];
$remail = $_POST['remail'];
$raddress = $_POST['raddress'];
$rphone = $_POST['rphone'];
$dname = $_POST['dname'];
$appdate = $_POST['appdate'];

$sql = mysql_query("SELECT * FROM registration WHERE dname = '$dname' && appdate = '$appdate'");

if(mysql_num_rows($sql) > 0)
{
 		echo "<script>
	alert('Try again. Your Appointment is already taken.');
	</script>";
	echo "<script>window.open('../doctor.php','_self')</script>";
}
else 
{
$sql = "INSERT INTO registration (rname,remail,raddress,rphone,dname,appdate) VALUES ('$rname','$remail','$raddress','$rphone','$dname','$appdate')";
	mysql_query($sql);	

	echo "<script>
	alert('Your Appointment is added Successfully.');
	</script>";
	echo "<script>window.open('../doctor.php','_self')</script>";

}
?>
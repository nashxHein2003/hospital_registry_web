<?php 
	$username = $_POST['username'];
	$password = $_POST['password'];
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	//Connect to server and database
	mysql_connect("localhost","root","");
	mysql_select_db("hospitaldb");

	$result = mysql_query("select * from login where username='$username' and password='$password'") 
		or die ("Please check your database".mysql_error());

	$row = mysql_fetch_array($result);
if ($row['username'] ==$username && $row['password'] == $password)
	{
		$_SESSION['auth']=true;
		header("location:cpanel.php?page=admin");
	}
	else
	{
		$message = "Username and Password is incorrect. Please Try Again!!!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		include("login.php");
	}?>

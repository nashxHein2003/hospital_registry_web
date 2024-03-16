<?php
 include("database.php");
 $uid = $_POST['uid'];
 $username = $_POST['username'];
 $password = $_POST['password'];

 $sql = "UPDATE login SET username='$username', password='$password' WHERE uid =1";
 mysql_query($sql);
 header("location: viewuser.php");?>
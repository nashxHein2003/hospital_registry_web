<?php
 include 'database.php';
 $sql = "DELETE FROM pharmacy WHERE pid='".$_GET["id"]."'";
 mysql_query($sql);
 ?>
 <script>
 alert("Delete Successfully");
 window.location = "viewmedicine.php";
 </script>
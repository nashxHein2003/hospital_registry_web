<?php
 include '../admin/database.php';
 $sql = "DELETE FROM orders WHERE orderid='".$_GET["orderid"]."'";
 mysql_query($sql);
 ?>
 <script>
 alert("Delete Successfully");
 window.location = "pharmacy1.php";
 </script>
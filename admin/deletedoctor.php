<?php
 include 'database.php';
 $sql = "DELETE FROM doctor WHERE did='".$_GET["id"]."'";
 mysql_query($sql);
 ?>
 <script>
 alert("Delete Successfully");
 window.location = "viewdoctor.php";
 </script>
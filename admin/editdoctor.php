<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=50% device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Product</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Edit Doctor </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Doctor ID</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Doctor Name</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Doctor Degree</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Doctor Desrciption</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Doctor Price</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Patient Check-in time</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">End</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Photo</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"> Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
          <div class="container-fluid">
 <h1 class="mt-4">Edit Doctor</h1>

<?php
include("database.php");
$id = $_GET['id'];
$result = mysql_query("SELECT * FROM doctor WHERE did = $id");
$row = mysql_fetch_assoc($result);
$dname = $row['dname'];
$ddegree = $row['ddegree'];
$ddescription = $row['ddescription'];
$dprice = $row['dprice'];
$starttime = $row['starttime'];
$endtime = $row['endtime'];
$dphoto = $row['dphoto'];
?>
 <form action="editdoctorprocess.php" method="post">
                          <div class="form-group">

            <input type="text" class="form-control" value="<?php echo $row['did'] ?>" required="required" name="did" readonly>            


                            <label>Doctor Name</label>
                            <input type="text" class="form-control" value="<?php echo $row['dname'] ?>" required="required" name="dname">

                            <label>Doctor Degree</label>
                            <input type="text" class="form-control" value="<?php echo $row['ddegree'] ?>" required="required" name="ddegree">


                            <label>Description</label>

                            <input type="text" class="form-control" value="<?php echo $row['ddescription'] ?>" required="required" name="ddescription">

                            <label>Price</label>
                          <input type="text" class="form-control" value="<?php echo $row['dprice'] ?>" required="required" name="dprice">                          

                            <label>Patient Check-in time</label>
                               <input type="time" class="form-control" value="<?php echo $row['starttime'] ?>" required="required" name="starttime">

                            <label>End</label>
                            <input type="time" class="form-control" value="<?php echo $row['endtime'] ?>" required="required" name="endtime">

                            <label>Old Photo</label>
                             
                            <input type="text" class="form-control" value="<?php echo $row['dphoto'] ?>" required="required" name="dphoto">

                            <label>New Photo</label>
                            <input type="file" class="form-control" value="<?php echo $row['dphoto'] ?>" required="required" name="dphoto">
                            <br>

                            <input type="submit" value="Edit Doctor" class="btn btn-primary" >
                            
                          </div>
                        </form>
  <!-- /#wrapper -->
  <td>
            <span class="table-remove"><a href="editdoctor.php?id=<?=$row['did'];?>"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Edit</button></a></span>

              <span class="table-remove"><button type="button"
                  class="btn btn-warning btn-rounded btn-sm my-0">Delete</button></span>

            </td>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
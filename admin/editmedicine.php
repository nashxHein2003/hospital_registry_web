<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=50% device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Medicine</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Edit Medicine </div>
      <div class="list-group list-group-flush">
        <a href="adddoctor.php" class="list-group-item active list-group-item-action bg-black">Add Doctor</a>
        <a href="viewdoctor.php" class="list-group-item  list-group-item-action bg-light">View Doctor</a>
        <a href="addmedicine.php" class="list-group-item list-group-item-action bg-light">Add Medicine</a>
        <a href="viewmedicine.php" class="list-group-item list-group-item-action bg-light">View Medicine</a>
        <a href="login.php" class="list-group-item list-group-item-action bg-light">Log out</a>
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
 <h1 class="mt-4">Edit Medicine</h1>

<?php
include("database.php");
$id = $_GET['id'];
$result = mysql_query("SELECT * FROM pharmacy WHERE pid = $id");
$row = mysql_fetch_assoc($result);
$pname = $row['pname'];
$pprice = $row['pprice'];
$manu_date = $row['manu_date'];
$expired_date = $row['expired_date'];
$pphoto = $row['pphoto'];
?>
 <form action="editmedicineprocess.php" method="post">
                          <div class="form-group">

            <input type="text" class="form-control" value="<?php echo $row['pid'] ?>" required="required" name="pid" readonly>            


                            <label>Medicine Name</label>
                            <input type="text" class="form-control" value="<?php echo $row['pname'] ?>" required="required" name="pname">

                            <label>Medicine Code</label>
                            <input type="text" class="form-control" value="<?php echo $row['pcode'] ?>" required="required" name="pcode">

                            <label>Medicine Price</label>
                          <input type="text" class="form-control" value="<?php echo $row['pprice'] ?>" required="required" name="pprice">                          

                            <label>Manufactured date</label>
                               <input type="date" class="form-control" value="<?php echo $row['manu_date'] ?>" required="required" name="manu_date">

                            <label>Expired Date</label>
                            <input type="date" class="form-control" value="<?php echo $row['expired_date'] ?>" required="required" name="expired_date">

                            <label>Old Photo</label>
                             
                            <input type="text" class="form-control" value="<?php echo $row['pphoto'] ?>" required="required" name="pphoto">

                            <label>New Photo</label>
                            <input type="file" class="form-control" value="<?php echo $row['pphoto'] ?>" required="required" name="pphoto">
                            <br>

                            <input type="submit" value="Edit Medicine" class="btn btn-primary" >
                            
                          </div>
                        </form>
  <!-- /#wrapper -->
  <td>
            <span class="table-remove"><a href="editmedicine.php?id=<?=$row['pid'];?>"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Edit</button></a></span>

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
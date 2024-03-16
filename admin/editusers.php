<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AKM Pharmacy</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin Dashboard </div>
      <div class="list-group list-group-flush">
        <a href="viewproduct.php" class="list-group-item list-group-item-action bg-light">View Product</a>
        <a href="addproduct.php" class="list-group-item list-group-item-action bg-light">Add product</a>
        <a href="editproduct.php" class="list-group-item list-group-item-action bg-light">Edit product</a>
        <a href="login.php" class="list-group-item list-group-item-action bg-light">Login</a>
         <a href="edituserprofile.php" class="list-group-item list-group-item-action bg-light">Edit user profile</a>

        
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
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
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
        <h1 class="mt-4">AKM pharmacy</h1>
             <div class="container-fluid">
 <h1 class="mt-4">User Profile</h1>
 <?php
 include("database.php");

 $result = mysql_query("SELECT * FROM login");
 $row = mysql_fetch_assoc($result);

 $uid = $row['uid'];
 $username = $row['username'];
 $password = $row['password'];

 ?>



 <form action="edituserprofileprocess.php?id=<?=$row['uid'];?>" method="post">
 <div class="form-group">
 <label>User ID</label>
 <input type="text" readonly class="form-control" value="<?php echo $row['uid'] ?>">
 <br>
 <label>User Name</label>
 <input type="text" class="form-control" value="<?php echo $row['username'] ?>" required="required" name="username">
 <br>
 <label>Password</label>
 <input type="text" class="form-control" value="<?php echo $row['password'] ?>" required="required" name="password">
 <br>
 <input type="submit" value="Update Profile" class="btn btn-primary" >
 </div>
 </form>
 
 </div>


        
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

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

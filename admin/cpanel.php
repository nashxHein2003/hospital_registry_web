<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Filo Hospital</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin Dashboard </div>
      <div class="list-group list-group-flush">

        <a href="adddoctor.php" class="list-group-item list-group-item-action bg-light">Add Doctor</a>
        <a href="viewdoctor.php" class="list-group-item list-group-item-action bg-light">View Doctor</a>
        <a href="addmedicine.php" class="list-group-item list-group-item-action bg-light">Add Medicine</a>
        <a href="viewmedicine.php" class="list-group-item list-group-item-action bg-light">View Medicine</a>
        <a href="orderlist.php" class="list-group-item list-group-item-action bg-light">Order List<sup>
                    <span class="badge" style="background-color:tomato;font-size: 1.2em;">
                       
                         <?php
                         include("database.php");
                        $result = mysql_query("SELECT * FROM sell order by selldate DESC");
                        $rowcount = mysql_num_rows( $result );
                        ?>

                        <?php
                        $rowcount; 


                          if ($rowcount <= "9") {
                            echo $rowcount;
                          } 
                          else {
                            echo $result="9+";
                          }
                        ?>
                           
                    </span></sup></a>
        <a href="registerlist.php" class="list-group-item list-group-item-action bg-light">Register List<sup>
                    <span class="badge" style="background-color:tomato;font-size: 1.2em;">
                       
                         <?php
                         include("database.php");
                        $result = mysql_query("SELECT * FROM registration order by appdate DESC");
                        $rowcount = mysql_num_rows( $result );
                        ?>

                        <?php
                        $rowcount; 


                          if ($rowcount <= "9") {
                            echo $rowcount;
                          } 
                          else {
                            echo $result="9+";
                          }
                        ?>
                           
                    </span></sup></a>
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
        <div class="row">
      <div class="row">
      <div class="col-8"><h1 >Welcome to Admin dashboard!</h1>
        <hr>
        <br>
      <p>Here is admin dashboard. Admin will control everything. Admins are super genius people. They are such a amazing people. if you are one of them, come and claim cute doctor's kiss here now. </p>
      
    </div>
      
      <div class="col-4" ><img src="../image/admindashboard/cpanel.png" width="400px"></div>

    </div>
   
    <!-- /#page-content-wrapper -->

  </div><hr>
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

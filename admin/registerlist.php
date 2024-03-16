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

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin Dashboard</div>
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
        <a href="registerlist.php" class="list-group-item active list-group-item-action bg-secondary">Register List<sup>
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
          <form class="d-flex" action="orderlist1.php" method="get">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="filter">
        <input type="submit" value="Search">
     </form>
        </div>
      </nav>


      <div class="card">

 <h3 class="card-header text-center font-weight-bold text-uppercase py-
4">Registration List table</h3>

<div class="card-body">
 <div id="table" class="table-editable">

 <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-
success"><i

 class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>

 <table class="table table-bordered table-responsive-md table-striped text-
center">

 <thead>
 <tr>
 <th class="text-center">Registered ID</th> 
 <th class="text-center">Registered Name</th> 
 <th class="text-center">Registered Email</th>
 <th class="text-center">Registered Address</th>
 <th class="text-center">Registered Phone</th>
 <th class="text-center">Doctor Name</th>
 <th class="text-center">Appointment Date</th>



 </tr>
</thead>

 <tbody>
 <?php
 include("database.php");
 $result = mysql_query("SELECT * FROM registration");
 ?>
 <?php while($row = mysql_fetch_assoc($result)): ?>
 <tr>
 <td class="pt-3-half" contenteditable="disable"><?php echo $row['rid']; ?></td>
 <td class="pt-3-half" contenteditable="true"><?php echo $row['rname']; ?></td>
 <td class="pt-3-half" contenteditable="true"><?php echo $row['remail']; ?></td>
 <td class="pt-3-half" contenteditable="true"><?php echo $row['raddress']; ?></td>
 <td class="pt-3-half" contenteditable="true"><?php echo $row['rphone']; ?></td>
  <td class="pt-3-half" contenteditable="true"><?php echo $row['dname']; ?></td>
   <td class="pt-3-half" contenteditable="true"><?php echo $row['appdate']; ?></td>
 <td>
 <span><a
href="registerdetail.php?rid=<?php echo $row['rid'];?>"><button
type="button" class="btn btn-danger btn-rounded btn-sm
my-0">Register Details</button></a></span>

 </td>
 <td>
   <input type="checkbox" name="paid" >

 </tr>
 <?php endwhile; ?>
 <!-- This is our clonable table line -->
 </tbody>
 </table>
 </div>
 </div>
 </div>
 <!-- Editable table -->
      

</body>

</html>

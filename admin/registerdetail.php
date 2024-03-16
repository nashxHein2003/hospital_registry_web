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
      <div class="sidebar-heading">Order List</div>
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
                <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    
                        <!-- Editable table -->
                        <div class="card">
                          <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Registration Table</h3>
                          <div class="card-body">
                            <div id="table" class="table-editable">
                              <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
                                    class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
                              <table class="table table-bordered table-responsive-md table-striped table-hover">
                                <thead>
                <tr>
              <td width="100"><div align="left"><strong>Registration ID</strong></div></td>
              <td width="100"><div align="left"><strong>Registered Name</strong></div></td>
              <td width="50"><div align="center"><strong>Registeed Address</strong></div></td>
              <td width="50"><div align="center"><strong>Registered Phone</strong></div></td>
              <td width="50"><div align="center"><strong>Doctor Name</strong></div></td>
              <td width="50"><div align="center"><strong>Appointment Date</strong></div></td>
        </tr>
                                </thead>
                                <tbody>
                               <?php
            

            $result2 = mysql_query("SELECT * FROM registration WHERE rid='$rid'");
            
                while($row3 = mysql_fetch_array($result2))
                    {
                    ?>
                    
                    <strong>TransactionNo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong><?php echo $row3['rid'];?><br>
                    <strong>Order Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong><?php echo $row3['rname'];?><br>
                    <strong>Customer Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong><?php echo $row3['remail'];?><br>
                    <strong>Customer Address  &nbsp;:</strong><?php echo $row3['raddress'];?><br>
                    <strong>Customer Phone &nbsp;&nbsp;&nbsp;&nbsp;:</strong><?php echo $row3['rphone'];?><br>
                    <strong>Total Amount &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:$</strong><?php echo $row3['dname'];?><br><br>
                    <strong>Total Amount &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:$</strong><?php echo $row3['appdate'];?><br><br>
                    <?php
                    }

            $result3 = mysql_query("SELECT * FROM orders WHERE transnum='$transnum'");
            
                while($row3 = mysql_fetch_array($result3))
                    {
                    echo '<tr>';
                    echo '<td><div align="left">'.$row3['transnum'].'</div></td>';
                    echo '<td><div align="left">'.$row3['name'].'</div></td>';
                    echo '<td><div align="right">'.$row3['qty'].'</div></td>';
                    echo '<td><div align="right">'.$row3['price'].'</div></td>';
                    echo '<td><div align="right">'.$row3['total'].'</div></td>';
                    echo '</tr>';
                    }
            ?>
            </td>
            </tr>
            <tr>
                                          <!-- This is our clonable table line -->
                                        </tbody>
                                      </table> 

<div align="left">
   <button class="btn btn-dark">
    <a href="orderlist.php" class="printbutton">Back</a>
</button>
</div>
<br>
        <div align="left">
            <button class="btn btn-warning">
            <a href="print.php?transnum=<?php echo $_GET['transnum'];?>" class="printbutton">Print</a></button>
        </div>
        


                                    </div>
                                  </div>
                                </div>
                                <!-- Editable table -->
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


</body>

</html>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Filo Hospital</title>
    <link rel="stylesheet" type="text/css" href="css/doctor.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--Nav-->

  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <img src="image/logo.png" style="width: 50px; height: 50px;">
    <a class="navbar-brand" href="index.php" style="margin-left: 5px"><span class="text-info  text-uppercase">Filo</span>Hospital</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="pharmacy.php">Pharmacy Center</a></li>
            <li><a class="dropdown-item" href="doctor.php">Doctors Route</a></li>
          </ul>
        </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="aboutus.html">About us</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="contactus.html">Contact us</a>
        </li>
        
      </ul>
      <form class="d-flex" action="doctor1.php" method="get">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="filter">
        <button class="btn btn-outline-info" type="submit">Search</button>
     </form>
    </div>
  </div>
</nav>

<div class="container" style="margin-top: 1%;margin-bottom: 1%;">
  <h1 style="text-align: center;">See Doctors' Details Below</h1><hr>
  <div class="row g-3">
  <?php
  $filter=$_GET['filter'];

    include("admin/database.php");
    $result = mysql_query("SELECT * FROM doctor where dname like '%$filter%'");
   ?>
   <?php while($row = mysql_fetch_assoc($result)): ?>
   <div class="col-sm-12 col-md-3">
      <div class="card" style="width:20rem;">
        <img src="image/doctors/<?php echo $row['dphoto']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Doctor name- <?php echo $row['dname']; ?></h4>
          <p class="card-text">Doctor degree- <?php echo $row['ddegree']; ?></p>
          <p class="card-text">Description- <?php echo $row['ddescription']; ?></p>
          <p class="card-text">Price- <?php echo $row['dprice']; ?>MMK</p>
          <p class="card-text">Patient Check-in Time- <?php echo $row['starttime']; ?></p>
          <p class="card-text">End- <?php echo $row['endtime']; ?></p>

            <button class="openbtn btn btn-outline-info" onclick="openNav()">Register Now</button>
          

          
       </div>
      </div>
    </div> 
     <?php endwhile; ?> 
  </div>
</div>  
</div>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<form action="admin/addregister.php" method="post" class="registration">
 <div class="form-group">
  <h1>Registration Appointment Here!</h1>

<label>Name</label>
 <input type="text" class="form-control" placeholder="Enter Name"
required="required" name="rname">

 <label>Email</label>
 <input type="text" class="form-control" placeholder="Enter Email"
 name="remail">

 <label>Address</label>
 <input type="text" class="form-control" placeholder="Enter Address"
required="required" name="raddress">

 <label>Phone</label>
 <input type="text" class="form-control" placeholder="Enter Phone"
required="required" name="rphone">
 <label for = "dname">Doctor Name </label>
      <select class="form-control" name="dname" required="required">
      <label>Doctor Name</label>
      <?php
          include("admin/database.php");
          $result = mysql_query("SELECT * FROM doctor");
      ?>
      <?php while($row = mysql_fetch_assoc($result)): ?>
        <option><?php echo $row['dname']; ?></option>
         <?php endwhile; ?> 
      ?>
      </select>

 <label>Appointment Date and Time</label>
 <input type="datetime-local" class="form-control" required="required" name="appdate">

 <br>
 <input type="submit" value="Register" class="btn btn-outline-info" >
 </div>
 </form>
</div>
<hr>


<!--FAQ-->
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "700px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
  <footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Hospital</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="doctor.php" class="text-dark" style="text-decoration-line: none;">Doctor Route</a>
          </li>
          <li>
            <a href="pharmacy.php" class="text-dark" style="text-decoration-line: none;">Pharmacy Center</a>
          </li>
          <li>
            <a href="aboutus.html" class="text-dark" style="text-decoration-line: none;">About us</a>
          </li>
          <li>
            <a href="contactus.html" class="text-dark" style="text-decoration-line: none;">Contact us</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Doctor</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="contactus.html" class="text-dark" style="text-decoration-line: none;">View doctor</a>
          </li>
          <li>
            <p>Patient and warmly welcome</p>
          </li>

        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Pharmacy Center</h5>

        <ul class="list-unstyled mb-0">
          
          <li>
            <a href="pharmacy.php" class="text-dark" style="text-decoration-line: none;">Pharmacy Center</a>
          </li>
          <li>
            <p>Order within a short time</p>
          </li>

        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Email</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <p>filo.hospital@gmail.com</p>
          </li>

        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="https://filo.hospital.com/">filo.hospital.com</a>
  </div>
  <!-- Copyright -->
</footer>



  </body>
</html
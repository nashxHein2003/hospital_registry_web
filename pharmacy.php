<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Filo Hospital</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
      <form class="d-flex" action="pharmacy1.php" method="get">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="filter">
        <button class="btn btn-outline-info" type="submit">Search</button>
     </form>
    </div>
  </div>
</nav>

<div class="container-fluid" style="max-width:100%">
  <div class="row">
    <div class="row">
    <div class="col-8" style="max-width:100%"><h1 >Pharmacy Center</h1>
      <p>Pharmacy is the clinical health science that links medical science with chemistry and it is charged with the discovery, production, disposal, safe and effective use, and control of medications and drugs. The practice of pharmacy requires excellent knowledge of drugs, their mechanism of action, side effects, interactions, mobility and toxicity. At the same time, it requires knowledge of treatment and understanding of the pathological process. Some specialties of pharmacists, such as that of clinical pharmacists, require other skills, e.g. knowledge about the acquisition and evaluation of physical and laboratory data.</p></div>
    <div class="col-4" style="max-width:100%"><img src="image/pharmacycenter.jpg" style="max-width:100%"></div>
  </div>

    <hr>
   
  </div>
  </div>
</div>


<!--FAQ-->

<div class="container" style="margin-top: 1%;margin-bottom: 1%;">
  <h1 style="text-align: center;">Medicine List</h1>
  <div class="row">
  <?php
    include("admin/database.php");
    $result = mysql_query("SELECT * FROM pharmacy");
   ?>
   <?php while($row = mysql_fetch_assoc($result)): ?>
   <div class="col-sm-12 col-md-3">
      <div class="card" style="width:20rem;margin-bottom: 4%;">
        <img src="image/pharmacy/<?php echo $row['pphoto']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title"><?php echo $row['pname']; ?></h4>
          <p class="card-text">Code- <?php echo $row['pcode']; ?></p>
          <p class="card-text">Price- <?php echo $row['pprice']; ?>MMK</p>
          <p class="card-text">Manufactured date- <?php echo $row['manu_date']; ?></p>
          <p class="card-text">Expired Date- <?php echo $row['expired_date']; ?></p>

          <a href="shoppingcard/generatetrans.php" style="color: white;"><button class="btn btn-outline-info">Buy Now</button></a>
       </div>
      </div>
    </div> 
     <?php endwhile; ?> 
  </div>
</div>  
</div>



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
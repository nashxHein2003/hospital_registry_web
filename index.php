<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Filo Hospital</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
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
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 14%">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="pharmacy.php">Pharmacy Center</a></li>
            <li><a class="dropdown-item" href="doctor.php">Doctors Route</a></li>
            <li><a class="dropdown-item" href="nurse.php">Nurse Service</a></li>
          </ul>
        </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="aboutus.html">About us</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="contactus.html">Contact us</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="admin/login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/home/h2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Our Doctors are always warmly welcome to all  patients</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/home/h1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Patients can dicuss with respective doctors and get advices to live healthily</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/home/h3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Patient satisfaction first</h5>
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<hr>
<div class="container" style="margin-top: 1%;margin-bottom: 1%;">
  <h1 style="text-align: center;">Active Doctor List</h1>
  <div class="row">
  <?php
    include("admin/database.php");
    $result = mysql_query("SELECT * FROM doctor limit 4");
   ?>
   <?php while($row = mysql_fetch_assoc($result)): ?>
   <div class="col-sm-12 col-md-3">
      <div class="card" style="width:20rem;margin-bottom: 4%;">
        <img src="image/doctors/<?php echo $row['dphoto']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Doctor name- <?php echo $row['dname']; ?></h4>
          <p class="card-text">Doctor degree- <?php echo $row['ddegree']; ?></p>
          <p class="card-text">Description- <?php echo $row['ddescription']; ?></p>
          <p class="card-text">Price- <?php echo $row['dprice']; ?>MMK</p>
          <p class="card-text">Patient check-in time- <?php echo $row['starttime']; ?></p>
          <p class="card-text">End- <?php echo $row['endtime']; ?></p>
          
          

          
       </div>
      </div>
    </div> 
     <?php endwhile; ?> 
  </div>
</div> 
<div class="seemore" style="text-align: center;">
  <a href="doctor.php"><button class="btn btn-outline-info" style="width: 300px;">See more</button></a>
</div> 
</div>
<hr>

<div class="container-fluid">

  <h1>FAQ</h1>
 <div class="accordion accordion-flush" id="accordionFlushExample" style="margin: 0 40px 0 40px;">
  <div class="accordion-item" >
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Why Is Health The Most Important Part Of Your Life?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Your health is at the center of your life. Every part of your life relies on you having good health.<br><a href="https://www.ahigherbranch.com/health/"><h4>Why is Health The Most Important Part Of Your Life?</h4></a></div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Viral Fever Home Remedies For Treating Children and Adults?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">A viral fever is any fever that happens as a result of a viral infection. Viruses are tiny germs that spread easily from person to person.When you contract a viral condition, such as a cold or flu, your immune system responds by going into overdrive. Part of this response often involves raising your body’s temperature to make it less hospitable to the virus and other germs.Most people’s usual body temperature is around 98.6°F (37°C). Anything 1 degree or more above this is considered a fever.<br><a href="https://www.healthline.com/health/viral-fever-home-remedies#_noHeaderPrefixedContent"><h4>Viral Fever Home Remedies For Treating Children and Adults</h4></a></div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Where can we find out Health care questions?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Why do we get sick, and what do our bodies do to prevent sickness? Learn more about the science behind viruses, allergies, vaccines, exercise, and many other influences on people’s health.<br><i>Earlier versions of these questions and answers first appeared in the second edition of The Handy Answer Book for Kids (and Parents) by Gina Misiroglu (2010).</i><br>
        <a href="https://www.britannica.com/list/17-questions-about-health-and-wellness-answered"><h4>17 Questions About Health and Wellness Answered</h4></a></div>
    </div>
  </div>
</div>
 


  
</div>
<hr>
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
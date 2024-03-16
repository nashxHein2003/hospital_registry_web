<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Filo Hospital</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
     <link href="css/registration.css" rel="stylesheet">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--Nav-->

  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <img src="../image/logo.png" style="width: 50px; height: 50px;">
    <a class="navbar-brand" href="index.html" style="margin-left: 5px"><span class="text-info  text-uppercase">Filo</span>Hospital</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="pharmacy.php">Pharmacy Center</a></li>
            <li><a class="dropdown-item" href="checking.html">Checking Symptoms</a></li>
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
        <input type="submit" value="Search">
     </form>
    </div>
  </div>
</nav>

  <form action="#" method="post" class="registration">
 <div class="form-group">
  <h1>Registration Appointment Here!</h1>
<label>Doctor Name</label>
 <input type="text" class="form-control" placeholder="Enter doctor name"
required="required" name="dname">

 <label>Doctor Degree</label>
 <input type="text" class="form-control" placeholder="Enter doctor degree"
required="required" name="ddegree">

 <label>Doctor Description</label>
 <input type="text" class="form-control" placeholder="Enter doctor description"
required="required" name="ddescription">

 <label>Doctor Price</label>
 <input type="text" class="form-control" placeholder="Enter doctor price"
required="required" name="dprice">

 <label>Time</label>
<input type="time" class="form-control" required="required" name="dtime">

 <label>Date</label>
 <input type="date" class="form-control" required="required" name="ddate">

<label>Photo</label>
 <input type="file" class="form-control" required="required" name="dphoto">

 <br>
 <input type="submit" value="Add Doctor" class="btn btn-primary" >
 </div>
 </form>



  <footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 4</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-dark">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 4</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 4</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-dark">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 4</a>
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
    <a class="text-dark" href="https://elearning.com/">smselearning.com</a>
  </div>
  <!-- Copyright -->
</footer>
  



  </body>
</html
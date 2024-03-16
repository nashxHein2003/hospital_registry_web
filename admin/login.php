<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Filo Hospital</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--Nav-->

  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <img src="../image/logo.png" style="width: 50px; height: 50px;">
    <a class="navbar-brand" href="index.php" style="margin-left: 5px"><span class="text-info  text-uppercase">Filo</span>Hospital</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right:14%">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../pharmacy.php">Pharmacy center</a></li>
            <li><a class="dropdown-item" href="../doctor.php">Doctors Route</a></li>
          </ul>
        </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../aboutus.html">About us</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../contactus.html">Contact us</a>
        </li>
        </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        
      </ul>

    </div>
  </div>
</nav>
<div class="background-image" style="opacity: 90%">
 <h1 class="text-center border border-light" style="opacity: 100%;">FILO HOSPITAL LOGIN PAGE</h1>

<div class="container">
  <form action="loginprocess.php" method="POST" style=" width: 100%;text-align: center; align: center;">
    <legend style="height: 18em; background: transparent;background-color: white;opacity: 95%; border-radius: 10px; position: relative; max-width: 60%; margin-left: 22%;">Login Form
<br>

    <label style="font-size: 18px;">Username</label><br>
    <input type="text" name="username" required="required" placeholder="Enter username" style="font-size: 18px; max-width: 50%;"><br>

    <label style="font-size: 18px;">Password</label><br>
    <input type="password" name="password" required="required" placeholder="*********" style="font-size: 18px; max-width: 50%;"><br>
    
    <br>
    <input type="submit" value="Login" class="btn btn-info" style="margin-bottom: 2%;"><br>
   
  </legend>
    <br>
  </form>
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
            <a href="../doctor.php" class="text-dark" style="text-decoration-line: none;">Doctor Route</a>
          </li>
          <li>
            <a href="../pharmacy.php" class="text-dark" style="text-decoration-line: none;">Pharmacy Center</a>
          </li>
          <li>
            <a href="../aboutus.html" class="text-dark" style="text-decoration-line: none;">About us</a>
          </li>
          <li>
            <a href="../contactus.html" class="text-dark" style="text-decoration-line: none;">Contact us</a>
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

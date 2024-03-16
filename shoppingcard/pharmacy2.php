<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<!--Transaction number production-->
<?php
$transnum=$_SESSION['SESS_MEMBER_ID'];
//echo $transnum;
//echo $selldate=date("Y-m-d");
?>
<!--End of Transaction number production-->

<HTML>
<HEAD>
<TITLE>Pharmacy Shopping Cart</TITLE>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="css/pharmacy2.css" type="text/css" rel="stylesheet" />
<link href="css/style1.css" type="text/css" rel="stylesheet" />


</HEAD>
<BODY>
  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <img src="../image/logo.png" style="width: 50px; height: 50px;">
    <a class="navbar-brand" href="index.php"><span class="text-info  text-uppercase">Filo</span>Hospital</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../pharmacy.php">Pharmacy Center</a></li>
            <li><a class="dropdown-item" href="../doctor.php">Doctors Route</a></li>
          </ul>
        </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../aboutus.html">About us</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../contactus.html">Contact us</a>
        </li>
        
      </ul>
      <form class="d-flex" action="doctor1.php" method="get">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="filter">
        <input type="submit" value="Search">
     </form>
    </div>
  </div>
</nav>



<div id="orderlist" style="background-color: #FFF; width: 100%; padding: 0;">
  <div class="txt-subheading" style="background-color: #c9f0fc; text-align: center; color: black;">Shopping Cart (if you want to cancel the order, please contact +959-1234-567)</div>


<div class="container">
         <div class="text-container" style="text-align: center;">
              <svg class="animated-check" viewBox="0 0 24 24">
        <path d="M4.1 12.7L9 17.6 20.3 6.3" fill="none" /> </svg><br>
        <br>
        <h3>Your Order has been Placed.</h3>
        <br>
        <a href="../pharmacy.php"><button class="btn btn-danger">Go Back to Store</button></a>
        <a href="pharmacy1.php"><button class="btn btn-success">Continue Shopping>></button></a>
        </div>


        </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</BODY>
</HTML>
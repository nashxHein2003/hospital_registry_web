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
        <li>
          <a class="nav-link" aria-current="page" href="../admin/login.php">Login</a>
        </li>
        
      </ul>

    </div>
  </div>
</nav>

<div id="shopping-cart">

<div id="product-grid">
  <div class="txt-heading" style="background-color: #c9f0fc; color: #000;" >Products</div>

  <?php
  $product_array = $db_handle->runQuery("SELECT * FROM pharmacy ORDER BY pid ASC");
  if (!empty($product_array)) { 

    foreach($product_array as $key=>$value){
  ?>
    <div class="product-item">
      
      <form method="post" action="initiateorder1.php?action=add&code=<?php echo $product_array[$key]["pname"]; ?>">
      
      <div class="product-image">
        <img src="../image/pharmacy/<?php echo $product_array[$key]["pphoto"]; ?>" width="auto" height="100%"/>
      </div>
      
      <div><strong><?php echo $product_array[$key]["pname"]; ?></strong></div>
      <div class="product-price"><?php echo "MMK".$product_array[$key]["pprice"]; ?></div>

      <div>
        <input type="hidden" name="pname" value="<?php echo $product_array[$key]["pname"]; ?>"/>
        <input type="hidden" name="pcode" value="<?php echo $product_array[$key]["pcode"]; ?>"/>
        <input type="hidden" name="pprice" value="<?php echo $product_array[$key]["pprice"]; ?>"/>
        <input type="text" name="quantity" value="1" size="2" />
        <input type="hidden" name="transnum" value="<?php echo $transnum; ?>" size="2" />
        <input type="submit" value="Add to cart" class="btnAddAction"/>
      </div>
      </form>

    </div>

  <?php
      }
  }
  ?>

<div id="orderlist" style="background-color: #FFF; width: 100%; padding: 0;">
  <div class="txt-subheading" style="background-color: #c9f0fc; text-align: center; color: black;">Shopping Cart (if you want to cancel the order, please contact +959-1234-567)</div>


<table class="tbl-cart" >
<tbody class="table"cellpadding="2" cellspacing="2">
<tr>
<td width="20"><div align="center"><strong>Remove Item</strong></div></td>
        <td width="100"><div align="left"><strong>TransactionID</strong></div></td>
        <td width="100"><div align="left"><strong>Name</strong></div></td>
        <td width="50"><div align="center"><strong>Qty</strong></div></td>
        <td width="50"><div align="center"><strong>Price</strong></div></td>
        <td width="50"><div align="center"><strong>Total</strong></div></td>
</tr> 
<?php
      require "connect.php";
      //$transnum=$_GET['transnum'];
      $result3 = mysql_query("SELECT * FROM orders WHERE transnum='$transnum'");
      //$result3 = mysql_query("SELECT * FROM orders");
      
        while($row3 = mysql_fetch_array($result3))
          {
          echo '<tr>';
          echo '<td><div align="center"><a href="deleteorder.php?orderid='.$row3['orderid'].'" orderid="'.$row3['orderid'].'" class="delbutton" title="Click To Delete"><img src="image/delete.png" width="20%" height="20%"></a></div></td>';
          echo '<td><div align="left">'.$row3['transnum'].'</div></td>';
          echo '<td><div align="left">'.$row3['name'].'</div></td>';
          echo '<td><div align="right">'.$row3['qty'].'</div></td>';
          echo '<td><div align="right">'.$row3['price'].'</div></td>';
          echo '<td><div align="right">'.$row3['total'].'</div></td>';
          echo '</tr>';
          }
      ?>
      <tr>
        <td colspan="5"><div align="right"><span style="color:#B80000; font-size:13px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">Grand Total: </span></div></td>
        <td><div align="right">
          

  <?php

        //$result5 = mysql_query("SELECT sum(total) FROM order");
        $result5 = mysql_query("SELECT sum(total) FROM orders WHERE transnum='$transnum'");
        while($row5 = mysql_fetch_array($result5))
          { 
          echo $row5['sum(total)']; 
          $sfdddsdsd=$row5['sum(total)'];
          }


        ?>

       </div>
       </td>
       
      </tr>

 

    </table>
</div>    
<form method="post" action="saveform.php" name="form1" style="width: 100%;">
      <input type="hidden" name="transnum" value="<?php echo $transnum ?>" />
      <input type="hidden" name="total" value="<?php echo $sfdddsdsd ?>" />
      
      <div id="deliverylist" style="text-align: center;">
        <label>Delivery & Payment Method:</label>
        <select name="selmethod" onChange="getState(this.value)">
        <option value="0">Select Method</option>
        <option value="Cash">Cash On delivery</option>
        <option value="PayPal">PayPal</option>
      </select><br>

        <label>Customer Name:</label><br>
      <input type="text" name="customername" required="required" /><br>
      <label>Customer Phone:</label><br>
      <input type="text" name="customerphone" required="required" /><br>
      <label>Customer Address:</label><br>
      <input type="text" name="customeraddress" required="required" /><br>

      <div align="center" style="margin-right: 1%">
        <input style="background-color: pink; color: black; font-weight: bold;" type="submit" id="btncheckout" value="Check Out">
      </div>
  
      
      </form>

  
 



      
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</BODY>
</HTML>
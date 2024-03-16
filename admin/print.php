<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Order</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>

<style>
*{
    font-family: montserrat;


}

#print_content{
width:50%;
margin:0 auto;
}
</style>
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div id="print_content">

<img src="../image/admindashboard/filo.jpg" width="200" height="150" style="float:right; margin-top: 9%;"/>

<br><br><br>
<h1>Filo Pharmacy Center</h1>

<h2>No.90, Upper PazonDaung Road, Tarmwe.</h2>
<p>Email Us: filo.hospital@gmail.com</p>

<p>Contact: <a href="#">(0995)111-111-222</a></p>
<br><br>
	<table width="100%" border="1" cellpadding="2" cellspacing="2" class="table table-striped">
		<tr>
			  <td width="100"><div align="left"><strong>TransactionID</strong></div></td>
			  <td width="100"><div align="left"><strong>Name</strong></div></td>
			  <td width="50"><div align="center"><strong>Qty</strong></div></td>
			  <td width="50"><div align="center"><strong>Price</strong></div></td>
			  <td width="50"><div align="center"><strong>Total</strong></div></td>
		</tr>
		<?php
			require "../shoppingcard/connect.php";
			$transnum=$_GET['transnum'];

			$result2 = mysql_query("SELECT * FROM sell WHERE transnum='$transnum'");
			
				while($row3 = mysql_fetch_array($result2))
					{
					?>
					
					<strong>TransactionNo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong><?php echo $row3['transnum'];?><br>
					<strong>Order Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong><?php echo $row3['selldate'];?><br>
					<strong>Customer Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong><?php echo $row3['customername'];?><br>
					<strong>Customer Address  &nbsp;:</strong><?php echo $row3['customeraddress'];?><br>
					<strong>Customer Phone &nbsp;&nbsp;&nbsp;&nbsp;:</strong><?php echo $row3['customerphone'];?><br>
					<strong>Total Amount &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:$</strong><?php echo $row3['grandtotal'];?><br><br>
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
			
		</table>

		<br>


</div>

<div class="container" style="margin-left: 65%;">
	<button class="btn btn-primary">
	<a href="javascript:Clickheretoprint()"  style="color:white; text-decoration-line: none;">Print</a>
</button>
<button class="btn btn-danger" ><a href="orderlist.php" style="color:white; text-decoration-line: none;">Back</a></button>
		<br>		<br>
	
</div>
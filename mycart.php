
<?php

include 'header.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="regestration.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div  style="text-align: center;">
				<h1>MY CART</h1>
				<div >

					<table class="table">
  <thead style="text-align: center;border: 20px;">
    <tr>
      <th scope="col">serial no</th>
      <br>
      <th scope="col">Item </th>
      <br>
      <th scope="col">price</th>
      <br>
      <th scope="col">Quantity</th>
      <br>
      
    </tr>
  </thead>
  <br>
  <tbody style="text-align: right;">
  	<?php
  	$total=0;
  	if(isset($_SESSION['cart']))
  	{
  	foreach ($_SESSION['cart'] as $key => $value)
  	{
  		$total=$total+$value['price'];
  		
  		echo "<tr>

  		<td>1</td>
  		<td>$value[item_name]</td>
  		<td>$value[price]</td>
  		<td><input type ='number'value ='$value[Quantity]'min='1'max='10'></td>
  		<td>
  		<form action='manage_cart.php' method='POST'>
  		<button name='remove_item' class='btn btn-outline-danger'>REMOVE</button>
  		<input type ='hidden' name='item_name' value='$value[item_name]'>
  		</form>
  		</td>
  		



  		</tr>";
  	}
  }
  		
  	
  	?>
   
  
    
  </tbody>
</table>
					
				</div>
				
			</div>
			<br>
			<div class="col-lg-4">
				<h3>TOTAL:</h3>
				<h5><?php echo $total ?></h5>
				<br>
				<form>

<input type="radio" id="other" name="gender" value="other">
<label for="other">cash on delivery</label><br>
					<button>MAKE  PAYMENT</button>
				</form>
				
			</div>
			
		</div>
		
	</div>
<?php include 'footerpro.php' ?>
</body>
</html>